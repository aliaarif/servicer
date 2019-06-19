@extends('layouts.master')

@section('title')
Quicker Reset Password | Quicker
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

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    
                <form method="POST" action="{{ url('servicer/password/reset') }}">
                @csrf
                <input type="hidden" name="user_type_id" value="2">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label>Email Address</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
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

                <div class="form-group">
                    <label>Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <i class="icon_lock_alt"></i>
                </div>

                <input type="submit" class="btn_1 rounded full-width" name="login" value="Reset Password">
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('servicer/login')}}">Login</a></strong></div>
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


