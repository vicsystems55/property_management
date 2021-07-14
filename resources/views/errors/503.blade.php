@extends('layouts.app')

@section('content')

<main id="main-container">
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('{{config('app.url')}}dashmix/assets/media/photos/photo19@2x.jpg');">
        <div class="hero bg-white-95">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="px-3 py-5 text-center">
                        <div class="row invisible" data-toggle="appear">
                            <div class="col-sm-6 text-center text-sm-right">
                                <div class="display-1 text-danger font-w700">503</div>
                            </div>
                            <div class="col-sm-6 text-center d-sm-flex align-items-sm-center">
                                <div class="display-1 text-muted font-w300">Error</div>
                            </div>
                        </div>
                        <h1 class="h2 font-w700 mt-5 mb-3 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="300">Oops.. Service not available</h1>
                        <h2 class="h3 font-w400 text-muted mb-5 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="450">Please contact support : support@amazingpromisegroupltd.com</h2>
                        <div class="invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                            <a class="btn btn-hero-secondary" href="{{route('choose')}}">
                                <i class="fa fa-arrow-left mr-1"></i> Go Back Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>

@endsection