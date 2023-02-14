@extends('layouts.layouts')

@section('content')
<!-- Container -->
<div class="flex flex-col h-screen bg-gray-100 justify-center ">
        <!-- Auth Card -->
        <div class="
            px-6 py-10 sm:px-10 sm:py-6
            bg-white rounded-lg shadow-md lg:shadow-lg  ">

            <!-- Card Title -->
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Регистрация
            </h2>

            <form class="mt-10" action="{{ route('register') }}" method="POST">
            @csrf
                <!-- Name Input -->
                <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Имя</label>
                <input id="name" type="string" name="name" placeholder="Ваше имя" autocomplete="Name"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!--Surname Input -->
                 <label for="surname" class="block text-xs font-semibold text-gray-600 uppercase">Фамилия</label>
                <input id="surname" type="surname" name="surname" placeholder="Ваша фамилия" autocomplete="Surname"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!-- Patronymic Input -->
                 <label for="patronymic" class="block text-xs font-semibold text-gray-600 uppercase">Отчество</label>
                <input id="patronymic" type="patronymic" name="patronymic" placeholder="Ваше Отчество" autocomplete="Patronymic"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!-- Login Input -->
                 <label for="login" class="block text-xs font-semibold text-gray-600 uppercase">Логин</label>
                <input id="login" type="login" name="login" placeholder="Ваш логин" autocomplete="Login"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Email Input -->
                <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="e-mail" autocomplete="email"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Password Input -->
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Пароль</label>
                <input id="password" type="password" name="password" placeholder="Пароль" autocomplete="current-password"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />


                     <!-- Password repit -->
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Повторите пароль</label>
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Повторите пароль" autocomplete="current-password"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                    <div class="form-control">
                        <label class="cursor-pointer label">
                            <span class="label-text">Соглашаюсь с правилами</span>
                                 <input type="checkbox" checked="checked" class="checkbox checkbox-accent" />
                     </label>
                    </div>

                <!-- Registration Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Registration
                </button>

                <!-- Another Auth Routes -->
                <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                    <a href="forgot-password" class="flex-2 underline">
                        Забыли пароль?
                    </a>

                    <p class="flex-1 text-gray-500 text-md mx-4 my-1 sm:my-auto">
                        или
                    </p>

                    <a href="register" class="flex-2 underline">
                        Войти
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
