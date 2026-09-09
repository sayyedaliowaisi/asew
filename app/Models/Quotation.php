<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quotation extends Model
{
    protected $fillable = [
        'product_enquiry_id',
        'quotation_number',
        'customer_name',
        'company',
        'email',
        'phone',
        'city',
        'subtotal',
        'discount',
        'gst_percent',
        'gst_amount',
        'grand_total',
        'validity_days',
        'notes',
        'terms',
        'status',
        'quotation_date',
        'valid_until',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'discount' => 'decimal:2',
        'gst_percent' => 'decimal:2',
        'gst_amount' => 'decimal:2',
        'grand_total' => 'decimal:2',
        'quotation_date' => 'date',
        'valid_until' => 'date',
    ];

    public function enquiry(): BelongsTo
    {
        return $this->belongsTo(
            ProductEnquiry::class,
            'product_enquiry_id'
        );
    }

    public function items(): HasMany
    {
        return $this->hasMany(QuotationItem::class);
    }
}