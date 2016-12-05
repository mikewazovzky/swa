@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="/css/user.css">
@stop

@section('content')

	<div class="container">

		<h1>Users</h1>
		<hr/>
		<table class="table table-striped">
			<tr>
				<th>Имя пользователя</th>
				<th>Тип</th> 
				<th>Email</th>
				<th></th>
				<th></th>
			</tr>
			
		@foreach($users as $user)
			
			<tr>
				<td><a href="{{ url('/users', $user->id) }}">{{ $user->name }}</a></td>
				<td>user->type</th> 
				<td>{{ $user->email }}</td>
				<td>
					@include('users.buttonEdit')
				</td>
				<td>
					@include('users.buttonDelete')
				</td>
			</tr>
				
		@endforeach	
		
		<table>	
		
		@include('users.buttonCreate')
		
	</div>

@stop