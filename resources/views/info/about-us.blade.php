@extends('layouts.layouts')

@section('content')
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Мы номер №1 в России по продаже принтеров</h1>
      <p class="py-6"> Самые выгодные цены !</p>
      <p class="py-6">Абсолютная доставка </p>
      <p class="py-6">5 лет гарантии </p>
      <p class="py-6">Широкий выбор </p>
    </div>
  </div>
</div>
<div class="text-center">
    <h1>Популярные Товары </h1>
    </div>
    <div class="container mx-auto grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2">
    @foreach ($products as $product)
    <div class="card w-96 bg-base-300 shadow-xl mx-auto px-[10px]">
        <figure class="px-10 pt-10">
          <img src="{{asset('/img/' . $product->image)}}" alt="Shoes" class="rounded-xl w-full" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">{{$product->name}}</h2>
          <div class="card-actions">
            <button class="btn btn-primary">{{$product->price}}</button>
          </div>
        </div>
      </div>
    @endforeach
    </div>

@endsection
