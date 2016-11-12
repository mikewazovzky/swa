@extends('layouts.app')

@section('head')
	<link rel="stylesheet" type="text/css" href="/css/location.css">
@stop

@section('content')
	
	<div class="container location">
		<h1> {{ $location }} </h1>
		@yield('location')
	</div>
@stop