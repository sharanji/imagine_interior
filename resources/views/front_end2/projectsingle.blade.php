@extends('front_end2.template')

@section('content')

<style>
    .big-image {
        height: 450px;
        width: 600px;
        border-radius: 10px;
    }

</style>

<section class="breadcrumb-area style2" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        {{-- <span>Traditional</span> --}}
                        <h1>{{$project->project_name}}</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li class="active">{{$project->project_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
@php
$rand = rand(0,count($gallery)-1);
@endphp
<!--Start Project Description area-->
<section class="project-description-area">
    <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="{{asset('front_end2/images/pattern/project-description-pattern.jpg')}}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img class="big-image" src="{{asset("uploads/gallery_images/".$gallery[$rand]->image_label)}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Description</p>
                    </div>
                    <div class="inner-content">
                        @php
                        echo $project->description;
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Description area-->

@php
$rand = rand(0,count($gallery)-1);
@endphp
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
                                    <span>{{$project->project_location}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-ruler"></span>
                                </div>
                                <div class="title">
                                    <h4>Square Meters</h4>
                                    <span>{{$project->area}}m<sup>2</sup></span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Year</h4>
                                    <span>{{date('Y ',strtotime($project->project_date))}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-price"></span>
                                </div>
                                <div class="title">
                                    <h4>Price Value</h4>
                                    <span>Rs {{$project->estimate}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="title">
                                    <h4>Project Head</h4>
                                    <span>{{$project->project_head}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="project-info-image-box">
                    <img src="{{asset("uploads/gallery_images/".$gallery[$rand]->image_label)}}" class="big-image" alt="Awesome Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Info Area-->

<section class="main-project-area style3">
    <div class="container">
        <ul class="project-filter post-filter has-dynamic-filters-counter">
            <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects<span class="count">8</span></span></li>
            <li data-filter=".mod"><span class="filter-text">Modern<span class="count">6</span></span></li>
            <li data-filter=".contem"><span class="filter-text">Contemporary<span class="count">2</span></span></li>
            <li data-filter=".trad"><span class="filter-text">Traditional<span class="count">4</span></span></li>
            <li data-filter=".ret"><span class="filter-text">Retreat<span class="count">4</span></span></li>
        </ul>
    </div>
    <div class="container-fluid main-project-style3">
        <div class="row mar0 filter-layout masonary-layout" style="position: relative; height: 497.95px;">
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item contem ret" style="position: absolute; left: 0px; top: 0px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-1.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod trad" style="position: absolute; left: 259px; top: 0px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-2.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod ret" style="position: absolute; left: 519px; top: 0px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-3.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod trad" style="position: absolute; left: 779px; top: 0px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-4.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->

            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item contem ret" style="position: absolute; left: 0px; top: 248px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-5.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod trad" style="position: absolute; left: 259px; top: 248px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-6.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod ret" style="position: absolute; left: 519px; top: 248px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-7.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
            <!--Start single project item-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 pd0 filter-item mod trad" style="position: absolute; left: 779px; top: 248px;">
                <div class="single-project-style6">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/projects/v3-8.jpg')}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3><a href="project-single.html">Nathan Brooke House</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single project item-->
        </div>
    </div>
</section>

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
