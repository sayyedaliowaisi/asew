<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display product listing.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        /*
        |--------------------------------------------------------------------------
        | Search
        |--------------------------------------------------------------------------
        */
        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%")
                    ->orWhere('category_slug', 'like', "%{$search}%");
            });
        }

        /*
        |--------------------------------------------------------------------------
        | Status Filter
        |--------------------------------------------------------------------------
        */
        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            }

            if ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Category Filter
        |--------------------------------------------------------------------------
        */
        if ($request->filled('category')) {
            $query->where(
                'category_slug',
                $request->category
            );
        }

        $products = $query
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(20)
            ->withQueryString();

        return view(
            'admin.products.index',
            compact('products')
        );
    }


    /**
     * Show create product form.
     */
    public function create()
    {
        return view('admin.products.create');
    }


    /**
     * Store new product.
     */
    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        /*
        |--------------------------------------------------------------------------
        | Generate Unique Slug
        |--------------------------------------------------------------------------
        */
        $validated['slug'] =
            $this->generateUniqueSlug(
                $validated['name']
            );

        /*
        |--------------------------------------------------------------------------
        | Prepare Features
        |--------------------------------------------------------------------------
        */
        $validated['features'] =
            $this->prepareFeatures(
                $request->input('features')
            );

        /*
        |--------------------------------------------------------------------------
        | Publishing Status
        |--------------------------------------------------------------------------
        */
        $validated['is_active'] =
            $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Product Image
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('image')) {
            $path = $request
                ->file('image')
                ->store('products', 'public');

            $validated['image'] =
                'storage/' . $path;
        }

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Product created successfully.'
            );
    }


    /**
     * Show edit product form.
     */
    public function edit(Product $product)
    {
        return view(
            'admin.products.edit',
            compact('product')
        );
    }


    /**
     * Update product.
     */
    public function update(
        Request $request,
        Product $product
    ) {
        /*
         * Pass current product so its own product code
         * is ignored during unique validation.
         */
        $validated =
            $this->validateProduct(
                $request,
                $product
            );

        /*
        |--------------------------------------------------------------------------
        | Update Slug Only When Name Changes
        |--------------------------------------------------------------------------
        */
        if ($product->name !== $validated['name']) {
            $validated['slug'] =
                $this->generateUniqueSlug(
                    $validated['name'],
                    $product->id
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Prepare Features
        |--------------------------------------------------------------------------
        */
        $validated['features'] =
            $this->prepareFeatures(
                $request->input('features')
            );

        /*
        |--------------------------------------------------------------------------
        | Publishing Status
        |--------------------------------------------------------------------------
        */
        $validated['is_active'] =
            $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Replace Image
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('image')) {
            $this->deleteProductImage(
                $product->image
            );

            $path = $request
                ->file('image')
                ->store('products', 'public');

            $validated['image'] =
                'storage/' . $path;
        }

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Product updated successfully.'
            );
    }


    /**
     * Enable / Disable product.
     */
    public function toggle(Product $product)
    {
        $product->update([
            'is_active' => !$product->is_active,
        ]);

        return back()->with(
            'success',
            $product->is_active
                ? 'Product activated successfully.'
                : 'Product disabled successfully.'
        );
    }


    /**
     * Delete product.
     */
    public function destroy(Product $product)
    {
        $this->deleteProductImage(
            $product->image
        );

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with(
                'success',
                'Product deleted successfully.'
            );
    }


    /**
     * Product validation.
     */
    private function validateProduct(
        Request $request,
        ?Product $product = null
    ): array {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'max:180',
            ],

            /*
             * Product code must be unique.
             *
             * During update, ignore the current product
             * so its existing code can be saved again.
             */
            'code' => [
                'nullable',
                'string',
                'max:100',

                Rule::unique('products', 'code')
                    ->ignore($product?->id),
            ],

            'category' => [
                'required',
                'string',
                'max:120',
            ],

            'category_slug' => [
                'required',
                'string',
                'max:120',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            'short_description' => [
                'nullable',
                'string',
                'max:500',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'features' => [
                'nullable',
                'string',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
                'max:100000',
            ],
        ]);
    }


    /**
     * Convert textarea features into array.
     */
    private function prepareFeatures(
        ?string $features
    ): array {
        if (!$features) {
            return [];
        }

        return collect(
            preg_split(
                '/\r\n|\r|\n/',
                $features
            )
        )
            ->map(
                fn ($feature) =>
                    trim($feature)
            )
            ->filter()
            ->values()
            ->all();
    }


    /**
     * Generate unique product slug.
     */
    private function generateUniqueSlug(
        string $name,
        ?int $ignoreId = null
    ): string {
        $baseSlug = Str::slug($name);

        /*
         * Fallback for unusual product names that
         * generate an empty slug.
         */
        if ($baseSlug === '') {
            $baseSlug = 'product';
        }

        $slug = $baseSlug;
        $counter = 2;

        while (
            Product::where('slug', $slug)
                ->when(
                    $ignoreId,
                    fn ($query) =>
                        $query->where(
                            'id',
                            '!=',
                            $ignoreId
                        )
                )
                ->exists()
        ) {
            $slug =
                $baseSlug . '-' . $counter;

            $counter++;
        }

        return $slug;
    }


    /**
     * Delete uploaded product image.
     *
     * Static images inside public/images are preserved.
     */
    private function deleteProductImage(
        ?string $image
    ): void {
        if (
            !$image ||
            !str_starts_with(
                $image,
                'storage/'
            )
        ) {
            return;
        }

        $path = Str::after(
            $image,
            'storage/'
        );

        Storage::disk('public')
            ->delete($path);
    }
}