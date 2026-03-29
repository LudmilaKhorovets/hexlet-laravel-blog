<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <meta name="csrf-token" content="<?= csrf_token() ?>" />
    <meta name="csrf-param" content="_token" />
</head>
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container mt-4">
    <nav class="mb-4">
        <a href="/">Главная</a>
        <a href="{{ route('articles.index') }}" class="ml-3">Статьи</a>
    </nav>
    <h1>@yield('header')</h1>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
