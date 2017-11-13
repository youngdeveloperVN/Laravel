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

</head>

<body>
		<div class="col-md-3 pull-left nav-side-menu">
		    <div class="brand"><a href="/">Brand Logo</a></div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		  
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">
		                <li>
		                  <a href="#">
		                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
		                  </a>
		                </li>
		
		                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
		                  <a href="#"><i class="fa fa-gift fa-lg"></i>Posts<span class="arrow"></span></a>
		                </li>
		                <ul class="sub-menu collapse" id="products">
		                    <li><a href="/admin/category">All Post</a></li>
		                    <li><a href="/admin/category">Top Post</a></li>
		                </ul>
		                <li data-toggle="collapse" data-target="#service" class="collapsed">
		                  <a href="#"><i class="fa fa-globe fa-lg"></i>Category<span class="arrow"></span></a>
		                </li>  
		                <ul class="sub-menu collapse" id="service">
		                  <li><a href="/admin/category">All Category</a></li>
		                </ul>
		
		                <li data-toggle="collapse" data-target="#new" class="collapsed">
		                  <a href="#"><i class="fa fa-car fa-lg"></i>Comment<span class="arrow"></span></a>
		                </li>
		                <ul class="sub-menu collapse" id="new">
		                  <li>All Comment</li>
		                </ul>
		
						<li data-toggle="collapse" data-target="#new" class="collapsed">
		                  <a href="#"><i class="fa fa-car fa-lg"></i>Tabel<span class="arrow"></span></a>
		                </li>
		                <ul class="sub-menu collapse" id="new">
		                  <li>All Table</li>
		                </ul>
		
		                 <li>
		                  <a href="#">
		                  <i class="fa fa-user fa-lg"></i> Profile
		                  </a>
		                  </li>
		
		                 <li>
		                  <a href="#">
		                  <i class="fa fa-users fa-lg"></i> Users
		                  </a>
		                </li>
		            </ul>
		     </div>
		</div>
		
		<div class="col-md-9 pull-right">
			@yield('content')
		</div>
</body>





</html>