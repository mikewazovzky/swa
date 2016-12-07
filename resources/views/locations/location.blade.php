@extends('layouts.app')

@section('header')
	<link rel="stylesheet" href="/css/location.css">
@stop

@section('content')	
	<div class="container location">
		@yield('location')
	</div>
@stop