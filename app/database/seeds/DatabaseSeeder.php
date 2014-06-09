<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('RolesTableSeeder');
		$this->command->info('Roles table seeded!');

		$this->call('UsuariosTableSeeder');
		$this->command->info('Usuarios table seeded!');

		
	}
}