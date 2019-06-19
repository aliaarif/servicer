@extends('layouts.master')

@section('title')
Register | Quicker
@endsection

@section('body-class')
id="register_bg"
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
            <h6 class="text-center">Quicker Registration</h6>

            <form method="POST" action="{{ url('servicer/register') }}">
            @csrf
            <input type="hidden" name="user_type_id" value="2">
                <div class="form-group">
                    <label>First Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    <i class="ti-user"></i>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                    <i class="ti-user"></i>
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Your Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <i class="icon_mail_alt"></i>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Your password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <i class="icon_lock_alt"></i>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <i class="icon_lock_alt"></i>
                </div>
                <div id="pass-info" class="clearfix"></div>
                <button type="submit" class="btn_1 rounded full-width">
                    {{ __('Register') }}
                </button>
                {{-- <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{url('servicer/login')}}">Login</a></strong></div> --}}
                <div class="text-center add_top_10"><strong><a href="{{url('/')}}"><i class="icon-home"></i> Home</a></strong></div>
            </form>
            <div class="copy">© 2018 Quicker</div>
        </aside>
    </div>
@endsection

@section('footer-class')
d-none
@endsection




