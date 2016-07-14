<nav id="hmenu" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand">{{  title }}</a>
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="?ctrl=Log&action=View" target="_blank">ViewLog</a></li>
			</ul>
			
			<ul id="hmenu" class="nav navbar-nav navbar-right">
				{% for item in menu %}
				<li><a href="{{ item.href }}">{{ item.link }}</a></li>
				{% endfor %}
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>

