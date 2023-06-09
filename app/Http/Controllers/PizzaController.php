<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class PizzaController extends Controller
{


  public function index() {

     $rooms = Room::latest()->get();      

    return view('Rooms.index', [
      'rooms' => $rooms,
    ]);
  }

  public function show($id) {

    $room = Room::findOrFail($id);

    // use the $id variable to query the db for a record

    return view('Rooms.show', ['room' => $room]);
  }

  public function create(){
    return view('Rooms.create');
  }

  public function store() {

    $room = new room();

    $room->name = request('name');
    $room->type = request('type');
    $room->LastName = request('LastName');
    $room->ArivalDate = request('ArivalDate');
    $room->DepartureDate = request('DepartureDate');
    $room->NumAdults = request('NumAdults');
    $room->NumChild = request('NumChild');
    $room->Email = request('Email');
    $room->Postcode = request('Postcode');
    $room->City = request('City');
    $room->Country = request('Country');
    $room->Street = request('Street');
    $room->HouseNo = request('HouseNo');
    $room->Needs = request('Needs');

    
    $room->Save();

    return redirect('/')->with('mssg', 'Thanks for booking');
  }

  public function destroy($id){
    $room = room::findOrFail($id);
    $room->delete();

    return redirect('home');
  }

  public function about(){
    return view('about');
  }
}


