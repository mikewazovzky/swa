@extends('layouts.app')



@section('content')	

	<div class="container location">
		<h1> Update User Data</h1>
		
		{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
			
			@include('users.form', ['submitButtonText' => 'Update User'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop