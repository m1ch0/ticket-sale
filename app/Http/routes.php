<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::group(['middleware' => 'cors'], function(){
//
//});
Route::get('/users', 'UserController@index');
Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');
Route::get('/profile', 'UserController@edit');
Route::patch('/profile', 'UserController@update');

//Route::resource('venues', 'VenueController');

Route::get('test', function(){
    return view('test');
});

Route::get('/venues', 'VenueController@index');
Route::post('/venues', 'VenueController@store');
Route::post('/venues/create', 'VenueController@create');
Route::get('/venues/{venues}', 'VenueController@show');
Route::patch('/venues/{venues}', 'VenueController@update');
Route::get('/venues/{venues}/edit', 'VenueController@edit');

Route::get('/events', 'EventController@index');
Route::post('/event/create', 'EventController@store');
Route::get('/events/create', 'EventController@create');
Route::get('/events/{events}', 'EventController@show');
Route::patch('/events/{events}', 'EventController@update');
Route::get('/events/{events}/edit', 'EventController@edit');

Route::get('/events/{events}/tickets', 'TicketController@index');
//Route::post('/events/{events}/tickets', 'TicketController@store');
//Route::get('/events/{events}/tickets/create', 'TicketController@create');
Route::get('/events/{events}/tickets/{tickets}', 'TicketController@show');
Route::get('/events/{events}/tickets/{tickets}/buy', 'TicketController@buy');
//Route::group(['middleware' => 'cors'], function(){
//
//});
Route::post('/singUp','AuthAndRegisterController@register');
Route::post('/logIn','AuthAndRegisterController@login');