@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Опубликованные отчеты
			@if (!Auth::guest() && Auth::user()->isAdmin())
				<a class="btn btn-info btn-lg pull-right" href="locations/create">Create new</a>
			@endif
		</h1>
		<hr/>

		@foreach($locations as $location)
			
			<h3>
				<a href="{{ url('/locations', $location->id) }}">{{ $location->title }}</a>			
				@if (!Auth::guest() && Auth::user()->isAdmin())	
					{!! Form::model($location, ['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['locations.destroy', $location->id]]) !!}
						{!! Form::submit('delete', ['class' => 'btn btn-link pull-right']) !!}
					{!! Form::close() !!}	
					{!! Form::model($location, ['class' => 'form-inline', 'method' => 'GET', 'route' => ['locations.edit', $location->id]]) !!}
						{!! Form::submit('edit', ['class' => 'btn btn-link pull-right']) !!}
					{!! Form::close() !!}					
				@endif				
			</h3>
			<p>{{ $location->description }}</p>
			
		@endforeach	
	
	</div>

@stop