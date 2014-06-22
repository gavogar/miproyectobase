<?php

class AuthController extends BaseController {

	public function doLogin()
	{
		// Obtenemos el email, borramos los espacios
        // y convertimos todo a minúscula
        $email = mb_strtolower(trim(Input::get('email')));
        // Obtenemos la contraseña enviada
        $password = Input::get('password');


        // Realizamos la autenticación
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // Aquí también pueden devolver una llamada a otro controlador o
            // devolver una vista
            return Redirect::intended('/users');
            
        }
 
        // La autenticación ha fallado re-direccionamos
        // a la página anterior con los datos enviados

        return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
		
	}

	public function doLogout()
    {
        if(Auth::check()){

            Session::flush();

            return Redirect::to('/' )->with('msg', 'Gracias por visitarnos!.');
        }       
    }
}
