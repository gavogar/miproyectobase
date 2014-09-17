@extends('layouts.master')

@section('content')
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

					{{ Form::open(array('url' => 'users/' . $user->id)) }}
						
						<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id) }}">Show this User</a>

					<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
						<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit this User</a>
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}

				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop