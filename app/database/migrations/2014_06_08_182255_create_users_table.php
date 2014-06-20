<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('firstname', 50);
			$table->string('lastname', 50);
			$table->string('username',50);
			$table->string('email',320);
			$table->string('password',64);
			$table->string('remember_token',100);
			$table->integer('id_rol')->unsigned();
			
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}