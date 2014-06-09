<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('usuarios', function(Blueprint $table) {
			$table->foreign('id_rol')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('usuarios', function(Blueprint $table) {
			$table->dropForeign('usuarios_id_rol_foreign');
		});
	}
}