<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List all sports the club provide
Route::get('sports', 'SportsController@index');

//List all session sorted by sport
Route::get('sessions', 'SessionsController@index');

//Get session based on specific sport
Route::get('session/{id}', 'SessionsController@show');

//Get all sessions having available slots
Route::get('available_slots', 'SessionsController@availableSlots');

//Get sport name that have max no of attendees
Route::get('max_attendees', 'SessionsController@max_attendees');

//User booking session
Route::post('booking', 'UserController@booking');

//Get user’s session sorted by booking time
Route::get('user/{id}', 'UserController@show');

