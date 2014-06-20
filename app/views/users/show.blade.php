<!-- app/views/nerds/show.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('users/index') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All Nerds</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a Nerd</a>
	</ul>
</nav>

<h1>Showing {{ $users->firstname }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $users->firstname }}</h2>
		<p>
			<strong>LastName:</strong> {{ $users->lastname }}<br>
			
		</p>
	</div>

</div>
</body>
</html>