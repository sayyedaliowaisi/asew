<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_messages', function (Blueprint $table) {
            $table->id();


            $table->foreignId('ai_conversation_id')
                ->constrained('ai_conversations')
                ->cascadeOnDelete();


            /*
            |--------------------------------------------------------------------------
            | Sender
            |--------------------------------------------------------------------------
            |
            | user      = website visitor
            | assistant = ASEW AI
            | admin     = human ASEW staff
            |
            */

            $table->string('sender_type', 20)
                ->index();


            $table->foreignId('admin_id')
                ->nullable()
                ->constrained('admins')
                ->nullOnDelete();


            /*
            |--------------------------------------------------------------------------
            | Message
            |--------------------------------------------------------------------------
            */

            $table->text('message');


            /*
            |--------------------------------------------------------------------------
            | Message Metadata
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_read')
                ->default(false)
                ->index();


            $table->timestamps();


            $table->index([
                'ai_conversation_id',
                'created_at',
            ]);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ai_messages');
    }
};