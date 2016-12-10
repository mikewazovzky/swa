@extends('layouts.app')

@section('content')	

	<div class="container">
		<h1>Create new user</h1>
		<hr/>
		
		{!! Form::open(['url' => 'users', 'id' => 'formUser', 'files'=>true, 'class' => 'form-horizontal' ]) !!}
			
			@include('users.form', ['submitButtonText' => 'Create User', 'imageSrc' => 'user.png'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop