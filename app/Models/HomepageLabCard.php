<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageLabCard extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];
}