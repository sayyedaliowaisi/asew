<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiMessage extends Model
{
    protected $fillable = [
        'ai_conversation_id',
        'sender_type',
        'admin_id',
        'message',
        'is_read',
    ];


    protected $casts = [
        'is_read' => 'boolean',
    ];


    public function conversation(): BelongsTo
    {
        return $this->belongsTo(
            AiConversation::class,
            'ai_conversation_id'
        );
    }


    public function admin(): BelongsTo
    {
        return $this->belongsTo(
            Admin::class
        );
    }
}