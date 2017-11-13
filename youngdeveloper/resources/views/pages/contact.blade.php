
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'YoungDeveloper') }}</title>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
<link href="{{ asset('css/footer.css')}}"


<link
	href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css"
	rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700"
	rel="stylesheet">
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<style>
.error-template {
	padding: 40px 15px;
	text-align: center;
}

.error-actions {
	margin-top: 15px;
	margin-bottom: 15px;
}

.error-actions .btn {
	margin-right: 10px;
}
</style>
</head>
<body>

	<section id="contact" class="content-section text-center">
		<div class="contact-section">
			<div class="container">
				<h2>Contact Us</h2>
				<p>Feel free to shout us by feeling the contact form or visiting our
					social network sites like Fackebook,Whatsapp,Twitter.</p>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="exampleInputName2">Name</label> <input type="text"
									class="form-control" id="exampleInputName2"
									placeholder="Jane Doe">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail2">Email</label> <input
									type="email" class="form-control" id="exampleInputEmail2"
									placeholder="jane.doe@example.com">
							</div>
							<div class="form-group ">
								<label for="exampleInputText">Your Message</label>
								<textarea class="form-control" placeholder="Description"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Send Message</button>
						</form>

						<hr>
						<h3>Our Social Sites</h3>
						<ul class="list-inline banner-social-buttons">
							<li><a href="#" class="btn btn-default btn-lg"><i
									class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
							<li><a href="#" class="btn btn-default btn-lg"><i
									class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
							<li><a href="#" class="btn btn-default btn-lg"><i
									class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>