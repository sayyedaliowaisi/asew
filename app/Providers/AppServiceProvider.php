<?php

namespace App\Providers;

use App\Models\HomepageLabCard;
use App\Models\HomepageManufacturingImage;
use App\Models\HomepageProductCategory;
use App\Models\HomepageReason;
use App\Models\HomepageSetting;
use App\Models\HomepageSlide;
use App\Models\HomepageStat;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        /*
        |--------------------------------------------------------------------------
        | SAFE DEFAULT VALUES
        |--------------------------------------------------------------------------
        */

        $siteSettings = null;
        $homepageSettings = null;

        $homepageSlides = collect();
        $homepageStats = collect();
        $homepageReasons = collect();
        $homepageManufacturingImages = collect();

        

        $homepageLabCards = collect();

        // New Products system
        $homepageProductCategories = collect();


        try {

            /*
            |--------------------------------------------------------------------------
            | SITE SETTINGS
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('site_settings')) {
                $siteSettings = SiteSetting::query()
                    ->find(1);
            }


            /*
            |--------------------------------------------------------------------------
            | HOMEPAGE GENERAL SETTINGS
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_settings')) {
                $homepageSettings = HomepageSetting::query()
                    ->find(1);
            }


            /*
            |--------------------------------------------------------------------------
            | HERO SLIDES
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_slides')) {
                $homepageSlides = HomepageSlide::query()
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->get();
            }


            /*
            |--------------------------------------------------------------------------
            | HOMEPAGE STATISTICS
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_stats')) {
                $homepageStats = HomepageStat::query()
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->get();
            }


            /*
            |--------------------------------------------------------------------------
            | WHY ASEW
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_reasons')) {
                $homepageReasons = HomepageReason::query()
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->get();
            }


            /*
            |--------------------------------------------------------------------------
            | MANUFACTURING GALLERY
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_manufacturing_images')) {
                $homepageManufacturingImages =
                    HomepageManufacturingImage::query()
                        ->where('is_active', true)
                        ->orderBy('sort_order')
                        ->orderBy('id')
                        ->get();
            }


           
            


            /*
            |--------------------------------------------------------------------------
            | LAB CARDS
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_lab_cards')) {
                $homepageLabCards =
                    HomepageLabCard::query()
                        ->where('is_active', true)
                        ->orderBy('sort_order')
                        ->orderBy('id')
                        ->get();
            }


            /*
            |--------------------------------------------------------------------------
            | NEW HOMEPAGE PRODUCT CATEGORIES
            |--------------------------------------------------------------------------
            */

            if (Schema::hasTable('homepage_product_categories')) {
                $homepageProductCategories =
                    HomepageProductCategory::query()
                        ->where('is_active', true)
                        ->orderBy('sort_order')
                        ->orderBy('id')
                        ->get();
            }

        } catch (\Throwable $exception) {
    report($exception);
}


        /*
        |--------------------------------------------------------------------------
        | SHARE WITH BLADE VIEWS
        |--------------------------------------------------------------------------
        */

        View::share(
            'siteSettings',
            $siteSettings
        );

        View::share(
            'homepageSettings',
            $homepageSettings
        );

        View::share(
            'homepageSlides',
            $homepageSlides
        );

        View::share(
            'homepageStats',
            $homepageStats
        );

        View::share(
            'homepageReasons',
            $homepageReasons
        );

        View::share(
            'homepageManufacturingImages',
            $homepageManufacturingImages
        );

        

        View::share(
            'homepageLabCards',
            $homepageLabCards
        );

        View::share(
            'homepageProductCategories',
            $homepageProductCategories
        );
    }
}