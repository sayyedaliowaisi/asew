<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_page_can_be_opened(): void
    {
        $response = $this->get(
            route('admin.login')
        );

        $response->assertOk();
    }


    public function test_admin_can_login_with_valid_credentials(): void
    {
        $admin = Admin::create([
            'name' => 'ASEW Admin',
            'email' => 'admin@asew.test',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->post(
            route('admin.login.submit'),
            [
                'email' => 'admin@asew.test',
                'password' => 'password123',
            ]
        );

        $response->assertRedirect(
            route('admin.dashboard')
        );

        $this->assertAuthenticatedAs(
            $admin,
            'admin'
        );
    }


    public function test_admin_cannot_login_with_wrong_password(): void
    {
        Admin::create([
            'name' => 'ASEW Admin',
            'email' => 'admin@asew.test',
            'password' => Hash::make('password123'),
        ]);

        $response = $this
            ->from(route('admin.login'))
            ->post(
                route('admin.login.submit'),
                [
                    'email' => 'admin@asew.test',
                    'password' => 'wrong-password',
                ]
            );

        $response
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors('email');

        $this->assertGuest('admin');
    }


    public function test_authenticated_admin_is_redirected_away_from_login_page(): void
    {
        $admin = Admin::create([
            'name' => 'ASEW Admin',
            'email' => 'admin@asew.test',
            'password' => Hash::make('password123'),
        ]);

        $response = $this
            ->actingAs($admin, 'admin')
            ->get(route('admin.login'));

        $response->assertRedirect(
            route('admin.dashboard')
        );
    }


    public function test_admin_can_logout(): void
    {
        $admin = Admin::create([
            'name' => 'ASEW Admin',
            'email' => 'admin@asew.test',
            'password' => Hash::make('password123'),
        ]);

        $response = $this
            ->actingAs($admin, 'admin')
            ->post(route('admin.logout'));

        $response->assertRedirect(
            route('admin.login')
        );

        $this->assertGuest('admin');
    }
}