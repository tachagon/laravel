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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Route::get('hello', 'WelcomeController@hello');
// Route::get('welcome/page/{id}/{title?}', 'WelcomeController@page') -> where(['id'=>'[0-9]+', 'title'=>'[a-zA-Z]+']);

Route::controller('welcome', 'WelcomeController');

Route::controller('pages', 'PagesController');

Route::get('hello', 'HelloController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
