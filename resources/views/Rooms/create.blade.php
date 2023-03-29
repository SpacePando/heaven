@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Book a Room<h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
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
    </fieldset>
    <input type="submit" value="Book Room">
  </form>
</div>
@endsection