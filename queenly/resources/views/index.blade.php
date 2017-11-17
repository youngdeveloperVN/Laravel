<!DOCTYPE html>
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
		
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
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
							
							<div id="lesson-content" class="col-md-8">
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
