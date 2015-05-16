<?php 
	class Scenario extends BaseModel
	{
	    protected $table = 'scenarios';

	    public static function getFromSID($sID){
	    	return Scenario::where('story_id', '=',$sID )->first();
	    }
	}

 ?>