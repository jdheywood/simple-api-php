<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
Route::get('/', function()
{
	return View::make('hello');
});
 */

Route::get('/', 'HomeController@showWelcome');

Route::get('users', function()
{
	return 'Users!';
});

Route::get('size/mobile', 'SizeController@mobile');

Route::get('size/tablet', 'SizeController@tablet');

Route::get('size/desktop', 'SizeController@desktop');
