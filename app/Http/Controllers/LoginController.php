<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginModel;

class LoginController extends Controller
{
    // Exibe a view de login
    public function index()
    {
        return view('auth.login');
    }

    // Processa o login
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Tenta autenticar com o modelo LoginModel
        $usuario = LoginModel::where('emailUsuario', $request->email)->first();

        if ($usuario && \Hash::check($request->password, $usuario->senhaUsuario)) {
            // Se o usuário for encontrado e a senha for correta, faz o login
            Auth::login($usuario);

            // Regenera a sessão para evitar fixação de sessão
            $request->session()->regenerate();

            return redirect()->route('welcome'); // Altere para a rota da sua home
        }

        // Se as credenciais forem inválidas, retorna com erro
        return back()->withErrors([
            'email' => 'Credenciais inválidas. Verifique seu e-mail e senha.'
        ])->withInput();
    }

    // Realiza o logout
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}
