@extends('layout')

@section('content')
   <h3>Users again!</h3>
   <ul>
		@foreach($users as $user)
	        <li>{{ $user->name }}</li>
	    @endforeach
   </ul>
@stop