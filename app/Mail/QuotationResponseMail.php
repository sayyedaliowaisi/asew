<?php

namespace App\Mail;

use App\Models\Quotation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public Quotation $quotation;

    public function __construct(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    public function build()
    {
        $decision = ucfirst($this->quotation->status);

        return $this
            ->subject(
                "{$decision}: Quotation {$this->quotation->quotation_number}"
            )
            ->view('emails.quotations.response');
    }
}