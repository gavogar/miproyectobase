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


//Procesa el formulario e identifica al usuario
Route::post('/login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'guest']);

//Pagina principal donde está el formulario de identificación
Route::get('/', ['before' => 'guest', function(){
    return View::make('index');
}]);

//Página oculta donde sólo puede ingresar un usuario identificado, este caso asignado a grupo de pages y controllers
Route::group(
	array('before' => 'auth'), function(){
		Route::resource('users', 'UsersController');
		Route::resource('searchs', 'SearchsController');
	}
);






