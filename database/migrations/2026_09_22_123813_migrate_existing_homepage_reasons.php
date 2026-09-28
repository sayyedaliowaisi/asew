<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (
            !Schema::hasTable('homepage_reasons') ||
            !Schema::hasTable('homepage_settings')
        ) {
            return;
        }

        if (DB::table('homepage_reasons')->exists()) {
            return;
        }

        $settings = DB::table('homepage_settings')
            ->where('id', 1)
            ->first();

        if (!$settings) {
            return;
        }

        $fallbacks = [
            [
                'title' => '50+ Years of Expertise',
                'description' =>
                    'Decades of experience in manufacturing testing instruments and laboratory solutions.',
            ],
            [
                'title' => 'Complete Lab Solutions',
                'description' =>
                    'From single instruments to turnkey laboratory setup and training.',
            ],
            [
                'title' => 'Standards Compliance',
                'description' =>
                    'Products conform to IS, ASTM, BS, EN & other international standards.',
            ],
            [
                'title' => 'Installation & Calibration',
                'description' =>
                    'Professional installation, calibration and after-sales support.',
            ],
            [
                'title' => 'Quality Assurance',
                'description' =>
                    'Every product is tested for precision, accuracy and long life.',
            ],
            [
                'title' => 'Global Presence',
                'description' =>
                    'Serving customers worldwide with trust and reliability.',
            ],
        ];

        $rows = [];
        $now = now();

        foreach ($fallbacks as $index => $fallback) {
            $number = $index + 1;

            $titleColumn =
                'why_' . $number . '_title';

            $descriptionColumn =
                'why_' . $number . '_description';

            $title =
                $settings->{$titleColumn}
                ?? $fallback['title'];

            $description =
                $settings->{$descriptionColumn}
                ?? $fallback['description'];

            /*
             * Skip a completely empty legacy card.
             */
            if (
                blank($title) &&
                blank($description)
            ) {
                continue;
            }

            $rows[] = [
                'title' => $title ?: $fallback['title'],

                'description' =>
                    $description
                    ?: $fallback['description'],

                'sort_order' => $number,
                'is_active' => true,

                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if (!empty($rows)) {
            DB::table('homepage_reasons')
                ->insert($rows);
        }
    }

    public function down(): void
    {
        /*
         * Do not delete records here.
         * Admin may have edited/added reasons later.
         */
    }
};