<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SalesOrder extends Model
{
    protected $fillable = [
        'quotation_id',
        'order_number',

        'customer_name',
        'company',
        'email',
        'phone',
        'city',

        'subtotal',
        'discount',
        'gst_amount',
        'grand_total',

        'payment_status',
        'order_status',

        'delivery_status',
        'courier_name',
        'tracking_number',
        'dispatch_date',
        'delivered_at',


        'order_date',
        'expected_delivery_date',

        'delivery_address',
        'notes',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'discount' => 'decimal:2',
        'gst_amount' => 'decimal:2',
        'grand_total' => 'decimal:2',

        'order_date' => 'date',
        'expected_delivery_date' => 'date',
        'dispatch_date' => 'date',

        'delivered_at' => 'datetime',
    ];

    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(SalesOrderItem::class);
    }
}