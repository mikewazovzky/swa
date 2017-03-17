<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid hmenu">
		<div class="navbar-header" id="myBrand" >
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand disabled" href="#">{{  title }}</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="?ctrl=Log&action=View" target="_blank">Журнал ошибок</a></li>
			</ul>
				
			<ul class="nav navbar-nav navbar-right">
				{% for item in menu %}
				<li><a href="{{ item.href }}">{{ item.link }}</a></li>
				{% endfor %}
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>