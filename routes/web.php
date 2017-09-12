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

Route::get('/', 'HomePageController@index');


Route::post('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['prefix' => 'home'], function (){
	Route::get('/', 'HomeController@index');
	Route::put('/edit-frontpage/{id}', 'HomePageController@edit');
});
