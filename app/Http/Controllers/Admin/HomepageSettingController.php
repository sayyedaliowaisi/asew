<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageLabCard;
use App\Models\HomepageManufacturingImage;
use App\Models\HomepageProductCategory;
use App\Models\HomepageReason;
use App\Models\HomepageSetting;
use App\Models\HomepageSlide;
use App\Models\HomepageStat;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageSettingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | EDIT HOMEPAGE
    |--------------------------------------------------------------------------
    */

    public function edit()
    {
        $homepage = HomepageSetting::current();

        /*
        |--------------------------------------------------------------------------
        | HERO SLIDES
        |--------------------------------------------------------------------------
        */

        $slides = HomepageSlide::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | HOMEPAGE PRODUCT CATEGORIES
        |--------------------------------------------------------------------------
        */

        $productCategories = HomepageProductCategory::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | AVAILABLE PRODUCT CATEGORIES
        |--------------------------------------------------------------------------
        |
        | Categories are generated from Product Management.
        |
        */

        $availableProductCategories = Product::query()
            ->whereNotNull('category_slug')
            ->where('category_slug', '!=', '')
            ->select(
                'category_slug',
                'category'
            )
            ->orderBy('category')
            ->get()
            ->unique('category_slug')
            ->values();


        /*
        |--------------------------------------------------------------------------
        | COMPLETE LAB SOLUTIONS
        |--------------------------------------------------------------------------
        */

        $labCards = HomepageLabCard::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | MANUFACTURING GALLERY
        |--------------------------------------------------------------------------
        */

        $manufacturingImages = HomepageManufacturingImage::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | STATISTICS
        |--------------------------------------------------------------------------
        */

        $stats = HomepageStat::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | WHY ASEW
        |--------------------------------------------------------------------------
        */

        $reasons = HomepageReason::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RETURN HOMEPAGE MANAGER
        |--------------------------------------------------------------------------
        */

        return view(
            'admin.homepage.edit',
            compact(
                'homepage',
                'slides',
                'productCategories',
                'availableProductCategories',
                'labCards',
                'manufacturingImages',
                'stats',
                'reasons'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE HOMEPAGE SECTION
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {
        $request->validate([
            'section' => [
                'required',
                'string',
                'in:hero,products,lab,manufacturing,stats,why,cta',
            ],
        ]);

        $homepage = HomepageSetting::current();

        return match ($request->input('section')) {

            'hero' => $this->updateHero(
                $request,
                $homepage
            ),

            'products' => $this->updateProducts(
                $request,
                $homepage
            ),

            'lab' => $this->updateLab(
                $request,
                $homepage
            ),

            'manufacturing' => $this->updateManufacturing(
                $request,
                $homepage
            ),

            'stats' => $this->updateStats(
                $request,
                $homepage
            ),

            'why' => $this->updateWhy(
                $request,
                $homepage
            ),

            'cta' => $this->updateCta(
                $request,
                $homepage
            ),
        };
    }


    /*
    |--------------------------------------------------------------------------
    | HERO GENERAL SETTINGS
    |--------------------------------------------------------------------------
    */

    private function updateHero(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([
            'slider_interval' => [
                'required',
                'integer',
                'min:2000',
                'max:20000',
            ],
        ]);

        $homepage->update([
            'hero_enabled' =>
                $request->boolean('hero_enabled'),

            'slider_interval' =>
                $validated['slider_interval'],
        ]);

        return $this->success(
            'Hero slider settings updated successfully.',
            'hero'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | PRODUCTS GENERAL SETTINGS
    |--------------------------------------------------------------------------
    |
    | Individual homepage product categories are managed through
    | HomepageProductCategoryController.
    |
    */

    private function updateProducts(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'products_badge' => [
                'nullable',
                'string',
                'max:120',
            ],

            'products_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

            'products_description' => [
                'nullable',
                'string',
                'max:1500',
            ],

        ]);

        $homepage->update([

            'products_enabled' =>
                $request->boolean('products_enabled'),

            'products_badge' =>
                $validated['products_badge'] ?? null,

            'products_heading' =>
                $validated['products_heading'] ?? null,

            'products_description' =>
                $validated['products_description'] ?? null,

        ]);

        return $this->success(
            'Products section updated successfully.',
            'products'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | COMPLETE LAB SOLUTIONS
    |--------------------------------------------------------------------------
    */

    private function updateLab(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'lab_badge' => [
                'nullable',
                'string',
                'max:120',
            ],

            'lab_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

            'lab_description' => [
                'nullable',
                'string',
                'max:2000',
            ],

            'lab_button_text' => [
                'nullable',
                'string',
                'max:100',
            ],

            'lab_button_url' => [
                'nullable',
                'string',
                'max:500',
            ],

        ]);

        $homepage->update([

            'lab_enabled' =>
                $request->boolean('lab_enabled'),

            'lab_badge' =>
                $validated['lab_badge'] ?? null,

            'lab_heading' =>
                $validated['lab_heading'] ?? null,

            'lab_description' =>
                $validated['lab_description'] ?? null,

            'lab_button_text' =>
                $validated['lab_button_text'] ?? null,

            'lab_button_url' =>
                $validated['lab_button_url'] ?? null,

        ]);

        return $this->success(
            'Complete Lab Solutions section updated successfully.',
            'lab'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MANUFACTURING GENERAL SETTINGS
    |--------------------------------------------------------------------------
    */

    private function updateManufacturing(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'manufacturing_badge' => [
                'nullable',
                'string',
                'max:120',
            ],

            'manufacturing_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

            'manufacturing_description' => [
                'nullable',
                'string',
                'max:2000',
            ],

            'manufacturing_feature_1' => [
                'nullable',
                'string',
                'max:255',
            ],

            'manufacturing_feature_2' => [
                'nullable',
                'string',
                'max:255',
            ],

            'manufacturing_feature_3' => [
                'nullable',
                'string',
                'max:255',
            ],

            'manufacturing_feature_4' => [
                'nullable',
                'string',
                'max:255',
            ],

            'manufacturing_button_text' => [
                'nullable',
                'string',
                'max:100',
            ],

            'manufacturing_button_url' => [
                'nullable',
                'string',
                'max:500',
            ],

        ]);

        $homepage->update([

            'manufacturing_enabled' =>
                $request->boolean(
                    'manufacturing_enabled'
                ),

            'manufacturing_badge' =>
                $validated['manufacturing_badge'] ?? null,

            'manufacturing_heading' =>
                $validated['manufacturing_heading'] ?? null,

            'manufacturing_description' =>
                $validated['manufacturing_description'] ?? null,

            'manufacturing_feature_1' =>
                $validated['manufacturing_feature_1'] ?? null,

            'manufacturing_feature_2' =>
                $validated['manufacturing_feature_2'] ?? null,

            'manufacturing_feature_3' =>
                $validated['manufacturing_feature_3'] ?? null,

            'manufacturing_feature_4' =>
                $validated['manufacturing_feature_4'] ?? null,

            'manufacturing_button_text' =>
                $validated['manufacturing_button_text'] ?? null,

            'manufacturing_button_url' =>
                $validated['manufacturing_button_url'] ?? null,

        ]);

        return $this->success(
            'Manufacturing section updated successfully.',
            'manufacturing'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STATISTICS GENERAL SETTINGS
    |--------------------------------------------------------------------------
    */

    private function updateStats(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'stats_badge' => [
                'nullable',
                'string',
                'max:120',
            ],

            'stats_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

        ]);

        $homepage->update([

            'stats_enabled' =>
                $request->boolean('stats_enabled'),

            'stats_badge' =>
                $validated['stats_badge'] ?? null,

            'stats_heading' =>
                $validated['stats_heading'] ?? null,

        ]);

        return $this->success(
            'Statistics section updated successfully.',
            'stats'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | WHY ASEW GENERAL SETTINGS
    |--------------------------------------------------------------------------
    */

    private function updateWhy(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'why_badge' => [
                'nullable',
                'string',
                'max:120',
            ],

            'why_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

        ]);

        $homepage->update([

            'why_enabled' =>
                $request->boolean('why_enabled'),

            'why_badge' =>
                $validated['why_badge'] ?? null,

            'why_heading' =>
                $validated['why_heading'] ?? null,

        ]);

        return $this->success(
            'Why ASEW section updated successfully.',
            'why'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | FINAL CTA
    |--------------------------------------------------------------------------
    */

    private function updateCta(
        Request $request,
        HomepageSetting $homepage
    ) {
        $validated = $request->validate([

            'cta_heading' => [
                'nullable',
                'string',
                'max:255',
            ],

            'cta_description' => [
                'nullable',
                'string',
                'max:1500',
            ],

            'cta_button_text' => [
                'nullable',
                'string',
                'max:100',
            ],

            'cta_button_url' => [
                'nullable',
                'string',
                'max:500',
            ],

        ]);

        $homepage->update([

            'cta_enabled' =>
                $request->boolean('cta_enabled'),

            'cta_heading' =>
                $validated['cta_heading'] ?? null,

            'cta_description' =>
                $validated['cta_description'] ?? null,

            'cta_button_text' =>
                $validated['cta_button_text'] ?? null,

            'cta_button_url' =>
                $validated['cta_button_url'] ?? null,

        ]);

        return $this->success(
            'Final CTA updated successfully.',
            'cta'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SUCCESS REDIRECT
    |--------------------------------------------------------------------------
    */

    private function success(
        string $message,
        string $section
    ) {
        return redirect()
            ->route('admin.homepage.edit')
            ->with(
                'success',
                $message
            )
            ->with(
                'active_section',
                $section
            );
    }
}