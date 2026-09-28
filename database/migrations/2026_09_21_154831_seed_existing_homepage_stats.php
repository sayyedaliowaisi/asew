<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('homepage_stats')) {
            return;
        }

        if (DB::table('homepage_stats')->exists()) {
            return;
        }

        $now = now();

        DB::table('homepage_stats')->insert([
            [
                'value' => '50+',
                'label' => 'Years of Experience',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'value' => '5000+',
                'label' => 'Products Supplied',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'value' => '100+',
                'label' => 'Countries Served',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'value' => '10000+',
                'label' => 'Laboratories Equipped',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'value' => '24/7',
                'label' => 'Support & Service',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down(): void
    {
        // Intentionally preserved.
    }
};