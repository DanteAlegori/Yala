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
                Создание продукта
            </h2>

            <form class="mt-10" action="{{ route('create-product') }}" method="POST">
            @csrf
                <!-- Name Input -->
                <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Название</label>
                <input id="name" type="string" name="name" placeholder="" autocomplete="Name"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!--Surname Input -->
                 <label for="contend" class="block text-xs font-semibold text-gray-600 uppercase">Описание</label>
                <input id="contend" type="text" name="contend" placeholder="" autocomplete="contend"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!-- Patronymic Input -->
                 <label for="img" class="block text-xs font-semibold text-gray-600 uppercase">Название изображения</label>
                <input id="img" type="string" name="img" placeholder="" autocomplete="img"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                 <!-- Login Input -->
                 <label for="login" class="block text-xs font-semibold text-gray-600 uppercase">Цена</label>
                <input id="price" type="demical" name="price" placeholder="" autocomplete="price"
                    class="block w-full py-3 px-1 mt-2
                    text-gray-800 appearance-none
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />


                <!-- Registration Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                  Создать
                </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
