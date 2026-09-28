<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*
        |--------------------------------------------------------------------------
        | SAFETY CHECKS
        |--------------------------------------------------------------------------
        */

        if (
            !Schema::hasTable('homepage_settings') ||
            !Schema::hasTable('homepage_manufacturing_images')
        ) {
            return;
        }

        /*
        |--------------------------------------------------------------------------
        | DO NOT TOUCH EXISTING DYNAMIC GALLERY
        |--------------------------------------------------------------------------
        |
        | If admin already has dynamic gallery records,
        | we must not insert duplicates.
        |
        */

        if (
            DB::table('homepage_manufacturing_images')
                ->exists()
        ) {
            return;
        }

        $homepage = DB::table('homepage_settings')
            ->where('id', 1)
            ->first();

        /*
         * Fallback in case id=1 does not exist.
         */

        if (!$homepage) {
            $homepage = DB::table('homepage_settings')
                ->orderBy('id')
                ->first();
        }

        if (!$homepage) {
            return;
        }


        /*
        |--------------------------------------------------------------------------
        | DEFAULT / FALLBACK IMAGES
        |--------------------------------------------------------------------------
        |
        | These should match the original manufacturing images used
        | by the frontend before CMS image management.
        |
        | Existing homepage_settings values always get priority.
        |
        */

        $fallbacks = [
            1 => 'images/manufacturing/manufacturing-1.jpg',
            2 => 'images/manufacturing/manufacturing-2.jpg',
            3 => 'images/manufacturing/manufacturing-3.jpg',
            4 => 'images/manufacturing/manufacturing-4.jpg',
        ];

        $now = now();

        for ($i = 1; $i <= 4; $i++) {

            $column =
                "manufacturing_image_{$i}";

            /*
             * Preserve current customized CMS image first.
             */

            $image = null;

            if (
                Schema::hasColumn(
                    'homepage_settings',
                    $column
                )
            ) {
                $image =
                    $homepage->{$column} ?? null;
            }

            /*
             * Only use fallback when the CMS field is empty.
             */

            if (
                !$image &&
                isset($fallbacks[$i])
            ) {
                $image =
                    $fallbacks[$i];
            }

            if (!$image) {
                continue;
            }

            DB::table(
                'homepage_manufacturing_images'
            )->insert([
                'image' => $image,

                'alt_text' =>
                    'ASEW Manufacturing Facility ' . $i,

                'sort_order' =>
                    $i - 1,

                'is_active' =>
                    true,

                'created_at' =>
                    $now,

                'updated_at' =>
                    $now,
            ]);
        }
    }


    public function down(): void
    {
        /*
        |--------------------------------------------------------------------------
        | INTENTIONALLY EMPTY
        |--------------------------------------------------------------------------
        |
        | Do not delete gallery records on rollback because after this
        | migration runs the admin may add/edit/reorder manufacturing images.
        |
        | Automatically deleting those records could destroy user content.
        |
        */
    }
};