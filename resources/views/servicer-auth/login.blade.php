@extends('layouts.master')

@section('title')
Login | Quicker
@endsection

@section('body-class')
id="login_bg"
@endsection

@section('header-class')
d-none
@endsection

@section('content')
<nav id="menu" class="fake_menu"></nav>
    
    <div id="login">
        <aside>
            <figure>
                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" height="35" alt="" class="logo_sticky"></a>
            </figure>
                <h6 class="text-center">Quicker Login</h6>
                <div class="">
                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                    <a href="#0" class="social_bt google">Login with Google</a>
                </div>
                <div class="divider"><span>Or</span></div>

              <form method="POST" action="{{ url('/servicer/login') }}">
                @csrf
                <input type="hidden" name="user_type_id" value="2">
                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <i class="icon_mail_alt"></i>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <i class="icon_lock_alt"></i>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="{{ url('servicer/password/reset') }}">Forgot Password?</a></div>
                </div>
                <input type="submit" class="btn_1 rounded full-width" name="login" value="Login Now">
                <div class="text-center add_top_10">New to Quicker? <strong><a href="{{url('/servicer/register')}}">Register</a></strong></div>
                <div class="text-center add_top_10"><strong><a href="{{url('/')}}"><i class="icon-home"></i> Home</a></strong></div>
            </form>
            <div class="copy">© 2018 Quicker</div>
        </aside>
    </div>
    <!-- /login -->
@endsection

@section('footer-class')
d-none
@endsection

