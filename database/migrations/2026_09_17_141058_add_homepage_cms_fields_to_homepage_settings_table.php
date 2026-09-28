<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('homepage_settings', function (Blueprint $table) {

            // PRODUCTS
            $table->boolean('products_enabled')->default(true);
            $table->string('products_badge')->nullable();
            $table->string('products_heading')->nullable();
            $table->text('products_description')->nullable();

            // LAB SOLUTIONS
            $table->boolean('lab_enabled')->default(true);
            $table->string('lab_badge')->nullable();
            $table->string('lab_heading')->nullable();
            $table->text('lab_description')->nullable();
            $table->string('lab_button_text')->nullable();
            $table->string('lab_button_url')->nullable();

            // MANUFACTURING
            $table->boolean('manufacturing_enabled')->default(true);
            $table->string('manufacturing_badge')->nullable();
            $table->string('manufacturing_heading')->nullable();
            $table->text('manufacturing_description')->nullable();

            $table->string('manufacturing_image_1')->nullable();
            $table->string('manufacturing_image_2')->nullable();
            $table->string('manufacturing_image_3')->nullable();
            $table->string('manufacturing_image_4')->nullable();

            $table->string('manufacturing_feature_1')->nullable();
            $table->string('manufacturing_feature_2')->nullable();
            $table->string('manufacturing_feature_3')->nullable();
            $table->string('manufacturing_feature_4')->nullable();

            $table->string('manufacturing_button_text')->nullable();
            $table->string('manufacturing_button_url')->nullable();

            // STATS
            $table->boolean('stats_enabled')->default(true);
            $table->string('stats_badge')->nullable();
            $table->string('stats_heading')->nullable();

            $table->string('stat_1_value')->nullable();
            $table->string('stat_1_label')->nullable();

            $table->string('stat_2_value')->nullable();
            $table->string('stat_2_label')->nullable();

            $table->string('stat_3_value')->nullable();
            $table->string('stat_3_label')->nullable();

            $table->string('stat_4_value')->nullable();
            $table->string('stat_4_label')->nullable();

            $table->string('stat_5_value')->nullable();
            $table->string('stat_5_label')->nullable();

            // WHY ASEW
            $table->boolean('why_enabled')->default(true);
            $table->string('why_badge')->nullable();
            $table->string('why_heading')->nullable();

            for ($i = 1; $i <= 6; $i++) {
                $table->string("why_{$i}_title")->nullable();
                $table->text("why_{$i}_description")->nullable();
            }

            // FINAL CTA
            $table->boolean('cta_enabled')->default(true);
            $table->string('cta_heading')->nullable();
            $table->text('cta_description')->nullable();
            $table->string('cta_button_text')->nullable();
            $table->string('cta_button_url')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('homepage_settings', function (Blueprint $table) {

            $columns = [
                'products_enabled',
                'products_badge',
                'products_heading',
                'products_description',

                'lab_enabled',
                'lab_badge',
                'lab_heading',
                'lab_description',
                'lab_button_text',
                'lab_button_url',

                'manufacturing_enabled',
                'manufacturing_badge',
                'manufacturing_heading',
                'manufacturing_description',
                'manufacturing_image_1',
                'manufacturing_image_2',
                'manufacturing_image_3',
                'manufacturing_image_4',
                'manufacturing_feature_1',
                'manufacturing_feature_2',
                'manufacturing_feature_3',
                'manufacturing_feature_4',
                'manufacturing_button_text',
                'manufacturing_button_url',

                'stats_enabled',
                'stats_badge',
                'stats_heading',
                'stat_1_value',
                'stat_1_label',
                'stat_2_value',
                'stat_2_label',
                'stat_3_value',
                'stat_3_label',
                'stat_4_value',
                'stat_4_label',
                'stat_5_value',
                'stat_5_label',

                'why_enabled',
                'why_badge',
                'why_heading',

                'why_1_title',
                'why_1_description',
                'why_2_title',
                'why_2_description',
                'why_3_title',
                'why_3_description',
                'why_4_title',
                'why_4_description',
                'why_5_title',
                'why_5_description',
                'why_6_title',
                'why_6_description',

                'cta_enabled',
                'cta_heading',
                'cta_description',
                'cta_button_text',
                'cta_button_url',
            ];

            $table->dropColumn($columns);
        });
    }
};