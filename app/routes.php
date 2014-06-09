<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Route::get('/', array('uses' => 'UsuariosController@mostrarUsuarios')); */

// Route::get('/', function (){

	// return Route::controller('micontrolador','UsuariosControllers');

// });

/*Route::get('usuarios/traer', function()
{
  return View::make('usuarios.traer');	

});*/

Route::resource('usuarios', 'UsuariosController');

Route::resource('searchs', 'SearchsController');