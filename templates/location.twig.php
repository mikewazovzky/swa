{% extends 'index.twig.php' %}

{% block head %}
	{{ parent() }}
	 <link rel="stylesheet" type="text/css" href="templates/css/{{css}}">
{% endblock %}

{% block content %}
<div class="container location">
	{% include location %}
</div>
{% endblock %}