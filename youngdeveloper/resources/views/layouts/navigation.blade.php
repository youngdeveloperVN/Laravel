<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a href="{{ url('/') }}" class="navbar-brand">YoungDeveloper</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#">Java <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/category/java">Java Core</a></li>
						<li><a href="/category/spring">Spring</a></li>
						<li><a href="/category/spring">Libgdx</a></li>
						<li><a href="#">Android Java</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#">PHP <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/category/laravel">Laravel</a></li>
					</ul>
				</li>
				<li><a href="#">Ruby on Rail</a></li>
				<li class="dropdown"><a class="dropdown-toggle"
					data-toggle="dropdown" href="#">Game <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/">AOE</a></li>
						<li><a href="/">LOL</a></li>
					</ul>
				</li>
			</ul>
			<!-- Right Side Of Navbar -->
            <ul id="login_section" class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="auth_login"><a href="#" id="login">Login</a></li>
                	<li class="auth_login"><a href="#" id="register">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                            	<a href="#">Profiles</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>