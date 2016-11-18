{!! Form::model($user, ['method' => 'GET', 'route' => ['users.edit', $user->id]]) !!}
{!! Form::submit('edit', ['class' => 'btn btn-primary btn-xs custom']) !!}
{!! Form::close() !!}	