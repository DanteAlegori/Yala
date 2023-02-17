@extends('layouts.layouts')

@section('content')

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Админ панель</h1>
        <button class="btn btn-primary">Добавить товар <a href="{{ route('admin-panel.product') }}"></a></button>
        <button class="btn btn-primary">Удалить товар</button>
        <button class="btn btn-primary">Изменить  товар</button>
        <button class="btn btn-primary">Просмотреть все заказы</button>
      </div>
    </div>
  </div>
@endsection
