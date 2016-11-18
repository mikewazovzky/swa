<div class="form-horizontal">

<div class="form-group">
	{!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-2']) !!}
	<div class="col-sm-4">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2']) !!}
	<div class="col-sm-4">
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>	
</div>	
	
<div class="form-group">
	{!! Form::label('password', 'Password:', ['class' => 'control-label col-sm-2']) !!}
	<div class="col-sm-4">
		{!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
	</div>	
</div>	

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-4">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}
	</div>
</div>	
