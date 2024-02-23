@extends('front_end2.template')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Projects</span>
                        <h1>More than 2300 Projects</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li class="active">Classic View V1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Main project area-->
<section class="main-project-area">
    <div class="container">
        <ul class="project-filter post-filter has-dynamic-filters-counter">
            <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
            <li data-filter=".mod"><span class="filter-text">Modern</span></li>
            <li data-filter=".contem"><span class="filter-text">Contemporary</span></li>
            <li data-filter=".trad"><span class="filter-text">Traditional</span></li>
            <li data-filter=".ret"><span class="filter-text">Retreat</span></li>
        </ul>
        <div class="row filter-layout masonary-layout">
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-1.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-2.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-3.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->

            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-4.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-5.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-6.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->

            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-7.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod trad">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-8.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item mod ret">
                <div class="single-project-style4">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('front_end2/images/projects/v1-9.jpg')}}" alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="link">
                                        <a href="project-single.html"><span class="icon-out"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="title">
                                <span>Modern Design</span>
                                <h3><a href="project-single.html">Art Family Residence</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
        </div>
    </div>
</section>
<!--End Main project area-->



{{-- <script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validation.js"></script>
<script src="js/wow.js"></script> --}}

<script src="{{asset('front_end2/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('front_end2/assets/timepicker/timePicker.js')}}"></script>
<script src="{{asset('front_end2/assets/html5lightbox/html5lightbox.js')}}"></script>

<!-- thm custom script -->
<script src="js/custom.js"></script>


@endsection
