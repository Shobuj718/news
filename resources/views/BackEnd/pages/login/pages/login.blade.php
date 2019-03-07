@extends('BackEnd.pages.login.master')
@section('main_content')
<form method="POST" action="{{ route('login') }}" id="wrapper">
       @csrf
    <div id="box" class="animated bounceIn">
        <div id="top_header">
            <img src="{{asset('public/BackEnd')}}/img/logo.png" alt="Arise Admin Dashboard Logo">
            <h5>Sign in your control panel.</h5>
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div id="inputs">
            <div class="form-block">
                <input type="text" placeholder="Email Or Mobile" name="email"> <i class="icon-user-check"></i>
            </div>
            <div class="form-block">
                <input type="password" placeholder="Password" name="password"> <i class="icon-spell-check"></i>
            </div>
            <input type="submit" value="Sign In">
        </div>
        <div id="bottom" class="clearfix">
            <div class="pull-right">
                <label class="switch pull-right">
                    <input type="checkbox" class="switch-input"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                    <span class="switch-label" data-on="Yes" data-off="No"></span> 
                    <span class="switch-handle"></span>
                </label>
            </div>

            <div class="pull-right">
                <span class="cb-label">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </span>
                <span class="cb-label">Remember</span>
            </div>
        </div>
    </div>
</form>
@stop