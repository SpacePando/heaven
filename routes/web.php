<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

// pizza routes
Route::middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/pizza', 'App\Http\Controllers\PizzaController@index')->name('Book.index')->middleware('auth');
});
Route::get('/pizza/create', 'App\Http\Controllers\PizzaController@create')->name('Book.create');  
Route::post('/pizza', 'App\Http\Controllers\PizzaController@store')->name('Book.store');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@show')->name('Book.show')->middleware('auth');
Route::delete('/pizza/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('Book.destroy')->middleware('auth');
Route::get('/about', 'App\Http\Controllers\PizzaController@about')->name('Book.about');


Auth::routes(
  //'pizzas' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/check/role',[App\Http\Controllers\UserController::class,'checkRole'])->middleware('roleType');
Route::get('/contact', 'App\Http\Controllers\ContactController@show');
Route::post('/contact', 'App\Http\Controllers\ContactController@mailContactForm');
