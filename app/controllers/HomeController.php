<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showLanding()
	{
		return View::make('index');
	}

	public function showAdventureTemplate()
	{
		return View::make('adventure_template');
	}

	public function showAdventureTemplateTwo()
	{
		return View::make('adventure_template_two');
	}
	
	public function checkLogin()
	{

		$validator = Validator::make(Input::all(),User::$rules);


		if ($validator->fails())
	    {
			 return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$email = Input::get('email');
			$password = Input::get('password');

		if (Auth::attempt(array('email' => $email,'password' => $password )))
		{
			return Redirect::intended('field');

		} else {
			Session::flash('errorMessage','Incorrect email or password');
			return Redirect::back();
		}
			
		}
	}

	public function logout()
	{
		Auth::logout();
		Redirect::to('index');
	}

	public function showStore()
	{
		return View::make('store');
	}

	public function showField(){
		$items = explode(',', User::find(Auth::id())->items);
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		return View::make('showField', ['items' => $items, 'storeItems' => $storeItems]);
	}

}
