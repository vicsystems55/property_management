<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header (mini Sidebar mode) -->
    <div class="smini-visible-block">
        <div class="content-header">
            <!-- Logo -->
            <a class="font-w600 text-white tracking-wide" href="index.html">
                A<span class="opacity-75">P</span>
            </a>
            <!-- END Logo -->
        </div>
    </div>
    <!-- END Side Header (mini Sidebar mode) -->

    <!-- Side Header (normal Sidebar mode) -->
    <div class="smini-hidden">
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <a class="font-w600 text-white tracking-wide" href="index.html">
                Amazing<span class="opacity-75">Promise</span>
                <span class="font-w400">Ltd</span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-lg-none">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header (normal Sidebar mode) -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Actions -->
    
        <!-- END Side Actions -->

        <!-- Side Navigation -->
        <div class="content-side mt-5">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->is('user')?'active':''}}" href="{{route('user.home')}}">
                        <i class="nav-main-link-icon fa fa-chart-bar"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                       
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->is('user/project_types')?'active':''}}" href="{{route('user.project_types')}}">
                        <i class="nav-main-link-icon fa fa-chart-bar"></i>
                        <span class="nav-main-link-name">Project Types</span>
                       
                    </a>
                </li>

                <li class="nav-main-heading">Manage</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-briefcase"></i>
                        <span class="nav-main-link-name">My Projects</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('user/ongoing_projects')?'active':''}} " href="{{route('user.ongoing_projects')}}">
                                <i class="nav-main-link-icon fa fa-plus"></i>
                                <span class="nav-main-link-name">Running Projects</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('user/completed_projects')?'active':''}}" href="{{route('user.completed_projects')}}">
                                <i class="nav-main-link-icon fa fa-plus"></i>
                                <span class="nav-main-link-name">Completed Projects</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('user/paused_projects')?'active':''}}" href="{{route('user.paused_projects')}}">
                                <i class="nav-main-link-icon fa fa-plus"></i>
                                <span class="nav-main-link-name">Paused Projects</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('user/terminated_projects')?'active':''}}" href="{{route('user.terminated_projects')}}">
                                <i class="nav-main-link-icon fa fa-plus"></i>
                                <span class="nav-main-link-name">Terminated Projects</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{request()->is('user/create_project')?'active':''}}" href="{{route('user.create_project')}}">
                                <i class="nav-main-link-icon fa fa-plus"></i>
                                <span class="nav-main-link-name">Create Project</span>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                <?php

                $notifications = App\Notification::where('user_id', Auth::user()->id)->where('status', 'unread')->latest()->get();

            ?>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->is('user/notifications')?'active':''}}" href="{{route('user.notifications')}}">
                        <i class="nav-main-link-icon fa fa-chart-bar"></i>
                        <span class="nav-main-link-name">Notifications</span>
                        <span class="nav-main-link-badge badge badge-pill badge-primary">{{$notifications->count()}}</span>
                    </a>
                </li>
             
                {{-- <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-check"></i>
                        <span class="nav-main-link-name">Payments</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <i class="nav-main-link-icon fa fa-hourglass"></i>
                                <span class="nav-main-link-name">Pending</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                                <span class="nav-main-link-name">Manage</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
              
                <li class="nav-main-heading">Settings</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->is('user/profile')?'active':''}}" href="{{route('user.profile')}}">
                        <i class="nav-main-link-icon fa fa-house-user"></i>
                        <span class="nav-main-link-name">Profile</span>
                        {{--  --}}
                    </a>
                </li>
               
               
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>