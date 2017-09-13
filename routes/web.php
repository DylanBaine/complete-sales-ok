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
Route::get('/logout-secure', function(){
	return view('auth.logout');
});

Auth::routes();

Route::group(['prefix' => 'home'], function (){
	Route::get('/', 'HomeController@index');
	Route::put('/edit-frontpage/{id}', 'HomePageController@edit');

	Route::get('/items', 'StoreItemController@index');
	Route::post('/items/add', 'StoreItemController@addItem');

	Route::get('/items/{id}/edit', 'StoreItemController@editView');
	Route::put('/items/{id}/edit', 'StoreItemController@edit');
	Route::delete('/items/{id}/delete', 'StoreItemController@delete');

	Route::put('/seo/{id}', 'SeoController@make');
});
