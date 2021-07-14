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
                <h3 class="block-title">Partial Table</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <p>
                    The second way is to use <a href="be_ui_grid.html#grid-rutil">responsive utility CSS classes</a> for hiding columns in various screen resolutions. This way you can hide less important columns and keep the most valuable on smaller screens. At the following example the <strong>Access</strong> column isn't visible on small and extra small screens and <strong>Email</strong> column isn't visible on extra small screens.
                </p>
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">
                                <i class="far fa-user"></i>
                            </th>
                            <th>Name</th>
                            <th style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                            <th class="d-none d-md-table-cell text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">Alice Moore</a>
                            </td>
                            <td class="d-none d-sm-table-cell">client1<em class="text-muted">@example.com</em></td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-primary">Personal</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">Danielle Jones</a>
                            </td>
                            <td class="d-none d-sm-table-cell">client2<em class="text-muted">@example.com</em></td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-info">Business</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">Helen Jacobs</a>
                            </td>
                            <td class="d-none d-sm-table-cell">client3<em class="text-muted">@example.com</em></td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-info">Business</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">Andrea Gardner</a>
                            </td>
                            <td class="d-none d-sm-table-cell">client4<em class="text-muted">@example.com</em></td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-success">VIP</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                <a href="be_pages_generic_profile.html">Susan Day</a>
                            </td>
                            <td class="d-none d-sm-table-cell">client5<em class="text-muted">@example.com</em></td>
                            <td class="d-none d-md-table-cell">
                                <span class="badge badge-primary">Personal</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
     
    </div>
    <!-- END Page Content -->
</main>

@endsection