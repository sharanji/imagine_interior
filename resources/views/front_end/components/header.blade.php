<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <span class="logo-light-mode">
                <img src="{{asset('uploads/logo1.png')}}" class="l-dark" height="50" alt="">
                <img src="{{asset('uploads/logo1.png')}}" class="l-light" height="50" alt="">
            </span>
            <img src="{{asset('uploads/logo1.png')}}" height="50" class="logo-dark-mode" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{route('home')}}" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">About</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li>
                                    <ul>
                                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                        <li><a href="history.html" class="sub-menu-item">History</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Gallerys & Plans</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li>
                                    <ul>
                                        <li><a href="gallery.html" class="sub-menu-item">Gallery</a></li>
                                        <li><a href="tariff.html" class="sub-menu-item">Tariff Plans</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="testimonials.html" class="sub-menu-item">Testimonials</a></li>
                <li><a href="view-360.html" class="sub-menu-item">Virtual Tour</a></li>
                <li><a href="contact.html" class="sub-menu-item">Contact Us</a></li>
                <li><a href="./admin" class="sub-menu-item">Admin Login</a></li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
