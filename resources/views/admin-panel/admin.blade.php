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
       <li> <button class="btn btn-primary">Добавить товар <a href="{{ route('admin-panel.product') }}"></a></button></li>
      <li><button class="btn btn-primary">Удалить товар</button></li>
       <li> <button class="btn btn-primary">Изменить  товар</button></li>
       <li> <button class="btn btn-primary">Просмотреть все заказы</button></li>
    </ul>
      </div>
    </div>
  </div>





@endsection
