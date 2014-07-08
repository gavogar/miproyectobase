<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Users extends Eloquent implements UserInterface, RemindableInterface {


use UserTrait, RemindableTrait;

	protected $table = 'users';
	public $timestamps = true;
	
	public function roles()
	{
		return $this->belongsTo('Roles')->select('rol');
	}
	// Pongo todas las funciones de la Clase Abstracta Model que utiliza Illuminate\Auth\UserInterface

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public function getAuthPassword()
	{
	    return $this->password;
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getReminderEmail()
	{
		return $this->email;
	}
};

?>