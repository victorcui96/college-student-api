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

// Albums collecton routes
Route::get('/albums', 'AlbumController@index');
Route::post('/albums', 'AlbumController@create');

// Albums singular routes
Route::get('/albums/{id}', 'AlbumController@show');
Route::put('/albums/{id}', 'AlbumController@update');
Route::delete('/albums/{id}', 'AlbumController@destroy');
Route::get('/', function () {
    return view('welcome');
});

// NCAAB players collection routes
Route::get('/players', 'PlayerController@index');
Route::post('/players', 'PlayerController@create');

// Albums singular routes
Route::get('/players/{id}', 'PlayerController@show');
Route::put('/players/{id}', 'PlayerController@update');
Route::delete('/players/{id}', 'PlayerController@destroy');


Route::get('/', function () {
    return view('welcome');
});
