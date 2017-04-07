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

// NCAAB players collection routes
Route::get('/players', 'PlayerController@index');
Route::post('/players', 'PlayerController@create');

// NCAAB players singular routes
Route::get('/players/{id}', 'PlayerController@show');
Route::put('/players/{id}', 'PlayerController@update');
Route::delete('/players/{id}', 'PlayerController@destroy');

// Sorting Algorithms collection routes
Route::get('/algorithms', 'AlgorithmController@index');
Route::post('/algorithms', 'AlgorithmController@create');

// Sorting Algorithms singular routes
Route::get('/algorithms/{id}', 'AlgorithmController@show');
Route::put('/algorithms/{id}', 'AlgorithmController@update');
Route::delete('/algorithms/{id}', 'AlgorithmController@destroy');

// Homepage route
Route::get('/', function () {
    return view('welcome');
});
