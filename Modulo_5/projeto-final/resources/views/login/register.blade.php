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
    <div class="form-container">
        <form method="POST"  action="{{ route('createUser') }}">
            @csrf
            <h1>CADASTRAR</h1>
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" class="button">
        </form>
    </div>
    @endsection
</body>
</html>