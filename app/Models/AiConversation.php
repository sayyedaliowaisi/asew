<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AiConversation extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Mass Assignable Fields
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'public_token',
        'mode',
        'visitor_name',
        'visitor_email',
        'visitor_phone',
        'admin_id',
        'human_joined_at',
        'closed_at',
        'last_message_at',
        'admin_notified_at',
    ];


    /*
    |--------------------------------------------------------------------------
    | Casts
    |--------------------------------------------------------------------------
    */

    protected $casts = [
    'admin_id' => 'integer',

    'human_joined_at' => 'datetime',
    'closed_at' => 'datetime',
    'last_message_at' => 'datetime',
    'admin_notified_at' => 'datetime',
];


    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    |
    | All messages belonging to this conversation.
    |
    */

    public function messages(): HasMany
    {
        return $this->hasMany(
            AiMessage::class,
            'ai_conversation_id'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Latest Message
    |--------------------------------------------------------------------------
    |
    | Used by the Admin Live AI Chats listing.
    |
    | latestOfMany() allows Laravel to efficiently fetch the newest
    | message without calling messages()->latest()->first() separately
    | for every conversation.
    |
    */

    public function latestMessage(): HasOne
    {
        return $this->hasOne(
            AiMessage::class,
            'ai_conversation_id'
        )->latestOfMany();
    }


    /*
    |--------------------------------------------------------------------------
    | Assigned Admin
    |--------------------------------------------------------------------------
    */

    public function admin(): BelongsTo
    {
        return $this->belongsTo(
            Admin::class
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Conversation Mode Helpers
    |--------------------------------------------------------------------------
    */

    public function isAiMode(): bool
    {
        return $this->mode === 'ai';
    }


    public function isHumanMode(): bool
    {
        return $this->mode === 'human';
    }


    public function isClosed(): bool
    {
        return $this->mode === 'closed';
    }
}