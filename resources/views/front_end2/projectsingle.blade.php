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
            @php
            $labels = DB::select("SELECT gallery_lables.label_name, gallery.project_id
            FROM gallery_lables
            JOIN gallery ON gallery.label_id = gallery_lables.label_id
            WHERE gallery.project_id = $project_id
            GROUP BY gallery_lables.label_name, gallery.project_id");
            $i = 0;
            // dd($labels);
            @endphp
            @foreach ($labels as $item)
            <li data-filter=".{{str_replace(' ','_',$item->label_name)}}" @if ($i==0) {{'class=active'}} @endif><span class="filter-text">{{$item->label_name}}</span></li>
            @php
            $i++;
            @endphp
            @endforeach
        </ul>
    </div>
    <div class="row filter-layout masonary-layout">
        @php $gallery = DB::select('select gallery.*,gallery_lables.label_name,projects.project_id,project_name from gallery left join gallery_lables on gallery_lables.label_id = gallery.label_id join projects on projects.project_id = gallery.project_id');
        // dd($gallery);
        shuffle($gallery);
        @endphp

        @foreach ($gallery as $item)
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item {{str_replace(' ','_',$item->label_name)}}">
            <div class="single-project-style4">
                <div class="img-holder">
                    <div class="inner">
                        <img src="{{asset('uploads/gallery_images/'.$item->image_label)}}" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="link">
                                    <a href="{{url('portfolio/'.$item->project_id)}}"><span class="icon-out"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <div class="title">
                            <span>{{$item->label_name}}</span>
                            <h3><a href="{{url('portfolio/'.$item->project_id)}}">{{$item->project_name}}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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
