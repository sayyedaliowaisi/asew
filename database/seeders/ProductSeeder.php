<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            [
                'name' => 'Direct Shear Apparatus',
                'slug' => 'direct-shear-apparatus',
                'code' => 'ASEW-ST-101',
                'category' => 'Soil Testing',
                'category_slug' => 'soil',
                'image' => 'images/products/soil-testing.png',
                'short_description' => 'Precision equipment for determining the shear strength characteristics of soil samples.',
                'description' => 'The Direct Shear Apparatus is designed for laboratory soil testing applications where controlled shear force is required for evaluating soil specimen behaviour.',
                'features' => [
                    'Robust laboratory construction',
                    'Easy sample handling',
                    'Smooth loading mechanism',
                    'Suitable for routine soil testing',
                    'Designed for laboratory applications',
                ],
                'sort_order' => 1,
            ],

            [
                'name' => 'Soil Compaction Apparatus',
                'slug' => 'soil-compaction-apparatus',
                'code' => 'ASEW-ST-102',
                'category' => 'Soil Testing',
                'category_slug' => 'soil',
                'image' => 'images/products/soil-testing.png',
                'short_description' => 'Laboratory apparatus for determining moisture-density relationship of compacted soil.',
                'description' => 'The Soil Compaction Apparatus is suitable for laboratory preparation and evaluation of compacted soil specimens.',
                'features' => [
                    'Heavy-duty construction',
                    'Laboratory testing design',
                    'Simple operating mechanism',
                    'Durable components',
                    'Suitable for soil laboratories',
                ],
                'sort_order' => 2,
            ],

            [
                'name' => 'Compression Testing Machine',
                'slug' => 'compression-testing-machine',
                'code' => 'ASEW-CT-201',
                'category' => 'Concrete Testing',
                'category_slug' => 'concrete',
                'image' => 'images/products/concrete-testing.png',
                'short_description' => 'Heavy-duty testing machine designed for concrete compressive strength determination.',
                'description' => 'The Compression Testing Machine is intended for laboratory testing of concrete specimens.',
                'features' => [
                    'Heavy-duty loading frame',
                    'Laboratory testing application',
                    'Stable machine construction',
                    'Easy specimen placement',
                    'Designed for concrete testing',
                ],
                'sort_order' => 3,
            ],

            [
                'name' => 'Vicat Apparatus',
                'slug' => 'vicat-apparatus',
                'code' => 'ASEW-CM-301',
                'category' => 'Cement Testing',
                'category_slug' => 'cement',
                'image' => 'images/products/cement-testing.png',
                'short_description' => 'Precision instrument for determining consistency and setting characteristics of cement.',
                'description' => 'The Vicat Apparatus is designed for cement laboratory applications.',
                'features' => [
                    'Precision laboratory design',
                    'Stable supporting frame',
                    'Simple specimen positioning',
                    'Easy testing operation',
                    'Suitable for cement laboratories',
                ],
                'sort_order' => 4,
            ],

            [
                'name' => 'Aggregate Impact Testing Machine',
                'slug' => 'aggregate-impact-testing-machine',
                'code' => 'ASEW-AG-401',
                'category' => 'Aggregate Testing',
                'category_slug' => 'aggregate',
                'image' => 'images/products/aggregate-testing.png',
                'short_description' => 'Robust equipment for evaluating impact resistance and toughness of aggregates.',
                'description' => 'The Aggregate Impact Testing Machine is designed for aggregate testing laboratories.',
                'features' => [
                    'Rigid testing frame',
                    'Durable construction',
                    'Laboratory application',
                    'Simple specimen handling',
                    'Designed for aggregate testing',
                ],
                'sort_order' => 5,
            ],

            [
                'name' => 'Bitumen Penetrometer',
                'slug' => 'bitumen-penetrometer',
                'code' => 'ASEW-BT-501',
                'category' => 'Bitumen / Asphalt',
                'category_slug' => 'bitumen',
                'image' => 'images/products/bitumen-testing.png',
                'short_description' => 'Precision penetration testing equipment for bitumen and related materials.',
                'description' => 'The Bitumen Penetrometer provides a controlled laboratory setup for bituminous materials.',
                'features' => [
                    'Precision testing arrangement',
                    'Compact laboratory design',
                    'Smooth adjustment mechanism',
                    'Easy sample positioning',
                    'Suitable for bitumen testing',
                ],
                'sort_order' => 6,
            ],

            [
                'name' => 'Rock Point Load Tester',
                'slug' => 'rock-point-load-tester',
                'code' => 'ASEW-RK-601',
                'category' => 'Rock Testing',
                'category_slug' => 'rock',
                'image' => 'images/products/rock-testing.png',
                'short_description' => 'Portable instrument for determining the point load strength index of rock specimens.',
                'description' => 'The Rock Point Load Tester is suitable for laboratory and engineering applications.',
                'features' => [
                    'Compact testing arrangement',
                    'Robust frame',
                    'Simple specimen positioning',
                    'Portable design',
                    'Suitable for rock testing',
                ],
                'sort_order' => 7,
            ],

            [
                'name' => 'Universal Testing Machine',
                'slug' => 'universal-testing-machine',
                'code' => 'ASEW-MT-701',
                'category' => 'Material Testing',
                'category_slug' => 'material',
                'image' => 'images/products/material-testing.png',
                'short_description' => 'Versatile system for tensile, compression and mechanical material testing applications.',
                'description' => 'The Universal Testing Machine provides a versatile platform for mechanical testing.',
                'features' => [
                    'Versatile testing platform',
                    'Strong loading frame',
                    'Suitable for multiple materials',
                    'Laboratory testing application',
                    'Robust construction',
                ],
                'sort_order' => 8,
            ],

            [
                'name' => 'Survey Instrument System',
                'slug' => 'survey-instrument-system',
                'code' => 'ASEW-SV-801',
                'category' => 'Survey Instruments',
                'category_slug' => 'survey',
                'image' => 'images/products/survey-instruments.png',
                'short_description' => 'Professional surveying equipment for engineering and construction measurements.',
                'description' => 'Survey Instrument Systems support engineering and construction surveying applications.',
                'features' => [
                    'Engineering application',
                    'Field measurement support',
                    'Portable equipment design',
                    'Reliable construction',
                    'Suitable for surveying work',
                ],
                'sort_order' => 9,
            ],

            [
                'name' => 'Laboratory Testing Equipment',
                'slug' => 'laboratory-testing-equipment',
                'code' => 'ASEW-LB-901',
                'category' => 'Laboratory Equipment',
                'category_slug' => 'laboratory',
                'image' => 'images/products/laboratory-equipment.png',
                'short_description' => 'Scientific laboratory equipment designed for research and testing applications.',
                'description' => 'ASEW laboratory equipment supports testing, research and quality control applications.',
                'features' => [
                    'Laboratory grade equipment',
                    'Research application',
                    'Quality control support',
                    'Durable construction',
                    'Wide range of applications',
                ],
                'sort_order' => 10,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}