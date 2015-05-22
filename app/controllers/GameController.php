<?php 

class GameController extends BaseController {

public function __construct()
{
    $this->beforeFilter('auth', array('only' => array('index')));
}

// this function contains the logic for the text adventure applicaiton and returning a random url corresponds to 
// Route::get('adventure_template/{next}', ['uses' => 'HomeController@showAdventureTemplate']); 
    public function showAdventureTemplate($id)
    {   
        if (Auth::user()->money < 14)
        {
            Session::flash('errorMessage','Sorry,you must have at least ƒ14 to go on an adventure!');
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

// showField() displays the users game data on the page corresponds to Route::get('field', "HomeController@showField"); 
    public function showField()
    {
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
        $marketItems = DB::table('market')->get();
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

        return View::make('showField', ['storeItems' => $storeItems, 'userItems' => $userItems, 'field' => $field, 'userSeeds' => $userSeeds,'marketItems' => $marketItems]);
    }


    public function plant()
    {

        $seedID = Input::get('seedID');
        $mound = Input::get('mound');
        $userID = Auth::user()->id;

        plant($seedID, $mound, $userID);

        return Redirect::action("GameController@showField");
    }


// insertItem() displays the items for sale in the store and contains the logic pertaining to a user attempting to but items 
// corresponds to Route::post('insertItem','HomeController@insertItem');

    public function insertItem()
    {  
        if (Auth::user()->money < 0)
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
    
    public function getMound($mound)
    {
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

    public function getSeeds()
    {
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

    public function sellItem()
    {   
        $price = Input::get("price_to_sell");
        $name = Input::get("item_to_sell_name");
        $description = Input::get('description_of_item');
        $itemsTable = DB::table('items')->where('name' ,'=', $name)->first();       
        $itemSold = $itemsTable->id;

        $user = DB::table('users')->where('username','=',Auth::user()->username)->first();

        $userItems = explode(",", trim($user->items));
        $keyToDelete = array_search($itemSold, $userItems);
        unset($userItems[$keyToDelete]);

        DB::table('users')->where('username' , Auth::user()->username)->update(array('items' => implode(",", $userItems))); 
        DB::table('market')->insertGetId(array('price' => $price, 'item_id' => $itemsTable->id, 'user_id' => Auth::user()->id,'description' => $description,'name' => $name,'username'=> Auth::user()->username));


        return Redirect::back();
    }

    public function buyItem()
    {   

        $itemForSale = Input::get('item_for_sale');
        $sellingPrice = Input::get('selling_price');
        $userSelling = Input::get('selling_user');
        $itemId = Input::get('item_id');
            if (Auth::user()->money < $sellingPrice)
            {
                Session::flash('errorMessage', "You Can't afford it kid!");
                return Redirect::back();
            }else{
                $buyer = DB::table('users')->where('username','=',Auth::user()->username)->first();

                $items = explode(",",$buyer->items);
                array_push($items,$itemId);
                DB::table('users')->where('username','=',Auth::user()->username)->update(array('items' => implode(",",$items),'money' => $buyer->money - $sellingPrice));
                DB::table('users')->where('username','=',$userSelling)->increment('money',$sellingPrice);
                DB::table('market')->where('username','=',$userSelling)->where('item_id','=',$itemId)->delete();

                return Redirect::back();
        }
    }


    public function searchMarket()
    {
        $searchQuery = Input::get('searched_item');
        $returnedResult = DB::table('market')->where('name', 'LIKE', '%'.$searchQuery.'%')->get();
        return $returnedResult;
    }
    public function getImg($moundNum){
        $mound = Field::where('mound', '=', $moundNum)->where('user_id', '=', Auth::user()->id)->first();
        if($mound){
            return getImg($mound);
        }
        else{
            return null;
        }
        
    }

}
