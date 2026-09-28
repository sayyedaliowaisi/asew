<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class HomepageProductCategoryController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([

            'category_slug' => [
                'required',
                'string',
                'max:120',

                Rule::exists('products', 'category_slug'),

                Rule::unique(
                    'homepage_product_categories',
                    'category_slug'
                ),
            ],

            'title' => [
                'required',
                'string',
                'max:180',
            ],

            'button_text' => [
                'nullable',
                'string',
                'max:80',
            ],

            'image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload Image
        |--------------------------------------------------------------------------
        */

        $imagePath = $request
            ->file('image')
            ->store(
                'homepage/product-categories',
                'public'
            );

        /*
        |--------------------------------------------------------------------------
        | Next Order
        |--------------------------------------------------------------------------
        */

        $nextOrder =
            (HomepageProductCategory::max('sort_order') ?? -1) + 1;

        HomepageProductCategory::create([

            'category_slug' =>
                $validated['category_slug'],

            'title' =>
                $validated['title'],

            'image' =>
                'storage/' . $imagePath,

            'button_text' =>
                $validated['button_text']
                ?: 'View Products',

            'sort_order' =>
                $nextOrder,

            'is_active' =>
                true,

        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category added successfully.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Update
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        HomepageProductCategory $productCategory
    ) {

        $validated = $request->validate([

            'category_slug' => [
                'required',
                'string',
                'max:120',

                Rule::exists('products', 'category_slug'),

                Rule::unique(
                    'homepage_product_categories',
                    'category_slug'
                )->ignore($productCategory->id),
            ],

            'title' => [
                'required',
                'string',
                'max:180',
            ],

            'button_text' => [
                'nullable',
                'string',
                'max:80',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:6144',
            ],

        ]);

        $image = $productCategory->image;

        /*
        |--------------------------------------------------------------------------
        | Replace Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $this->deleteUploadedImage(
                $productCategory->image
            );

            $imagePath = $request
                ->file('image')
                ->store(
                    'homepage/product-categories',
                    'public'
                );

            $image =
                'storage/' . $imagePath;
        }

        $productCategory->update([

            'category_slug' =>
                $validated['category_slug'],

            'title' =>
                $validated['title'],

            'image' =>
                $image,

            'button_text' =>
                $validated['button_text']
                ?: 'View Products',

        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category updated successfully.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Toggle Visibility
    |--------------------------------------------------------------------------
    */

    public function toggle(
        HomepageProductCategory $productCategory
    ) {

        $productCategory->update([
            'is_active' =>
                ! $productCategory->is_active,
        ]);

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category visibility updated.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Move Up
    |--------------------------------------------------------------------------
    */

    public function moveUp(
        HomepageProductCategory $productCategory
    ) {

        DB::transaction(function () use ($productCategory) {

            $this->normalizeOrder();

            $productCategory->refresh();

            $previous =
                HomepageProductCategory::query()
                    ->where(
                        'sort_order',
                        '<',
                        $productCategory->sort_order
                    )
                    ->orderByDesc('sort_order')
                    ->orderByDesc('id')
                    ->first();

            if (! $previous) {
                return;
            }

            $currentOrder =
                $productCategory->sort_order;

            $productCategory->update([
                'sort_order' =>
                    $previous->sort_order,
            ]);

            $previous->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category moved up.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Move Down
    |--------------------------------------------------------------------------
    */

    public function moveDown(
        HomepageProductCategory $productCategory
    ) {

        DB::transaction(function () use ($productCategory) {

            $this->normalizeOrder();

            $productCategory->refresh();

            $next =
                HomepageProductCategory::query()
                    ->where(
                        'sort_order',
                        '>',
                        $productCategory->sort_order
                    )
                    ->orderBy('sort_order')
                    ->orderBy('id')
                    ->first();

            if (! $next) {
                return;
            }

            $currentOrder =
                $productCategory->sort_order;

            $productCategory->update([
                'sort_order' =>
                    $next->sort_order,
            ]);

            $next->update([
                'sort_order' =>
                    $currentOrder,
            ]);
        });

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category moved down.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Delete
    |--------------------------------------------------------------------------
    */

    public function destroy(
        HomepageProductCategory $productCategory
    ) {

        $this->deleteUploadedImage(
            $productCategory->image
        );

        $productCategory->delete();

        $this->normalizeOrder();

        return redirect()
            ->route('admin.homepage.edit')
            ->with('success', 'Product category removed.')
            ->with('active_section', 'products');
    }


    /*
    |--------------------------------------------------------------------------
    | Normalize Sort Order
    |--------------------------------------------------------------------------
    */

    private function normalizeOrder(): void
    {
        HomepageProductCategory::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->values()
            ->each(function ($category, $index) {

                if (
                    (int) $category->sort_order
                    !== $index
                ) {

                    $category->update([
                        'sort_order' => $index,
                    ]);
                }
            });
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Uploaded Image
    |--------------------------------------------------------------------------
    */

    private function deleteUploadedImage(
        ?string $image
    ): void {

        if (
            ! $image ||
            ! str_starts_with(
                $image,
                'storage/'
            )
        ) {
            return;
        }

        $path =
            substr(
                $image,
                strlen('storage/')
            );

        if (
            Storage::disk('public')
                ->exists($path)
        ) {

            Storage::disk('public')
                ->delete($path);
        }
    }
}