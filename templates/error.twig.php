<!DOCTYPE html>
<html lang="ru">
<head>
	<title>ERROR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		body { color: #000000; background-color: #FFFFFF; }
		p, address {margin-left: 3em;}
		#msg {color: red;}
		#trace {font-size: smaller;}		
</style>
	
</head>
<body>
<div class="container">
<div class="jumbotron">

<h1>ERROR!</h1>

<h2>ERROR_CLASS: <span id="msg">{{ class }}<span></h2>

<p>ERROR_MESSAGE: <span id="msg">{{ message }}</span></p>

<p>ERROR_FILE:{{ file }}</p>

<p>ERROR_LINE:{{ line }}</p>

<h2>ERROR_CODE:{{ code }}</h2>

<p>ERROR_TRACE: <span id="trace">{{ trace }}</span></p>

<hr>
<p>project: test.lessons by Mike Wazovzky (mike.wazovzky@gmail.com)</p>

</div>	
</div>
</body>
</html>
