@extends('layouts.default')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c1fc3ab447.js" crossorigin="anonymous"></script>
    <title>Meus jogos</title>
</head>
<body>
    @section('content')

    @if (session('status'))
    <p class="succes" >{{ session('status') }}</p>
    @endif

    <div class="card-container">
        @if ($games->count() == 0)
            <p>VOCÊ NÃO TEM NENHUM JOGO</p>
        @endif

        @foreach ($games as $game)
        <div class="game-card">
            <a href="{{ url('/gamePage'.'/'.$game->id) }}">
                <div class="game-card-div">
                    <img id="game-img"  src="{{ asset('uploads/games/'.$game->image) }}" alt="">
                    <p class="card-title">{{ $game->title }}</p>
                </div>
            </a>

            <div class="buttons-container">
                <a href="{{ url('/editGame'.'/'.$game->id) }}"><i id="edit-icon" class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('/deleteGame'.'/'.$game->id) }}"><i id="trash-icon" class="fa-solid fa-trash"></i></a>
            </div>

        </div>
        @endforeach

    </div>
    <div class="pagination justify-content-center">
        {{ $games->links('pagination::bootstrap-4') }}
    </div>
    @endsection
</body>
</html>