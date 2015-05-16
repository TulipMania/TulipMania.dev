<?php 
	class ItemTableSeeder extends Seeder{
	/**
	*	Fill db with user(s)
	*
	*	@return void
	*/
		public function run(){
			DB::table('items')->delete();

			$seed1                    = new Item();
			$seed1->img               = 'base_seed';
			$seed1->name              = 'Yellow Tulip';
			$seed1->description       = "As yellow as the sun and old Henni's teeth. This is a basic tulip.";
			$seed1->price             = 0;
			$seed1->is_seed           = true;
			$seed1->save();

			$seed2                    = new Item();
			$seed2->img               = 'red_seed';
			$seed2->name              = 'Red Tulip';
			$seed2->description       = 'This crimson-tinted tulip certainly stands out. It makes a rose look like an aromatic turd.';
			$seed2->price             = 5;
			$seed2->is_seed           = true;
			$seed2->save();

			$seed3                    = new Item();
			$seed3->img               = 'royal_seed';
			$seed3->name              = 'Royal Tulip';
			$seed3->description       = "This tulip seed came from the King's personal garden! 'Ol Henni wonders how the shopkeepr got it...";
			$seed3->price             = 50;
			$seed3->is_seed          = true;
			$seed3->save();

			$fertilizerA              = new Item();
			$fertilizerA->img         = 'fertilizerA';
			$fertilizerA->name        = 'fertilizerA';
			$fertilizerA->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$fertilizerA->price       = 10;
			$fertilizerA->is_seed     = false;
			$fertilizerA->save();

			$fertilizerB              = new Item();
			$fertilizerB->img         = 'fertilizerB';
			$fertilizerB->name        = 'fertilizerB';
			$fertilizerB->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$fertilizerB->price       = 30;
			$fertilizerB->is_seed     = false;
			$fertilizerB->save();

			$insecticide              = new Item();
			$insecticide->img         = 'insecticide';
			$insecticide->name        = 'insecticide';
			$insecticide->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$insecticide->price       = 20;
			$insecticide->is_seed     = false;
			$insecticide->save();

			$hat1                     = new Item();
			$hat1->img                = 'hat1';
			$hat1->name               = 'hat1';
			$hat1->description        = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$hat1->price              = 100;
			$hat1->is_seed            = false;
			$hat1->save();

			$hat2                     = new Item();
			$hat2->img                = 'hat2';
			$hat2->name               = 'hat2';
			$hat2->description        = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$hat2->price              = 500;
			$hat2->is_seed            = false;
			$hat2->save();

			$shirt                    = new Item();
			$shirt->img               = 'shirt';
			$shirt->name              = 'shirt';
			$shirt->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$shirt->price             = 500;
			$shirt->is_seed           = false;
			$shirt->save();

			$shoes                    = new Item();
			$shoes->img               = 'shoes';
			$shoes->name              = 'shoes';
			$shoes->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$shoes->price             = 500;
			$shoes->is_seed           = false;
			$shoes->save();
		}
	}
	
 ?>