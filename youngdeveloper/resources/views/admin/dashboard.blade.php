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
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
	<!-- for edit text box -->
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script type="text/javascript">
	  tinymce.init({
	    selector : "textarea",
	    branding: false,
	    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
	    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	  }); 
	</script>
</head>

<body>
		@include('admin.menu')
		<div class="col-md-9 pull-right">
			@yield('content')
		</div>
</body>





</html>