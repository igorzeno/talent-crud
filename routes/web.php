<?php
use App\Http\Controllers\EventsController;
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

//Route::get('events', 'EventsController@index');
//Route::get('events/create', 'EventsController@create');
//Route::get('events/store', 'EventsController@store');
//Route::get('events/{id}/edit', 'EventsController@edit');
//Route::get('events/{id}/update', 'EventsController@update');
//Route::get('events/{id}/show', 'EventsController@show');
Route::get('events/{id}/destroy', 'EventsController@destroy');
Route::resource('events', 'EventsController');

Route::get('/', function () {
    return view('welcome');
});
