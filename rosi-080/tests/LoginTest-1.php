<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_with_valid_data()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/home');
    }

    public function test_login_with_invalid_data()
    {
        $response = $this->post('/login', [
            'email' => 'invalid@email.com',
            'password' => 'invalid_password',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}