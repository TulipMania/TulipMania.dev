<?php 
	use Carbon\Carbon;
	function plant($seedID, $mound, $userID){
		$toPlant = new Field();
		$toPlant->mound = $mound;
		$toPlant->mid_date = Seed::getMidDate($seedID);
		$toPlant->compl_date = Seed::getComplDate($seedID);
		$toPlant->death_date = Seed::getDeathDate($seedID);
		$toPlant->user_id = $userID;
		$toPlant->item_id = $seedID;
		$toPlant->save();

		$user = User::find($userID);
		$userInven = $user->items;
		$seed = $seedID . ',';
		$count = 1;
		$userInven = str_replace($seed, '', $userInven, $count);
		$user->items = $userInven;
		$user->save();
	}

	function getImg($mound){
		if($mound == null){
			return null;
		}
		$now = Carbon::now();
		$mid = $mound->mid_date;
		$compl = $mound->compl_date;
		$death = $mound->death_date;
		return Seed::tulipPic($mound->item_id) . ',' . $mid . ',' . $compl . ',' . $death . ',' . $now;
	}

	function getGrowthStatus($data){
			if(!is_array($data)){
				$data = explode(',',getImg($data));
			}
			$now = $data[4];

			$mid = $data[1]; 
			$compl = $data[2];
			$death = $data[3];

			if($now < $mid){
				return 'first';
			}
			else if($now >= $mid && $now < $compl){
				return 'mid';
			}
			else if($now >= $compl && $now < $death){
				return 'compl';
			}
			else{
				return 'dead';
			}
		}
 ?>