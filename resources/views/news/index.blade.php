@extends('layouts.app')

@section('content')

	<div class="container location">
		<h1> Articles [now: {{ Carbon\Carbon::now() }}]</h1>
		<hr/>

		@foreach($articles as $article)
			<article>
			
				<h3>
					<a href="{{ url('/news', $article->id) }}">{{ $article->title }}</a> published at [{{ $article->published_at}}] by {{ $article->user->name }} 
				</h3>	
<!------------------------------------------------->					
{!! Form::model($article, ['method' => 'DELETE', 'route' => ['news.destroy', $article->id]]) !!}
	
	<div class="form-group">
		{!! Form::submit('delete', ['class' => 'btn btn-primary btn-xs']) !!}
	</div>

{!! Form::close() !!}			
<!--------------------------------------------------->	
			
				<div class="body">
					{{ $article->body }}
				<div>
				
			</article>			
		@endforeach
	</div>

@stop