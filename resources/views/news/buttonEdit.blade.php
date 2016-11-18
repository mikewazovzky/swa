{!! Form::model($article, ['method' => 'GET', 'route' => ['news.edit', $article->id]]) !!}
{!! Form::submit('edit', ['class' => 'btn btn-primary btn-xs custom']) !!}
{!! Form::close() !!}	