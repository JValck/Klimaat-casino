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

Route::get('/', 'HomeController@index');
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@validateLogin');

Route::group(['middleware' => 'isLoggedIn'], function(){
  Route::get('start', 'GameController@index');
  Route::get('bet', 'BetController@index');
  Route::post('bet', 'BetController@bet');
});

Route::group(['middleware' => ['isLoggedIn', 'hasRaisedBet']], function(){
  Route::get('pinball/{id}', 'PinballController@index');
});
