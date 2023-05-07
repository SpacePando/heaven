@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Room List</h1>
  @foreach($rooms as $room)
  <div class="link-item">
  <a href="{{ route('Book.show', $room->id) }}" >
  <div class="room-item">
      <img src="/img/logo.png" alt="Logo">
      <h4>{{ $room->name }}</h4>
    </div>
  </a>
  </div>
  @endforeach
  <a href="/home"><--  Back Home</a>

</div>

@endsection
