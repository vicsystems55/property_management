@extends('layouts.dashboard')

@section('content')

<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{config('app.url')}}dashmix/assets/media/photos/photo19@2x.jpg');">
        <div class="bg-primary-dark-op">
            <div class="content content-full content-top">
                <h1 class="py-5 text-white ">Hi, <br>{{Auth::user()->name}}</h1>
                
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        

       
        <!-- END Dummy content -->
    </div>
    <!-- END Page Content -->
</main>

@endsection