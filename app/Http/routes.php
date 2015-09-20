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

Route::get('/', 'HomeController@index');
Route::get('post/{id}', [
	'uses' => 'PostController@show',
	'as' => 'post_show_path'
	]);
Route::get('auth', [
	'uses' => 'AuthController@index',
	'as' => 'auth_show_path'
	]);
Route::post('auth', [
	'uses' => 'AuthController@store',
	'as' => 'auth_store_path'
	]);