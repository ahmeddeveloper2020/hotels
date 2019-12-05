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
    return view('layouts.layouts');
});
Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {

        Route::get('order/add', 'OrdersController@index');
    });
});
        Route::get('floor/create', 'FloorController@create');
        Route::post('floor/store', 'FloorController@store');
        Route::get('floor/edit/{id}', 'FloorController@edit');
        Route::post('floor/update', 'FloorController@update');
        Route::get('floor/destroy/{id}', 'FloorController@destroy');

        Route::get('roomclass/create', 'RoomclassController@create');
        Route::post('roomclass/store', 'RoomclassController@store');
        Route::get('roomclass/edit/{id}', 'RoomclassController@edit');
        Route::post('roomclass/update', 'RoomclassController@update');
        Route::get('roomclass/destroy/{id}', 'RoomclassController@destroy');

        Route::get('visiter/create', 'VisiterController@create');
        Route::post('visiter/store', 'VisiterController@store');
        Route::get('visiter/edit/{id}', 'VisiterController@edit');
        Route::post('visiter/update', 'VisiterController@update');
        Route::get('visiter/destroy/{id}', 'VisiterController@destroy');

        Route::get('room/create', 'RoomController@create');
        Route::post('room/store', 'RoomController@store');
        Route::get('room/edit/{id}', 'RoomController@edit');
        Route::post('room/update', 'RoomController@update');
        Route::get('room/destroy/{id}', 'RoomController@destroy');

        Route::get('futurebooking/create', 'FuturebookingController@create');
        Route::post('futurebooking/store', 'FuturebookingController@store');
        Route::get('futurebooking/edit/{id}', 'FuturebookingController@edit');
        Route::post('futurebooking/update', 'FuturebookingController@update');
        Route::get('futurebooking/destroy/{id}', 'FuturebookingController@destroy');

        Route::get('booking/create', 'BookingController@create');
        Route::post('booking/store', 'BookingController@store');
        Route::get('booking/edit/{id}', 'BookingController@edit');
        Route::post('booking/update', 'BookingController@update');
        Route::get('booking/destroy/{id}', 'BookingController@destroy');
