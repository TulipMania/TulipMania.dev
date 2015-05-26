<?php
use Carbon\Carbon;
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

// 	creates the view for the landing page of application corresponds to Route::get('/', 'HomeController@showLanding')
	public function showLanding()
	{
		return View::make('index');
	}



// checkLogin() compares the information the user has placed in signin form and compares it with the DB data corresponds to
// Route::post('login','HomeController@checkLogin');

	public function checkLogin()
	{

		$validator  = Validator::make(Input::all(),User::$rules);
		$user_input = Input::get('user_input');
		$password   = Input::get('password');

		if (Auth::attempt(array('username' => $user_input, 'password' => $password))) {
			return Redirect::action('GameController@showField');
		}
		else if (Auth::attempt(array('email' => $user_input, 'password' => $password))) {
			return Redirect::action('GameController@showField');	
		}else{
			Session::flash('errorMessage','Incorrect email or password');
			return Redirect::back()->withInput();
		}

	}

// logout() logs the user out of the current session and returns to login page
	public function logout()
	{
		Auth::logout();
		Redirect::to('index');
	}



// signUp() contains the logic for signing up a new user
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
			return Redirect::action('GameController@showAdventureTemplate', ['s_intro']);
	    }

		$items = explode(',', User::find(Auth::id())->items);
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		return View::make('showField', ['items' => $items, 'storeItems' => $storeItems]);

	}
	

}


