<?php 
	use Carbon\Carbon;
	
	class Seed extends BaseModel
	{
	    protected $table = 'seeds';

	    private static function convertTime($time){
	    	return explode('_', $time);
	    }

	    public static function getMidDate($seedID){
	    	$seed = DB::table('seeds')->find($seedID);

	    	$midGrowRate = $seed->mid_grow_rate;

	    	$midDate = Carbon::now();
	    	$midDate->addHours($midGrowRate[0]);
	    	$midDate->addMinutes($midGrowRate[1]);
	    	$midDate->addSeconds($midGrowRate[2]);
	    	// dd($midDate->toDateTimeString());
	    	return $midDate->toDateTimeString();
	    }

		public static function getComplDate($seedID, $asDate = false){
			$seed = DB::table('seeds')->find($seedID);

	    	$midGrowRate = $seed->mid_grow_rate;

	    	$complDate = Carbon::now();
	    	$complDate->addHours($midGrowRate[0] * 2);
	    	$complDate->addMinutes($midGrowRate[1] * 2);
	    	$complDate->addSeconds($midGrowRate[2] * 2);
	    	if($asDate){
	    		return $complDate;
	    	}
	    	else{
	    		return $complDate->toDateTimeString();	
	    	}
		}

		public static function getDeathDate($seedID){
			$seed = DB::table('seeds')->find($seedID);

	    	$deathTime = $seed->death_time;

	    	$deathDate = Seed::getComplDate($seedID, true);
	    	$deathDate->addHours($deathTime[0]);
	    	$deathDate->addMinutes($deathTime[1]);
	    	$deathDate->addSeconds($deathTime[2]);

	    	return $deathDate->toDateTimeString();
		}

	}

 ?>