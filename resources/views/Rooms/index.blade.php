@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Room List</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/logo.png" alt="Logo">
      <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection