<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - GHOUL HIGH</title>
  <!-- Fonte Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: url('{{ asset("img/fundo.png") }}') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position: relative;
      color: #fff;
    }
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }
    /* Container principal com efeito glassmorphism */
    .register-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 40px;
      width: 350px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    .register-container h1 {
      margin-bottom: 30px;
      font-size: 2rem;
      font-weight: 600;
    }
    /* Grupos de entrada */
    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }
    .input-group label {
      display: block;
      font-size: 0.9rem;
      margin-bottom: 5px;
    }
    .input-group input {
      width: 100%;
      padding: 10px 15px;
      border: none;
      border-radius: 25px;
      font-size: 1rem;
      outline: none;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      transition: background 0.3s;
    }
    .input-group input::placeholder {
      color: #eee;
    }
    .input-group input:focus {
      background: rgba(255, 255, 255, 0.3);
    }
    .btn-register {
      width: 100%;
      padding: 12px 0;
      border: none;
      border-radius: 25px;
      background: #582574;
      color: #fff;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .btn-register:hover {
      background: #7e34a5e5;
    }
    /* Mensagens de erro */
    .feedback {
      background: rgba(255, 0, 0, 0.3);
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      text-align: left;
      font-size: 0.9rem;
    }
    .feedback ul {
      list-style: none;
    }
    .login-link {
      margin-top: 20px;
      font-size: 0.9rem;
    }
    .login-link a {
      color: #901dce;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    .login-link a:hover {
      color: #fff;
    }
  </style>
</head>
<body>
@include('partials.header')  

  <div class="register-container">
    <h1>Cadastro</h1>
    
    <!-- Mensagens de erro de validação -->
    @if ($errors->any())
      <div class="feedback">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
      @csrf
      <div class="input-group">
        <label for="name">Nome Completo</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome completo" value="{{ old('name') }}" required>
      </div>
      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" value="{{ old('email') }}" required>
      </div>
      <div class="input-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
      </div>
      <div class="input-group">
        <label for="password_confirmation">Confirmar Senha</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
      </div>
      <button type="submit" class="btn-register">Cadastrar</button>
    </form>
    <div class="login-link">
      Já possui uma conta? <a href="{{ route('login') }}">Faça login</a>
    </div>
  </div>
</body>
</html>
