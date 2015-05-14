<?php 
	function plant($seedID, $mound, $userID){
		$toPlant = new Field();
		$toPlant->mound = $mound;
		$toPlant->mid_date = Seed::getMidDate($seedID);
		$toPlant->compl_date = Seed::getComplDate($seedID);
		$toPlant->death_date = Seed::getDeathDate($seedID);
		$toPlant->user_id = $userID;
		$toPlant->item_id = $seedID;
	}
 ?>