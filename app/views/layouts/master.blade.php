<!DOCTYPE html>
<html>
	<head>
		@include('includes.headJQUERY') <!-- primero tenemos que incluir jquery sino no compila el resto de los scripts -->
		@include('includes.headJQSEARCH')
		@include('includes.headBS')
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			@section('navigation')
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('users') }}">HOME</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('users') }}">View All Users</a></li>
					<li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
					<li><a href="{{ URL::to('users/search') }}">Search a User</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ URL::to('logout') }}">Logout</a></li>
				</ul>
			@show
		</nav>
     
	    <div class="container">
	       @yield('content')
	    </div>
	</body>
</html>
