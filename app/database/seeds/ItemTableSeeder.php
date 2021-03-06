<?php 
	class ItemTableSeeder extends Seeder{
	/**
	*	Fill db with item(s)
	*
	*	@return void
	*/
		public function run(){
			DB::table('items')->delete();

			$seed1                    = new Item();
			$seed1->img               = 'base_seed.png';
			$seed1->name              = 'Yellow Seed';
			$seed1->description       = "As yellow as ol' Hennie's teeth. This is a basic tulip.";
			$seed1->price             = 0;
			$seed1->is_seed           = true;
			$seed1->save();

			$seed2                    = new Item();
			$seed2->img               = 'red_seed.png';
			$seed2->name              = 'Red Seed';
			$seed2->description       = 'This crimson-tinted tulip certainly stands out. People in Amsterdam seem to love it.';
			$seed2->price             = 5;
			$seed2->is_seed           = true;
			$seed2->save();

			$seed3                    = new Item();
			$seed3->img               = 'royal_seed.png';
			$seed3->name              = 'Royal Seed';
			$seed3->description       = "This tulip seed came from the King's personal garden! Ol' Henni wonders how the shopkeepr got it...";
			$seed3->price             = 50;
			$seed3->is_seed           = true;
			$seed3->save();

			$fertilizerA              = new Item();
			$fertilizerA->img         = 'fertilizerA';
			$fertilizerA->name        = 'Robben Fertilizer';
			$fertilizerA->description = 'Maybe not the best of fertilizers, but seems to do the trick.';
			$fertilizerA->price       = 10;
			$fertilizerA->is_seed     = false;
			$fertilizerA->save();

			$fertilizerB              = new Item();
			$fertilizerB->img         = 'fertilizerB';
			$fertilizerB->name        = 'Luzern Fertilizer';
			$fertilizerB->description = 'That Robben Fertilizer is for the common man. Luzern Fertilizer is what you need!';
			$fertilizerB->price       = 30;
			$fertilizerB->is_seed     = false;
			$fertilizerB->save();

			$insecticide              = new Item();
			$insecticide->img         = 'insecticide';
			$insecticide->name        = 'Depay Insecticide';
			$insecticide->description = 'Bugs want your tulips. Depay obliterates bugs. Shall I say more?';
			$insecticide->price       = 20;
			$insecticide->is_seed     = false;
			$insecticide->save();

			$hat1                     = new Item();
			$hat1->img                = 'hat1';
			$hat1->name               = 'Wide Brim Hat';
			$hat1->description        = 'Look like a nobleman (sort of) with this wide brim hat.';
			$hat1->price              = 100;
			$hat1->is_seed            = false;
			$hat1->save();

			$hat2                     = new Item();
			$hat2->img                = 'hat2';
			$hat2->name               = 'Beaver Pelt Hat';
			$hat2->description        = 'Look like a true Batavian with this fancy Beaver Pelt hat.';
			$hat2->price              = 500;
			$hat2->is_seed            = false;
			$hat2->save();

			$shirt                    = new Item();
			$shirt->img               = 'shirt';
			$shirt->name              = 'shirt';
			$shirt->description       = 'You need a shirt, OK?';
			$shirt->price             = 500;
			$shirt->is_seed           = false;
			$shirt->save();

			$shoes                    = new Item();
			$shoes->img               = 'shoes';
			$shoes->name              = 'shoes';
			$shoes->description       = 'Walk the grounds in style with these comfortable leather shoes.';
			$shoes->price             = 500;
			$shoes->is_seed           = false;
			$shoes->save();

			$tulip1                   = new Item();
			$tulip1->img              = 'red_tulip.png';
			$tulip1->name             = 'Red Tulip';
			$tulip1->description      = 'DESCRIPTION';
			$tulip1->price            = 10;
			$tulip1->is_seed          = false;
			$tulip1->save();

			$tulip2                   = new Item();
			$tulip2->img              = 'yellow_tulip.png';
			$tulip2->name             = 'Yellow Tulip';
			$tulip2->description      = 'DESCRIPTION';
			$tulip2->price            = 10;
			$tulip2->is_seed          = false;
			$tulip2->save();

			$tulip3                   = new Item();
			$tulip3->img              = 'royal_tulip.png';
			$tulip3->name             = 'Royal Tulip';
			$tulip3->description      = 'DESCRIPTION';
			$tulip3->price            = 10;
			$tulip3->is_seed          = false;
			$tulip3->save();

			$tulipFirst               = new Item();
			$tulipFirst->img          = 'first_stage.png';
			$tulipFirst->name         = 'First Stage';
			$tulipFirst->description  = 'This is the first step of growing a beautiful tulip!';
			$tulipFirst->price        = 0;
			$tulipFirst->is_seed      = false;
			$tulipFirst->save();	

			$tulipMid                 = new Item();
			$tulipMid->img            = 'mid_stage.png';
			$tulipMid->name           = 'Mid Stage';
			$tulipMid->description    = "It's almost finished growing!";
			$tulipMid->price          = 0;
			$tulipMid->is_seed        = false;
			$tulipMid->save();			

		}
	}
	
 ?>