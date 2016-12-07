@extends('layouts.app')

@section('header')
	<link rel="stylesheet" href="/css/user.css">
@stop

@section('content')	

	<div class="container">
		<h1> Update User Data</h1>
		<hr>
		
		{!! Form::model($user, ['method' => 'PATCH', 'id' => 'formUser', 'files'=>true, 'action' => ['UsersController@update', $user->id]]) !!}
			
			@include('users.form', ['submitButtonText' => 'Update User', 'imageSrc' => ($user->avatar ? : 'user.png')])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop

