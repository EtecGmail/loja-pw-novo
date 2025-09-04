<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginModel;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function index()
    {
        return view('auth.login');
    }

    // Processa a autenticação
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Busca o usuário pelo e-mail informado
        $usuario = LoginModel::where('emailUsuario', $request->email)->first();

        if ($usuario && \Hash::check($request->password, $usuario->senhaUsuario)) {
            // Autentica o usuário quando as credenciais estão corretas
            Auth::login($usuario);

            // Regenera a sessão para prevenir fixação
            $request->session()->regenerate();

            return redirect()->to(RouteServiceProvider::HOME);
        }

        // Retorna erro quando as credenciais são inválidas
        return back()->withErrors([
            'email' => 'Credenciais inválidas. Verifique seu e-mail e senha.'
        ])->withInput();
    }

    // Encerra a sessão do usuário
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
