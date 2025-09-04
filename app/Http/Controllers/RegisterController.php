<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel; // Modelo que interage com a tabela tb_usuarios
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    // Exibe a view de cadastro
    public function index()
    {
        return view('auth.register');
    }

    // Processa o cadastro do usuário
    public function store(Request $request)
    {
        // Validação dos dados enviados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:tb_usuarios,emailUsuario', // Validar o email na tabela tb_usuarios
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Criação do usuário com senha criptografada
        $usuarioo = LoginModel::create([
            'nomeUsuario' => $validatedData['name'],
            'emailUsuario' => $validatedData['email'],
            'senhaUsuario' => Hash::make($validatedData['password']),
        ]);

        // Faz o login do usuário recém-cadastrado
        Auth::login($usuarioo);

        // Redireciona para a home após o cadastro
        return redirect()->to(RouteServiceProvider::HOME)->with('success', 'Cadastro realizado com sucesso!');
    }
}