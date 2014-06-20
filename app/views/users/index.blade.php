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
		<a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All Users</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a User</a>
	</ul>
</nav>

<h1>All the users</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Id</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Rol</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>	
			<td>{{ $user->id }}</td>
			<td>{{ $user->firstname }}</td>
			<td>{{ $user->lastname }}</td>
			<td>{{ $user->rol }}</td>
	
		<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
				{{ Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id) }}">Show this User</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit this User</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>