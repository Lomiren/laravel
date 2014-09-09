<?php

class UserSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 $users = [
		 [
	        "username" => "admin",
	        "password" => Hash::make("rootadmin"),
	        "email"    => "admin@lomiren.kz"
			]
		];
  
	    foreach ($users as $user) {
	     	User::create($user);
	    }
	}

}
