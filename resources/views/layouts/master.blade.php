<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Quicker">
	<meta name="author" content="Quicker">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="_token" content="{!! csrf_token() !!}" />
	<meta name="_path" content="{{ url('/') }}" />
	<title>@yield('title')</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('assets/img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('assets/img/apple-touch-icon-144x144-precomposed.png')}}">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/dropzone.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/jquery.flexdatalist.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
	<link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" />
	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

</head>

<body @yield('body-class')>	
	<div id="page">

		@if(Auth::guard('servicer')->user())
		@include('includes.header-servicer')
		@elseif(Auth::guard('web')->user())
		@include('includes.header-user')
		@else
		@include('includes.header')
		@endif
		<!-- /header -->

		@yield('content')

		@include('includes.footer')
		<!--/footer-->

	</div>
	<!-- page -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{asset('assets/js/common_scripts.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexdatalist.min.js')}}"></script>
	<script src="{{asset('assets/assets/validate.js')}}"></script>
	<script src="{{asset('assets/js/parsley.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/dropzone.js')}}"></script>
	
	<script type="text/javascript">
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
	</script>
	
	<script type="text/javascript">
		@if (count($errors) > 0)
		@foreach ($errors->all() as $error) 
		toastr.error("{{ $error }}");
		@endforeach
		@endif

		@if(session('success-message'))
		toastr.success("{{ session('success-message') }}");
		@endif

		@if(session('error-message'))
		toastr.error("{{ session('error-message') }}");
		@endif

	</script>


	<!-- bootstrap modals -->
	@yield('modals')
	

	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header mb-0">
			<h3>Login</h3>
		</div>

		<div class="row text-center mt-2 mb-3">
			<div class="col-6 pl-1 pr-1">
				<a href="#" onclick="loginBlock(1);"><div class="btn-link btn-block" id="userLoginBlockBtn">User Login</div></a>
			</div>
			<div class="col-6 pl-1 pr-1">
				<a href="#" onclick="loginBlock(2);"><div class="btn-link btn-block" id="quickerLoginBlockBtn">Quicker Login</div></a>
			</div>
		</div>

		<div class="sign-in-wrapper" id="userLoginBlock">
			<div id="userLoginBox">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<input type="hidden" name="user_type_id" value="1">
					
					{{-- <div class="row mt-3">
						<div class="col-6 pl-1 pr-1">
							<a href="#0" class="social_bt facebook"> Facebook</a>
						</div>
						<div class="col-6 pl-1 pr-1">
							<a href="#0" class="social_bt google"> Google</a>
						</div>
					</div>

					<div class="divider mt-3"><span>Or</span></div> --}}

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('email') ? ' is-invalid' : '' }}  @endif" name="email" value="@if(old('user_type_id') == 1) {{ old('email') }} @endif" required autofocus>
						<i class="icon_mail_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
						@endif
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('password') ? ' is-invalid' : '' }} @endif" name="password" required>
						<i class="icon_lock_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
						@endif
					</div>
					<div class="clearfix add_bottom_15">
						<div class="checkboxes float-left">
							<label class="container_check">Remember me
								<input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="float-right mt-1"><label><a style="color: #999;" href="{{ route('password.request') }}">Forgot Password?</a></label></div>
					</div>
					<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
					<div class="text-center mt-2">
						Don’t have an account? <a href="#" onclick="switchLogin('register');">Register</a>
					</div>
				</form>
			</div>
			<div id="userRegisterBox" style="display: none;">
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<input type="hidden" name="user_type_id" value="1">
					{{-- <div class="row mt-3">
						<div class="col-6 pl-1 pr-1">
							<a href="#0" class="social_bt facebook"> Facebook</a>
						</div>
						<div class="col-6 pl-1 pr-1">
							<a href="#0" class="social_bt google"> Google</a>
						</div>
					</div>

					<div class="divider mt-3"><span>Or</span></div> --}}

					<div class="form-group">
						<label>First Name</label>
						<input type="text" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('first_name') ? ' is-invalid' : '' }}  @endif" name="first_name" value="@if(old('user_type_id') == 1) {{ old('first_name') }} @endif" required autofocus>
						<i class="icon_mail_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('first_name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('first_name') }}</strong>
						</span>
						@endif
						@endif
					</div>

					<div class="form-group">
						<label>Last Name</label>
						<input type="text" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('last_name') ? ' is-invalid' : '' }}  @endif" name="last_name" value="@if(old('user_type_id') == 1) {{ old('last_name') }} @endif" required autofocus>
						<i class="icon_mail_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('last_name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('last_name') }}</strong>
						</span>
						@endif
						@endif
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('email') ? ' is-invalid' : '' }}  @endif" name="email" value="@if(old('user_type_id') == 1) {{ old('email') }} @endif" required autofocus>
						<i class="icon_mail_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
						@endif
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('password') ? ' is-invalid' : '' }} @endif" name="password" required>
						<i class="icon_lock_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
						@endif
					</div>

					<div class="form-group">
						<label>Confirm password</label>
						<input type="password" class="form-control @if(old('user_type_id') == 1) {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} @endif" name="password_confirmation" required>
						<i class="icon_lock_alt"></i>
						@if(old('user_type_id') == 1)
						@if ($errors->has('password_confirmation'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password_confirmation') }}</strong>
						</span>
						@endif
						@endif
					</div>
					<div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
					<div class="text-center mt-2">
						Have an account? <a href="#" onclick="switchLogin('login');">Login</a>
					</div>
				</form>
			</div>
		</div>

		<div class="sign-in-wrapper"  id="quickerLoginBlock">
			<form method="POST" action="{{ url('/servicer/login') }}">
				@csrf
				<input type="hidden" name="user_type_id" value="2">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control @if(old('user_type_id') == 2) {{ $errors->has('email') ? ' is-invalid' : '' }} @endif" name="email" value="@if(old('user_type_id') == 2)  {{ old('email') }} @endif" required autofocus>
					<i class="icon_mail_alt"></i>
					@if(old('user_type_id') == 2)
					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
					@endif
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control @if(old('user_type_id') == 2) {{ $errors->has('password') ? ' is-invalid' : '' }} @endif" name="password" required>
					<i class="icon_lock_alt"></i>
					@if(old('user_type_id') == 2)
					@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
					@endif
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
							<input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><label><a style="color: #999;" href="{{ url('servicer/password/reset') }}">Forgot Password?</a></label></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center mt-2">
					Don’t have an account? <a href="{{url('servicer/register')}}">Be a Quicker</a>
				</div>
			</form>
		</div>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->


	<!--THIS IS MOST IMPORTANT PART OF QUOTE STEP FORM-->
	<!--quote steps modal start here // Here contain all logic of how to show diffrent form according to category-->
	{{-- @include('quotes.quote-master') --}}

	<div class="modal quote-modal" id="getQuoteModal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg modal-custom-lg">
			<div class="modal-content quote-modal-block">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body 1-->
				<div class="modal-body cutsom-scroll p-0">
					<iframe id="quoteModalIframe" src="" style="width: 100%;height: calc(100vh - 210px)" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--quote steps modal start here-->
	<!--THIS IS MOST IMPORTANT PART OF QUOTE STEP FORM-->

	

	<!-- Custom SCRIPTS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>

	<!-- scripts -->
	@yield('scripts')
</body>
</html>