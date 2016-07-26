{% extends 'index.twig.php' %}

{% block head %}
	{{ parent() }}
	 <link rel="stylesheet" type="text/css" href="templates/css/{{css}}">
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
			document.getElementById("container").innerHTML = "Window width: " + document.getElementById("tmp").style.width;
	}
	 </script>
{% endblock %}

{% block content %}
<div class="main" id="tmp">

	<h1 id="title">НОВАЯ ГЛАВНАЯ СТРАНИЦА</h1>
	<h2 id="subtitle">Невада. Юта. Аризона. Калифорния.<br>Национальные парки.</h2>
	<h2 id="data" style="color: white;">Window width: </h2>
	<h2 id="container" style="color: white;">Container width: </h2>

	{% for location in locations %}	
	<div class="block" style="background: {{location.color}};">
		<h2>{{ location.title}}</h2>
		<img src="templates/media/{{location.img}}" width="320px"/>
		<p>	{{location.description}}</p>
		<a class="button" href="/?ctrl=Index&action=Location&location={{location.id}}">Подробнее</a>
	</div>
	{% endfor %}

</div>
{% endblock %}	

