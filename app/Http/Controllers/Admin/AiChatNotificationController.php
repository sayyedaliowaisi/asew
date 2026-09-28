<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AiChatNotificationController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'after_id' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);

        $afterId = (int) ($validated['after_id'] ?? 0);

        /*
        |--------------------------------------------------------------------------
        | Unread conversations
        |--------------------------------------------------------------------------
        |
        | Count conversations, not individual messages.
        |
        */

        $unreadConversationCount = AiMessage::query()
            ->where('sender_type', 'user')
            ->where('is_read', false)
            ->distinct()
            ->count('ai_conversation_id');

        /*
        |--------------------------------------------------------------------------
        | Latest unread conversations
        |--------------------------------------------------------------------------
        */

        $conversationIds = AiMessage::query()
            ->where('sender_type', 'user')
            ->where('is_read', false)
            ->select('ai_conversation_id')
            ->selectRaw('MAX(id) as latest_message_id')
            ->groupBy('ai_conversation_id')
            ->orderByDesc('latest_message_id')
            ->limit(5)
            ->pluck('ai_conversation_id');

        $conversations = AiConversation::query()
            ->whereIn('id', $conversationIds)
            ->with([
                'latestMessage.admin',
                'admin',
            ])
            ->get()
            ->sortBy(function (AiConversation $conversation) use ($conversationIds) {
                return array_search(
                    $conversation->id,
                    $conversationIds->all(),
                    true
                );
            })
            ->values()
            ->map(function (AiConversation $conversation) {
                $latestCustomerMessage = AiMessage::query()
                    ->where(
                        'ai_conversation_id',
                        $conversation->id
                    )
                    ->where('sender_type', 'user')
                    ->latest('id')
                    ->first();

                return [
                    'id' =>
                        $conversation->id,

                    'mode' =>
                        $conversation->mode,

                    'visitor_name' =>
                        $conversation->visitor_name
                        ?: 'Website Visitor',

                    'message' =>
                        $latestCustomerMessage
                            ? str($latestCustomerMessage->message)
                                ->limit(90)
                                ->toString()
                            : '',

                    'message_id' =>
                        $latestCustomerMessage?->id,

                    'created_at' =>
                        $latestCustomerMessage?->created_at
                            ?->toIso8601String(),

                    'time' =>
                        $latestCustomerMessage?->created_at
                            ?->diffForHumans(),

                    'url' =>
                        route(
                            'admin.ai-conversations.show',
                            $conversation
                        ),
                ];
            });

        /*
        |--------------------------------------------------------------------------
        | New activity after browser cursor
        |--------------------------------------------------------------------------
        |
        | Used only for sound / desktop notification.
        |
        */

        $newMessages = AiMessage::query()
            ->where('sender_type', 'user')
            ->where('id', '>', $afterId)
            ->with('conversation')
            ->orderBy('id')
            ->limit(20)
            ->get()
            ->map(function (AiMessage $message) {
                return [
                    'id' =>
                        $message->id,

                    'conversation_id' =>
                        $message->ai_conversation_id,

                    'message' =>
                        str($message->message)
                            ->limit(100)
                            ->toString(),

                    'url' =>
                        route(
                            'admin.ai-conversations.show',
                            $message->ai_conversation_id
                        ),
                ];
            })
            ->values();

        /*
        |--------------------------------------------------------------------------
        | Safe cursor
        |--------------------------------------------------------------------------
        */

        $latestCustomerMessageId = (int) (
            AiMessage::query()
                ->where('sender_type', 'user')
                ->max('id')
                ?? 0
        );

        return response()->json([
            'success' => true,

            'unread_count' =>
                $unreadConversationCount,

            'conversations' =>
                $conversations,

            'new_messages' =>
                $newMessages,

            'last_message_id' =>
                max(
                    $afterId,
                    $latestCustomerMessageId
                ),
        ]);
    }
}