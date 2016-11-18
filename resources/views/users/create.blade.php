@extends('layouts.app')



@section('content')	

	<div class="container location">
		<h1>Create new user</h1>
		<hr/>
		
		{!! Form::open(['url' => 'users', 'class' => 'form-horizontal']) !!}
			
			@include('users.form', ['submitButtonText' => 'Create User'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop