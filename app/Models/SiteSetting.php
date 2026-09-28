<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'company_name',
        'short_name',
        'tagline',

        'logo',
        'favicon',

        'phone',
        'alternate_phone',
        'email',
        'sales_email',

        'address',

        'facebook',
        'instagram',
        'linkedin',
        'youtube',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate(
            ['id' => 1],
            [
                'company_name' => 'Associated Scientific & Engineering Works',
                'short_name' => 'ASEW',
            ]
        );
    }
}