<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$user = Users::join('roles','users.id_rol', '=', 'roles.id')->select('users.*', 'roles.rol')->orderBy('users.id')->get();	

		return View::make('users.index')->with('users', $user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'firstname' => 'required',
			'lastname' => 'required',

			
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('users/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = new Users;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->save();

			// redirect
			Session::flash('message', 'Successfully created user!');
			return Redirect::to('users');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$user = Users::find($id);

		// show the view and pass the nerd to it
		return View::make('users.show')->with('users', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$user = Users::find($id);

		// show the edit form and pass the nerd
		return View::make('users.edit')->with('users', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'firstname'=>'required',
			'lastname'=>'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('users/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = Users::find($id);
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->save();

			// redirect
			Session::flash('message', 'Successfully updated nerd!');
			return Redirect::to('users');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$user = Users::find($id);
		$user->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('users');
	}

}
