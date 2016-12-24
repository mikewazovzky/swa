@extends('layouts.app')

@section('content')

<div class="container news">
    <div class="row">
        <div class="left hidden-xs col-sm-4 col-md-3"><!-- Left Sidebar -->
			<h1>Новости</h1>
			<p>	Информация о новых публикациях на сайте, поездках и событиях, связанных с национальными парками.</p>
				
			<div class="well">
				<p>Для оперативного получения информации вы можете подписаться на нашу информационную рассылку и получать материалы по электронной почте.</p>
				<form action="">
					<div class="checkbox">
						<label>
						  <input type="checkbox" id="checkbox" name="maillist" > Да
						</label>
					</div>
					
					<fieldset id="maillist">
						Выбрать разделы
						<div class="checkbox">
							<label>
								<input type="checkbox" name="site"> Новости сайта
							</label>
							<label>
								<input type="checkbox" name="park"> Отчеты о поездках	  
							</label>						
							<label>
								<input type="checkbox" name="report"> Информация парков	  
							</label>						
						</div>	
					
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" >
						</div>	
					</fieldset>
					<button type="submit" class="btn btn-default">Подписаться</button>
				</form> 
			</div>	
			
			<div class="well">
				<p>	&copy <a href="http://m-lab.xyz">Monster Lab.</a>, 2016,<br>
					<a href="#">О нас</a>, 
					<a href="#">Помощь</a>, 
					<a href="#">Условия</a>, 
					<a href="#">Конфиденциальность</a>,<br>
					<a href="#">Реклама</a>
				</p>
			</div>	
		</div><!-- Left Sidebar -->

		<div class="center col-sm-8 col-md-9 col-lg-6">
			<h1>Последние записи</h1>
			<p class="now">{{ Carbon\Carbon::now() }} </p>

			@foreach($articles as $article)		
				<div class="article">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><a href="{{ url('/news', $article->id) }}">{{ $article->title }}</a></h3>
						</div>
						<div class="panel-body">
							<p class="now">published at {{ $article->published_at}} by {{ $article->user->name }}</p>
							<p>{{ substr($article->body, 0 , 250) . '...' }}</p>
						</div><!-- panel-body -->	
					</div>
				</div>
			@endforeach
		
			@if (!Auth::guest() && Auth::user()->isAdmin())
				@include('news.buttonCreate')
			@endif
			
		</div><!-- center -->	
		
		<div class="right col-lg-3 hidden-md hidden-sm hidden-xs">
			<h1></h1>
			
			<div class="well">
				<h3>Some Text</h3>
				<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud.</p>
			</div>
			
			<div class="well">
				<h3>Some Text</h3>
				<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud.</p>
			</div>		
			
			<div class="well">
				<h3>Some Text</h3>
				<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud.</p>
			</div>	
			
			<div class="well">
				<h3 class="text-center">ЗДЕСЬ МОГЛА БЫ БЫТЬ<br><strong>ВАША РЕКЛАМА</strong><br>+7 (222) 222-3-222</h3>
			</div>			
					
		</div><!-- Right Sidebar -->
		
	</div>
</div>		
@stop	

@section('footer')
<script>
// click checkbox to show/hide mail list section
//document.getElementById("checkbox").onclick = function() {
$("#checkbox").change(function() {
	var checked = document.getElementById("checkbox").checked;
	if (checked) {
		$("fieldset").css("display", "block");
	} else {
		$("fieldset").css("display", "none");
	}		
});	
		
// hide Password(s) section
//document.getElementById("maillist").style.display = "none";
$("fieldset").css("display", "none");

$("document").ready(function() {	
	prepairEventHandlers();
});

</script>
	
	
@stop