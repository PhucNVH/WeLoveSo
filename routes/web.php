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

/**
 * Home
 */

Route::get('/', [
	'uses' => '\weloveso\Http\Controllers\HomeController@index',
	'as'   => 'home',
]);

/**
 * Authentication
 */

Route::get('/signup', [
	'uses' => '\weloveso\Http\Controllers\AuthController@getSignup',
	'as'   => 'auth.signup',
]);

