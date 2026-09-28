<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    |--------------------------------------------------------------------------
    | UP
    |--------------------------------------------------------------------------
    |
    | Remove the old homepage product cards table.
    | Homepage now uses homepage_product_categories.
    |
    */

    public function up(): void
    {
        Schema::dropIfExists('homepage_product_cards');
    }


    /*
    |--------------------------------------------------------------------------
    | DOWN
    |--------------------------------------------------------------------------
    |
    | Restore the exact legacy table structure if this migration
    | is rolled back.
    |
    */

    public function down(): void
    {
        if (! Schema::hasTable('homepage_product_cards')) {

            Schema::create('homepage_product_cards', function (Blueprint $table) {

                $table->id();

                $table->string('title', 180);

                $table->string('slug', 180)
                    ->nullable();

                $table->string('image')
                    ->nullable();

                $table->string('button_text', 100)
                    ->default('Explore Products');

                $table->string('button_url', 500)
                    ->nullable();

                $table->unsignedInteger('sort_order')
                    ->default(0);

                $table->boolean('is_active')
                    ->default(true);

                $table->timestamps();

                $table->index([
                    'is_active',
                    'sort_order',
                ]);
            });
        }
    }
};