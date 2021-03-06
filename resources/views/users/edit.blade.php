@extends('layouts.app')

@section('content')	

	<div class="container">
		<h1> Update User Data</h1>
		<hr>
		
		{!! Form::model($user, ['method' => 'PATCH', 'class' => 'form-horizontal', 'id' => 'userForm', 'files'=>true, 'action' => ['UsersController@update', $user->id]]) !!}
			
			@include('users.form', [
				'submitButtonText' => 'Update User', 
				'imageSrc' => ($user->avatar ? : 'user.png'),
				'emailDisabled' => true
				])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop

