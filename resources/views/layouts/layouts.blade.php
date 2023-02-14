<!doctype html>
<html rus="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Copy-Star') }}</title>

</head>
<body>
    <nav>
    <div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl">Copy-Star</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('about') }}">О нас</a></li>
      <li><a href="{{ route('where') }}">Где нас найти</a></li>
      <li><a href="{{ route('catalog') }}">Каталог</a></li>
      @guest
                            @if (Route::has('login'))
                                    <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                                    </li>
                            @endif

                            @if (Route::has('register'))
                                    <li>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                    </li>
                            @endif
                        @else

                        @endguest
    </ul>
  </div>
</div>


</nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
  <div class="grid grid-flow-col gap-4">
    <a class="link link-hover">О нас</a>
    <a class="link link-hover">Где нас найти</a>
    <a class="link link-hover">Каталог</a>
    <a class="link link-hover">Профиль</a>
  </div>
  <div>
    <div class="grid grid-flow-col gap-4">
     <h1><a href="">VK</a></h1>
    </div>
  </div>
  <div>
    <p>Copyright © 2023 - Создатель <a href="">Dante-Alegori</a></p>
  </div>
</footer>
</body>
</html>
