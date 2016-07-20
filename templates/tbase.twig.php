<!DOCTYPE html>
<head>
	<title>TWIG</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	{% block css %}
		<link rel="stylesheet" type="text/css" href="/../templates/css/tbase.css">
	{% endblock %}
</head>
<body>

<div class="container">
<h2>Базовый шаблон TWIG</h2>

<div class="panel panel-default">
	<div class="panel-body">
		{% block content %}
		{% endblock %}
	</div>
</div>

<div>
	<a href="http://i.imgur.com/RVD4pLK.jpg"><img title="grandcanyon-330" src="http://i.imgur.com/RVD4pLK.jpg" width="200px"/></a>
</div>

</div>
</body>
</html>