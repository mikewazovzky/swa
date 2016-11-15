@extends('layouts.app')



@section('content')	

	<div class="container location">
		<h1> Update an Article</h1>
		
		{!! Form::model($article, ['method' => 'PATCH', 'action' => ['NewsController@update', $article->id]]) !!}
			
			@include('news.form', ['submitButtonText' => 'Update Article'])

		{!! Form::close() !!}
		
		@include('errors.list')
		
	</div>

@stop