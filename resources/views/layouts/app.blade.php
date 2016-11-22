<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/styles.css">
	
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	
    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="/css/index.css">
 	<link rel="stylesheet" type="text/css" href="/css/header.css">
 	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	
	@yield('head')
	
</head>
<body>
    <div id="app">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

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
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
		
		<div class="content">
			@yield('content')
		</div>
		
    </div>

    <!-- Scripts -->
	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
    
</body>
</html>
