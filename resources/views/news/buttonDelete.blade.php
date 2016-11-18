{!! Form::model($article, ['method' => 'DELETE', 'route' => ['news.destroy', $article->id]]) !!}

	{!! Form::submit('delete', ['class' => 'btn btn-danger btn-xs custom']) !!}

{!! Form::close() !!}	