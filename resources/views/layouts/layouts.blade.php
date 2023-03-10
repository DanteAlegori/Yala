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
    <div class="navbar bg-base-200">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="{{ route('main') }}">Copy-Star</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
        <li><div class="dropdown dropdown-bottom">
            <label tabindex="0" >Информация</label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
              <li><a href="{{ route('about') }}">О нас</a></li>
              <li><a href="{{ route('where') }}">Где нас найти</a></li>
            </ul>
          </div></li>
      <li><a href="{{ route('catalog.product') }}">Каталог</a></li>
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
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('user')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->login }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logoutProcess') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти из системы') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
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
    <a class="link link-hover" href="{{ route('about') }}">О нас</a>
    <a class="link link-hover" href="{{ route('where') }}">Где нас найти?</a>
    <a class="link link-hover" href="{{ route('catalog.product') }}">Каталог</a>
    <a class="link link-hover"href="{{ route('user') }}">Профиль</a>
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
