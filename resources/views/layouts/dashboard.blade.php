<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Amazing Promise Ltd</title>

        <meta name="description" content="Amazing Promise Group Ltd - Property Monitoring Application">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        {{-- <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website"> --}}
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{config('app.url')}}dashmix/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        @yield('page-styles')

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{config('app.url')}}dashmix/assets/css/dashmix.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header


        Footer

            ''                                          Static Footer if no class is added
            'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-dark'                          Dark themed Header
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="
        sidebar-o 
        sidebar-dark 
        enable-page-overlay 
        side-scroll 
        page-header-fixed 

        {{ (request()->is('user')) ? 'page-header-dark page-header-glass' : '' }}

        {{ (request()->is('user/profile')) ? '' : '' }}
        


        main-content-narrow
        ">
            <!-- Side Overlay-->
         
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->

            @if (Auth::user()->role == 'user')

            @include('inc.client_sidebar')

            @elseif(Auth::user()->role == 'agent')

            @include('inc.agent_sidebar')

            @elseif(Auth::user()->role == 'admin')

            @include('inc.admin_sidebar') 
                
            @endif

            {{-- @include('inc.agent_sidebar') --}}
           
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div>
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-dual d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search..</span>
                        </button>
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-fw fa-flag"></i>
                                <span class="badge badge-primary badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                                    Notifications
                                </div>
                                <ul class="nav-items my-2">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mx-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body font-size-sm pr-2">
                                                <div class="font-w600">App was updated to v5.6!</div>
                                                <div class="text-muted font-italic">3 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                   
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-eye mr-1"></i> View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-fw fa-user-circle"></i>
                                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{config('app.url')}}dashmix/assets/media/avatars/avatar10.jpg" alt="">
                                    <div class="pt-2">
                                        <a class="text-white font-w600" href="be_pages_generic_profile.html">{{Auth::user()->name}}</a>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <a class="dropdown-item" href="{{route('user.profile')}}">
                                        <i class="far fa-fw fa-user mr-1"></i> Profile
                                    </a>
                                  
                                  
                                    <div role="separator" class="dropdown-divider"></div>

                                    <!-- Toggle Side Overlay -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                        <i class="far fa-fw fa-building mr-1"></i> Settings
                                    </a>
                                    <!-- END Side Overlay -->

                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('logout')}}">
                                        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                     
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-sidebar-dark">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search Application.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary-darker">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
           @yield('content')
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                <div class="content py-0">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                            Developed <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://vicsystems.com.ng" target="_blank">vicSystems</a>
                        </div>
                        {{-- <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix 3.2</a> &copy; <span data-toggle="year-copy"></span>
                        </div> --}}
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="{{config('app.url')}}dashmix/assets/js/dashmix.core.min.js"></script>

        <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
        <script src="{{config('app.url')}}dashmix/assets/js/dashmix.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="{{config('app.url')}}dashmix/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Page JS Helpers (jQuery Sparkline plugin) -->
        <script>jQuery(function(){Dashmix.helpers('sparkline');});</script>

        @yield('page-script')
    </body>
</html>
