{% extends 'index.twig.php' %}

{% block head %}
	{{ parent() }}
	 <link rel="stylesheet" type="text/css" href="templates/css/location.css">
{% endblock %}

{% block content %}
<div class="container location">
	{% include content %}
</div>
{% endblock %}