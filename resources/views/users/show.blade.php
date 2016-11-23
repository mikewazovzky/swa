@extends('layouts.app')

@section('head')
	<link rel="stylesheet" type="text/css" href="/css/users.css">
@stop

@section('content')

	<div class="container users">
		
		@if($user->avatar)
			<img class="img-thumbnail" style="width: 200px;" src="{{ $user->avatar}}">
		@endif
		
		<h1> {{ $user->name }}</h1>
		
		<p>  {{ $user->email }} </p>	
		
	</div>

@stop