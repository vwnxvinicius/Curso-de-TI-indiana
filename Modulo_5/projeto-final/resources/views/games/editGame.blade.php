@extends('layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/forms.css">
    <title>Editar</title>
</head>
<body>
    @section('content')
    <div class="form-container">
        <form action="{{ url('/updateGame'.'/'.$game->id) }}" method="POST" enctype="multipart/form-data">
            <h1>Editar jogo</h1>
            @csrf
            @method('PUT')
            <input required type="text" name="title" placeholder="title" value="{{ $game->title }}">
            <textarea required name="description" id="" cols="30" rows="3" placeholder="description">{{ $game->description }}</textarea>
            <input required type="text" name="tags" placeholder="tags" value="{{ $game->tags }}">
            <input required type="text" name="official_link" placeholder="official-link" value="{{ $game->official_link }}">
            <input required type="text" name="youtube_link" placeholder="youtube-link" value="{{ $game->youtube_link }}">
            <input required type="file" name="image" class="file-input" value="{{ $game->image }}">
            <input required type="submit" value="Atualizar" class="button">
        </form>
    </div>
    @endsection
</body>
</html>