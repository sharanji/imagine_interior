<section class="top-bar-style2">
    <div class="top-style2 clearfix">
        <div class="top-style2-left">
            <p><span class="icon-music"></span>We have Answers</p>
            <ul>
                <li>+91 7397 776 102</li>
                <li>imaginehsr@gmail.com</li>
            </ul>
        </div>
        <div class="top-style2-right">
            <ul class="top-right-menu">
                {{-- <li><a href="#">Partners</a></li>
                <li><a href="#">Media</a></li> --}}
                <li><a href="{{url("view-360.html")}}">360 View</a></li>
            </ul>
            <ul class="topbar-social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<header class="main-header header-style2 stricky">
    <div class="inner-container clearfix">
        <div class="logo-box-style2 float-left">
            <a href="index-2.html">
                <img width="100" height="80" src="{{asset("front_end2/logo.png")}}" alt="Awesome Logo">
            </a>
        </div>
        <div class="main-menu-box float-right">
            <nav class="main-menu style2 clearfix">
                <div class="navbar-header clearfix">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="@isset($home) current  @endisset"><a href="{{url('/')}}">Home</a></li>
                        <li class="@isset($aboutus) current  @endisset"><a href="aboutus.html">About Us</a></li>
                        <li class="@isset($services) current  @endisset"><a href="services.html">Services</a></li>
                        <li class="@isset($portfolio) current  @endisset"><a href="portfolio.html">Portfolio</a></li>
                        <li class="@isset($factory) current  @endisset"><a href="factory.html">Factory</a></li>
                        <li class="@isset($contact) current  @endisset"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainmenu-right style2">
                {{-- <div class="outer-search-box">
                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                    <ul class="search-box">
                        <li>
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div> --}}
                {{-- <div class="cart-box">
                    <a href="shoping-cart.html"><span class="icon-bag"><span class="number">0</span></span></a>
                </div> --}}
                <div class="button">
                    <a class="btn-one" href="#">Get a Quote<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
