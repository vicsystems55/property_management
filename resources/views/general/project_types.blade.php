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

        <style>
            .labl {
    display : block;
    width: 400px;
}
.labl > input{ /* HIDE RADIO */
    visibility: hidden; /* Makes input not-clickable */
    position: absolute; /* Remove input from document flow */
}
.labl > input + div{ /* DIV STYLES */
    cursor:pointer;
    border:2px solid transparent;
}
.labl > input:checked + div{ /* (RADIO CHECKED) DIV STYLES */
    background-color: #ffd6bb;
    border: 1px solid #ff6600;
}

        </style>

        <h4>Project Types</h4>

        <label class="labl">
            <input type="radio" name="radioname" value="one_value" checked="checked"/>
            <div>Select</div>
        </label>
        {{-- <label class="labl">
            <input type="radio" name="radioname" value="another" />
            <div>Small</div>
        </label> --}}

        <div class="row">

            @foreach ($project_types as $project_type)

            <div class="col-md-4">
                <div class="card shadow">
                    <div style="height: 200px; background-image: url({{$project_type->featured_image}}); background-size: cover;" class="card-header">
                    
                    </div>
                    <div class="card-body">
                        <h4>{{$project_type->name}}</h4>
                        <p>{{$project_type->description}}</p>
                    </div>
                   
                </div>
            </div>
                
            @endforeach

            
        </div>
       
     
    </div>
    <!-- END Page Content -->
</main>

@endsection