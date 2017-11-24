<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'YoungDeveloper') }} - @yield('title')</title>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script> -->

<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css')}}" rel="stylesheet">
<link
	href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css"
	rel="stylesheet">

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
	     window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
	</script>

<!-- for edit text box -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>

<script src="{{ asset('js/login.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
	@include('layouts.navigation')
	<div class="container">
		<section id="services">
			<!-- Page Content -->
			<div class="row">
				<div class="col-md-8">
					<h1 class="page-header">
						<small>@yield('path')</small>
					</h1>
					@yield('content')
					@yield('pagination')
				</div>
				@include('layouts.sidebar')
			</div>
		</section>
	</div>
	@include('layouts.footer') @include('layouts.modals') @yield('scripts')
</body>

</html>
