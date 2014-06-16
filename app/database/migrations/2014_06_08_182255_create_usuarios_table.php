<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre', 50);
			$table->string('apellido', 50);
			$table->string('username',50);
			$table->string('email',320);
			$table->string('password',64);
			$table->string('remember_token',100);
			$table->integer('id_rol')->unsigned();
			
		});
	}

	public function down()
	{
		Schema::drop('usuarios');
	}
}