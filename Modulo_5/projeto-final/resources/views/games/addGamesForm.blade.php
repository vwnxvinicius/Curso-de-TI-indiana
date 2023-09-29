@extends('layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/forms.css">
    <title>Adicionar</title>
</head>
<body>
    @section('content')
    <div class="form-container">
        <form action="{{ route('createGame') }}" method="POST" enctype="multipart/form-data">
            <h1>Adicionar jogo</h1>
            @csrf
            <input required type="text" name="title" placeholder="title">
            <textarea required name="description" id="" cols="30" rows="3" placeholder="description"></textarea>
            <input required type="text" name="tags" placeholder="tags">
            <input required type="text" name="official_link" placeholder="official-link">
            <input required type="text" name="youtube_link" placeholder="youtube-link">
            <input required type="file" name="image" class="file-input">
            <input required type="submit" value="Cadastrar" class="button">
        </form>
    </div>
    @endsection
</body>
</html>