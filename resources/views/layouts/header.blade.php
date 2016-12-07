<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header" >

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Branding Image -->
				<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
				
			</div><!-- navbar-header -->

			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					@foreach($menu as $menuitem)
						<li><a href="{{ $menuitem['href'] }}">{{ $menuitem['link'] }}</a></li>
					@endforeach
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					@if (Auth::guest())
						<li><a href="{{ url('/register') }}">Sign Up</a></li>
						<li><a href="{{ url('/login') }}">Login</a></li>						
					@else
						@if (!Auth::guest() && Auth::user()->isAdmin())						
							<li><a href="/users">Users</a></li>
						@endif                        
						<li><a href="{{ url('/users/' . Auth::user()->id . '/edit') }}">Personal Data</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endif
				</ul><!-- nav navbar-nav navbar-right -->
				
			</div><!-- collapse navbar-collapse -->			
		</div><!-- container -->
	</nav>
</header>