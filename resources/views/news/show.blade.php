@extends('layouts.app')



@section('content')
	
	

	<div class="container location">
		<h1> {{ $article->title }}</h1>
		
		<article>
			<div class="body">
				{{ $article->body }}
			<div>
		</article>			
	</div>

@stop