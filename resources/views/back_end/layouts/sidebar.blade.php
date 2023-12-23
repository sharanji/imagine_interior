<?php
	$user_type = isset(auth()->user()->user_type) ? auth()->user()->user_type : 0 ;
?>
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto mx-0">
                <a class="navbar-brand" href="{{url('dashboard.html')}}">
                    <!--<div class="brand-logo"></div>
				   <h2 class="brand-text mb-0">CMA</h2>-->
                    <?php 
						if($user_type == 0) #Admin
						{
							?>
                    <img class="app-logo mt-1" src="{{ asset('uploads/logo.png') }}" width="170px" height="50px" alt="Logo">
                    <?php 
						}
					?>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <!-- /* <div -class="shadow-bottom"></div> */ -->

    <?php 
		if($user_type == 0) #Admin
		{
			?>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item <?php if(isset($dashboard)){?>active<?php } ?>">
                <a href="{{url('dashboard.html')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><?php /* <span class="badge badge badge-warning badge-pill float-right mr-2">2</span> */ ?></a>
            </li>

            <li class="navigation-header">
                <span>Apps</span>
            </li>

            <!-- Inventory start-->
            <li class="nav-item @if(isset($enquiry))has-sub open @endif">
                <a href="javascript:void(0)"><i class="feather icon-layers"></i>
                    <span class="menu-title">Enquiry</span>
                </a>
                <ul class="menu-content">
                    <li --class="@if(isset($enquiry)) active @endif">
                        <a href="{{url('manage-enquiry.html')}}"><i class="feather icon-circle"></i><span class="menu-item">Manage Enquiry</span></a>
                    </li>

                </ul>
            </li>

            <li class="nav-item @if(isset($gallery))has-sub open @endif">
                <a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title">Gallery</span></a>
                <ul class="menu-content">

                    <li --class="@if(isset($gallery)) active @endif">
                        <a href="{{url('manage-gallery.html')}}"><i class="feather icon-circle"></i><span class="menu-item">Manage Gallery</span></a>
                    </li>

                </ul>
            </li>
            <!-- Purchase End-->



            <li class="navigation-header">
                <span>Settings</span>
            </li>

            <li class="nav-item <?php if(isset($companySetting)){ ?>has-sub open<?php } ?>">
                <a href="#"><i class="feather icon-list"></i>
                    <span class="menu-title" data-i18n="Application Settting">
                        Application Settting
                    </span>
                </a>
                <ul class="menu-content">
                    <li --class="<?php if(isset($companySetting)){?> active<?php } ?>">
                        <a href="{{url('company-setting.html')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Company Setup">Company Setup</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item <?php if(isset($systemManager)){?>has-sub open<?php } ?>">
                <a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Content">System Manager</span></a>
                <!-- Setup start -->
                <ul class="menu-content">
                    <li class="<?php if(isset($setup)){?>has-sub open is-shown<?php } ?>">
                        <a href="#"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Locations">
                                Setup
                            </span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="#"><i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Profile Settings">
                                        Profile Settings
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('manage-transactionType.html')}}"><i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Transaction Type">
                                        Manage Transaction Type
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('manage-paymentMode.html')}}"><i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Payment Mode">
                                        Manage Payment Mode
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('manage-currencySetup.html')}}"><i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Currency Setup">
                                        Currency Setup
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('manage-currencyConvertion.html')}}"><i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Currency Convertion">
                                        Currency Convertion
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('manage-qualification.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Users">
                                        Manage Qualifications
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('manage-employeDepartments.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Users">
                                        Manage Departments
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('manage-employeDesignations.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Users">
                                        Manage Designations
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Setup End -->

                <!-- Users Start-->
                <ul class="menu-content">
                    <li class="<?php if(isset($manageUsers)){?>has-sub open is-shown<?php } ?>">
                        <a href="#"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Users">
                                User Management
                            </span>
                        </a>
                        <ul class="menu-content">
                            <li class="">
                                <a href="{{url('manage-users.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item" data-i18n="Manage Users">
                                        Manage Users
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('manage-menus.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Manage Menus</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('manage-roles.html')}}">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Manage Roles</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Users End-->

                <!-- Locations start -->
                <ul class="menu-content">
                    <li class="<?php if(isset($locationManager)){?>has-sub open is-shown<?php } ?>">
                        <a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Locations">Locations</span></a>
                        <ul class="menu-content">
                            <li>
                                <a href="<?php echo url('manage-country.html');?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Manage Country">Manage Country</span></a>
                            </li>
                            <li>
                                <a href="<?php echo url('manage-state.html');?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Manage State">Manage State</span></a>
                            </li>
                            <li>
                                <a href="<?php echo url('manage-district.html');?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Manage District">Manage District</span></a>
                            </li>
                            <li>
                                <a href="<?php echo url('manage-city.html');?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Manage City">Manage City</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Locations End -->
            </li>

            <li class="nav-item">
                <a onclick="Logout()"><i class="feather icon-power" aria-hidden="true"></i><span class="menu-title">Logout</span></a>
            </li>
            <button id="sidebar_logout" class="d-none" data-toggle="modal" data-target="#exampleModalCenter">logout buttton</button>
        </ul>
    </div>

    <?php 
		}
		else
		{
			?>

    <?php 
		} 
	?>
    <script>
        function Logout() {
            $('#sidebar_logout').click();
        }

    </script>
</div>
<!-- END: Main Menu-->
