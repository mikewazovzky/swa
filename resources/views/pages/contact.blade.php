@extends('layouts.app')

@section('head')
	<!-- Styles -->
    <link href="/css/contact.css" rel="stylesheet">
@stop

@section('content')
<div class="container contact">

	<iframe width="500" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgQtiNeBKtUYR2tvvcHt7ZE4&key=AIzaSyCk1tk4ulh8FQpW91l9vCn7c2ze5isgOd0" allowfullscreen></iframe>


	<div class="container contacts">
		<h3 class="text-center">Контакты</h3>
		<p><span class="glyphicon glyphicon-map-marker"></span> Россия. Москва. Космодамианская набережная 52/2</p>
		<p><span class="glyphicon glyphicon-phone"></span> Телефон: (495) 222 22 22</p>
		<p><span class="glyphicon glyphicon-envelope"></span> Электронная почта: mike.wazovzky@gmail.com</p>
	</div>

	
	<div class="container contacts">
		<h3 class="text-center">Отправить сообщение</h3>
		
		{!! Form::open(['url' => 'contact', 'class' => 'form-horizontal']) !!}
			
			<div class="form-group">
				{!! Form::label('name', 'Имя:', ['class' => 'control-label col-sm-3']) !!}
				<div class="col-sm-9">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Введите имя']) !!}
				</div>	
			</div>
		
			<div class="form-group">
				{!! Form::label('email', 'Электронная почта:', ['class' => 'control-label col-sm-3']) !!}
				<div class="col-sm-9">
					{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Введите адрес электронной почты']) !!}
				</div>
			</div>
		
			<div class="form-group">
				{!! Form::label('subj', 'Тема сообщения:', ['class' => 'control-label col-sm-3']) !!}
				<div class="col-sm-9">          
					{!! Form::text('subj', null, ['class' => 'form-control', 'placeholder' => 'Введите тему сообщения']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('body', 'Сообщение:', ['class' => 'control-label col-sm-3']) !!}
				<div class="col-sm-9"> 
					{!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Сообщение', 'rows' => '5']) !!}
				</div>
			</div>
		
			<div class="form-group">        
				<div class="col-sm-offset-3 col-sm-9">
					{!! Form::submit('Отправить', ['class' => 'btn btn-default']) !!}
				</div>
			</div>

		{!! Form::close() !!}
	</div>
</div>
@stop