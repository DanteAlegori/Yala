@extends('layouts.layouts')

@section('content')
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">
        <ul>
            <li>Мы номер №1 в России по продаже принтеров</li> <br>
            <li>Самые выгодные цены !</li> <br>
            <li>Абсолютная доставка </li> <br>
            <li>5 лет гарантии</li> <br>
            <li>Широкий выбор </li>
        </ul>
     </h1>
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
            <button class="btn btn-primary"><a href="{{ route('catalog.one-product', $product->id) }}">{{$product->price}}</a></button>
          </div>
        </div>
      </div>
    @endforeach
    </div>

@endsection
