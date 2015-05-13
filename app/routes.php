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

Route::get('/', 'HomeController@showLanding');

if (Auth::check()) {
	Route::get('/adventure_template', 'HomeController@showAdventureTemplate');
} else {
    Route::get('/', 'HomeController@showLanding');
}

if (Auth::check()) {
	Route::get('/adventure_template_two', 'HomeController@showAdventureTemplateTwo');
} else {
    Route::get('/', 'HomeController@showLanding');
}

if (Auth::check()) {
	Route::get('/field', "HomeController@showField");
} else {
	Route::get('/', 'HomeController@showLanding');	
}







Route::post('/login','HomeController@checkLogin');

Route::get('/logout','HomeController@logout');

Route::post('/signup','HomeController@signUp');

Route::get('hello', 'HomeController@showWelcome');
