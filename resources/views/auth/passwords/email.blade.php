@extends('layouts.master')

@section('title')
User Reset Password | Quicker
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
                    
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input type="hidden" name="user_type_id" value="1">
                <div class="form-group">
                    <label>Email Address</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <i class="icon_mail_alt"></i>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="submit" class="btn_1 rounded full-width" name="login" value="Send Password Reset Link">
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('login')}}">Login</a></strong></div>
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

