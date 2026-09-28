<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('homepage_lab_cards')) {
            return;
        }

        if (DB::table('homepage_lab_cards')->exists()) {
            return;
        }

        $now = now();

        DB::table('homepage_lab_cards')->insert([
            [
                'title' => 'Soil',
                'subtitle' => 'Laboratory',
                'image' => 'images/soil-laboratory.jpg',
                'button_url' => '/products?category=soil',
                'sort_order' => 0,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'title' => 'Concrete',
                'subtitle' => 'Laboratory',
                'image' => 'images/concrete-laboratory.jpg',
                'button_url' => '/products?category=concrete',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'title' => 'Cement',
                'subtitle' => 'Laboratory',
                'image' => 'images/cement-laboratory.jpg',
                'button_url' => '/products?category=cement',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'title' => 'Bitumen / Asphalt',
                'subtitle' => 'Laboratory',
                'image' => 'images/bitumen-laboratory.jpg',
                'button_url' => '/products?category=bitumen',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down(): void
    {
        /*
         * Intentionally empty.
         * Admin-edited content should not be deleted by rollback.
         */
    }
};