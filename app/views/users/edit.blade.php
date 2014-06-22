@extends('layouts.master')

@section('content')
	<h1>Edit {{ $users->firstname }}</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	<!-- form::model es el componente que se usa para pasar los datos. Dentro del array uso users.update porque llama
	a la función update del controller UsersController -->

	{{ Form::model($users, array('route' => array('users.update', $users->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('firstname', 'FirstName') }}
			{{ Form::text('firstname', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('lastname', 'LastName') }}
			{{ Form::text('lastname', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop