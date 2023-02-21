@extends('layouts.layouts')

@section('content')
<div class="container mx-auto" style=" display: grid; grid-template-columns: 1fr 1fr; grid-row-gap: 24px; grid-column-gap: 16px;">
@foreach($products as $product)
<div class="card card-compact w-96 bg-base-300 greei-xl  mx-auto">
  <figure><img src="{{asset('/img/' . $product->image)}}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-base-content">Название - {{$product->name}}</h2>
    <p class="text-base-content">Описание - {{$product->content}}</p>
    <div class="card-actions justify-end">
      <p>цена - {{$product->price}}</p>
        <ul>
            <li>
      <button class="btn btn-primary"><a href="{{ route('admin-panel.delete-product', $product->id) }}">Подробнее
    </a></button>
            </li>
        </ul>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection
