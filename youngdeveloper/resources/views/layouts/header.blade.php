<!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="/">YoungDeveloper</a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul id="login_section" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chủ đề</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Detail</a>
                                        <a class="dropdown-item" href="/contact">Contact</a>
                                        <a class="dropdown-item" href="/posts">All Posts</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Linh Tinh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                                @if (Auth::guest())
				                    <li class="nav-link auth_login"><a href="#" id="login">Login</a></li>
				                	<li class="nav-link auth_login"><a href="#" id="register">Register</a></li>
				                @else
				                    <li class="dropdown">
				                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				                            {{ Auth::user()->name }} <span class="caret"></span>
				                        </a>
				
				                        <ul class="dropdown-menu" role="menu">
				                            <li>
				                                <a class="dropdown-item" href="{{ route('logout') }}"
				                                    onclick="event.preventDefault();
				                                         document.getElementById('logout-form').submit();">
				                                    Logout
				                                </a>
				
				                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                                    {{ csrf_field() }}
				                                </form>
				                            </li>
				                            <li>
				                            	<a class="dropdown-item" href="/admin">DashBoard</a>
				                            </li>
				                        </ul>
				                    </li>
				                @endif
                                
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="/">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->