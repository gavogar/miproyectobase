<?php

class Usuarios extends Eloquent {

	protected $table = 'usuarios';
	public $timestamps = true;

	public function roles()
	{
		return $this->belongsTo('Roles')->select('rol');
	}
};

?>