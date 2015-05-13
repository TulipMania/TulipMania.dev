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
			$seed1->img               = 'seed1';
			$seed1->name              = 'seed1';
			$seed1->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$seed1->price             = 0;
			$seed1->save();

			$seed2                    = new Item();
			$seed2->img               = 'seed2';
			$seed2->name              = 'seed2';
			$seed2->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$seed2->price             = 5;
			$seed2->save();

			$seed3                    = new Item();
			$seed3->img               = 'seed3';
			$seed3->name              = 'seed3';
			$seed3->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$seed3->price             = 50;
			$seed3->save();

			$fertilizerA              = new Item();
			$fertilizerA->img         = 'fertilizerA';
			$fertilizerA->name        = 'fertilizerA';
			$fertilizerA->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$fertilizerA->price       = 10;
			$fertilizerA->save();

			$fertilizerB              = new Item();
			$fertilizerB->img         = 'fertilizerB';
			$fertilizerB->name        = 'fertilizerB';
			$fertilizerB->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$fertilizerB->price       = 30;
			$fertilizerB->save();

			$insecticide              = new Item();
			$insecticide->img         = 'insecticide';
			$insecticide->name        = 'insecticide';
			$insecticide->description = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$insecticide->price       = 20;
			$insecticide->save();

			$hat1                     = new Item();
			$hat1->img                = 'hat1';
			$hat1->name               = 'hat1';
			$hat1->description        = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$hat1->price              = 100;
			$hat1->save();

			$hat2                     = new Item();
			$hat2->img                = 'hat2';
			$hat2->name               = 'hat2';
			$hat2->description        = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$hat2->price              = 500;
			$hat2->save();

			$shirt                    = new Item();
			$shirt->img               = 'shirt';
			$shirt->name              = 'shirt';
			$shirt->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$shirt->price             = 500;
			$shirt->save();

			$shoes                    = new Item();
			$shoes->img               = 'shoes';
			$shoes->name              = 'shoes';
			$shoes->description       = 'BLEEP BLOOP, I AM A DESCRIPTION';
			$shoes->price             = 500;
			$shoes->save();
		}
	}
	
 ?>