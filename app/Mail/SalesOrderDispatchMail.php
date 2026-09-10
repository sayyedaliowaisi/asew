<?php

namespace App\Mail;

use App\Models\SalesOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SalesOrderDispatchMail extends Mailable
{
    use Queueable, SerializesModels;

    public SalesOrder $salesOrder;

    public function __construct(SalesOrder $salesOrder)
    {
        $this->salesOrder = $salesOrder;
    }

    public function build()
    {
        return $this
            ->subject(
                "Dispatch Update {$this->salesOrder->order_number} | ASEW"
            )
            ->view('emails.sales-orders.dispatch');
    }
}