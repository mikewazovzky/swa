@extends('layouts.app')

@section('content')

	<div class="container">

		<h1>Опубликованные отчеты</h1>
		<hr/>

		@foreach($locations as $location)
			
			{{-- <a href="{{ url('/users', $user->id) }}">{{ $user->name }}</a> --}}
			
			
			<h3><a href="{{ url('/locations', $location->id) }}">{{ $location->title }}</a></h3>	
			<p>{{ $location->description }}</p>
		@endforeach	
	
	</div>

@stop