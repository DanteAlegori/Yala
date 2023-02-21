@extends('layouts.layouts')

@section('content')
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <img src="{{asset('/img/' . $product->image)}}" class="max-w-sm rounded-lg shadow-2xl" />
      <div>
        <h1 class="text-5xl font-bold">{{$product->name}}</h1>
        <p class="py-6">{{$product->content}}</p>
        <h1 >{{$product->price}}
        </h1>
        <ul>
            <li>
                <button class="btn btn-primary"><a href="{{ route('delete', $product->id) }}">Удалить</a></button>
            </li>
            <br>
            <li>
                <button class="btn btn-primary"><a href="{{ route('admin-panel.update-productt', $product->id) }}">Изменить</a></button>
            </li>
        </ul>


      </div>
    </div>
  </div>

@endsection
