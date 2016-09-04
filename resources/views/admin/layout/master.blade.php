<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>

    @section('styles')
    <!-- Favicon-->
    <link rel="icon" href="{{url('md/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('md/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('md/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('md/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="{{url('md/plugins/material-design-preloader/md-preloader.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('md/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('md/css/themes/all-themes.css')}}" rel="stylesheet" />
    @show
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    @include('admin.layout.partials.searchbar')
    @include('admin.layout.partials.topnav')
    <section>
        @include('admin.layout.partials.leftsidebar')
        {{-- @include('admin.layout.partials.rightsidebar') --}}
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>@yield('title')</h2>
            </div>
            @yield('content')
        </div>
    </section>

    @section('scripts')

    <!-- Jquery Core Js -->
    <script src="{{url('md/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('md/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{url('md/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{url('md/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('md/plugins/node-waves/waves.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{url('md/js/admin.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{url('md/js/demo.js')}}"></script>
    @show
</body>

</html>