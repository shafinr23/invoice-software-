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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/login-form', function(){
	return view('login.login');
});
Route::post('/user/login','LoginController@Login');

Route::get('/login-dashboard', function(){
	return view('layout.dashboard');
});


Route::get('/reg',function(){
	return view ('reg.reg');
});
Route::post('/user/reg','LoginController@reg');
Route::get('/reg-se',function(){
	return view ('login.login');
});
Route::get('/user_list','LoginController@index');