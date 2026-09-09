<?php

namespace App\Mail;

use App\Models\Quotation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public Quotation $quotation;

    public function __construct(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Quotation ' .
                $this->quotation->quotation_number .
                ' | ASEW'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quotations.customer'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}