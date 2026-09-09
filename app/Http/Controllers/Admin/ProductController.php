<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%")
                    ->orWhere('category_slug', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            }

            if ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        if ($request->filled('category')) {
            $query->where('category_slug', $request->category);
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


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        $validated['slug'] = $this->generateUniqueSlug(
            $validated['name']
        );

        $validated['features'] =
            $this->prepareFeatures(
                $request->input('features')
            );

        $validated['is_active'] =
            $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $path = $request->file('image')
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


    public function edit(Product $product)
    {
        return view(
            'admin.products.edit',
            compact('product')
        );
    }


    public function update(
        Request $request,
        Product $product
    ) {
        $validated = $this->validateProduct(
            $request
        );

        if ($product->name !== $validated['name']) {
            $validated['slug'] =
                $this->generateUniqueSlug(
                    $validated['name'],
                    $product->id
                );
        }

        $validated['features'] =
            $this->prepareFeatures(
                $request->input('features')
            );

        $validated['is_active'] =
            $request->boolean('is_active');


        if ($request->hasFile('image')) {

            $this->deleteProductImage(
                $product->image
            );

            $path = $request->file('image')
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


    private function validateProduct(
        Request $request
    ): array {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'max:180',
            ],

            'code' => [
                'nullable',
                'string',
                'max:100',
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
            ->map(fn ($feature) =>
                trim($feature)
            )
            ->filter()
            ->values()
            ->all();
    }


    private function generateUniqueSlug(
        string $name,
        ?int $ignoreId = null
    ): string {
        $baseSlug = Str::slug($name);

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