<?php

namespace App\Services\AI\Tools;

use App\Models\Product;

class GetProductTool
{
    /**
     * Find one exact active ASEW product.
     */
    public function get(string $identifier): ?array
    {
        $identifier = trim($identifier);

        if ($identifier === '') {
            return null;
        }

        $product = Product::query()
            ->where('is_active', true)
            ->where(function ($query) use ($identifier) {

                $query
                    ->whereRaw(
                        'LOWER(code) = ?',
                        [mb_strtolower($identifier)]
                    )
                    ->orWhereRaw(
                        'LOWER(slug) = ?',
                        [mb_strtolower($identifier)]
                    )
                    ->orWhereRaw(
                        'LOWER(name) = ?',
                        [mb_strtolower($identifier)]
                    );
            })
            ->first();

        if (! $product) {
            return null;
        }

        return [
            'id' => $product->id,

            'name' => $product->name,

            'code' => $product->code,

            'category' => $product->category,

            'slug' => $product->slug,

            'short_description' =>
                $product->short_description,

            'description' =>
                $product->description,

            'features' =>
                $product->features ?? [],

            'url' => route(
                'products.show',
                $product->slug
            ),
        ];
    }
}