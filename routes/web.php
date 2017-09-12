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
    return view('front-end.welcome');
});


Route::post('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['prefix' => 'home'], function (){
	Route::get('/', 'HomeController@index');
});
