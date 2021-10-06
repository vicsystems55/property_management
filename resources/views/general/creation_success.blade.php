@extends('layouts.dashboard')

@section('content')

<main id="main-container">
    <!-- Quick Menu -->
    {{-- <div class="bg-body-dark">
        <div class="content">
            
        </div>
    </div> --}}
    <!-- END Quick Menu -->

    <!-- Page Content -->
    <div class="content">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_ya4ycrti.json"  background="transparent"  speed="1"  style="max-width: 400px; max-height: 400px; "  class="mx-auto text-center" loop  autoplay></lottie-player>
        <div class="c text-center py-3">
            <a href="{{route('user.home')}}" class="btn btn-success">Back Home</a>
        </div>
     
    </div>
    <!-- END Page Content -->
</main>

@endsection