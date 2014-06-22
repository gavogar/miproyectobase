@extends('layouts.master')

@section('content')
	<h1>Showing {{ $users->firstname }}</h1>
	<div class="jumbotron text-center">
		<h2>{{ $users->firstname }}</h2>
		<p>
			<strong>LastName:</strong> {{ $users->lastname }}<br>	
		</p>
	</div>
@stop