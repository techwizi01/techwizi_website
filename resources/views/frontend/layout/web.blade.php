<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    
    <!-- Dynamic SEO Tags -->
    <title>{{ $title ?? 'Techwizi - Best Web Development Company' }}</title>
    <meta name="description"
        content="{{ $description ?? 'We offer Laravel, React, Node.js, API, Web & Mobile App Development' }}">
    <meta name="keywords" content="{{ $keywords ?? 'Laravel, React, Node.js, Web Development, API, Mobile Apps' }}">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="{{ $title ?? 'Techwizi' }}">
    <meta property="og:description" content="{{ $description ?? 'We build scalable web and mobile applications' }}">
    <meta property="og:image" content="{{ asset($image ?? 'images/default.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="{{ $title ?? 'Techwizi' }}">
    <meta name="twitter:description" content="{{ $description ?? 'We build scalable web and mobile applications' }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Stylesheets -->
    <link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Revolution Slider -->
    <link href="{{asset('assets/frontend/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('assets/frontend/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('assets/frontend/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->

    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        @include('frontend.layout._preloader')
        <!-- Preloader End -->

        <!-- Main Header -->
        @include('frontend.layout._header')
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        @include('frontend.layout._sidebar')
        <!-- END sidebar widget item -->

        {{$slot}}

        <!-- Main Footer -->
        @include('frontend.layout._footer')
        <!-- End Main Footer -->

    </div>
    <!-- End PageWrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{asset('assets/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('assets/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script
        src="{{asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/revolution/js/main-slider-script.js')}}"></script>
    <!-- For Js Library -->

    <script src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/frontend/js/appear.js')}}"></script>
    <script src="{{asset('assets/frontend/js/parallax.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.js')}}"></script>
    <script src="{{asset('assets/frontend/js/wow.js')}}"></script>
    <script src="{{asset('assets/frontend/js/validate.js')}}"></script>
    <script src="{{asset('assets/frontend/js/nav-tool.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>

</body>

</html>