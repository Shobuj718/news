@extends('BackEnd.pages.login.master')
@section('main_content')
<form method="POST" action="{{ route('password.email') }}" id="wrapper">
       @csrf
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
            @if (session('status'))
                <div style="color: green;">
                    <p>{{ session('status') }}</p>
                </div>
            @endif
        </div>
        <div id="inputs">
            <div class="form-block">
                <input type="text" placeholder="Email" value="{{ old('email') }}" name="email"> <i class="icon-user-check"></i>
            </div>
            
            <input type="submit" value="Send Password Reset Link">
        </div>
       
    </div>
</form>
@stop