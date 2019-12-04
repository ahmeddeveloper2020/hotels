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
