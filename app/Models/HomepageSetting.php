<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class HomepageSetting extends Model
{
    protected $guarded = [];

    protected $casts = [
        'hero_enabled' => 'boolean',
        'products_enabled' => 'boolean',
        'lab_enabled' => 'boolean',
        'manufacturing_enabled' => 'boolean',
        'stats_enabled' => 'boolean',
        'why_enabled' => 'boolean',
        'cta_enabled' => 'boolean',
        'slider_interval' => 'integer',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate(
            ['id' => 1],
            [
                // HERO
                'hero_enabled' => true,
                'slider_interval' => 5000,

                // PRODUCTS
                'products_enabled' => true,
                'products_badge' => 'Our Products',
                'products_heading' => 'Testing Equipment & Laboratory Instruments',

                // LAB
                'lab_enabled' => true,
                'lab_badge' => 'Complete Lab Solutions',
                'lab_heading' => 'From Individual Instruments to Complete Laboratory Setups',
                'lab_description' =>
                    'We provide complete scientific and engineering testing solutions including equipment supply, installation, calibration, training and after-sales support.',
                'lab_button_text' => 'Explore Solutions',
                'lab_button_url' => '/products',

                // MANUFACTURING
                'manufacturing_enabled' => true,
                'manufacturing_badge' => 'Manufacturing Excellence',
                'manufacturing_heading' =>
                    'Engineered With Precision. Built For Performance.',
                'manufacturing_description' =>
                    'Associated Scientific & Engineering combines advanced manufacturing technology with skilled engineering to deliver reliable, accurate and durable testing equipment.',

                'manufacturing_feature_1' =>
                    'State-of-the-art manufacturing quality',

                'manufacturing_feature_2' =>
                    'Precision engineering & rigorous quality control',

                'manufacturing_feature_3' =>
                    'Modern machinery & technology',

                'manufacturing_feature_4' =>
                    'Experienced & skilled workforce',

                'manufacturing_button_text' =>
                    'Our Manufacturing',

                'manufacturing_button_url' =>
                    '/manufacturing',

                // STATS
                'stats_enabled' => true,
                'stats_badge' => 'Trusted Worldwide',
                'stats_heading' =>
                    'Delivering Quality Testing Solutions Across The Globe',

                'stat_1_value' => '50+',
                'stat_1_label' => 'Years of Experience',

                'stat_2_value' => '5000+',
                'stat_2_label' => 'Products Supplied',

                'stat_3_value' => '100+',
                'stat_3_label' => 'Countries Served',

                'stat_4_value' => '10000+',
                'stat_4_label' => 'Laboratories Equipped',

                'stat_5_value' => '24/7',
                'stat_5_label' => 'Support & Service',

                // WHY ASEW
                'why_enabled' => true,
                'why_badge' => 'Why ASEW',
                'why_heading' =>
                    'The Reasons Industries Choose ASEW',

                'why_1_title' => '50+ Years of Expertise',
                'why_1_description' =>
                    'Decades of experience in manufacturing testing instruments and laboratory solutions.',

                'why_2_title' => 'Complete Lab Solutions',
                'why_2_description' =>
                    'From single instruments to turnkey laboratory setup and training.',

                'why_3_title' => 'Standards Compliance',
                'why_3_description' =>
                    'Products conform to IS, ASTM, BS, EN & other international standards.',

                'why_4_title' =>
                    'Installation & Calibration',
                'why_4_description' =>
                    'Professional installation, calibration and after-sales support.',

                'why_5_title' => 'Quality Assurance',
                'why_5_description' =>
                    'Every product is tested for precision, accuracy and long life.',

                'why_6_title' => 'Global Presence',
                'why_6_description' =>
                    'Serving customers worldwide with trust and reliability.',

                // CTA
                'cta_enabled' => true,
                'cta_heading' =>
                    'Looking for the Right Testing Solution?',

                'cta_description' =>
                    'Our experts are ready to help you choose the right equipment for your needs.',

                'cta_button_text' =>
                    'Request a Quote',

                'cta_button_url' =>
                    '/request-quote',
            ]
        );
    }
}