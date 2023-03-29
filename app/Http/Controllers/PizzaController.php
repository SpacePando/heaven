<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function index() {

    // $pizzas = Pizza::all();  
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
     $pizzas = Room::latest()->get();      

    return view('Rooms.index', [
      'pizzas' => $pizzas,
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
    $room->Needs = request('Needs');

    
    $room->Save();

    return redirect('/')->with('mssg', 'Thanks for booking');
  }

  public function destroy($id){
    $room = room::findOrFail($id);
    $room->delete();

    return redirect('/pizzas');
  }
}


