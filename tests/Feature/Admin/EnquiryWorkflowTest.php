<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnquiryWorkflowTest extends TestCase
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

        $this->actingAs(
            $admin,
            'admin'
        );
    }


    public function test_new_enquiry_can_be_moved_to_contacted(): void
    {
        $enquiry = $this->createEnquiry();

        $response = $this->patch(
            route(
                'admin.enquiries.status',
                $enquiry
            ),
            [
                'status' => 'contacted',
            ]
        );

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas(
            'product_enquiries',
            [
                'id' => $enquiry->id,
                'status' => 'contacted',
            ]
        );
    }


    public function test_contacted_enquiry_can_be_moved_to_quoted(): void
    {
        $enquiry = $this->createEnquiry(
            'contacted'
        );

        $response = $this->patch(
            route(
                'admin.enquiries.status',
                $enquiry
            ),
            [
                'status' => 'quoted',
            ]
        );

        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas(
            'product_enquiries',
            [
                'id' => $enquiry->id,
                'status' => 'quoted',
            ]
        );
    }


    public function test_quoted_enquiry_cannot_be_moved_back_to_new(): void
    {
        $enquiry = $this->createEnquiry(
            'quoted'
        );

        $this->patch(
            route(
                'admin.enquiries.status',
                $enquiry
            ),
            [
                'status' => 'new',
            ]
        );

        $this->assertDatabaseHas(
            'product_enquiries',
            [
                'id' => $enquiry->id,
                'status' => 'quoted',
            ]
        );
    }


    public function test_enquiry_linked_to_quotation_cannot_be_deleted(): void
    {
        $enquiry = $this->createEnquiry(
            'quoted'
        );

        $this->createQuotation(
            $enquiry
        );

        $this->delete(
            route(
                'admin.enquiries.destroy',
                $enquiry
            )
        );

        $this->assertDatabaseHas(
            'product_enquiries',
            [
                'id' => $enquiry->id,
            ]
        );
    }


    public function test_enquiry_without_quotation_can_be_deleted(): void
    {
        $enquiry = $this->createEnquiry();

        $this->delete(
            route(
                'admin.enquiries.destroy',
                $enquiry
            )
        );

        $this->assertDatabaseMissing(
            'product_enquiries',
            [
                'id' => $enquiry->id,
            ]
        );
    }


    private function createEnquiry(
        string $status = 'new'
    ): ProductEnquiry {
        return ProductEnquiry::create([
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
                1,

            'message' =>
                'Please send quotation.',

            'status' =>
                $status,
        ]);
    }


    private function createQuotation(
        ProductEnquiry $enquiry
    ): Quotation {
        return Quotation::create([
            'product_enquiry_id' =>
                $enquiry->id,

            'quotation_number' =>
                'ASEW-Q-2026-00001',

            'public_token' =>
                str_repeat('a', 64),

            'customer_name' =>
                $enquiry->name,

            'company' =>
                $enquiry->company,

            'email' =>
                $enquiry->email,

            'phone' =>
                $enquiry->phone,

            'city' =>
                $enquiry->city,

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
                'draft',

            'quotation_date' =>
                now()->toDateString(),

            'valid_until' =>
                now()
                    ->addDays(15)
                    ->toDateString(),
        ]);
    }
}