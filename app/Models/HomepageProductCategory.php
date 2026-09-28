<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageProductCategory extends Model
{
    protected $fillable = [

        'category_slug',

        'title',

        'image',

        'button_text',

        'sort_order',

        'is_active',

    ];

    protected $casts = [

        'sort_order' => 'integer',

        'is_active' => 'boolean',

    ];
}