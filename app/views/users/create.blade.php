@extends('layouts.master')

@section('content')
	<h1>Create a Nerd</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'users')) }}

		<div class="form-group">
			{{ Form::label('firstname', 'FirstName') }}
			{{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('lastname', 'LastName') }}
			{{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('username', 'UserName') }}
			{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('placeholder'=>'','class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('id_rol', 'Id Rol') }}
			{{ Form::text('id_rol', Input::old('id_rol'), array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop