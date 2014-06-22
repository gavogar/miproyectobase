@extends('layouts.master')

@section('content')

<h1>Search</h1>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Search User">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="table">
                <thead>
                        <tr>
                            <th>Id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                        <tr>    
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>
                            <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id) }}">Show this User</a>
                            <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit this User</a>                           
                            </td>
                        </tr> 
                    @endforeach 
                </tbody>                    
            </table>
        </div>
    </div>
@stop