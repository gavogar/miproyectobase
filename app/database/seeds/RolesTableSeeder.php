<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('roles')->delete();

		// RolesTablesSeeder
		Roles::create(array(
				'rol' => 'Administrador'
			));
	}
}