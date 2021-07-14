@extends('layouts.dashboard')

@section('content')

<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{config('app.url')}}dashmix/assets/media/photos/homez.jpg');">
        <div class="bg-warning-dark-op">
            <div class="content content-full content-top animated slideInUp">
                <h1 class="py-5 text-white ">Hi, <br>{{Auth::user()->name}}</h1>

                <div class="">
                    <a href="{{route('user.create_project')}}" class="btn btn-primary">Create a project</a>
                </div>
                
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