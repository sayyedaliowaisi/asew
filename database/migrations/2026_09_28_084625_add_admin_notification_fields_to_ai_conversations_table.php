<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ai_conversations', function (Blueprint $table) {
            $table->timestamp('admin_notified_at')
                ->nullable()
                ->after('last_message_at');

            $table->index('admin_notified_at');
        });
    }

    public function down(): void
    {
        Schema::table('ai_conversations', function (Blueprint $table) {
            $table->dropIndex(['admin_notified_at']);
            $table->dropColumn('admin_notified_at');
        });
    }
};