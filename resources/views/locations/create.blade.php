@extends('layouts.app')

@section('content')	

	<div class="container">

		<h1>Create a New Location</h1>
		
		{!! Form::open(['url' => 'locations', 'class' => 'form-horizontal']) !!}
			
			@include('locations.form1', ['submitButtonText' => 'Create New Location'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop