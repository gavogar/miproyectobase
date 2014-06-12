<?php

class Roles extends Eloquent {

	protected $table = 'roles';
	public $timestamps = false;

	public function usuarios()
	{
		return $this->hasMany('Usuarios');
	}
	

};

?>
