<!doctype html>
<html rus="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/resources/css/layouts.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('layouts.name', 'Copy-Star') }}</title>

</head>
<body>
    <nav>
        <a href="">Copy-Star </a>
        <a href="">О нас</a>
  <a href="#">Где нас найти</a>
  <a href="#">Регистрация</a>
  <a href="#">Авторизайия</a>
  <div id="indicator"></div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>
