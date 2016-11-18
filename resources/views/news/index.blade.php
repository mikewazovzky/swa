@extends('layouts.app')

@section('head')
	<link rel="stylesheet" type="text/css" href="/css/news.css">
@stop

@section('content')

	<div class="container location">
		<h1> Articles [now: {{ Carbon\Carbon::now() }}]</h1>
		<hr/>

		@foreach($articles as $article)
			<article>
			
				<h3>
					<a href="{{ url('/news', $article->id) }}">{{ $article->title }}</a> published at [{{ $article->published_at}}] by {{ $article->user->name }} 
				</h3>	

				<div class="body">
					{{ $article->body }}
				</div>
				
				@if (!Auth::guest() && Auth::user()->isAdmin())
					<table>
						<tr>
							<td>@include('news.buttonEdit')</td>
							<td>@include('news.buttonDelete')</td>
						</tr>
					</table>
				@endif		

			</article>	
			<hr>	
			
		@endforeach
		
		@if (!Auth::guest() && Auth::user()->isAdmin())
			@include('news.buttonCreate')
		@endif
		
	</div>

@stop