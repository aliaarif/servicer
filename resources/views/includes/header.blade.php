<header class="header_in @yield('header-class')">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="{{url('/')}}">
							<img src="{{asset('assets/img/logo.png')}}"  height="40" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="{{url('servicer/register')}}" class="btn_add">Be a Quicker</a></li>
						<li class="d-block d-lg-none"><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
					</ul>
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
                        <ul>
                            <li><span class="d-none d-lg-block"><a href="#sign-in-dialog" id="sign-in-1">Login</a></span></li>
							<li><span><a href="#">How It Works</a></span></li>
							<li><span><a href="{{url('categories')}}">Browse Jobs</a></span></li>
							<li class="d-block d-lg-none">
								<span><a href="{{url('servicer/register')}}">Be a Quicker</a></span>
							</li>
                        </ul>
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
</header>