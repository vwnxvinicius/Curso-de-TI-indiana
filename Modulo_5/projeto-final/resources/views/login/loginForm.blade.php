@extends('layouts.default')

<!DOCTYPE html>
<html lang="pt-br">
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
        <p class="error" style="color: red" >{{ session('status') }}</p>
    @endif
    <div class="form-container">
        <form method="POST" action="{{ route('authenticate') }}">
            <h1>LOGIN</h1>
            @csrf
            <input type="email" name="email" placeholder="email" id="email" autocomplete="off" required>
            <input type="password" name="password" placeholder="password" autocomplete="off" required>
            <div class="check-container">
                <input class="check" type="checkbox" name="remember" id="remember">Lembrar-me
            </div>
            <input class="button" type="submit" value="Login">
        </form>
    </div>
    @endsection
</body>
</html>