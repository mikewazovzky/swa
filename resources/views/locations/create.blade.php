@extends('layouts.app')

@section('content')	

	<div class="container location">

		<h1>Create a New Location</h1>
		
		{!! Form::open(['url' => 'locations']) !!}
			
			@include('locations.form', ['submitButtonText' => 'Create New Location'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop