@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Room List</h1>
  @foreach($pizzas as $pizza)
  <div class="link-item">
  <a href="{{ route('Book.show', $pizza->id) }}" >
  <div class="pizza-item">
      <img src="/img/logo.png" alt="Logo">
      <h4>{{ $pizza->name }}</h4>
    </div>
  </a>
  </div>
  @endforeach
  <a href="/home"><--  Back Home</a>

</div>

@endsection
