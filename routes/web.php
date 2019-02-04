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

Route::get('/home', [
	'uses' => '\weloveso\Http\Controllers\HomeController@homePage',
	'as'   => 'home',
]);

Route::get('/', [
	'uses' => '\weloveso\Http\Controllers\WelcomeController@index',
	'as'   => 'welcome',
]);

/**
 * Authentication
 */

Route::get('/signup', [
	'uses' => '\weloveso\Http\Controllers\AuthController@getSignup',
	'as'   => 'auth.signup',
	// 'middleware'	=> ['guest'],
]);

Route::post('/signup', [
	'uses' => '\weloveso\Http\Controllers\AuthController@postSignup',
	// 'middleware'	=> ['guest'],
]);

Route::get('/signin', [
	'uses' => '\weloveso\Http\Controllers\AuthController@getSignin',
	'as'   => 'auth.signin',
	// 'middleware'	=> ['guest'],
]);

Route::post('/signin', [
	'uses' => '\weloveso\Http\Controllers\AuthController@postSignin',
	// 'middleware'	=> ['guest'],
]);

Route::get('/signout', [
	'uses' => '\weloveso\Http\Controllers\AuthController@getSignout',
	'as'   => 'auth.signout',
]);

/**
 *	Search
 */

Route::get('/search', [
	'uses' => '\weloveso\Http\Controllers\SearchController@getResults',
	'as'   => 'search.results',
]);

/**
 * User Profile
 */

Route::get('/{username}' ,[
	'uses' => '\weloveso\Http\Controllers\ProfileController@getProfile',
	'as'   => 'profile.index',
]);

Route::get('/profile/edit',[
	'uses' => '\weloveso\Http\Controllers\ProfileController@getEdit',
	'as'   => 'profile.edit',
	'middleware' => ['auth'],
]);

Route::post('/profile/edit',[
	'uses' => '\weloveso\Http\Controllers\ProfileController@postEdit',
	'middleware' => ['auth'],
]);

/**
 * Friends
 */

Route::get('/{username}/friends',[
	'uses' => '\weloveso\Http\Controllers\ProfileController@getFriends',
	'as'   => 'profile.friends',
	'middleware' => ['auth'],
]);