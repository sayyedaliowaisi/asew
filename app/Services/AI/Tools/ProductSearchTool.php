<?php

namespace App\Services\AI\Tools;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductSearchTool
{
    /**
     * Search ASEW active products using a customer's requirement.
     */
    public function search(
        string $query,
        int $limit = 6
    ): Collection {

        $query = trim($query);

        if ($query === '') {
            return collect();
        }

        $limit = max(1, min($limit, 10));

        $terms = $this->extractTerms($query);

        if ($terms->isEmpty()) {
            return collect();
        }

        return Product::query()

            ->where('is_active', true)

            ->where(function ($builder) use ($terms) {

                foreach ($terms as $term) {

                    $builder->orWhere(function ($productQuery) use ($term) {

                        $like = '%' . $term . '%';

                        $productQuery
                            ->where('name', 'like', $like)
                            ->orWhere('code', 'like', $like)
                            ->orWhere('category', 'like', $like)
                            ->orWhere('category_slug', 'like', $like)
                            ->orWhere('short_description', 'like', $like)
                            ->orWhere('description', 'like', $like);

                    });

                }

            })

            ->orderBy('sort_order')
            ->orderBy('name')

            ->limit($limit)

            ->get()

            ->map(function (Product $product) {

                return [
                    'id' => $product->id,

                    'name' => $product->name,

                    'code' => $product->code,

                    'category' => $product->category,

                    'slug' => $product->slug,

                    'short_description' =>
                        $product->short_description,

                    'features' =>
                        $product->features ?? [],

                    'url' => route(
                        'products.show',
                        $product->slug
                    ),
                ];

            });
    }


    /**
     * Convert a natural-language requirement into useful search terms.
     */
    private function extractTerms(string $query): Collection
    {
        $stopWords = [
            'the',
            'and',
            'for',
            'with',
            'that',
            'this',
            'from',
            'your',
            'you',
            'our',
            'are',
            'can',
            'could',
            'would',
            'please',
            'need',
            'want',
            'show',
            'help',
            'find',
            'give',
            'equipment',
            'machine',
            'machines',
            'product',
            'products',
            'testing',
            'test',
        ];

        return collect(
            preg_split(
                '/\s+/u',
                mb_strtolower($query)
            )
        )
            ->map(function ($term) {

                return trim(
                    $term,
                    " \t\n\r\0\x0B.,!?;:()[]{}\"'"
                );

            })
            ->filter(function ($term) use ($stopWords) {

                return mb_strlen($term) >= 2
                    && !in_array(
                        $term,
                        $stopWords,
                        true
                    );

            })
            ->unique()
            ->values();
    }
}