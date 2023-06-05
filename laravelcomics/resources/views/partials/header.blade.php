<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/scss/app.scss')
</head>

<body>

    <ul>
        <li><a href="{{ route('comics') }}">Comics</a></li>
        <li><a href="{{ route('movie') }}">Movie</a></li>
        <li><a href="{{ route('tv') }}">TV</a></li>
    </ul>
