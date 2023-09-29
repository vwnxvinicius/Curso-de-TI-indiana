@extends('layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/forms.css">
    <title>Document</title>
</head>
<body>
    @section('content')

    @if (session('status'))
    <p class="succes" >{{ session('status') }}</p>
    @endif

    <div class="form-container">
        <form method="POST" action="{{ route('updateInfo') }}">
            <h1>Alterar informações</h1>
            <p>Altere seu nome de usuário ou email</p>
            @csrf
            <input type="email" name="email" placeholder="email" id="email" autocomplete="off" value="{{ $user->email }}" required>
            <input type="nome" name="name" placeholder="nome"  autocomplete="off" required>
            <input class="button" type="submit" value="Atualizar">
        </form>

        <form method="POST" action="{{ route('updatePassword') }}">
            <h1>Alterar senha</h1>
            @csrf
            <input type="password" name="old_password" placeholder="Senha atual" autocomplete="off" required>
            <input type="password" name="new_password" placeholder="Nova senha" autocomplete="off" required>
            <input type="password" name="confirm_password" placeholder="Confirmar nova senha" autocomplete="off" required>
            <input class="button" type="submit" value="Alterar">
        </form>
    </div>
    @endsection
</body>
</html>