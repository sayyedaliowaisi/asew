<?php

namespace App\Http\Controllers;

use App\Models\AiConversation;
use App\Models\AiMessage;
use App\Services\AI\AsewAiAgent;
use App\Services\AI\AiChatNotificationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AiAgentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | AI CHAT
    |--------------------------------------------------------------------------
    |
    | Customer message is stored atomically while the conversation row is
    | locked. The mode captured under that lock decides whether AI is allowed
    | to run.
    |
    | If an admin joins while the AI provider is generating a response, the
    | final assistant insert is blocked by another row lock.
    |
    */

    public function chat(
        Request $request,
        AsewAiAgent $agent,
        AiChatNotificationService $notificationService
    ): JsonResponse {
        $validated = $request->validate([
            'message' => [
                'required',
                'string',
                'min:2',
                'max:2000',
            ],

            'conversation_token' => [
                'nullable',
                'uuid',
            ],
        ]);

        $conversation = $this->resolveConversation(
            $validated['conversation_token'] ?? null
        );

        /*
        |--------------------------------------------------------------------------
        | Atomic customer message + mode capture
        |--------------------------------------------------------------------------
        */

        $start = $this->storeCustomerMessageAndCaptureMode(
            $conversation,
            $validated['message']
        );

        /** @var AiConversation|null $lockedConversation */
        $lockedConversation = $start['conversation'];

        /** @var AiMessage|null $userMessage */
        $userMessage = $start['message'];

        /*
        |--------------------------------------------------------------------------
        | Conversation disappeared
        |--------------------------------------------------------------------------
        */

        if ($start['status'] === 404) {
            return response()->json([
                'success' => false,
                'message' => 'Conversation not found.',
            ], 404);
        }

        /*
        |--------------------------------------------------------------------------
        | Closed
        |--------------------------------------------------------------------------
        |
        | Customer message is NOT stored when the conversation is closed.
        |
        */

        if ($start['status'] === 409) {
            return response()->json([
                'success' => false,

                'message' =>
                    'This conversation has been closed. Please start a new chat.',

                'conversation_token' =>
                    $lockedConversation?->public_token
                    ?? $conversation->public_token,

                'mode' => 'closed',

                'handled_by' => null,
            ], 409);
        }

        /*
        |--------------------------------------------------------------------------
        | New chat email notification
        |--------------------------------------------------------------------------
        |
        | This happens only AFTER the customer message has been committed.
        |
        | AiChatNotificationService itself prevents duplicate "new chat"
        | emails using admin_notified_at.
        |
        | Any mail failure is handled inside the service and must never break
        | the customer's AI chat.
        |
        */

        if (
            $start['status'] === 200
            && $lockedConversation
            && $userMessage
        ) {
            $notificationService->notifyFirstCustomerMessage(
                $lockedConversation,
                $userMessage
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Human mode
        |--------------------------------------------------------------------------
        |
        | Customer message has been stored, but the AI provider is never called.
        |
        */

        if ($start['mode'] === 'human') {
            return response()->json([
                'success' => true,

                'message' => null,

                'message_id' =>
                    $userMessage?->id,

                'conversation_token' =>
                    $lockedConversation?->public_token
                    ?? $conversation->public_token,

                'mode' => 'human',

                'handled_by' => 'human',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Unexpected state
        |--------------------------------------------------------------------------
        */

        if ($start['mode'] !== 'ai') {
            return response()->json([
                'success' => false,

                'message' =>
                    'The conversation state changed. Please try again.',

                'conversation_token' =>
                    $lockedConversation?->public_token
                    ?? $conversation->public_token,

                'mode' =>
                    $start['mode'],

                'handled_by' => null,
            ], 409);
        }

        /*
        |--------------------------------------------------------------------------
        | Trusted DB history
        |--------------------------------------------------------------------------
        |
        | IMPORTANT:
        |
        | The current customer message has already been stored.
        |
        | Only messages BEFORE the current message are included. This gives
        | the AI a stable history snapshot and prevents messages inserted
        | while the provider is running from being mixed into this request.
        |
        */

        $history = $this->getConversationHistory(
            $conversation,
            $userMessage?->id
        );

        /*
        |--------------------------------------------------------------------------
        | AI generation
        |--------------------------------------------------------------------------
        |
        | No DB transaction is held while waiting for OpenRouter.
        |
        */

        try {
            $answer = $agent->chat(
                $validated['message'],
                $history
            );
        } catch (\Throwable $exception) {
            report($exception);

            $conversation->refresh();

            /*
             * If staff joined while the provider failed, reflect the current
             * live mode rather than pretending the conversation is still AI.
             */

            if ($conversation->isHumanMode()) {
                return response()->json([
                    'success' => true,

                    'message' => null,

                    'message_id' =>
                        $userMessage?->id,

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'human',

                    'handled_by' => 'human',
                ]);
            }

            if ($conversation->isClosed()) {
                return response()->json([
                    'success' => false,

                    'message' =>
                        'This conversation has been closed.',

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'closed',

                    'handled_by' => null,
                ], 409);
            }

            return response()->json([
                'success' => false,

                'message' =>
                    'Our AI assistant is temporarily unavailable. Please try again shortly.',

                'conversation_token' =>
                    $conversation->public_token,

                'mode' =>
                    $conversation->mode,

                'handled_by' =>
                    $conversation->mode === 'ai'
                        ? 'ai'
                        : null,
            ], 503);
        }

        /*
        |--------------------------------------------------------------------------
        | Validate generated answer
        |--------------------------------------------------------------------------
        */

        $answer = trim((string) $answer);

        if ($answer === '') {
            $conversation->refresh();

            if ($conversation->isHumanMode()) {
                return response()->json([
                    'success' => true,

                    'message' => null,

                    'message_id' =>
                        $userMessage?->id,

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'human',

                    'handled_by' => 'human',
                ]);
            }

            if ($conversation->isClosed()) {
                return response()->json([
                    'success' => false,

                    'message' =>
                        'This conversation has been closed.',

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'closed',

                    'handled_by' => null,
                ], 409);
            }

            return response()->json([
                'success' => false,

                'message' =>
                    'Our AI assistant could not generate a response. Please try again.',

                'conversation_token' =>
                    $conversation->public_token,

                'mode' =>
                    $conversation->mode,

                'handled_by' =>
                    $conversation->mode === 'ai'
                        ? 'ai'
                        : null,
            ], 503);
        }

        /*
        |--------------------------------------------------------------------------
        | Final atomic AI insert
        |--------------------------------------------------------------------------
        |
        | This is the second race-condition barrier.
        |
        | AI may have started while mode = ai, but an admin can join while the
        | provider is generating. In that case this method sees mode = human
        | and refuses to insert the late AI response.
        |
        */

        $assistantMessage =
            $this->saveAssistantMessageIfStillAi(
                $conversation,
                $answer
            );

        /*
        |--------------------------------------------------------------------------
        | State changed during generation
        |--------------------------------------------------------------------------
        */

        if (! $assistantMessage) {
            $conversation->refresh();

            if ($conversation->isHumanMode()) {
                return response()->json([
                    'success' => true,

                    'message' => null,

                    'message_id' =>
                        $userMessage?->id,

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'human',

                    'handled_by' => 'human',
                ]);
            }

            if ($conversation->isClosed()) {
                return response()->json([
                    'success' => false,

                    'message' =>
                        'This conversation has been closed.',

                    'conversation_token' =>
                        $conversation->public_token,

                    'mode' => 'closed',

                    'handled_by' => null,
                ], 409);
            }

            return response()->json([
                'success' => false,

                'message' =>
                    'The conversation state changed. Please try again.',

                'conversation_token' =>
                    $conversation->public_token,

                'mode' =>
                    $conversation->mode,

                'handled_by' =>
                    $conversation->mode === 'ai'
                        ? 'ai'
                        : null,
            ], 409);
        }

        /*
        |--------------------------------------------------------------------------
        | Successful AI response
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,

            'message' =>
                $answer,

            'message_id' =>
                $assistantMessage->id,

            'conversation_token' =>
                $conversation->public_token,

            'mode' => 'ai',

            'handled_by' => 'ai',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | PUBLIC MESSAGE POLLING
    |--------------------------------------------------------------------------
    |
    | Only assistant/admin messages are returned.
    |
    | Customer messages already exist in the customer's browser.
    |
    */

    public function messages(
        Request $request
    ): JsonResponse {
        $validated = $request->validate([
            'conversation_token' => [
                'required',
                'uuid',
            ],

            'after_id' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ]);

        $conversation = AiConversation::query()
            ->where(
                'public_token',
                $validated['conversation_token']
            )
            ->first();

        if (! $conversation) {
            return response()->json([
                'success' => false,

                'message' =>
                    'Conversation not found.',
            ], 404);
        }

        $afterId = (int) (
            $validated['after_id'] ?? 0
        );

        /*
        |--------------------------------------------------------------------------
        | Load AI / staff messages
        |--------------------------------------------------------------------------
        */

        $messages = AiMessage::query()
            ->where(
                'ai_conversation_id',
                $conversation->id
            )
            ->where(
                'id',
                '>',
                $afterId
            )
            ->whereIn(
                'sender_type',
                [
                    'assistant',
                    'admin',
                ]
            )
            ->with('admin')
            ->orderBy('id')
            ->limit(50)
            ->get()
            ->map(function (AiMessage $message) {
                return [
                    'id' =>
                        $message->id,

                    'sender_type' =>
                        $message->sender_type,

                    'content' =>
                        $message->message,

                    'sender_name' =>
                        $message->sender_type === 'admin'
                            ? (
                                $message->admin?->name
                                ?? 'ASEW Staff'
                            )
                            : 'ASEW AI',

                    'created_at' =>
                        $message->created_at
                            ?->toIso8601String(),
                ];
            })
            ->values();

        /*
        |--------------------------------------------------------------------------
        | Safe cursor
        |--------------------------------------------------------------------------
        |
        | Never advance past a message that was not actually returned.
        |
        */

        $lastMessageId =
            $messages->max('id')
            ?? $afterId;

        $conversation->refresh();

        return response()->json([
            'success' => true,

            'conversation_token' =>
                $conversation->public_token,

            'mode' =>
                $conversation->mode,

            'handled_by' =>
                $conversation->mode === 'human'
                    ? 'human'
                    : (
                        $conversation->mode === 'ai'
                            ? 'ai'
                            : null
                    ),

            'messages' =>
                $messages,

            'last_message_id' =>
                (int) $lastMessageId,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | CUSTOMER -> HUMAN STAFF MESSAGE
    |--------------------------------------------------------------------------
    */

    public function humanMessage(
        Request $request,
        AiChatNotificationService $notificationService
    ): JsonResponse {
        $validated = $request->validate([
            'conversation_token' => [
                'required',
                'uuid',
            ],

            'message' => [
                'required',
                'string',
                'min:1',
                'max:2000',
            ],
        ]);

        $conversation = AiConversation::query()
            ->where(
                'public_token',
                $validated['conversation_token']
            )
            ->first();

        if (! $conversation) {
            return response()->json([
                'success' => false,

                'message' =>
                    'Conversation not found.',
            ], 404);
        }

        /*
        |--------------------------------------------------------------------------
        | Atomic mode check + insert
        |--------------------------------------------------------------------------
        */

        $result = DB::transaction(
            function () use (
                $conversation,
                $validated
            ) {
                $lockedConversation =
                    AiConversation::query()
                        ->lockForUpdate()
                        ->find(
                            $conversation->id
                        );

                if (! $lockedConversation) {
                    return [
                        'status' => 404,

                        'message' =>
                            'Conversation not found.',

                        'conversation' => null,

                        'stored_message' => null,
                    ];
                }

                if (
                    $lockedConversation->mode
                    === 'closed'
                ) {
                    return [
                        'status' => 409,

                        'message' =>
                            'This conversation has been closed.',

                        'conversation' =>
                            $lockedConversation,

                        'stored_message' => null,
                    ];
                }

                if (
                    $lockedConversation->mode
                    !== 'human'
                ) {
                    return [
                        'status' => 409,

                        'message' =>
                            'Human support is no longer active for this conversation.',

                        'conversation' =>
                            $lockedConversation,

                        'stored_message' => null,
                    ];
                }

                $storedMessage =
                    AiMessage::create([
                        'ai_conversation_id' =>
                            $lockedConversation->id,

                        'sender_type' =>
                            'user',

                        'admin_id' =>
                            null,

                        'message' =>
                            trim(
                                $validated['message']
                            ),

                        'is_read' =>
                            false,
                    ]);

                $lockedConversation->update([
                    'last_message_at' =>
                        now(),
                ]);

                return [
                    'status' => 200,

                    'message' => null,

                    'conversation' =>
                        $lockedConversation,

                    'stored_message' =>
                        $storedMessage,
                ];
            }
        );

        /*
        |--------------------------------------------------------------------------
        | Failure
        |--------------------------------------------------------------------------
        */

        if ($result['status'] !== 200) {
            /** @var AiConversation|null $latestConversation */
            $latestConversation =
                $result['conversation'];

            return response()->json([
                'success' => false,

                'message' =>
                    $result['message'],

                'conversation_token' =>
                    $latestConversation?->public_token
                    ?? $conversation->public_token,

                'mode' =>
                    $latestConversation?->mode,

                'handled_by' =>
                    $latestConversation?->mode === 'human'
                        ? 'human'
                        : (
                            $latestConversation?->mode === 'ai'
                                ? 'ai'
                                : null
                        ),
            ], $result['status']);
        }

        /** @var AiConversation $latestConversation */
        $latestConversation =
            $result['conversation'];

        /** @var AiMessage $message */
        $message =
            $result['stored_message'];

        /*
        |--------------------------------------------------------------------------
        | Notification
        |--------------------------------------------------------------------------
        |
        | Normally the first message has already triggered this notification.
        | The service is idempotent, so calling it here is safe.
        |
        */

        $notificationService->notifyFirstCustomerMessage(
            $latestConversation,
            $message
        );

        return response()->json([
            'success' => true,

            'message_id' =>
                $message->id,

            'conversation_token' =>
                $latestConversation->public_token,

            'mode' => 'human',

            'handled_by' => 'human',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | RESOLVE / CREATE CONVERSATION
    |--------------------------------------------------------------------------
    */

    private function resolveConversation(
        ?string $token
    ): AiConversation {
        if (filled($token)) {
            $conversation =
                AiConversation::query()
                    ->where(
                        'public_token',
                        $token
                    )
                    ->first();

            if (! $conversation) {
                abort(
                    404,
                    'Conversation not found.'
                );
            }

            return $conversation;
        }

        return AiConversation::create([
            'public_token' =>
                (string) Str::uuid(),

            'mode' =>
                'ai',

            'last_message_at' =>
                now(),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ATOMIC CUSTOMER MESSAGE + MODE CAPTURE
    |--------------------------------------------------------------------------
    |
    | This closes the race between:
    |
    | 1. checking conversation mode
    | 2. saving customer message
    | 3. deciding whether AI should run
    |
    | The conversation row stays locked only for this short DB operation.
    | The external AI provider is NEVER called while the lock is held.
    |
    */

    private function storeCustomerMessageAndCaptureMode(
        AiConversation $conversation,
        string $message
    ): array {
        return DB::transaction(
            function () use (
                $conversation,
                $message
            ) {
                $lockedConversation =
                    AiConversation::query()
                        ->lockForUpdate()
                        ->find(
                            $conversation->id
                        );

                /*
                |--------------------------------------------------------------------------
                | Conversation missing
                |--------------------------------------------------------------------------
                */

                if (! $lockedConversation) {
                    return [
                        'status' => 404,

                        'mode' => null,

                        'conversation' => null,

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Closed
                |--------------------------------------------------------------------------
                */

                if (
                    $lockedConversation->mode
                    === 'closed'
                ) {
                    return [
                        'status' => 409,

                        'mode' => 'closed',

                        'conversation' =>
                            $lockedConversation,

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Only supported live states
                |--------------------------------------------------------------------------
                */

                if (
                    ! in_array(
                        $lockedConversation->mode,
                        [
                            'ai',
                            'human',
                        ],
                        true
                    )
                ) {
                    return [
                        'status' => 409,

                        'mode' =>
                            $lockedConversation->mode,

                        'conversation' =>
                            $lockedConversation,

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Store customer message
                |--------------------------------------------------------------------------
                */

                $storedMessage =
                    AiMessage::create([
                        'ai_conversation_id' =>
                            $lockedConversation->id,

                        'sender_type' =>
                            'user',

                        'admin_id' =>
                            null,

                        'message' =>
                            trim($message),

                        'is_read' =>
                            false,
                    ]);

                /*
                |--------------------------------------------------------------------------
                | Update activity
                |--------------------------------------------------------------------------
                */

                $lockedConversation->update([
                    'last_message_at' =>
                        now(),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Return mode captured while row was locked
                |--------------------------------------------------------------------------
                */

                return [
                    'status' => 200,

                    'mode' =>
                        $lockedConversation->mode,

                    'conversation' =>
                        $lockedConversation,

                    'message' =>
                        $storedMessage,
                ];
            }
        );
    }

    /*
    |--------------------------------------------------------------------------
    | TRUSTED DATABASE HISTORY
    |--------------------------------------------------------------------------
    |
    | Human staff messages become assistant messages when AI resumes.
    |
    | Only messages with an ID LOWER than the current customer message are
    | included. This creates a stable history boundary for the current request.
    |
    */

    private function getConversationHistory(
        AiConversation $conversation,
        ?int $currentMessageId = null
    ): array {
        return AiMessage::query()
            ->where(
                'ai_conversation_id',
                $conversation->id
            )

            ->when(
                $currentMessageId !== null,
                function ($query) use (
                    $currentMessageId
                ) {
                    $query->where(
                        'id',
                        '<',
                        $currentMessageId
                    );
                }
            )

            ->whereIn(
                'sender_type',
                [
                    'user',
                    'assistant',
                    'admin',
                ]
            )

            ->latest('id')

            ->limit(10)

            ->get()

            ->reverse()

            ->map(function (
                AiMessage $message
            ) {
                $role = match (
                    $message->sender_type
                ) {
                    'assistant',
                    'admin' =>
                        'assistant',

                    default =>
                        'user',
                };

                return [
                    'role' =>
                        $role,

                    'content' =>
                        $message->message,
                ];
            })

            ->values()

            ->all();
    }

    /*
    |--------------------------------------------------------------------------
    | SAVE AI MESSAGE ONLY IF MODE IS STILL AI
    |--------------------------------------------------------------------------
    |
    | Final race-condition protection.
    |
    | Example:
    |
    | customer -> AI starts generating
    | admin    -> joins conversation
    | AI       -> finishes generating
    |
    | The generated AI answer is discarded because mode is now "human".
    |
    */

    private function saveAssistantMessageIfStillAi(
        AiConversation $conversation,
        string $answer
    ): ?AiMessage {
        return DB::transaction(
            function () use (
                $conversation,
                $answer
            ) {
                $lockedConversation =
                    AiConversation::query()
                        ->lockForUpdate()
                        ->find(
                            $conversation->id
                        );

                if (! $lockedConversation) {
                    return null;
                }

                /*
                 * Critical final mode check.
                 */

                if (
                    $lockedConversation->mode
                    !== 'ai'
                ) {
                    return null;
                }

                $storedMessage =
                    AiMessage::create([
                        'ai_conversation_id' =>
                            $lockedConversation->id,

                        'sender_type' =>
                            'assistant',

                        'admin_id' =>
                            null,

                        'message' =>
                            trim($answer),

                        'is_read' =>
                            true,
                    ]);

                $lockedConversation->update([
                    'last_message_at' =>
                        now(),
                ]);

                return $storedMessage;
            }
        );
    }
}