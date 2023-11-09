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

Route::get('guest', 'GuestController@index');

Route::get('guest/guest_info', 'GuestController@add');
Route::post('guest/guest_info', 'GuestController@create');

Route::get('guest/guest_reserve', 'ReservationController@add');
Route::post('guest/guest_reserve', 'ReservationController@create');
