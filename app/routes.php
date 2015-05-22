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

Route::get('adventure_template/{next}', ['uses' => 'GameController@showAdventureTemplate']);

Route::get('field', "GameController@showField");

Route::post('field', "GameController@plant");

Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout');

Route::post('/signup','HomeController@signUp');

Route::get('hello', 'HomeController@showWelcome');

Route::post('insertSeed','GameController@insertSeed');

Route::post('insertItem','GameController@insertItem');

Route::post('sellItem','GameController@sellItem');

Route::post('buyItem','GameController@buyItem');

Route::post('searchMarket','GameController@searchMarket');

Route::get('getMound/{mound}', "GameController@getMound");

Route::get('getComplDate/{mound}', "GameController@getComplDate");

Route::get('getSeeds', "GameController@getSeeds");

Route::post('plant', "GameController@plant");

