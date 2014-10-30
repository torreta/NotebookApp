<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

		User::create([
			'email'=>'correox@gmail.com',
			'password'=>Hash::make('12345')
		]);
	}

}