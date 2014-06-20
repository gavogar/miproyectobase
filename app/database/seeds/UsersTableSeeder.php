<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            ['id_rol' => 1, 'firstname' => 'Juan', 'lastname' => 'marusca', 'username' => 'Juan', 'password' => Hash::make('111'), 'email' => 'juan@email.com'],
           ];
 
        DB::table('users')->insert($users);
	}
}