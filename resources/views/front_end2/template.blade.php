<!DOCTYPE html>
<html lang="en">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Imagine Interior Designers</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset("front_end2/css/style.css")}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset("front_end2/css/responsive.css")}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("front_end2/images/favicon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("front_end2/images/favicon/favicon-32x32.png")}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset("front_end2/images/favicon/favicon-16x16.png")}}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>


        @include('front_end2.layouts.header')

        @yield('content')

        @include('front_end2.layouts.footer')

    </div>


    <div class="scroll-to-top-style2 scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>



    <script src="{{asset("front_end2/js/jquery.js")}}">
    </script>
    <script src="{{asset("front_end2/js/appear.js")}}"></script>
    <script src="{{asset("front_end2/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("front_end2/js/bootstrap-select.min.js")}}"></script>
    <script src="{{asset("front_end2/js/isotope.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.bootstrap-touchspin.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.countTo.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.easing.min.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.enllax.min.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.fancybox.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.mixitup.min.js")}}"></script>
    <script src="{{asset("front_end2/js/jquery.paroller.min.js")}}"></script>
    <script src="{{asset("front_end2/js/owl.js")}}"></script>
    <script src="{{asset("front_end2/js/validation.js")}}"></script>
    <script src="{{asset("front_end2/js/wow.js")}}"></script>

    <!---
<script src="{{asset("front_end2/js/gmaps.js")}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="{{asset("front_end2/js/mapapi.js")}}"></script> 
--->
    <script src="{{asset("front_end2/js/map-helper.js")}}"></script>

    <script src="{{asset("front_end2/assets/language-switcher/jquery.polyglot.language.switcher.js" )}}"></script>
    <script src="{{asset("front_end2/assets/timepicker/timePicker.js" )}}"></script>
    <script src="{{asset("front_end2/assets/html5lightbox/html5lightbox.js" )}}"></script>

    <!--Revolution Slider-->
    <script src="{{asset("front_end2/plugins/revolution/js/jquery.themepunch.revolution.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/jquery.themepunch.tools.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.actions.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.carousel.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.migration.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.navigation.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.parallax.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js" )}}"></script>
    <script src="{{asset("front_end2/plugins/revolution/js/extensions/revolution.extension.video.min.js" )}}"></script>
    <script src="{{asset("front_end2/js/main-slider-script.js" )}}"></script>

    <!-- thm custom script -->
    <script src="{{asset("front_end2/js/custom.js" )}}"></script>



</body>


<!--   06:40:40 GMT -->
</html>
