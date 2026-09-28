<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('homepage_slides')) {
            return;
        }

        if (DB::table('homepage_slides')->exists()) {
            return;
        }

        $now = now();

        DB::table('homepage_slides')->insert([
            [
                'image' => 'images/hero (2).png',
                'alt_text' => 'ASEW Scientific Testing Equipment',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'images/hero (3).png',
                'alt_text' => 'ASEW Testing Equipment',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'images/hero (4).png',
                'alt_text' => 'ASEW Laboratory Solutions',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'image' => 'images/hero (5).png',
                'alt_text' => 'ASEW Engineering Testing Solutions',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down(): void
    {
        /*
         * Intentionally left empty.
         *
         * We do not delete homepage slides during rollback,
         * because an admin may have added new slides after
         * this migration was executed.
         */
    }
};