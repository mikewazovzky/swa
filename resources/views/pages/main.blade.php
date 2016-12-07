@extends('layouts.app')
@section('header')	 
	<link rel="stylesheet" type="text/css" href="/css/main.css">

@stop

@section('content')

<div class="main" id="tmp">	
	<h1 id="title">Путеводитель<br>по юго-западу США</h1>
	<h2 id="subtitle">Невада. Юта. Аризона. Калифорния.<br>Национальные парки.</h2>

	@foreach($locations as $location)
		@include('pages.brief')
	@endforeach	
</div>

<!-- Scren and container size -->
<span id="window" style="color: white;"></span>/<span id="container" style="color: white;"></span>
<!-- -->
@stop

@section('footer')
	<script>
		window.addEventListener('resize', function(event){
				press();
		});
		
		window.addEventListener('load', function(event){
				press();
		});
		
		function press() {
			var width = $(window).width();
				//document.getElementById("window").innerHTML = "Window width: " + width;
				var container = width - width % 320;				
				document.getElementById("tmp").style.width = container + "px";
				//document.getElementById("container").innerHTML = "Container width: " + document.getElementById("tmp").style.width;
		}
	 </script>
@stop
