@extends('front_end2.template')

@section('content')

<section class="breadcrumb-area style2" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Traditional</span>
                        <h1>Office Partition Walls</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li class="active">Single Project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Project Description area-->
<section class="project-description-area">
    <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="{{asset('front_end2/images/pattern/project-description-pattern.jpg')}}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img src="{{asset('front_end2/images/projects/project-single/project-description-1.jpg')}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Description</p>
                        <div class="title">similique sunt<br> qui officia deserunt</div>
                    </div>
                    <div class="inner-content">
                        <p>Idea of denouncing pleasures and praising pain was born will give you a com-pleted account system, and expound the actual teachings of the great explorer of the truth, the master builder of human happiness. No one rejects,
                            dislikes, or avoids pleasure itself, because it is pleasure.</p>
                        <div class="bottpm-text">
                            <p>Because those who do not know how pursue, Complete account that all system, expound the actual teachings of the great explorer of the truth,</p>
                        </div>
                        <ul>
                            <li>Nam libero tempore, cum soluta</li>
                            <li>Est eligendi optio cumque nihil impedit quo</li>
                            <li>Omnis dolor repellendus temporibus autem </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Description area-->

<!--Start Project Info Area-->
<section class="project-info-area">
    <div class="pattern-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="{{asset('front_end2/images/pattern/project-info-patten.jpg')}}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="project-info-content">
                    <div class="project-info-title">
                        <h3>Project Info</h3>
                    </div>
                    <div class="inner-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-maps-and-location1"></span>
                                </div>
                                <div class="title">
                                    <h4>Location</h4>
                                    <span>New York United States</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-ruler"></span>
                                </div>
                                <div class="title">
                                    <h4>Square Meters</h4>
                                    <span>452,65m<sup>2</sup></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Year</h4>
                                    <span>2018</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-price"></span>
                                </div>
                                <div class="title">
                                    <h4>Price Value</h4>
                                    <span>$65m</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Head</h4>
                                    <span>Mr. John Meckency</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="project-info-image-box">
                    <img src="{{asset('front_end2/images/projects/project-single/project-info-1.jpg')}}" alt="Awesome Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Info Area-->

<!--Start Video Image Holder Area-->
<section class="video-image-holder-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="video-holder-box">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/project-single/video-gallery-1.jpg')}}" alt="Awesome Image">
                        <div class="icon-holder">
                            <div class="icon">
                                <div class="inner text-center">
                                    <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="crystalo Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                        <span class="flaticon-play-button"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="single-project-image-gallery">
                    <img src="{{asset('front_end2/images/projects/project-single/image-gallery-1.jpg')}}" alt="Awesome Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Video Image Gallery Area-->

<!--Start Similar projects Area-->
<section class="similar-projects-area">
    <div class="container-fluid similar-projects-content">
        <div class="similar-project-title text-center">
            <h2>Similar projects</h2>
        </div>
        <div class="row">
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/project-single/similar-pro-1.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <span>Contemporary</span>
                        <h3><a href="#">Nathan Brooke House</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/project-single/similar-pro-2.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <span>Modern Design</span>
                        <h3><a href="#">State Hermitage Museum</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/project-single/similar-pro-3.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <span>Traditional</span>
                        <h3><a href="#">Central City Building</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/project-single/similar-pro-4.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <span>Retreat</span>
                        <h3><a href="#">Central Florida University</a></h3>
                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
        </div>
    </div>
</section>
<!--End Similar projects Area-->

@endsection
