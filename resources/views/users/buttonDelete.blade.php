{!! Form::model($user, ['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}

	{!! Form::submit('delete', ['class' => 'btn btn-danger btn-xs btn-custom']) !!}

{!! Form::close() !!}	