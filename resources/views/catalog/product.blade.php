@extends('layouts.layouts')

@section('content')
<div class="container mx-auto" style=" display: grid; grid-template-columns: 1fr 1fr; grid-row-gap: 24px; grid-column-gap: 16px;">
@foreach($products as $product)
<div class="card card-compact w-96 bg-base-300 greei-xl  mx-auto">
  <figure><img src="{{asset('/img/' . $product->image)}}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-base-content">{{$product->name}}</h2>
    <p class="text-base-content">{{$product->content}}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">{{$product->price}}<a href=""></a></button>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection
