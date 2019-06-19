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
                            <li><span><a href="{{url('home')}}">Dashboard</a></span></li>
							<li><span><a href="{{url('home/job/history')}}">Quotes</a></span></li>
							<li><span><a href="{{url('home/update-profile')}}">Profile</a></span></li>
							<li>
								<span>
									<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                </span>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<!-- /container -->		
</header>