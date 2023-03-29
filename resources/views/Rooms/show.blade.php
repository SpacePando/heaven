@extends('layouts.app')

@section('content')
<div class="wrapper room details">
    <h1>Booking for {{ $room->name }}</h1>
    <p class="type">type - {{ $room->type }}</p>
    <p class="Needs">extra Needs:</p>
    <ul>
    @foreach($room->Needs as $Needs)
      <li>{{ $Needs }}</li>
    @endforeach
  </ul>
  <form action="{{ route('Book.destroy', $room->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
  </form>

</div>
<a href="/pizzas" class="back"><- back to all the Rooms</a>
@endsection