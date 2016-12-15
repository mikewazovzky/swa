<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Styles --
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	!-- Custome Styles -->
    <link rel="stylesheet" href="/css/app.css">    
    <!-- Custom page specific styles  -->
	@yield('header')		
	
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">	
		@include('layouts.header')		
		@yield('content')		
		@include('layouts.footer')		
    </div>

    <!-- Scripts -->
	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>
	@yield('footer')
    
</body>
</html>
