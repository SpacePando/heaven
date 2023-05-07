@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Book a Room<h1>
  <form action="/rooms" method="POST">
    @csrf
    <label for="name">name:</label>
    <input type="text" name="name" id="name" required>
    <label for="LastName">Last name:</label>
    <input type="text" name="LastName" id="LastName" required>

    <label for="ArivalDate">Arrival Date:</label>
    <input type="Date" name="ArivalDate" id="ArivalDate" required>
    
    <label for="DepartureDate">Departure Date:</label>
    <input type="Date" name="DepartureDate" id="DepartureDate" required>

    <label for="NumAdults">Number of Adults:</label>
    <input type="number" name="NumAdults" id="NumAdults" required>

    <label for="NumChild">Number of Children:</label>
    <input type="number" name="NumChild" id="NumChild" required>

    <label for="Email">email:</label>
    <input type="email" name="Email" id="Email" required>

    <label for="Postcode">Postcode:</label>
    <input type="number" name="Postcode" id="Postcode" required>
    
    <label for="City">City:</label>
    <input type="text" name="City" id="City" required>
    
    <label for="Country">Country:</label>
    <input type="text" name="Country" id="Country" required>
    
    <label for="Street">Streetname:</label>
    <input type="text" name="Street" id="Street" required>
    
    <label for="HouseNo">House Number:</label>
    <input type="number" name="HouseNo" id="HouseNo" required>
    
    <label for="type">type of Room:</label>
    <select name="type" id="type">
      <option value="Ground">Ground</option>
      <option value="Sky">Sky</option>
      <option value="Clouds">Clouds</option>
      <option value="Heaven">Heaven</option>
    </select>

    <fieldset>
      <label>Extra Needs:</label> <br/>
      <input type="checkbox" name="Needs[]" value="Insane">Insane<br />
      <input type="checkbox" name="Needs[]" value="No_legs">legs less<br />
      <input type="checkbox" name="Needs[]" value="Armless">Armless<br />
      <input type="checkbox" name="Needs[]" value="Retard">Retard<br />
      <input type="checkbox" name="Needs[]" value="2Kids">2 Kids<br />
      <input type="checkbox" name="Needs[]" value="None">None<br />
      <input type="checkbox" name="Needs[]" value="Dog">Dog<br />
      <input type="checkbox" name="Needs[]" value="Horse">Horse<br />
      <input type="checkbox" name="Needs[]" value="Kaas">Kaas<br />
      <input type="checkbox" name="Needs[]" value="Faggot">Faggot<br />
    </fieldset>
    <input type="submit" value="Book Room">
  </form>
</div>
@endsection