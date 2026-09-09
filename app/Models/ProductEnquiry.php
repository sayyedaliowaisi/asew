<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductEnquiry extends Model
{
    protected $fillable = [
        'product_id',
        'product_name',
        'product_code',
        'name',
        'company',
        'email',
        'phone',
        'city',
        'quantity',
        'message',
        'status',
    ];


    protected $casts = [
        'quantity' => 'integer',
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}