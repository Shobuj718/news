@extends('BackEnd.pages.login.master')
@section('main_content')
<form method="POST" action="{{ route('password.update') }}" id="wrapper">
       @csrf

       <input type="hidden" name="token" value="{{ $token }}">
    <div id="box" class="animated bounceIn">
        <div id="top_header">
            <img src="{{asset('public/BackEnd')}}/img/logo.png" alt="Arise Admin Dashboard Logo">
            <h5>Reset Password.</h5>
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
                <input type="text" placeholder="Email" name="email" value="{{ $email ?? old('email') }}"> <i class="icon-user-check"></i>
            </div>
            <div class="form-block">
                <input type="password" placeholder="Password" name="password"> <i class="icon-spell-check"></i>
            </div>

            <div class="form-block">
                <input type="password" placeholder="Confirm Password" name="password_confirmation"> <i class="icon-spell-check"></i>
            </div>

            <input type="submit" value="Reset Password">
        </div>
    </div>
</form>
@stop