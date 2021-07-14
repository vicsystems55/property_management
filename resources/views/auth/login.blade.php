@extends('layouts.app')

@section('content')
<div class="bg-image" style="background-image: url('{{config('app.url')}}dashmix/assets/media/photos/homez.jpg');">
    <div class="row no-gutters justify-content-center bg-primary-dark-op">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx font-w700 font-size-h1" href="index.html">
                            <span class="text-dark">Amazing</span><span class="text-primary">Promise</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-warning">{{$error}}</p>
                        @endforeach
                    @endif

                    <form class="js-validation-signin" action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="login-username" name="email" placeholder="Email">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                            <div class="custom-control custom-checkbox custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me" checked>
                                <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                            </div>
                            <div class="font-w600 font-size-sm py-1">
                                <a href="javascript:void(0)">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-primary btn-block">
                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                            </button>
                        </div>

                        <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                           
                            <div class="font-w600 font-size-sm mx-auto ">
                                <a class="" href="{{route('register')}}">Dont have an account?</a>
                            </div>
                        </div>

                    </form>

                    <!-- END Sign In Form -->
                </div>
               
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
</div>
@endsection
