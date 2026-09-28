<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageStat extends Model
{
    protected $fillable = [
        'value',
        'label',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];
}