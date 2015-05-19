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

Route::get('adventure_template/{next}', ['uses' => 'HomeController@showAdventureTemplate']);

Route::get('field', "HomeController@showField");

Route::post('field', "HomeController@plant");

Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout');

Route::post('insertItem','HomeController@insertItem');

Route::post('signup','HomeController@signUp');

<<<<<<< HEAD
Route::get('getMound/{mound}', "HomeController@getMound");

Route::get('getComplDate/{mound}', "HomeController@getComplDate");

Route::get('getSeeds', "HomeController@getSeeds");
Route::post('plant', "HomeController@plant");
=======
>>>>>>> eb9cac2f0036b46169c268f2ccdc75dfd623b462

