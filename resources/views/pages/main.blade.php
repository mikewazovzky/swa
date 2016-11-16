@extends('layouts.app')

@section('head')

	<link rel="stylesheet" type="text/css" href="/css/index.css">
 	<link rel="stylesheet" type="text/css" href="/css/header.css">
 	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	 
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script>
	window.addEventListener('resize', function(event){
			press();
	});
	
	window.addEventListener('load', function(event){
			press();
	});
	
	function press() {
		var width = $(window).width();
			document.getElementById("data").innerHTML = "Window width: " + width;
			var container = width - width % 320;
			//alert(container + "px");
			document.getElementById("tmp").style.width = container + "px";
			document.getElementById("container").innerHTML = "Container width: " + document.getElementById("tmp").style.width;
	}
	 </script>
@stop


@section('content')
	
<span id="data" style="color: white;"></span>
/
<span id="container" style="color: white;"></span>

<div class="main" id="tmp">


	
	<h1 id="title">Путеводитель<br>по юго-западу США</h1>
	<h2 id="subtitle">Невада. Юта. Аризона. Калифорния.<br>Национальные парки.</h2>


	@foreach($locations as $location)
		@include('pages.locationshort')
	@endforeach	


</div>
@stop

