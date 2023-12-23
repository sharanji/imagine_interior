<?php 
	$user_type = isset(auth()->user()->user_type) ? auth()->user()->user_type : 0 ;
?>
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <!-- main header start -->
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="ficon feather icon-menu"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav bookmark-icons">
                        {{-- <li class="nav-item d-none d-lg-block mr-2">
                            <a href="{{url('manage-sales.html/add')}}" class="btn btn-danger">
                        <i class="fa fa-plus-circle"></i> Add Sale
                        </a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a href="{{url('manage-purchase.html/add')}}" class="btn btn-primary">
                                <i class="fa fa-plus-circle"></i> Add Purchase
                            </a>
                        </li> --}}
                    </ul>
                    <!--<ul class="nav navbar-nav bookmark-icons">
						<!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                    <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                    <!--     i.ficon.feather.icon-menu-->
                    <!--<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
						<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
						<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
						<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
					</ul>-->
                    <!-- /* <marquee direction="left" width = "100%">Welcome to CMA Planner...</marquee> */ -->
                    <ul class="nav navbar-nav">
                        <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a> -->
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                        <!-- select.bookmark-select-->
                        <!--   option Chat-->
                        <!--   option email-->
                        <!--   option todo-->
                        <!--   option Calendar-->
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
						<div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
					</li> -->
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">
                                    <?php echo ucfirst(auth()->user()->first_name)." ".ucfirst(auth()->user()->last_name);?>
                                </span>
                                <span class="user-status">Available</span>
                            </div>
                            <span>
                                <?php 
									if (file_exists(public_path('/uploads/admin_profile_image/'.auth()->user()->id.'.png')))
									{
										?>
                                <img class="round" src="<?php echo asset('uploads/admin_profile_image/'.auth()->user()->id.'.png');?>" alt="Profile Image" height="40" width="40">
                                <?php
									}
									else
									{
										?>
                                <img class="round" src="<?php echo asset('uploads/user_icon.png');?>" alt="Profile Image" height="40" width="40">
                                <?php
									}
								?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php 
								if($user_type == 0)
								{
									?>
                            <a class="dropdown-item" href="{{url('my-profile.html')}}"><i class="feather icon-user"></i> My Profile</a>
                            <a class="dropdown-item" href="{{url('change-password.html')}}"><i class="feather icon-lock"></i> Change Password</a>
                            <!-- /* <a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a> <i class="feather icon-message-square"></i>*/ -->
                            <a class="dropdown-item" href="{{url('company-setting.html')}}"><i class="feather icon-settings"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <?php 
								} 
							?>
                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="feather icon-power" aria-hidden="true"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main header end -->
</nav>


<?php /*<ul class="main-search-list-defaultlist d-none">
	<li class="d-flex align-items-center"><a class="pb-25" href="#">
			<h6 class="text-primary mb-0">Files</h6>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
			<div class="d-flex">
				<div class="mr-50"><img src="../../../back_end/app-assets/images/icons/xls.png" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
				</div>
			</div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
			<div class="d-flex">
				<div class="mr-50"><img src="../../../back_end/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
				</div>
			</div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
			<div class="d-flex">
				<div class="mr-50"><img src="../../../back_end/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
				</div>
			</div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
			<div class="d-flex">
				<div class="mr-50"><img src="../../../back_end/app-assets/images/icons/doc.png" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
				</div>
			</div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
		</a></li>
	<li class="d-flex align-items-center"><a class="pb-25" href="#">
			<h6 class="text-primary mb-0">Members</h6>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
			<div class="d-flex align-items-center">
				<div class="avatar mr-50"><img src="../../../back_end/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">{{auth()->user()->name}}</p><small class="text-muted">UI designer</small>
				</div>
			</div>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
			<div class="d-flex align-items-center">
				<div class="avatar mr-50"><img src="../../../back_end/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
				</div>
			</div>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
			<div class="d-flex align-items-center">
				<div class="avatar mr-50"><img src="../../../back_end/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
				</div>
			</div>
		</a></li>
	<li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
			<div class="d-flex align-items-center">
				<div class="avatar mr-50"><img src="../../../back_end/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
				<div class="search-data">
					<p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
				</div>
			</div>
		</a></li>
</ul> */ ?>

<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a>
    </li>
</ul>
<!-- END: Header-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
