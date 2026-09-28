<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AiConversationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CONVERSATION LIST
    |--------------------------------------------------------------------------
    */

    public function index(Request $request): View
    {
        $status = $request
            ->string('status')
            ->toString();

        $conversations = AiConversation::query()

            ->with([
                'admin',
                'latestMessage.admin',
            ])

            ->withCount([
                'messages as unread_count' => function ($query) {
                    $query
                        ->where(
                            'sender_type',
                            'user'
                        )
                        ->where(
                            'is_read',
                            false
                        );
                },
            ])

            ->when(
                in_array(
                    $status,
                    [
                        'ai',
                        'human',
                        'closed',
                    ],
                    true
                ),
                fn ($query) =>
                    $query->where(
                        'mode',
                        $status
                    )
            )

            ->orderByRaw(
                'CASE
                    WHEN last_message_at IS NULL
                    THEN 1
                    ELSE 0
                END'
            )

            ->orderByDesc(
                'last_message_at'
            )

            ->orderByDesc('id')

            ->paginate(20)

            ->withQueryString();

        $counts = [
            'all' =>
                AiConversation::count(),

            'ai' =>
                AiConversation::query()
                    ->where(
                        'mode',
                        'ai'
                    )
                    ->count(),

            'human' =>
                AiConversation::query()
                    ->where(
                        'mode',
                        'human'
                    )
                    ->count(),

            'closed' =>
                AiConversation::query()
                    ->where(
                        'mode',
                        'closed'
                    )
                    ->count(),
        ];

        return view(
            'admin.ai-conversations.index',
            compact(
                'conversations',
                'counts',
                'status'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SHOW CONVERSATION
    |--------------------------------------------------------------------------
    */

    public function show(
        AiConversation $conversation
    ): View {
        $conversation->load(
            'admin'
        );

        $messages = $conversation
            ->messages()
            ->with('admin')
            ->orderBy('id')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Mark customer messages as read
        |--------------------------------------------------------------------------
        */

        AiMessage::query()
            ->where(
                'ai_conversation_id',
                $conversation->id
            )
            ->where(
                'sender_type',
                'user'
            )
            ->where(
                'is_read',
                false
            )
            ->update([
                'is_read' => true,
            ]);

        return view(
            'admin.ai-conversations.show',
            compact(
                'conversation',
                'messages'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | JOIN CONVERSATION
    |--------------------------------------------------------------------------
    |
    | Human staff takes control from AI.
    |
    */

    public function join(
        AiConversation $conversation
    ): RedirectResponse {
        $admin =
            auth('admin')->user();

        abort_unless(
            $admin,
            401
        );

        $result = DB::transaction(
            function () use (
                $conversation,
                $admin
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

                        'message' =>
                            'Closed conversations cannot be joined.',
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Another staff member owns conversation
                |--------------------------------------------------------------------------
                */

                if (
                    $lockedConversation->mode
                        === 'human'

                    && $lockedConversation->admin_id
                        !== null

                    && (int) $lockedConversation->admin_id
                        !== (int) $admin->id
                ) {
                    return [
                        'status' => 409,

                        'message' =>
                            'Another ASEW staff member is already handling this conversation.',
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Human takeover
                |--------------------------------------------------------------------------
                */

                $lockedConversation->update([
                    'mode' =>
                        'human',

                    'admin_id' =>
                        $admin->id,

                    'human_joined_at' =>
                        $lockedConversation
                            ->human_joined_at
                        ?? now(),
                ]);

                /*
                |--------------------------------------------------------------------------
                | Existing customer messages are now considered read
                |--------------------------------------------------------------------------
                */

                AiMessage::query()
                    ->where(
                        'ai_conversation_id',
                        $lockedConversation->id
                    )
                    ->where(
                        'sender_type',
                        'user'
                    )
                    ->where(
                        'is_read',
                        false
                    )
                    ->update([
                        'is_read' => true,
                    ]);

                return [
                    'status' => 200,
                    'message' => null,
                ];
            }
        );

        if ($result['status'] !== 200) {
            abort(
                $result['status'],
                $result['message']
            );
        }

        return redirect()
            ->route(
                'admin.ai-conversations.show',
                $conversation
            )
            ->with(
                'success',
                'You have joined the conversation. AI responses are now paused.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | ADMIN SEND MESSAGE
    |--------------------------------------------------------------------------
    |
    | ASEW staff -> website visitor.
    |
    | All state/ownership checks happen under the same row lock as the insert.
    | No HTTP exception is thrown from inside the DB transaction.
    |
    */

    public function sendMessage(
        Request $request,
        AiConversation $conversation
    ): JsonResponse {
        $validated =
            $request->validate([
                'message' => [
                    'required',
                    'string',
                    'min:1',
                    'max:2000',
                ],
            ]);

        $admin =
            auth('admin')->user();

        if (! $admin) {
            return response()->json([
                'success' => false,

                'message' =>
                    'Unauthenticated.',
            ], 401);
        }

        $result = DB::transaction(
            function () use (
                $conversation,
                $admin,
                $validated
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

                        'error' =>
                            'Conversation not found.',

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

                        'error' =>
                            'This conversation has been closed.',

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Human mode required
                |--------------------------------------------------------------------------
                */

                if (
                    $lockedConversation->mode
                    !== 'human'
                ) {
                    return [
                        'status' => 409,

                        'error' =>
                            'Join the conversation before sending a message.',

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Assigned admin required
                |--------------------------------------------------------------------------
                |
                | Explicit integer comparison prevents DB driver casting
                | differences from causing a false ownership mismatch.
                |
                */

                if (
                    $lockedConversation->admin_id
                    === null

                    || (int) $lockedConversation->admin_id
                        !== (int) $admin->id
                ) {
                    return [
                        'status' => 403,

                        'error' =>
                            'This conversation is being handled by another ASEW staff member.',

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Store staff message
                |--------------------------------------------------------------------------
                */

                $storedMessage =
                    AiMessage::create([
                        'ai_conversation_id' =>
                            $lockedConversation->id,

                        'sender_type' =>
                            'admin',

                        'admin_id' =>
                            $admin->id,

                        'message' =>
                            trim(
                                $validated['message']
                            ),

                        'is_read' =>
                            true,
                    ]);

                /*
                |--------------------------------------------------------------------------
                | Update conversation activity
                |--------------------------------------------------------------------------
                */

                $lockedConversation->update([
                    'last_message_at' =>
                        now(),
                ]);

                return [
                    'status' => 200,

                    'error' => null,

                    'message' =>
                        $storedMessage,
                ];
            }
        );

        /*
        |--------------------------------------------------------------------------
        | Structured error response
        |--------------------------------------------------------------------------
        */

        if ($result['status'] !== 200) {
            return response()->json([
                'success' => false,

                'message' =>
                    $result['error'],
            ], $result['status']);
        }

        /** @var AiMessage $message */
        $message =
            $result['message'];

        /*
        |--------------------------------------------------------------------------
        | Success response
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,

            'message' => [
                'id' =>
                    $message->id,

                'sender_type' =>
                    'admin',

                'content' =>
                    $message->message,

                'sender_name' =>
                    $admin->name
                    ?? 'ASEW Staff',

                'created_at' =>
                    $message
                        ->created_at
                        ?->toIso8601String(),
            ],
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | ADMIN LIVE MESSAGE POLLING
    |--------------------------------------------------------------------------
    */

    public function messages(
        Request $request,
        AiConversation $conversation
    ): JsonResponse {
        $validated =
            $request->validate([
                'after_id' => [
                    'nullable',
                    'integer',
                    'min:0',
                ],
            ]);

        $afterId =
            (int) (
                $validated['after_id']
                ?? 0
            );

        /*
        |--------------------------------------------------------------------------
        | Get new messages
        |--------------------------------------------------------------------------
        */

        $messages =
            AiMessage::query()
                ->where(
                    'ai_conversation_id',
                    $conversation->id
                )
                ->where(
                    'id',
                    '>',
                    $afterId
                )
                ->with('admin')
                ->orderBy('id')
                ->limit(100)
                ->get();

        /*
        |--------------------------------------------------------------------------
        | Mark newly received customer messages read
        |--------------------------------------------------------------------------
        */

        $customerMessageIds =
            $messages
                ->where(
                    'sender_type',
                    'user'
                )
                ->where(
                    'is_read',
                    false
                )
                ->pluck('id');

        if (
            $customerMessageIds->isNotEmpty()
        ) {
            AiMessage::query()
                ->whereIn(
                    'id',
                    $customerMessageIds
                )
                ->update([
                    'is_read' => true,
                ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Format messages
        |--------------------------------------------------------------------------
        */

        $formattedMessages =
            $messages
                ->map(
                    function (
                        AiMessage $message
                    ) {
                        return [
                            'id' =>
                                $message->id,

                            'sender_type' =>
                                $message
                                    ->sender_type,

                            'content' =>
                                $message
                                    ->message,

                            'sender_name' =>
                                match (
                                    $message
                                        ->sender_type
                                ) {
                                    'admin' =>
                                        $message
                                            ->admin
                                            ?->name
                                        ?? 'ASEW Staff',

                                    'assistant' =>
                                        'ASEW AI',

                                    default =>
                                        'Customer',
                                },

                            'created_at' =>
                                $message
                                    ->created_at
                                    ?->toIso8601String(),
                        ];
                    }
                )
                ->values();

        /*
        |--------------------------------------------------------------------------
        | Refresh live state
        |--------------------------------------------------------------------------
        */

        $conversation->refresh();

        /*
        |--------------------------------------------------------------------------
        | Safe polling cursor
        |--------------------------------------------------------------------------
        |
        | The query returns at most 100 messages, so never advance the cursor
        | beyond the highest message included in this response.
        |
        */

        $lastMessageId =
            $messages->max('id')
            ?? $afterId;

        return response()->json([
            'success' =>
                true,

            'mode' =>
                $conversation->mode,

            'admin_id' =>
                $conversation->admin_id,

            'messages' =>
                $formattedMessages,

            'last_message_id' =>
                (int) $lastMessageId,
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | RETURN TO AI
    |--------------------------------------------------------------------------
    */

    public function returnToAi(
        AiConversation $conversation
    ): RedirectResponse {
        $admin =
            auth('admin')->user();

        abort_unless(
            $admin,
            401
        );

        $result = DB::transaction(
            function () use (
                $conversation,
                $admin
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

                        'message' =>
                            'Closed conversations cannot be returned to AI.',
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Another admin owns chat
                |--------------------------------------------------------------------------
                */

                if (
                    $lockedConversation->mode
                        === 'human'

                    && $lockedConversation->admin_id
                        !== null

                    && (int) $lockedConversation->admin_id
                        !== (int) $admin->id
                ) {
                    return [
                        'status' => 403,

                        'message' =>
                            'This conversation is being handled by another ASEW staff member.',
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Return control to AI
                |--------------------------------------------------------------------------
                */

                $lockedConversation->update([
                    'mode' =>
                        'ai',

                    'admin_id' =>
                        null,

                    'human_joined_at' =>
                        null,
                ]);

                return [
                    'status' => 200,
                    'message' => null,
                ];
            }
        );

        if ($result['status'] !== 200) {
            abort(
                $result['status'],
                $result['message']
            );
        }

        return redirect()
            ->route(
                'admin.ai-conversations.show',
                $conversation
            )
            ->with(
                'success',
                'Conversation returned to AI.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | CLOSE CONVERSATION
    |--------------------------------------------------------------------------
    */

    public function close(
        AiConversation $conversation
    ): RedirectResponse {
        $admin =
            auth('admin')->user();

        abort_unless(
            $admin,
            401
        );

        $result = DB::transaction(
            function () use (
                $conversation,
                $admin
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
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Already closed
                |--------------------------------------------------------------------------
                |
                | Closing twice remains idempotent.
                |
                */

                if (
                    $lockedConversation->mode
                    === 'closed'
                ) {
                    return [
                        'status' => 200,

                        'message' => null,
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Another admin owns conversation
                |--------------------------------------------------------------------------
                */

                if (
                    $lockedConversation->mode
                        === 'human'

                    && $lockedConversation->admin_id
                        !== null

                    && (int) $lockedConversation->admin_id
                        !== (int) $admin->id
                ) {
                    return [
                        'status' => 403,

                        'message' =>
                            'This conversation is being handled by another ASEW staff member.',
                    ];
                }

                /*
                |--------------------------------------------------------------------------
                | Close
                |--------------------------------------------------------------------------
                */

                $lockedConversation->update([
                    'mode' =>
                        'closed',

                    'closed_at' =>
                        now(),
                ]);

                return [
                    'status' => 200,

                    'message' => null,
                ];
            }
        );

        if ($result['status'] !== 200) {
            abort(
                $result['status'],
                $result['message']
            );
        }

        return redirect()
            ->route(
                'admin.ai-conversations.index'
            )
            ->with(
                'success',
                'Conversation closed successfully.'
            );
    }
}