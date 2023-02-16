@extends('layouts.layouts')

@section('content')

@foreach($products as $product)
<div class="card card-compact w-96 bg-base-100 shadow-xl">
  <figure><img src="{{ asset('/img/{{$image}}') }}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">{{$name}}</h2>
    <p>{{$content}}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">{{$price}}</button>
    </div>
  </div>
</div>
@endforeach
@endsection
