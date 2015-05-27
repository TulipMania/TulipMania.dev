<?php 
	class UserTableSeeder extends Seeder{
	/**
	*	Fill db with user(s)
	*
	*	@return void
	*/
		public function run(){
			DB::table('users')->delete();

			$user1            = new User();
			$user1->username  = "RyDin";
			$user1->email     = "rydin@mail.com";
			$user1->password  = $_ENV['DEFAULT_USER_PASS'];
			$user1->items = '1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
			$user1->money = 100;
			$user1->save();

			$user2            = new User();
			$user2->username  = 'jdizzle';
			$user2->email     = 'jdizzle@mail.com';
			$user2->password  = $_ENV['DEFAULT_USER_PASS'];
			$user2->items = '1, 4, 6, 6, 9';
			$user2->money = 100;
			$user2->save();

			$user3            = new User();
			$user3->username  = 'pablops';
			$user3->email     = 'pablops@mail.com';
			$user3->password  = $_ENV['DEFAULT_USER_PASS'];
			$user3->items = '10, 8, 7, 3, 9';
			$user3->money = 100;
			$user3->save();
		}
	}
	
 ?>