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

//! Site routes

Route::middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/rooms', 'App\Http\Controllers\PizzaController@index')->name('Book.index')->middleware('auth');
});
Route::get('/rooms/create', 'App\Http\Controllers\PizzaController@create')->name('Book.create');  
Route::post('/rooms', 'App\Http\Controllers\PizzaController@store')->name('Book.store');
Route::get('/rooms/{id}', 'App\Http\Controllers\PizzaController@show')->name('Book.show')->middleware('auth');
Route::delete('/rooms/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('Book.destroy')->middleware('auth');
Route::get('/about', 'App\Http\Controllers\PizzaController@about')->name('Book.about');


Auth::routes(
  //'pizzas' => false]
);

//! Home / Role

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/check/role',[App\Http\Controllers\UserController::class,'checkRole'])->middleware('roleType');

//! Contact
// Route::get('/contact', 'App\Http\Controllers\ContactController@show');
// Route::post('/contact', 'App\Http\Controllers\ContactController@mailContactForm');

// Route::get('/contact', 'HomeController@index')->name('contact');
// Route::post('/contact', 'HomeController@send_mail')->name('addContact');

// Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
// Route::post('/contact', 'App\Http\Controllers\ContactController@send_mail')->name('addContact');

Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');