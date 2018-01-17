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

//Historic
Route::group(['prefix' => 'historic'], function () {
  Route::post('/load', 'GamesController@loadHistoric');
});

//Temp
Route::get('/badgeTest', 'BadgesController@getTestPage');
