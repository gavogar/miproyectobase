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
		<a class="navbar-brand" href="{{ URL::to('usuarios') }}">Usuario Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('usuarios') }}">View All Usuarios</a></li>
		<li><a href="{{ URL::to('usuarios/create') }}">Create a Usuario</a>
	</ul>
</nav>

<h1>Mi Primer Login</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="datos">

<input type="email" name="" id="input" class="form-control" value="" required="required" title="">

<input type="password" name="" id="input" class="form-control" required="required" title="">


<button type="submit" class="btn btn-primary">Login</button>

</div>

</div>
</body>
</html>