<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title  -->
<title>World - Blog &amp; Magazine Template</title>

<!-- Favicon  -->
<link rel="icon" href="img/core-img/favicon.ico">

<!-- Style CSS -->
<link rel="stylesheet" href="css/style.css">

</head>

<body>
	@include('layouts.header')
	@include('layouts.slides')

	<div class="main-content-wrapper section-padding-100">
		<div class="container">
			<div class="row justify-content-center">
				@yield('content')
				@include('layouts.sidebar')
			</div>
			@include('layouts.load-more')
		</div>
	</div>

	@include('layouts.footer')
	
	@include('layouts.modals')
	
	
	<script src="{{ asset('js/jquery.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Plugins js -->
	<script src="{{ asset('js/plugins.js') }}"></script>
	<!-- Active js -->
	<script src="{{ asset('js/active.js') }}"></script>
	
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/login.js') }}"></script>
	
	<a id="scrollUp" href="#top"
		style="position: fixed; z-index: 2147483647; display: none;"><i
		class="fa fa-angle-up" aria-hidden="true"></i></a>



</body>
</html>