<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('homepage_product_categories')) {
            return;
        }

        /*
        |--------------------------------------------------------------------------
        | Do not overwrite existing admin data
        |--------------------------------------------------------------------------
        */

        if (DB::table('homepage_product_categories')->exists()) {
            return;
        }

        $now = now();

        $categories = [

            [
                'category_slug' => 'soil',
                'title' => 'Soil Testing',
                'image' => 'images/products/soil-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 0,
            ],

            [
                'category_slug' => 'concrete',
                'title' => 'Concrete Testing',
                'image' => 'images/products/concrete-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 1,
            ],

            [
                'category_slug' => 'cement',
                'title' => 'Cement Testing',
                'image' => 'images/products/cement-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 2,
            ],

            [
                'category_slug' => 'aggregate',
                'title' => 'Aggregate Testing',
                'image' => 'images/products/aggregate-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 3,
            ],

            [
                'category_slug' => 'bitumen',
                'title' => 'Bitumen / Asphalt Testing',
                'image' => 'images/products/bitumen-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 4,
            ],

            [
                'category_slug' => 'rock',
                'title' => 'Rock Testing',
                'image' => 'images/products/rock-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 5,
            ],

            [
                'category_slug' => 'material',
                'title' => 'Material Testing',
                'image' => 'images/products/material-testing.png',
                'button_text' => 'View Products',
                'sort_order' => 6,
            ],

            [
                'category_slug' => 'survey',
                'title' => 'Survey Instruments',
                'image' => 'images/products/survey-instruments.png',
                'button_text' => 'View Products',
                'sort_order' => 7,
            ],

            [
                'category_slug' => 'laboratory',
                'title' => 'Laboratory Equipment',
                'image' => 'images/products/laboratory-equipment.png',
                'button_text' => 'View Products',
                'sort_order' => 8,
            ],
        ];

        foreach ($categories as $category) {

            DB::table('homepage_product_categories')->insert([
                ...$category,

                'is_active' => true,

                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Keep admin-created/edited data safe during rollback
    |--------------------------------------------------------------------------
    */

    public function down(): void
    {
        //
    }
};