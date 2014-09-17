<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('roles')->delete();

		// RolesTablesSeeder
		$roles = ['rol' => 'Administrador'];

		 DB::table('roles')->insert($roles);
	}
}