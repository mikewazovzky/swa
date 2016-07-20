{% extends 'tbase.twig.php' %}
{% block css %}
	{{ parent() }}
	<link rel="stylesheet" type="text/css" href="/../templates/css/tchild.css">
{% endblock %}

{% block content %}
	<div class="child">
		<ul>
			{% for key, item in items %}
				<li>{{ key }}: {{ item }}</li>
			{% endfor %}
		</ul>
	</div>
{% endblock %}