<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link
			href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css"
			rel="stylesheet">
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/app2.js') }}"></script>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/player.css') }}" rel="stylesheet">
		
    </head>
    <body>
    		<!-- Top nav -->
    		@include('layouts.navigator')
        	<!-- Navbar Left -->
        	<!-- lesson -->
			<section class="push margin-top-contant">
				<div class="container">
					<div class="row">
						<div id="lesson" class="col-md-10 col-md-offset-1">
						
							<div id="lesson-list" class="col-md-4 hidden-sm hidden-xs">
								<!-- Categories Menu -->
								@include('layouts.listcontent')
							</div>
							
							<div id="lesson-content" class="col-md-8" style="min-height: 44150px;">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</section>
        	
        	<!-- Content -->
        	@include('layouts.footer')
        	
    </body>
</html>
