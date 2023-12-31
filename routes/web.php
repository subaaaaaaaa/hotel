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

Route::get('/guest', 'GuestController@index');

Route::get('guest/info', 'GuestController@add');
Route::post('guest/info', 'GuestController@create');

Route::get('reserve', 'ReservationController@index');

Route::get('guest/reserve', 'ReservationController@add');
Route::post('guest/reserve', 'ReservationController@create');

Route::get('hotel', 'HotelController@index');

Route::get('room_type', 'Room_typeController@index');
