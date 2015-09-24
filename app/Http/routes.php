<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>'auth'], function (){
	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' => 'home_path'
		]);
	Route::get('post/create', [
		'uses' => 'PostController@create',
		'as' => 'post_create_path'
		]);
	Route::post('post/create', [
		'uses' => 'PostController@store',
		'as' => 'post_create_path', // No hay conflicto con los nombres de las rutas pues los métodos son distintos
		]);
	Route::get('post/{id}', [
		'uses' => 'PostController@show',
		'as' => 'post_show_path'
		])->where('id', '[0-9]+');
	Route::get('post/{id}/edit', [
		'uses' => 'PostController@edit',
		'as' => 'post_edit_path'
		])->where('id', '[0-9]+');
	Route::patch('post/{id}/edit', [
		'uses' => 'PostController@update',
		'as' => 'post_patch_path'
		])->where('id', '[0-9]+');
	Route::delete('post/{id}/edit', [
		'uses' => 'PostController@destroy',
		'as' => 'post_delete_path'
		])->where('id', '[0-9]+');
});

Route::group(['prefix'=>'api'], function (){
	Route::get('/', function (){
		return "Consultando el api a través de middlewares";
	});
});

Route::get('auth/login', [
	'uses' => 'AuthController@index',
	'as' => 'auth_show_path'
	]);
Route::post('auth/login', [
	'uses' => 'AuthController@store',
	'as' => 'auth_store_path'
	]);
Route::get('auth/logout', [
	'uses' => 'AuthController@destroy',
	'as' => 'auth_destroy_path'
	]);