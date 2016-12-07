@extends('layouts.app')

@section('content')
	<div class="container">	
		<h1> {{ $location->title }}</h1>
		<article>
			<div class="body">
				{{ $location->description }}
			<div>
			<div class="container">
				<h3>{{ $location->page }} </h3>
				@include('locations.locations.' . $location->page)
			</div>
		</article>
	</div>
@stop