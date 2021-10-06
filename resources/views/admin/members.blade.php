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

        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Members</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
              
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">
                                <i class="far fa-user"></i>
                            </th>
                            <th>Name</th>
                            <th style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                            <th class="d-none d-md-table-cell text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)


                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="{{asset('avatars')}}/{{$user->avatar}}" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">{{$user->name}}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">

                                {{$user->email}}

                            </td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-primary">{{$user->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('admin.member', $user->user_code)}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="view details">
                                        <i class="fa fa-eye-alt"></i>Details
                                    </a>
                              
                                </div>
                            </td>
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