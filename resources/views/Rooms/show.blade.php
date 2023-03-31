@extends('layouts.app')

@section('content')
<div class="wrapper room details">
    <h1>Booking for {{ $room->name }} {{ $room->LastName }}</h1> </br>
    <h5 class="ArivalDate">ArivalDate - {{ $room->ArivalDate }} ---- DepartureDate - {{ $room->DepartureDate }}</h5>
    <h5 class="NumAdults">NumAdults - {{ $room->NumAdults }} -- NumChild - {{ $room->NumChild }}</h5>
    <h5 class="Email">Email - {{ $room->Email }}</h5>
    <h5 class="City">City - {{ $room->City }} {{ $room->Postcode }} {{ $room->Country }}</h5>
    <h5 class="Country">Street - {{ $room->Street }} {{ $room->HouseNo }}</h5>
    <h5 class="type">type - {{ $room->type }}</h5>
    <h5 class="Needs">extra Needs:</h5>
    <ul>
    @foreach($room->Needs as $Needs)
      <li>{{ $Needs }}</li>
    @endforeach
  </ul></br>
  <form action="{{ route('Book.destroy', $room->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
  </form>

</div>
<a href="{{ route('Book.index')}}" class="back"><- back to all the Rooms</a>
@endsection