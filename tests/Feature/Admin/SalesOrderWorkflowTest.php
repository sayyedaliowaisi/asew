<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use App\Models\QuotationItem;
use App\Models\SalesOrder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SalesOrderWorkflowTest extends TestCase
{
    use RefreshDatabase;


    protected function setUp(): void
    {
        parent::setUp();

        $admin = Admin::create([
            'name' =>
                'ASEW Admin',

            'email' =>
                'admin@asew.test',

            'password' =>
                'password123',
        ]);

        $this->actingAs(
            $admin,
            'admin'
        );
    }


    public function test_accepted_quotation_can_be_converted_to_sales_order(): void
    {
        $quotation =
            $this->createQuotation(
                'accepted'
            );

        $response = $this->post(
            route(
                'admin.sales-orders.convert',
                $quotation
            )
        );

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas(
            'sales_orders',
            [
                'quotation_id' =>
                    $quotation->id,

                'customer_name' =>
                    'Test Customer',

                'grand_total' =>
                    11800,
            ]
        );

        $order = SalesOrder::query()
            ->where(
                'quotation_id',
                $quotation->id
            )
            ->first();

        $this->assertNotNull($order);

        $this->assertStringStartsWith(
            'ASEW-SO-' .
            now()->format('Y') .
            '-',
            $order->order_number
        );

        $this->assertDatabaseHas(
            'sales_order_items',
            [
                'sales_order_id' =>
                    $order->id,

                'product_name' =>
                    'Compression Testing Machine',

                'quantity' =>
                    2,

                'unit_price' =>
                    5000,

                'total' =>
                    10000,
            ]
        );
    }


    public function test_rejected_quotation_cannot_be_converted_to_sales_order(): void
    {
        $quotation =
            $this->createQuotation(
                'rejected'
            );

        $this->post(
            route(
                'admin.sales-orders.convert',
                $quotation
            )
        );

        $this->assertDatabaseMissing(
            'sales_orders',
            [
                'quotation_id' =>
                    $quotation->id,
            ]
        );
    }


    public function test_sent_quotation_cannot_be_converted_to_sales_order(): void
    {
        $quotation =
            $this->createQuotation(
                'sent'
            );

        $this->post(
            route(
                'admin.sales-orders.convert',
                $quotation
            )
        );

        $this->assertDatabaseMissing(
            'sales_orders',
            [
                'quotation_id' =>
                    $quotation->id,
            ]
        );
    }


    public function test_same_quotation_cannot_create_duplicate_sales_orders(): void
    {
        $quotation =
            $this->createQuotation(
                'accepted'
            );

        $route = route(
            'admin.sales-orders.convert',
            $quotation
        );

        $this->post($route);
        $this->post($route);

        $count = SalesOrder::query()
            ->where(
                'quotation_id',
                $quotation->id
            )
            ->count();

        $this->assertSame(
            1,
            $count
        );
    }


    private function createQuotation(
        string $status
    ): Quotation {
        $enquiry = ProductEnquiry::create([
            'product_name' =>
                'Compression Testing Machine',

            'product_code' =>
                'ASEW-CTM-001',

            'name' =>
                'Test Customer',

            'company' =>
                'Testing Labs Pvt Ltd',

            'email' =>
                'customer@example.com',

            'phone' =>
                '9999999999',

            'city' =>
                'Delhi',

            'quantity' =>
                2,

            'status' =>
                'quoted',
        ]);

        $quotation = Quotation::create([
            'product_enquiry_id' =>
                $enquiry->id,

            'quotation_number' =>
                'ASEW-Q-2026-' .
                str_pad(
                    (string) $enquiry->id,
                    5,
                    '0',
                    STR_PAD_LEFT
                ),

            'public_token' =>
                str_repeat('7', 64),

            'customer_name' =>
                'Test Customer',

            'company' =>
                'Testing Labs Pvt Ltd',

            'email' =>
                'customer@example.com',

            'phone' =>
                '9999999999',

            'city' =>
                'Delhi',

            'subtotal' =>
                10000,

            'discount' =>
                0,

            'gst_percent' =>
                18,

            'gst_amount' =>
                1800,

            'grand_total' =>
                11800,

            'validity_days' =>
                15,

            'status' =>
                $status,

            'quotation_date' =>
                now()->toDateString(),

            'valid_until' =>
                now()
                    ->addDays(15)
                    ->toDateString(),

            'responded_at' =>
                in_array(
                    $status,
                    ['accepted', 'rejected'],
                    true
                )
                    ? now()
                    : null,
        ]);

        QuotationItem::create([
            'quotation_id' =>
                $quotation->id,

            'product_id' =>
                null,

            'product_name' =>
                'Compression Testing Machine',

            'product_code' =>
                'ASEW-CTM-001',

            'quantity' =>
                2,

            'unit_price' =>
                5000,

            'total' =>
                10000,
        ]);

        return $quotation;
    }
}