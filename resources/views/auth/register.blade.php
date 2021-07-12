@extends('layouts.app')

@section('content')
<div class="bg-image" style="background-image: url('{{config('app.url')}}dashmix/assets/media/photos/homez.jpg');">
    <div class="row no-gutters justify-content-center bg-black-75">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign Up Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx text-success font-w700 font-size-h1" href="index.html">
                            <span class="text-dark">Amazing</span><span class="text-primary">Promise</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="signup-username" name="signup-username" placeholder="Username">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Email">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a class="font-w600 font-size-sm" href="#" data-toggle="modal" data-target="#modal-terms">Terms &amp; Conditions</a>
                            <div class="custom-control custom-checkbox custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                <label class="custom-control-label" for="signup-terms">I agree</label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-block btn-hero-primary">
                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                            </button>
                        </div>
                    </form>
                    <!-- END Sign Up Form -->
                </div>
            </div>
        </div>
        <!-- END Sign Up Block -->
    </div>
</div>
@endsection
