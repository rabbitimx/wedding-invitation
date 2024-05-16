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

    <title>Invitación | Dulce Campos y Alfredo Espejel</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('habibi/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('habibi/sass/style.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
    <style>
        .wpo-portfolio-section .grid .img-holder .hover-content i,
        .wpo-portfolio-section-s2 .grid .img-holder .hover-content i {
            font-size: 30px;
            color: #000000;
            font-weight: 600;
        }

        .wpo-portfolio-section .grid .img-holder:before,
        .wpo-portfolio-section-s2 .grid .img-holder:before {
            background: rgba(255, 255, 255, 0.3);
        }

        .padrino-flower {
            width: 380px;
        }

        .padrino-flower.--left {
            position: absolute;
            top: -120px;
            left: 120px
        }

        .padrino-flower.--right {
            position: absolute;
            top: -120px;
            right: 120px
        }

        @media screen and (max-width: 1400px) {
            .padrino-flower.--left {
                position: absolute;
                top: -120px;
                left: 30px;
            }

            .padrino-flower.--right {
                position: absolute;
                top: -120px;
                right: 30px;
            }
        }

        @media screen and (max-width: 1200px) {
            .padrino-flower.--left {
                position: absolute;
                top: -120px;
                left: -60px;
            }

            .padrino-flower.--right {
                position: absolute;
                top: -120px;
                right: -60px;
            }
        }

        @media screen and (max-width: 992px) {
            .padrino-flower.--left {
                position: absolute;
                top: -120px;
                left: -120px;
            }

            .padrino-flower.--right {
                position: absolute;
                top: -120px;
                right: -120px;
            }
        }

        .color2 .wpo-invitation-area .wpo-invitation-wrap .wpo-event-text ul li a::before,
        .wpo-invitation-area .wpo-invitation-wrap .wpo-event-text ul li a::before {
            background: none;
        }

        .color2 .wpo-invitation-area .wpo-invitation-wrap .wpo-event-text ul li a,
        .wpo-invitation-area .wpo-invitation-wrap .wpo-event-text ul li a {
            color: inherit !important;
            font-weight: 400;
        }
    </style>
</head>

<body class="color2">
    @yield('content')


    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('habibi/js/jquery.min.js') }}"></script>
    <script src="{{ asset('habibi/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('habibi/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('habibi/js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ asset('habibi/js/moving-animation.js') }}"></script>
    <script src="{{ asset('habibi/js/tilt.jquery.min.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('habibi/js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>
