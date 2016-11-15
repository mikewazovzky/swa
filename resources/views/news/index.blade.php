@extends('layouts.app')



@section('content')
	
	

	<div class="container location">
		<h1> Articles [now: {{ Carbon\Carbon::now() }}]</h1>
		<hr/>

		@foreach($articles as $article)
			<article>
			
				<h3>
					<a href="{{ url('/news', $article->id) }}">{{ $article->title }}</a> published at [{{ $article->published_at}}] by {{ $article->user->name }} <a href="#">delete</a>
				</h3>
				
				<div class="body">
					{{ $article->body }}
				<div>
				
			</article>			
		@endforeach
	</div>

@stop