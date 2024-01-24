<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Imagine Interiors - Saas & Software Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content="https://shreethemes.in">
    <meta name="Version" content="v4.7.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap-yellow.min.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libs/@iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{asset('assets/css/style-yellow.min.css')}}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
    @include('front_end.components.header')
    <style>
        .icon-bar {
            position: fixed;
            top: 50%;
            right: 0%;
            z-index: 100;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 12px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }

        .login {
            background: #1d7ae4;
            color: white;
        }

    </style>
    <body>

        <div class="icon-bar">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google"><i class="fa fa-instagram"></i></a>
            {{-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>

        @yield('content')


        @include('front_end.components.footer')


        {{-- <!-- Cookies Start -->
    <div class="card cookie-popup shadow rounded py-3 px-4">
        <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in" target="_blank" class="text-success h6">use of cookies</a></p>
        <div class="cookie-popup-actions text-end">
            <button><i class="uil uil-times text-dark fs-4"></i></button>
        </div>
    </div>
    <!--Note: Cookies Js including in plugins.init.js')}} (path like; js/plugins.init.js')}}) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- Cookies End --> --}}


        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Lightbox -->
        <script src="{{asset('assets/libs/shufflejs/shuffle.min.js')}}"></script>
        <script src="{{asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
        <!-- Parallax -->
        <script src="{{asset('assets/libs/jarallax/jarallax.min.js')}} "></script>
        <!-- Main Js -->
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.init.js')}}"></script>
        <!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>
