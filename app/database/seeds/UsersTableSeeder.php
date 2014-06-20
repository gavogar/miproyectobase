<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            ['id_rol' => 1, 'firstname' => 'Juan', 'lastname' => 'marusca', 'username' => 'Juan', 'password' => Hash::make('111'), 'email' => 'juan@email.com'],
            ['id_rol' => 1, 'firstname' => 'Pedro', 'lastname' => 'garcete', 'username' => 'Pedro', 'password' => Hash::make('222'), 'email' => 'pedro@email.com'],
            ['id_rol' => 3, 'firstname' => 'Diego', 'lastname' => 'bayo', 'username' => 'Diego', 'password' => Hash::make('333'), 'email' => 'diego@email.com']
        ];
 
        DB::table('users')->insert($users);
	}
}