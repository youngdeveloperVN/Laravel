<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
     
		
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		
		<script src="{{ asset('js/app.js') }}"></script>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
    </head>
    <body>
    		<!-- Top nav -->
    		@include('layouts.navigator')
    		
    		
        	<!-- Navbar Left -->
        	@include('layouts.lesson')
        	
        	
        	<!-- Content -->
        	@include('layouts.navigator')
        	
    </body>
</html>
