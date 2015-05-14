<?php 
	class Scenario extends BaseModel
	{
	    protected $table = 'scenarios';

	    public static function getFromSID($sID){
	    	return DB::table('scenarios')->where('story_id', '=', $sID)->get()[0];
	    }
	}

 ?>