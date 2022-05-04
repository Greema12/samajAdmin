<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>



    <body class="authentication-bg">

        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-dark"></i></a>
        </div>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                        </div>
                        <div class="card">

<!-- 

@extends('layouts.app') -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="card-body p-4">
            <div class="">
                             <!-- <div class="card-header">{{ __('Login') }}</div>-->
 

                                 <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Sign In</h4>
                                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="">{{ __('E-Mail Address') }}</label>

                            <div class="form-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter your email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="form-group mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <!--   <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                         <div class="form-group mb-3">
                            <div class="form-group mb-0 text-center">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif   

                                 <p class="text-muted">Don't have an account? <a href="{{URL::to('/')}}/register" class="text-dark ml-1"><b>Sign Up</b></a></p>

                            </div>
                        </div> 
                   </form>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>
@endsection
