<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <title>DC-AE</title>

    <link href="{{ asset('habibi/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('habibi/sass/style.css')}}" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')

    
    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('habibi/js/jquery.min.js')}}"></script>
    <script src="{{ asset('habibi/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('habibi/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('habibi/js/jquery-plugin-collection.js')}}"></script>
    <script src="{{ asset('habibi/js/moving-animation.js')}}"></script>
    <script src="{{ asset('habibi/js/tilt.jquery.min.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('habibi/js/script.js')}}"></script>
    
    @yield('scripts')
</body>

</html>