<?php 
	public static function plant($seed, $mound, user_id){
		$toPlant = new Field();
		$toPlant->mound = $mound;
		$toPlant->mid_date = now();
		$toPlant->compl_date = now();
		$toPlant->death_date = now();
		$toPlant->user_id = $user_id;
		$toPlant->item_id = $seed;
	}
 ?>