@extends('layouts.app')

@section('content')	

	<div class="container">

		<h1>Edit Location</h1>
		
		{!! Form::model($location, ['method' => 'PATCH', 'class' => 'form-horizontal', 'files'=>true, 'action' => ['LocationsController@update', $location->id ]]) !!}
			
			@include('locations.form', [
				'submitButtonText' => 'Update Location', 
				'image' => ($location->image ? : 'canyon.jpg'), 
				'page' => ($location->page ? $location->page . '.blade.php': 'none')
			])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop