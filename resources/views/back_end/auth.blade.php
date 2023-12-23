<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="q3OHYaOFFYliPjhmqTMa6mLZw2GfObpnQCtoSAMN">
    <title><?php echo isset($pageTitle) ? $pageTitle :""?></title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/favicon.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">


    <link rel="stylesheet" type="text/css" href="{{url('back_end/app-assets/vendors/css/vendors.min.css')}}">
    <!-- Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- Vendor JS-->
    <script src="{{asset('back_end/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- Vendor JS-->

    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/assets/css/style.css')}}">
    <!-- Custom CSS-->

    <link rel="stylesheet" href="{{asset('back_end/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/css/custom-laravel.css')}}">

    <!--Toastr Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/plugins/extensions/toastr.css') }}">
    <!--Toastr End-->
</head>
<body class="vertical-layout vertical-menu-modern 1-column blank-page bg-full-screen-image " data-menu="vertical-menu-modern" data-col="1-column" data-layout="light">
    <!-- Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Content-->
</body>
</html>
<!-- Response message start here -->
@php
$success_message = Session::get('success');
$error_message = Session::get('error');
@endphp

@if($success_message || $error_message)
<script type="text/javascript">
    $(document).ready(function() {
        @if($success_message)
        toastr.success('{{$success_message}}', {
            "showMethod": "slideDown"
            , "hideMethod": "slideUp"
            , timeOut: 2000
        });
        @endif

        @if($error_message)
        toastr.error("Username or Email Doesn't Match Password", '{{$error_message}}', {
            "showMethod": "slideDown"
            , "hideMethod": "slideUp"
            , timeOut: 5000
        });
        @endif
    });

</script>
@endif
<!-- Response message end here -->

<script src="{{asset('back_end/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/scripts/extensions/toastr.js')}}"></script>

<!-- Theme JS-->
<script src="{{asset('back_end/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/scripts/components.js')}}"></script>
<!-- Theme JS-->
