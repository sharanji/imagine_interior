<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTp-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="<?php echo COMPANY_NAME;?>">

    <meta name="csrf-token" content="{{csrf_token()}}">
    <title><?php echo COMPANY_NAME;?> - {{isset($pageTitle) ? $pageTitle : ""}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/favicon.png')}}">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
    <!-- Vendor CSS-->

    <!-- Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/plugins/tour/tour.css')}}">
    <!-- Page CSS-->

    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/plugins/forms/wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/tables/ag-grid/ag-grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/tables/ag-grid/ag-theme-material.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/aggrid.css')}}">
    <!-- Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/users.css') }}">
    <script src="{{asset('back_end/app-assets/vendors/js/vendors.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/aggrid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">

    <!-- Calander start -->
    <link href="{{asset('back_end/app-assets/css/jquery-ui.css')}}" rel="stylesheet">
    <script src="{{asset('back_end/app-assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('back_end/js/form_validation.js')}}"></script>
    <script src="{{asset('back_end/js/custom.js')}}"></script>
    <!-- Calander end -->

    <!--Dropdown search start-->
    <script src="{{asset('back_end/js/select2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('back_end/app-assets/css/select2.min.css')}}" />
    <!--Dropdown search end-->

</head>

<!-- Body start-->
<body id="body" class="{{THEME_CLASS}}" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include('back_end/layouts.header')
    @include('back_end/layouts.sidebar')

    <!-- Content end-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <!-- Content end-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-2 ">
                <div class="swal2-header">
                    <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"></div>
                    <h2 class="swal2-title" id="swal2-title" style="display: flex;">Are you sure you want to logout? </h2>
                    <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
                </div>
                <div class="text-center">You won't be able to revert this!</div>
                <div class="text-center mt-1">
                    <a href="{{url('logout.html')}}" class=" btn btn-primary btn-lg" aria-label="" style="display: inline-block;">
                        Yes, Logout !
                    </a>
                    <button type="button" class="swal2-cancel btn btn-danger ml-1 btn-lg" data-dismiss="modal" style="display: inline-block;">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end Modal--->

    <?php
			/* $condition ='1=1';
			$condition .=' and id=1';
			$query = 'select * from users where '.$condition.' ';
			$users = DB::select($query); */
			
			#$users = DB::table('users')->get();
			
			#print_r($users);
			//$user_id = auth()->user()->id;		
			/* //view()->share('user_id', $id);
			echo $user_id; */
		?>

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
                "showMethod": "fadeIn"
                , "hideMethod": "fadeOut"
                , timeOut: 2000
            });
            @endif

            @if($error_message)
            toastr.error('{{$error_message}}', {
                "showMethod": "fadeIn"
                , "hideMethod": "fadeOut"
                , timeOut: 2000
            });
            @endif
        })

    </script>
    @endif
    <!-- Response message end here -->

</body>
<!--Body end-->

<!-- Footer start-->
@include('back_end/layouts.footer')
<!-- Footer end-->
</html>

<script src="{{asset('back_end/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('back_end/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('back_end/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('back_end/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/scripts/components.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/scripts/extensions/toastr.js')}}"></script>
<script src="{{asset('back_end/app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>


<script>
    function sortTable(n) {

        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("customers");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /*If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }

</script>

</head>
<body>
