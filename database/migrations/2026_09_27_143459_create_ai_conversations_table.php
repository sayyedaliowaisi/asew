<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_conversations', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Public Conversation Token
            |--------------------------------------------------------------------------
            |
            | Browser ko numeric database ID expose nahi karenge.
            |
            */

            $table->uuid('public_token')->unique();


            /*
            |--------------------------------------------------------------------------
            | Conversation Mode
            |--------------------------------------------------------------------------
            |
            | ai     = AI currently handling customer
            | human  = ASEW staff has joined
            | closed = conversation finished
            |
            */

            $table->string('mode', 20)
                ->default('ai')
                ->index();


            /*
            |--------------------------------------------------------------------------
            | Visitor Information
            |--------------------------------------------------------------------------
            */

            $table->string('visitor_name', 150)
                ->nullable();

            $table->string('visitor_email', 190)
                ->nullable();

            $table->string('visitor_phone', 30)
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Human Handoff
            |--------------------------------------------------------------------------
            */

            $table->foreignId('admin_id')
                ->nullable()
                ->constrained('admins')
                ->nullOnDelete();


            $table->timestamp('human_joined_at')
                ->nullable();

            $table->timestamp('closed_at')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Activity
            |--------------------------------------------------------------------------
            */

            $table->timestamp('last_message_at')
                ->nullable()
                ->index();


            $table->timestamps();


            $table->index([
                'mode',
                'last_message_at',
            ]);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ai_conversations');
    }
};