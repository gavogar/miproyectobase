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
//Named routes make referring to routes when generating redirects or URLs more convenient. You may specify a name for a route like "as".

Route::get('/logout', array('as'=>'logout', 'uses' => 'AuthController@doLogout'));

//Pagina principal donde está el formulario de identificación
Route::get('/', ['before' => 'guest', function(){
    return View::make('index');
}]);

//Página oculta donde sólo puede ingresar un usuario identificado, este caso asignado a grupo de pages y controllers
Route::group(
	array('before' => 'auth'), function(){
		//se agrega método search a la clase UsersController y para que compile correctamente se tiene que routear primero.
		Route::get('users/search', 'UsersController@search'); 
		Route::resource('users', 'UsersController');
		
	}
);
