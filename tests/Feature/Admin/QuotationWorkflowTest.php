<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\ProductEnquiry;
use App\Models\Quotation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class QuotationWorkflowTest extends TestCase
{
    use RefreshDatabase;


    public function test_customer_can_accept_sent_quotation(): void
    {
        Mail::fake();

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'sent'
            );

        $response = $this->post(
            route(
                'quotation.respond',
                [
                    'quotationNumber' =>
                        $quotation->quotation_number,

                    'token' =>
                        $quotation->public_token,
                ]
            ),
            [
                'decision' =>
                    'accepted',
            ]
        );

        $response->assertSessionHasNoErrors();

        $quotation->refresh();

        $this->assertSame(
            'accepted',
            $quotation->status
        );

        $this->assertNotNull(
            $quotation->responded_at
        );
    }


    public function test_customer_can_reject_sent_quotation(): void
    {
        Mail::fake();

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'sent'
            );

        $this->post(
            route(
                'quotation.respond',
                [
                    'quotationNumber' =>
                        $quotation->quotation_number,

                    'token' =>
                        $quotation->public_token,
                ]
            ),
            [
                'decision' =>
                    'rejected',
            ]
        );

        $quotation->refresh();

        $this->assertSame(
            'rejected',
            $quotation->status
        );

        $this->assertNotNull(
            $quotation->responded_at
        );
    }


    public function test_customer_cannot_change_decision_after_accepting(): void
    {
        Mail::fake();

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'sent'
            );

        $route = route(
            'quotation.respond',
            [
                'quotationNumber' =>
                    $quotation->quotation_number,

                'token' =>
                    $quotation->public_token,
            ]
        );

        $this->post(
            $route,
            [
                'decision' =>
                    'accepted',
            ]
        );

        $this->post(
            $route,
            [
                'decision' =>
                    'rejected',
            ]
        );

        $quotation->refresh();

        $this->assertSame(
            'accepted',
            $quotation->status
        );
    }


    public function test_draft_quotation_cannot_be_accepted_from_public_link(): void
    {
        Mail::fake();

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'draft'
            );

        $this->post(
            route(
                'quotation.respond',
                [
                    'quotationNumber' =>
                        $quotation->quotation_number,

                    'token' =>
                        $quotation->public_token,
                ]
            ),
            [
                'decision' =>
                    'accepted',
            ]
        );

        $quotation->refresh();

        $this->assertSame(
            'draft',
            $quotation->status
        );
    }


    public function test_expired_quotation_cannot_be_accepted(): void
    {
        Mail::fake();

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'sent',
                now()->subDay()->toDateString()
            );

        $this->post(
            route(
                'quotation.respond',
                [
                    'quotationNumber' =>
                        $quotation->quotation_number,

                    'token' =>
                        $quotation->public_token,
                ]
            ),
            [
                'decision' =>
                    'accepted',
            ]
        );

        $quotation->refresh();

        $this->assertSame(
            'sent',
            $quotation->status
        );
    }


    public function test_admin_cannot_change_terminal_quotation_status(): void
    {
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

        $enquiry =
            $this->createEnquiry();

        $quotation =
            $this->createQuotation(
                $enquiry,
                'accepted'
            );

        $this->patch(
            route(
                'admin.quotations.status',
                $quotation
            ),
            [
                'status' =>
                    'rejected',
            ]
        );

        $quotation->refresh();

        $this->assertSame(
            'accepted',
            $quotation->status
        );
    }


    private function createEnquiry(): ProductEnquiry
    {
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

            'status' =>
                'quoted',
        ]);
    }


    private function createQuotation(
        ProductEnquiry $enquiry,
        string $status = 'sent',
        ?string $validUntil = null
    ): Quotation {
        return Quotation::create([
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
                str_repeat(
                    (string) (($enquiry->id % 9) + 1),
                    64
                ),

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
                $status,

            'quotation_date' =>
                now()->toDateString(),

            'valid_until' =>
                $validUntil
                ?? now()
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
    }
}