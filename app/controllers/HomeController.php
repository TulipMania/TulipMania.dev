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


// this function contains the logic for the text adventure applicaiton and returning a random url corresponds to 
// Route::get('adventure_template/{next}', ['uses' => 'HomeController@showAdventureTemplate']); 
	public function showAdventureTemplate($id)
	{	
		if (Auth::user()->money <= 0)
		{
			Session::flash('errorMessage','Sorry,you do not have enought money to go on an adventure!');
			return Redirect::back()->withInput();
		}else{

			$scene = Scenario::getFromSID($id);
			$leads_to = explode(",",$scene['leads_to']);
			$body = $scene['body'];
			$total = count($leads_to) -1;
			$nextScenario = $leads_to[rand(0,$total)];

			if ($scene['leads_to'] == 'e') {
				$nextScenario = 's_grounds';
			}

			if (substr($scene['story_id'], 1,1) == 'i') {
				DB::table('users')->where('username', '=', Auth::user()->username)->increment('money', $scene['money']);
			}elseif (substr($scene['story_id'], 1,1) == "d") {
				DB::table('users')->where('username', '=', Auth::user()->username)->decrement('money', $scene['money']);
			}

			$data = ['leads_to' => $leads_to, 'next_headers' => $scene['header'],'body' => $body,'nextScenario' => $nextScenario,'story_id' => $scene['story_id']];
			return View::make('adventure_template', $data);

		}
	}


// checkLogin() compares the information the user has placed in signin form and compares it with the DB data corresponds to
// Route::post('login','HomeController@checkLogin');
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

// logout() logs the user out of the current session and returns to login page
	public function logout()
	{
		Auth::logout();
		Redirect::to('index');
	}

// showField() displays the users game data on the page corresponds to Route::get('field', "HomeController@showField"); 
	public function showField(){
		$userItems = [];
		foreach (explode(',', Auth::user()->items) as $itemNum) {
			$item = Item::find($itemNum);
			array_push($userItems, $item);
		}
		$userSeeds = [];
		foreach($userItems as $item){
			if (Seed::find($item->id)){
				array_push($userSeeds, $item);
			}
		}
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		$wholeField = DB::table('fields')->where('user_id', '=', Auth::user()->id)->get();
		$field = [];
		foreach ($wholeField as $mound) {
			$field[$mound->mound] = $mound;
		}
		for($i=1; $i<10; $i++){
			if (!isset($field[$i])){
				$field[$i] = null;
			}
		}
		// dd(Carbon::now());
		// dd($field[1]->mid_date > Carbon::now());
		return View::make('showField', ['storeItems' => $storeItems, 'userItems' => $userItems, 'field' => $field, 'userSeeds' => $userSeeds]);
	}


	public function plant(){

		$seedID = Input::get('seedID');
		$mound = Input::get('mound');
		$userID = Auth::user()->id;

		plant($seedID, $mound, $userID);

		return Redirect::action("HomeController@showField");
	}

// insertItem() displays the items for sale in the store and contains the logic pertaining to a user attempting to but items 
// corresponds to Route::post('insertItem','HomeController@insertItem');
	public function insertItem()
	{	if (Auth::user()->money < 0)
	 	{
			Session::flash('errorMessage', "You're broke.");
			return Redirect::back();
		}elseif (Auth::user()->money  - intval(Input::get('cost')) < 0) {
			Session::flash('errorMessage', "You don't have enough money.");
			return Redirect::back();
		}
		else{
			$itemName = Input::get('item');
			$item = Item::select('id')->where('name', '=', $itemName)->first();
			
			$userItems = Auth::user()->items;
			$userItems .= ', ' . $item->id;
			

			DB::table('users')->where('id', Auth::user()->id)->update(['items' => $userItems]);
			DB::table('users')->where('id', Auth::user()->id)->decrement('money', intval(Input::get('cost')));
			return Redirect::back();
		}

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
			return Redirect::action('HomeController@showLanding');
	    }

		$items = explode(',', User::find(Auth::id())->items);
		$storeItems = DB::table('items')->where('id', '<', 11)->get();
		return View::make('showField', ['items' => $items, 'storeItems' => $storeItems]);

	}

	public function getMound($mound){
		$wholeField = DB::table('fields')->where('user_id', '=', Auth::user()->id)->get();
		$field = [];
		foreach ($wholeField as $mounds) {
			$field[$mounds->mound] = $mounds;
		}
		// dd($mound);
		return Item::find($field[$mound]->item_id)->name;
	}

	public function getComplDate($mound){
		$wholeField = DB::table('fields')->where('user_id', '=', Auth::user()->id)->get();
		$field = [];
		foreach ($wholeField as $mound) {
			$field[$mound->mound] = $mound;
		}
		return Item::find($field[$mound]->item_id)->compl_date;
	}

	public function getSeeds(){
		$userItems = [];
		foreach (explode(',', Auth::user()->items) as $itemNum) {
			$item = Item::find($itemNum);
			array_push($userItems, $item);
		}
		$userSeeds = [];
		foreach($userItems as $item){
			if (Seed::find($item->id)){
				array_push($userSeeds, $item);
			}
		}

		return $userSeeds;
	}
}


