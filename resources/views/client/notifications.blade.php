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

        <h4>All</h4>

        <div class="list-group">


            @forelse ($notifications as $notification)

                       
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{$notification->title}}</h5>
                  
                </div>
                <p class="mb-1">{{$notification->body}}</p>
                <small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
              </a>
                
            @empty

            <div class="mx-auto text-center py-5">
                <h6 class="text-center">No new notifications yet...</h6>
            </div>
                
            @endforelse




          </div>
       
     
    </div>
    <!-- END Page Content -->
</main>

@endsection