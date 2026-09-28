<?php

namespace App\Services\AI;

use App\Mail\NewAiChatNotification;
use App\Models\Admin;
use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AiChatNotificationService
{
    public function notifyFirstCustomerMessage(
        AiConversation $conversation,
        AiMessage $message
    ): void {
        /*
        |--------------------------------------------------------------------------
        | Only customer messages
        |--------------------------------------------------------------------------
        */

        if ($message->sender_type !== 'user') {
            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Atomically claim notification
        |--------------------------------------------------------------------------
        |
        | Two simultaneous requests must not send two "new chat" emails.
        |
        */

        $shouldNotify = DB::transaction(
            function () use ($conversation) {

                $lockedConversation = AiConversation::query()
                    ->lockForUpdate()
                    ->find($conversation->id);

                if (! $lockedConversation) {
                    return false;
                }

                if ($lockedConversation->admin_notified_at !== null) {
                    return false;
                }

                $lockedConversation->update([
                    'admin_notified_at' => now(),
                ]);

                return true;
            }
        );


        if (! $shouldNotify) {
            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Admin recipient
        |--------------------------------------------------------------------------
        */

        $adminEmail = Admin::query()
            ->whereNotNull('email')
            ->value('email');

        if (! filled($adminEmail)) {
            $this->releaseNotificationClaim($conversation);

            Log::warning(
                'ASEW AI chat notification skipped: admin email missing.',
                [
                    'conversation_id' => $conversation->id,
                ]
            );

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Send
        |--------------------------------------------------------------------------
        |
        | Mail failure must NEVER break customer chat.
        |
        */

        try {

            Mail::to($adminEmail)->send(
                new NewAiChatNotification(
                    $conversation->fresh(),
                    $message
                )
            );

        } catch (\Throwable $exception) {

            /*
            |--------------------------------------------------------------------------
            | Allow a later retry
            |--------------------------------------------------------------------------
            */

            $this->releaseNotificationClaim($conversation);

            report($exception);

            Log::error(
                'ASEW AI new chat email notification failed.',
                [
                    'conversation_id' => $conversation->id,
                    'message_id' => $message->id,
                ]
            );
        }
    }


    private function releaseNotificationClaim(
        AiConversation $conversation
    ): void {
        AiConversation::query()
            ->whereKey($conversation->id)
            ->update([
                'admin_notified_at' => null,
            ]);
    }
}