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

        <h4>{{$project->project_name}}</h4>
        <p>{{$project->project_code}}</p>


<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Stage 1</a>

                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Stage 2</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Stage 3</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Stage 4</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                    
                <div class="card">
                    <div class="card-body py-5">
                   <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Create Report
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                             
                                <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    
                <div class="card">
                    <div class="card-body py-5">
                        <a href="" class="btn btn-primary">Create Report</a>
                    </div>
                </div>
                
                
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    
                    
                <div class="card">
                    <div class="card-body py-5">
                        <a href="" class="btn btn-primary">Create Report</a>
                    </div>
                </div>
                
                
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    
                    
                <div class="card">
                    <div class="card-body py-5">
                       
                    </div>
                </div>
                
                
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-12">
        <h4>Correspondence</h4>



    </div>


</div>



   
     
    </div>
    <!-- END Page Content -->
</main>

@endsection