@extends('layouts.layouts')

@section('content')
<div class="container" style=" display: grid; grid-template-columns: 1fr 1fr; grid-row-gap: 24px; grid-column-gap: 16px;">
@foreach($products as $product)
<div class="card card-compact w-96 bg-base-100 greei-xl bg-base-content" style=" " >
  <figure><img src="{{asset('/img/' . $product->image)}}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-base-100">{{$product->name}}</h2>
    <p class="text-base-100">{{$product->content}}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">{{$product->price}}<a href="">Посмотреть детально</a></button>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection
