<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('homepage_product_cards')) {
            return;
        }

        /*
        |--------------------------------------------------------------------------
        | Do not duplicate existing admin-created cards
        |--------------------------------------------------------------------------
        */

        if (DB::table('homepage_product_cards')->exists()) {
            return;
        }

        $now = now();

        $cards = [
            [
                'title' => 'Soil Testing',
                'slug' => 'soil-testing',
                'image' => 'images/products/soil-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=soil',
                'sort_order' => 0,
                'is_active' => true,
            ],

            [
                'title' => 'Concrete Testing',
                'slug' => 'concrete-testing',
                'image' => 'images/products/concrete-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=concrete',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title' => 'Cement Testing',
                'slug' => 'cement-testing',
                'image' => 'images/products/cement-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=cement',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title' => 'Aggregate Testing',
                'slug' => 'aggregate-testing',
                'image' => 'images/products/aggregate-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=aggregate',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title' => 'Bitumen / Asphalt Testing',
                'slug' => 'bitumen-asphalt-testing',
                'image' => 'images/products/bitumen-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=bitumen',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title' => 'Rock Testing',
                'slug' => 'rock-testing',
                'image' => 'images/products/rock-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=rock',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title' => 'Material Testing',
                'slug' => 'material-testing',
                'image' => 'images/products/material-testing.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=material',
                'sort_order' => 6,
                'is_active' => true,
            ],

            [
                'title' => 'Survey Instruments',
                'slug' => 'survey-instruments',
                'image' => 'images/products/survey-instruments.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=survey',
                'sort_order' => 7,
                'is_active' => true,
            ],

            [
                'title' => 'Laboratory Equipment',
                'slug' => 'laboratory-equipment',
                'image' => 'images/products/laboratory-equipment.png',
                'button_text' => 'View Products',
                'button_url' => '/products?category=laboratory',
                'sort_order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($cards as &$card) {
            $card['created_at'] = $now;
            $card['updated_at'] = $now;
        }

        unset($card);

        DB::table('homepage_product_cards')
            ->insert($cards);
    }


    public function down(): void
    {
        /*
         * Intentionally left empty.
         *
         * Once admins edit these cards, rollback should not
         * delete their homepage content.
         */
    }
};