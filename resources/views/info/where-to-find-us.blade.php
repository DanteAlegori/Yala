@extends('layouts.layouts')

@section('content')

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row">
    <img src="{{ asset('/img/map.jpg') }}" alt="">
    <div>
      <h1 class="text-4xl font-bold">Где нас найти</h1>
      <p class="py-6">Адрес Сухорюковская 22\2 </p>
      <p class="py-6">Телефон - 8-960-323-45-34</p>
      <p class="py-6">Почта copystar@gmail.com</p>
    </div>
  </div>
</div>
@endsection
