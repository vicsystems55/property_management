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

        <h4>Ongoing Projects..</h4>

        <div class="card table-responisive table-striped">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Project Code</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$project->project_name}}</td>
                            <td>{{$project->project_code}}</td>
                            <td>{{$project->created_at->format('D M, Y')}}</td>

                            @if(Auth::user()->role == 'admin')

                                <td>
                                    <a href="{{route('admin.project', $project->project_code)}}" class="btn btn-primary btn-sm shadow">view..</a>
                                </td>
                                
                            @elseif(Auth::user()->role == 'agent')

                                <td>
                                    <a href="{{route('agent.project', $project->project_code)}}" class="btn btn-primary btn-sm shadow">view</a>
                                </td>

                            @elseif(Auth::user()->role == 'user')

                            <td>
                                <a href="{{route('user.project', $project->project_code)}}" class="btn btn-primary btn-sm shadow">view</a>
                            </td>

                                
                            @endif

                       

                        </tr>
                            
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>

       
     
    </div>
    <!-- END Page Content -->
</main>

@endsection