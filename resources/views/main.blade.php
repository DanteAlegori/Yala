@extends('layouts.layouts')

@section('content')

<div class="hero bg-base-100">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Copy-Star</h1>
      <p class="py-6">Крупнейший магазин принтеров в России</p>
      <button class="btn btn-primary"> <a href="{{route('catalog.product')}}">Выбери свой</a></button>
    </div>
  </div>
</div>

@endsection
