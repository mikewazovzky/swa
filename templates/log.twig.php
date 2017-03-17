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

</head>
<body>
<div class="container-fluid">
<h1>Error log</h1>

<table class="table table-condensed">
<tr>
	<th>Date/Time</th><th>Level</th><th>Message</th><th>Code</th><th>File</th><th>Line</th>

{% for error in errors %}
<tr class="{{error.flag}}">
<td>{{error.time}}</td><td>{{error.level}}</td><td>{{error.message}}</td><td>{{error.code}}</td><td>{{error.file}}</td><td>{{error.line}}</td>
</tr>
{% endfor %}
</table>

</div>
</body>
</html>
