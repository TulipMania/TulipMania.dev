<?php

class HomeController extends BaseController {

public function __construct()
{
	$this->beforeFilter('auth', array('only' => array('index')));
}

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

	public function showAdventureTemplate($id)
	{	
		$scene = Scenario::getFromSID($id);
		$leads_to = explode(',', $scene->leads_to);
		$next_headers = [];
		foreach ($leads_to as $newScene => $next) {
			$next_headers[$next] = Scenario::getFromSID($next)->header;
		}
		$body = $scene->body;

		$data = ['leads_to' => $leads_to, 'next_headers' => $next_headers, 'body' => $body];
		return View::make('adventure_template', $data);
	}
	
	public function checkLogin()
	{

		$validator  = Validator::make(Input::all(),User::$rules);
		$user_input = Input::get('user_input');
		$password   = Input::get('password');

		if (Auth::attempt(array('username' => $user_input, 'password' => $password))) {
			return Redirect::action('HomeController@showField');
		}
		else if (Auth::attempt(array('email' => $user_input, 'password' => $password))) {
			return Redirect::action('HomeController@showField');	
		}else{
			Session::flash('errorMessage','Incorrect email or password');
			return Redirect::back()->withInput();
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

		if(Auth::check()){
			$userItems = explode(',', Auth::user()->items);
			$storeItems = DB::table('items')->where('id', '<', 11)->get();
			return View::make('showField', ['storeItems' => $storeItems]);
		}else{
			return View::make('index');		
		}
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function signUp()
	{

		// create the validator
	    $validator = Validator::make(Input::all(), User::$signUpRules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        return Redirect::back()->withInput()->withErrors($validator);
	    } 
	    else {
			$user           = new User;
			$user->email    = Input::get('newEmail');
			$user->username = Input::get('newUser');
			$user->password = Input::get('newPass');
			$user->save();
			return Redirect::action('HomeController@showLanding');
	    }

		$items = explode(',', User::find(Auth::id())->items);
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		return View::make('showField', ['items' => $items, 'storeItems' => $storeItems]);

	}

}
