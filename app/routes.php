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

Route::get('hello', 'HomeController@showWelcome');

Route::get('adventure_template/{next}', ['uses' => 'HomeController@showAdventureTemplate']);

Route::get('field', "HomeController@showField");

Route::post('field', "HomeController@plant");

Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout');

Route::post('insertItem','HomeController@insertItem');

Route::post('signup','HomeController@signUp');


