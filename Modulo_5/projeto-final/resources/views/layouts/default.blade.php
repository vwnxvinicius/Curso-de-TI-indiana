<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <title>Projeto final</title>
</head>
<body>        
    <header class="header">
        <nav class="nav">
            @auth
                <a class="link" href="{{ route('addGame') }}">Cadastrar jogo</a>
                <a class="link" href="{{ route('myGames') }}">Meus jogos</a>
            @endauth
            @guest
                <a class="link" href="{{ route('register')}}">Cadastrar</a>
            @endguest
        </nav>
        <a href="{{ route('home') }}" id="logo"><img src="/img/projeto-final-logo.png" alt="logo" width="60px" height="60px"></a>
        <nav class="nav">
            @auth
                <a class="link" href="{{ route('profile') }}">Perfil</a>
                <a class="link" href="{{ route('logout') }}">Sair</a>
            @endauth
            @guest
                <a class="link" href="{{ route('login') }}">Login</a>
            @endguest
        </nav>
    </header>

    @yield('content')
</body>
    
</html>