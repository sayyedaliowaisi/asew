<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_admin_dashboard(): void
    {
        $response = $this->get(
            route('admin.dashboard')
        );

        $response->assertRedirect(
            route('admin.login')
        );
    }


    public function test_guest_cannot_access_admin_products(): void
    {
        $response = $this->get(
            route('admin.products.index')
        );

        $response->assertRedirect(
            route('admin.login')
        );
    }


    public function test_guest_cannot_access_admin_enquiries(): void
    {
        $response = $this->get(
            route('admin.enquiries.index')
        );

        $response->assertRedirect(
            route('admin.login')
        );
    }


    public function test_guest_cannot_access_admin_quotations(): void
    {
        $response = $this->get(
            route('admin.quotations.index')
        );

        $response->assertRedirect(
            route('admin.login')
        );
    }


    public function test_guest_cannot_access_admin_sales_orders(): void
    {
        $response = $this->get(
            route('admin.sales-orders.index')
        );

        $response->assertRedirect(
            route('admin.login')
        );
    }
}