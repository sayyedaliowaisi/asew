<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()
            ->where('is_active', true);


        if ($request->filled('category')) {

            $query->where(
                'category_slug',
                $request->category
            );
        }


        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");

            });
        }


        $products = $query
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();


       return view('pages.products', compact('products'));
    }


    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();


        $relatedProducts = Product::where(
                'category_slug',
                $product->category_slug
            )
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();


        return view('pages.product-details', compact('product', 'relatedProducts'));
    }
}