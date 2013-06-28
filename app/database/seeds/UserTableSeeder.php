<?php

class UserTableSeeder extends Seeder {

	public function run()
 	{
		$users = [
			['nick' => 'Juan', 'password' => Hash::make('111'), 'email' => 'juan@email.com'],
			['nick' => 'Pedro', 'password' => Hash::make('222'), 'email' => 'pedro@email.com'],
			['nick' => 'Diego', 'password' => Hash::make('333'), 'email' => 'diego@email.com']
		];

		DB::table('users')->insert($users);
	}

}
