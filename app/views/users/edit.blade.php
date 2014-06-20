<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a Nerd</a>
	</ul>
</nav>

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

</div>
</body>
</html>