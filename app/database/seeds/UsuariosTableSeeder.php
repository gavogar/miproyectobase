<?php

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('usuarios')->delete();

		// UsuariosTableSeeder
		Usuarios::create(array(
				'nombre' => 'juan',
				'apellido' => 'delospalotes',
				'id_rol' => 1
			));
	}
}