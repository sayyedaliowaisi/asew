<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $admin = Admin::create([
            'name' => 'ASEW Admin',
            'email' => 'admin@asew.test',
            'password' => 'password123',
        ]);

        $this->actingAs($admin, 'admin');
    }


    public function test_admin_can_create_product(): void
    {
        $response = $this->post(
            route('admin.products.store'),
            [
                'name' => 'Compression Testing Machine',
                'code' => 'ASEW-CTM-001',
                'category' => 'Concrete Testing',
                'category_slug' => 'concrete-testing',
                'short_description' => 'Testing machine for concrete.',
                'description' => 'Premium compression testing equipment.',
                'features' => "Digital Display\nHigh Accuracy\nHeavy Duty",
                'sort_order' => 10,
                'is_active' => '1',
            ]
        );

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('admin.products.index'));

        $this->assertDatabaseHas('products', [
            'name' => 'Compression Testing Machine',
            'code' => 'ASEW-CTM-001',
            'slug' => 'compression-testing-machine',
            'category' => 'Concrete Testing',
            'category_slug' => 'concrete-testing',
            'sort_order' => 10,
            'is_active' => 1,
        ]);

        $product = Product::where(
            'code',
            'ASEW-CTM-001'
        )->firstOrFail();

        $this->assertSame(
            [
                'Digital Display',
                'High Accuracy',
                'Heavy Duty',
            ],
            $product->features
        );
    }


    public function test_product_code_must_be_unique(): void
    {
        $this->createProduct([
            'code' => 'ASEW-CTM-001',
        ]);

        $response = $this
            ->from(route('admin.products.create'))
            ->post(
                route('admin.products.store'),
                [
                    'name' => 'Another Machine',
                    'code' => 'ASEW-CTM-001',
                    'category' => 'Soil Testing',
                    'category_slug' => 'soil-testing',
                ]
            );

        $response
            ->assertRedirect(route('admin.products.create'))
            ->assertSessionHasErrors('code');

        $this->assertSame(
            1,
            Product::where(
                'code',
                'ASEW-CTM-001'
            )->count()
        );
    }


    public function test_products_with_same_name_receive_unique_slugs(): void
    {
        $this->post(
            route('admin.products.store'),
            [
                'name' => 'Testing Machine',
                'code' => 'ASEW-TM-001',
                'category' => 'Testing',
                'category_slug' => 'testing',
            ]
        )->assertSessionHasNoErrors();

        $this->post(
            route('admin.products.store'),
            [
                'name' => 'Testing Machine',
                'code' => 'ASEW-TM-002',
                'category' => 'Testing',
                'category_slug' => 'testing',
            ]
        )->assertSessionHasNoErrors();

        $this->assertDatabaseHas('products', [
            'code' => 'ASEW-TM-001',
            'slug' => 'testing-machine',
        ]);

        $this->assertDatabaseHas('products', [
            'code' => 'ASEW-TM-002',
            'slug' => 'testing-machine-2',
        ]);
    }


    public function test_admin_can_update_product_without_changing_its_code(): void
    {
        $product = $this->createProduct([
            'name' => 'Old Product Name',
            'slug' => 'old-product-name',
            'code' => 'ASEW-001',
        ]);

        $response = $this->put(
            route(
                'admin.products.update',
                $product
            ),
            [
                'name' => 'Updated Product Name',
                'code' => 'ASEW-001',
                'category' => 'Updated Category',
                'category_slug' => 'updated-category',
                'short_description' => 'Updated description.',
                'features' => "Feature One\nFeature Two",
                'sort_order' => 20,
                'is_active' => '1',
            ]
        );

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('admin.products.index'));

        $product->refresh();

        $this->assertSame(
            'Updated Product Name',
            $product->name
        );

        $this->assertSame(
            'ASEW-001',
            $product->code
        );

        $this->assertSame(
            'updated-product-name',
            $product->slug
        );

        $this->assertSame(
            [
                'Feature One',
                'Feature Two',
            ],
            $product->features
        );
    }


    public function test_product_cannot_be_updated_to_another_products_code(): void
    {
        $firstProduct = $this->createProduct([
            'name' => 'Product One',
            'slug' => 'product-one',
            'code' => 'ASEW-001',
        ]);

        $secondProduct = $this->createProduct([
            'name' => 'Product Two',
            'slug' => 'product-two',
            'code' => 'ASEW-002',
        ]);

        $response = $this
            ->from(
                route(
                    'admin.products.edit',
                    $secondProduct
                )
            )
            ->put(
                route(
                    'admin.products.update',
                    $secondProduct
                ),
                [
                    'name' => 'Product Two',
                    'code' => $firstProduct->code,
                    'category' => 'Testing Equipment',
                    'category_slug' => 'testing-equipment',
                ]
            );

        $response->assertSessionHasErrors('code');

        $secondProduct->refresh();

        $this->assertSame(
            'ASEW-002',
            $secondProduct->code
        );
    }


    public function test_slug_does_not_change_when_product_name_does_not_change(): void
    {
        $product = $this->createProduct([
            'name' => 'Compression Machine',
            'slug' => 'custom-existing-slug',
            'code' => 'ASEW-CM-001',
        ]);

        $this->put(
            route(
                'admin.products.update',
                $product
            ),
            [
                'name' => 'Compression Machine',
                'code' => 'ASEW-CM-001',
                'category' => 'Concrete Testing',
                'category_slug' => 'concrete-testing',
            ]
        )->assertSessionHasNoErrors();

        $product->refresh();

        $this->assertSame(
            'custom-existing-slug',
            $product->slug
        );
    }


    public function test_admin_can_disable_active_product(): void
    {
        $product = $this->createProduct([
            'is_active' => true,
        ]);

        $response = $this->patch(
            route(
                'admin.products.toggle',
                $product
            )
        );

        $response->assertSessionHas(
            'success'
        );

        $product->refresh();

        $this->assertFalse(
            $product->is_active
        );
    }


    public function test_admin_can_activate_inactive_product(): void
    {
        $product = $this->createProduct([
            'is_active' => false,
        ]);

        $this->patch(
            route(
                'admin.products.toggle',
                $product
            )
        )->assertSessionHas('success');

        $product->refresh();

        $this->assertTrue(
            $product->is_active
        );
    }


    public function test_admin_can_delete_product(): void
    {
        $product = $this->createProduct();

        $response = $this->delete(
            route(
                'admin.products.destroy',
                $product
            )
        );

        $response
            ->assertRedirect(route('admin.products.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseMissing(
            'products',
            [
                'id' => $product->id,
            ]
        );
    }


    public function test_product_image_can_be_uploaded(): void
    {
        Storage::fake('public');

        $image = UploadedFile::fake()
            ->image(
                'compression-machine.jpg',
                800,
                600
            );

        $response = $this->post(
            route('admin.products.store'),
            [
                'name' => 'Image Product',
                'code' => 'ASEW-IMG-001',
                'category' => 'Testing Equipment',
                'category_slug' => 'testing-equipment',
                'image' => $image,
                'is_active' => '1',
            ]
        );

        $response->assertSessionHasNoErrors();

        $product = Product::where(
            'code',
            'ASEW-IMG-001'
        )->firstOrFail();

        $this->assertNotNull(
            $product->image
        );

        $this->assertStringStartsWith(
            'storage/products/',
            $product->image
        );

        $storagePath = str_replace(
            'storage/',
            '',
            $product->image
        );

        Storage::disk('public')
            ->assertExists($storagePath);
    }


    public function test_old_uploaded_image_is_deleted_when_product_image_is_replaced(): void
    {
        Storage::fake('public');

        Storage::disk('public')->put(
            'products/old-image.jpg',
            'old image'
        );

        $product = $this->createProduct([
            'image' => 'storage/products/old-image.jpg',
        ]);

        $newImage = UploadedFile::fake()
            ->image(
                'new-image.jpg',
                800,
                600
            );

        $response = $this->put(
            route(
                'admin.products.update',
                $product
            ),
            [
                'name' => $product->name,
                'code' => $product->code,
                'category' => $product->category,
                'category_slug' => $product->category_slug,
                'image' => $newImage,
                'is_active' => '1',
            ]
        );

        $response->assertSessionHasNoErrors();

        Storage::disk('public')
            ->assertMissing(
                'products/old-image.jpg'
            );

        $product->refresh();

        $newStoragePath = str_replace(
            'storage/',
            '',
            $product->image
        );

        Storage::disk('public')
            ->assertExists(
                $newStoragePath
            );
    }


    public function test_uploaded_product_image_is_deleted_when_product_is_deleted(): void
    {
        Storage::fake('public');

        Storage::disk('public')->put(
            'products/delete-me.jpg',
            'image'
        );

        $product = $this->createProduct([
            'image' => 'storage/products/delete-me.jpg',
        ]);

        $this->delete(
            route(
                'admin.products.destroy',
                $product
            )
        );

        Storage::disk('public')
            ->assertMissing(
                'products/delete-me.jpg'
            );

        $this->assertDatabaseMissing(
            'products',
            [
                'id' => $product->id,
            ]
        );
    }


    private function createProduct(
        array $overrides = []
    ): Product {
        static $counter = 1;

        $number = $counter++;

        return Product::create(
            array_merge(
                [
                    'name' =>
                        'Test Product ' . $number,

                    'slug' =>
                        'test-product-' . $number,

                    'code' =>
                        'ASEW-TEST-' . $number,

                    'category' =>
                        'Testing Equipment',

                    'category_slug' =>
                        'testing-equipment',

                    'image' =>
                        null,

                    'short_description' =>
                        'Test short description.',

                    'description' =>
                        'Test product description.',

                    'features' =>
                        [
                            'Feature One',
                            'Feature Two',
                        ],

                    'is_active' =>
                        true,

                    'sort_order' =>
                        $number,
                ],
                $overrides
            )
        );
    }
}