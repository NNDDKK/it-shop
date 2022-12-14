@extends('layouts.admin.master')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
@csrf
    <center>
        <img src="{{ asset('admin/images/logo.png') }}">
    </center>
    <span class="login100-form-title p-b-34 p-t-15">
        Log in
    </span>

    <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="username" name="username" placeholder="username" id="username">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="password" id="password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Login
        </button>
    </div>

    <div class="text-center p-t-90">
        <a class="txt1" href="{{ route('password.request') }}">
            Forgot Password?
        </a>
    </div>
</form>
@endsection