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
		if($scene->story_id[0]==='s'){
			$total = count($leads_to) -1;
			 $nextScenario = $leads_to[rand(0,$total)];
			return Redirect::action('HomeController@showAdventureTemplate', $nextScenario);
		}	
		// check first leads_to if it's continue pick random leads_to and only write that
		// one to next headers 
		// }else{
		foreach ($leads_to as $newScene => $next) {
			$next_headers[$next] = Scenario::getFromSID($next)->header;
		}
		// }
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

		$userItems = [];
		foreach (explode(',', Auth::user()->items) as $itemNum) {
			$item = Item::find($itemNum);
			array_push($userItems, $item);
		}
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		$field = DB::table('fields')->where('user_id', '=', Auth::user()->id)->get();
		return View::make('showField', ['storeItems' => $storeItems, 'userItems' => $userItems, 'field' => $field]);
	}

	public function plant(){
		// dd(Input::all());
		$seedID = Input::get('seedID');
		$mound = Input::get('mound');
		$userID = Input::get('userID');

		plant($seedID, $mound, $userID);

		return Redirect::action("HomeController@showField");
	}

	public function insertItem()
	{	if (Auth::user()->money < 0)
	 	{
			Session::flash('errorMessage', "Your broke kid.");
			return Redirect::back();
		}elseif (Auth::user()->money  - intval(Input::get('cost')) < 0) {
			Session::flash('errorMessage', "You dont have enough money.");
			return Redirect::back();
		}
		else{
		DB::table('users')->where('id', Auth::user()->id)->update(['items' => Auth::user()->items."\n".Input::get('item')]);
		DB::table('users')->where('id', Auth::user()->id)->decrement('money', intval(Input::get('cost')));
		return Redirect::back();
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
