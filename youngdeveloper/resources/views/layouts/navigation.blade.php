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
			<?php
			foreach ( \App\Category::where ( 'idCategoryParrent', '=', 0 )->orderBy ( 'id', 'asc' )->get () as $category ) :
				
				$subcategories = \App\Category::where ( 'idCategoryParrent', $category->id )->orderBy ( 'created_at', 'asc' )->get ();
				if (sizeof ( $subcategories ) > 0) {
					echo '<li class="dropdown">';
					echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">';
					echo $category ['name'];
					echo '<span class="caret"></span></a>
													<ul class="dropdown-menu">';
					foreach ( $subcategories as $subcategory ) :
						echo '<li><a href="/category/';
						echo $subcategory ['id'];
						echo '">';
						echo $subcategory ['name'];
						echo '</a></li>';
					endforeach
					;
					echo '</ul></li>';
				} else {
					echo '<li><a href="#">';
					echo $category ['name'];
					echo '</a></li>';
				}
			endforeach;
			?>
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
                            	<a href="/admin">DashBoard</a>
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