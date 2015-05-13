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

Route::post('/login','HomeController@checkLogin');

Route::get('/logout','HomeController@logout');

Route::post('/signup','HomeController@signUp');

Route::get('hello', 'HomeController@showWelcome');

Route::group(array('before' => 'auth'), function()
{
Route::get('/adventure_template', 'HomeController@showAdventureTemplate');

Route::get('/adventure_template_two', 'HomeController@showAdventureTemplateTwo');

Route::get('/field', "HomeController@showField");

Route::get('/store', 'HomeController@showStore');


});