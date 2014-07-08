<?php

class AuthController extends BaseController {

	public function Login()
	{
		// Obtenemos el email, borramos los espacios
        // y convertimos todo a minúscula
        $email = mb_strtolower(trim(Input::get('email')));
        // Obtenemos la contraseña enviada
        $password = Input::get('password'); 
        $remember_token = Input::get('remember_token');

        // Realizamos la autenticación
            if (Auth::attempt(array('email' => $email, 'password' => $password), $remember_token))
            {
                // Aquí también pueden devolver una llamada a otro controlador o
                // devolver una vista
                return Redirect::to('/users')->with('message', $remember_token);
            }
                      
        // La autenticación ha fallado re-direccionamos a la página anterior con los datos enviados
        return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
    }

	public function Logout()
    {
        
        //$id = Auth::id();
        // $user = Users::whereNotNull('remember_token');
        // if( )
        //     {
        //         $user->remember_token = null;
        //         $user->save();
        //         Auth::logout();
        //         Session::flush();
        //         return Redirect::to('/' )->with('msg', 'Gracias por visitarnos!.');  

        //     }
        //     else
        //     {
        //         
        //         return Redirect::to('/' )->with('msg', 'Gracias por visitarnos!.');  
        //     }
        Auth::logout();
        return Redirect::to('/' )->with('msg', 'Gracias por visitarnos!.');            
    }
}
