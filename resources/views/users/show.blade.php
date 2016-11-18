@extends('layouts.app')

@section('head')
	<link rel="stylesheet" type="text/css" href="/css/users.css">
@stop

@section('content')

	<div class="container users">
		<h1> {{ $user->name }}</h1>
		<p>  {{ $user->email }} </p>		
	</div>

@stop