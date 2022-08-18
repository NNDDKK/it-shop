@extends('layouts.admin.master')
@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    @csrf
    <center>
        <img src="{{asset('admin/images/logo.png')}}">
    </center>
    <span class="login100-form-title p-b-34 p-t-15">
        Register
    </span>

    <div class="wrap-input100 validate-input" data-validate="Enter Name">
        <input class="input100" type="text" name="name" placeholder="Name">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Username">
        <input class="input100" type="text" name="username" placeholder="Username">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Phone">
        <input class="input100" type="text" name="phone" placeholder="Phone">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Address">
        <input class="input100" type="text" name="address" placeholder="Address">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Email">
        <input class="input100" type="email" name="email" placeholder="email">
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter Password">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Confirm Password">
        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Register
        </button>
    </div>
</form>
@endsection