<?php

namespace Tests\Feature;

use App\Models\LoginModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_redirected_from_private_route(): void
    {
        $this->get('/dashboard')->assertRedirect('/login');
    }

    public function test_redirect_to_dashboard_after_login(): void
    {
        $user = LoginModel::factory()->create();

        $this->post('/login', [
            'email' => $user->emailUsuario,
            'password' => 'password',
        ])->assertRedirect('/dashboard');
    }

    public function test_navbar_toggles_links(): void
    {
        $this->get('/')->assertSee('Login')->assertSee('Cadastro');

        $user = LoginModel::factory()->create();
        $this->actingAs($user)->get('/')
            ->assertSee('Minha Conta')
            ->assertSee('Sair')
            ->assertDontSee('Login')
            ->assertDontSee('Cadastro');
    }
}
