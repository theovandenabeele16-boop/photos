<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_form_renders_a_submit_button(): void
    {
        $this->get('/register')
            ->assertOk()
            ->assertSee('<button type="submit">S\'inscrire</button>', false);
    }

    public function test_valid_registration_creates_a_user_and_redirects_to_index(): void
    {
        $response = $this->post('/register', [
            'name' => 'Example User',
            'email' => 'example@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/index');
        $this->assertDatabaseHas('users', [
            'name' => 'Example User',
            'email' => 'example@example.com',
        ]);
        $this->assertAuthenticatedAs(User::where('email', 'example@example.com')->first());
    }
}
