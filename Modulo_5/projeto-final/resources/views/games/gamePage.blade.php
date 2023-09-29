@extends('layouts.default')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/gamePage.css">
    <title>Jogos</title>
</head>
<body>
    @section('content')

    @if (session('status'))
    <p class="succes">{{ session('status') }}</p>
    @endif

    <div class="container">
        <div class="game-info">
            <h1>{{ $game->title }}</h1>
            <div class="media-container">
                <img src="{{ asset('/uploads/games/'.$game->image) }}" alt="" width="300px" height="200px">
                <iframe src="https://www.youtube.com/embed/{{$game->youtube_link}}" frameborder="0" width="300px" height="200px"></iframe>
            </div>
            <p>Descrição: {{ $game->description }}</p>
            <p>Tags: {{ $game->tags }}</p>
            <p>Adicionado em: {{ date('d/m/Y', strtotime($game->created_at)) }}</p>
            <p>Adicionado por: {{ $user->name }}</p>
            <a class="link" href="{{ url($game->official_link) }}">Jogar agora</a>
        </div>
    </div>

    @endsection
</body>
</html>