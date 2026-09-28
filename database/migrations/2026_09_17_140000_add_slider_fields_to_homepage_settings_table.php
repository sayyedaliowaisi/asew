<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('homepage_settings', function (Blueprint $table) {

            if (!Schema::hasColumn('homepage_settings', 'hero_image_1')) {
                $table->string('hero_image_1')->nullable();
            }

            if (!Schema::hasColumn('homepage_settings', 'hero_image_2')) {
                $table->string('hero_image_2')->nullable();
            }

            if (!Schema::hasColumn('homepage_settings', 'hero_image_3')) {
                $table->string('hero_image_3')->nullable();
            }

            if (!Schema::hasColumn('homepage_settings', 'hero_image_4')) {
                $table->string('hero_image_4')->nullable();
            }

            if (!Schema::hasColumn('homepage_settings', 'hero_enabled')) {
                $table->boolean('hero_enabled')->default(true);
            }

            if (!Schema::hasColumn('homepage_settings', 'slider_interval')) {
                $table->unsignedInteger('slider_interval')->default(5000);
            }
        });
    }

    public function down(): void
    {
        //
    }
};