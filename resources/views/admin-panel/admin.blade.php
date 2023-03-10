@extends('layouts.layouts')

@section('content')


<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Админ панель</h1>
        <h1 class="text-5xl font-bold">Ваши данные: <br>
            <ul>
                <li>Ваш логин-{{ auth()->user()->login }}</li> <br>
                <li>Ваше имя-{{ auth()->user()->name }}</li> <br>
                <li>Ваше фамилия-{{ auth()->user()->surname }}</li> <br>
                <li>Ваша почта-{{ auth()->user()->email }}</li>
            </ul>
        </h1> <br>
        <ul>
       <li><a class="btn btn-primary" href="{{ route('create-product') }}">Добавить товар</a></li> <br>
      <li><a class="btn btn-primary" href="{{ route('admin-panel.catalog') }}"> <ul><li>Удалить товар</li><li>Изменить товар</li></ul> </a></li> <br>
      <li><a class="btn btn-primary" href="{{ route('admin-panel.catalog') }}">Заказы</a></li> <br>
    </ul>
      </div>
    </div>
  </div>





@endsection
