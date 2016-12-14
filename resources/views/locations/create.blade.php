@extends('layouts.app')

@section('content')	

	<div class="container">

		<h1>Create a New Location</h1>
		
		{!! Form::open(['url' => 'locations', 'class' => 'form-horizontal', 'files'=>true]) !!}
			
			@include('locations.form', [
				'submitButtonText' => 'Create New Location', 
				'image' => 'canyon.jpg', 
				'page' => 'none'
			])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop