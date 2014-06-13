<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login.css">
</head>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div id="login">
	<h1>Catering Web</h1>
	<input type="email" name="" id="input" class="form-control" value="" required="required" title="">
	<input type="password" name="" id="input" class="form-control" required="required" title="">
	<button type="submit" class="btn btn-primary">Login</button>
	<button type="submit" class="btn btn-primary">Regristrarse</button>
</div>

</div>
</body>
</html>