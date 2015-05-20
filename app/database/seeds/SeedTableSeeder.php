<?php 
	class SeedTableSeeder extends Seeder{
	/**
	*	Fill db with user(s)
	*
	*	@return void
	*/
		public function run(){
			DB::table('seeds')->delete();

			$seed1                    = new Seed();
			$seed1->mid_grow_rate = "0_1_0";
			$seed1->death_time = "0_5_0";
			$seed1->item_id = 1;
			$seed1->grown_item_id =  12;
			$seed1->save();

			$seed2                    = new Seed();
			$seed2->mid_grow_rate = "0_20_30";
			$seed2->death_time = "1_0_0";
			$seed2->item_id = 2;
			$seed2->grown_item_id =  11;
			$seed2->save();

			$seed3                    = new Seed();
			$seed3->mid_grow_rate = "1_0_0";
			$seed3->death_time = "2_0_0";
			$seed3->item_id = 3;
			$seed3->grown_item_id =  13;
			$seed3->save();
		}
	}
	
 ?>