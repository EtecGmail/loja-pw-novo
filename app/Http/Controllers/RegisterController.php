<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel; // Modelo que interage com a tabela de usuários
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    // Exibe o formulário de cadastro
    public function index()
    {
        return view('auth.register');
    }

    // Processa o cadastro do usuário
    public function store(Request $request)
    {
        // Valida os dados recebidos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tb_usuarios,emailUsuario', // Verifica se o e-mail já existe na tabela de usuários
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Cria o usuário com a senha criptografada
        $usuarioo = LoginModel::create([
            'nomeUsuario' => $validatedData['name'],
            'emailUsuario' => $validatedData['email'],
            'senhaUsuario' => Hash::make($validatedData['password']),
        ]);

        // Autentica o usuário recém-cadastrado
        Auth::login($usuarioo);

        // Redireciona para a página inicial após o cadastro
        return redirect()->to(RouteServiceProvider::HOME)->with('success', 'Cadastro realizado com sucesso!');
    }
}
