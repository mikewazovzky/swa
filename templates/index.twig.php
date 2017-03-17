<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWA</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <!-- Custom styles for this template -->
	 {% block head %}
	 <link rel="stylesheet" type="text/css" href="templates/css/index.css">
 	 <link rel="stylesheet" type="text/css" href="templates/css/header.css">
 	 <link rel="stylesheet" type="text/css" href="templates/css/footer.css">
	{% endblock %}
 </head>

<body>

<!-- Begin page content -->
{% include 'header.twig.php' %}

{% block content %}
{% endblock %}


{% include 'footer.twig.php' %}

</body>
</html>