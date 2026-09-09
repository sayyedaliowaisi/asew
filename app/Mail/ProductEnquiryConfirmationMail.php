<?php

namespace App\Mail;

use App\Models\ProductEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProductEnquiryConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public ProductEnquiry $enquiry;

    public function __construct(ProductEnquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We Received Your Enquiry | ASEW',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiries.customer',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

