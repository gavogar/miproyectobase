<?php

class Roles extends Eloquent {

	protected $table = 'roles';
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('Users');
	}
	

};

?>
