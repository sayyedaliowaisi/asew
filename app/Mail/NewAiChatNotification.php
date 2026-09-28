<?php

namespace App\Mail;

use App\Models\AiConversation;
use App\Models\AiMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewAiChatNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public AiConversation $conversation,
        public AiMessage $customerMessage
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Website AI Chat - ASEW'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.ai.new-chat'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}