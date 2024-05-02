@extends('front_end2.template')

@section('content')



<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Factory</span>
                        <h1>Industry Standard Machines</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="services.html">Factory Tour</a></li>
                            {{-- <li class="active">Single Service</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
@php

@endphp
<!--Start Single Service Area-->
<section class="single-service-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                <div class="single-service-sidebar">
                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <ul class="service-pages">
                            @foreach ($machines_names as $mn)
                            <li class="@php if($machine_id == $mn->machine_id) echo 'active' @endphp">
                                <a href="{{url('factory.html/'.$mn->machine_id)}}">
                                    <div class="title">
                                        <h3 class="static">{{$mn->machine_name}}</h3>
                                        <div class="overlay-title">
                                            <h3>{{$mn->machine_name}}</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End Single sidebar-->
                    <div class="sidebar-contact-box text-center">
                        <div class="inner-content">
                            <div class="icon-holder">
                                <span class="icon-support1"></span>
                            </div>
                            <h3>Consult with expert &<br> Start today</h3>
                            <div class="bottom-box">
                                <h2>+91 7397 776 102</h2>
                                <div class="row d-flex">
                                    <div class="col-12">imaginehsr@gmail.com</div>
                                    {{-- <div class="col-12">
                                        <div class="font-italic">or</div>
                                    </div>
                                    <div class="col-12">info@imaginedesiner.com</div> --}}
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn-one wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" href="{{url('/#make_appointment')}}">Make Appointment
                                    <span class="flaticon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="single-service-top">
                    <div class="single-service-image-box">
                        <img src="{{asset('uploads/factory/'.$machine_detail[0]->machine_id.'.png')}}" alt="Awesome Image">
                    </div>
                    <div class="text">
                        <h2>Project Designs</h2>
                        <div class="inner">
                            @php
                            echo $machine_detail[0]->machine_desc;
                            @endphp
                        </div>
                    </div>
                </div>

                <div class="advantages-content">
                    <div class="row">
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-success"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Interior<br> Expertise</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-guarantee-certificate"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Guranteed<br> Work</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-hr"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Free<br> Consultation</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                        <!--Start Single Advantages Box-->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="single-advantages-box">
                                <div class="inner">
                                    <div class="static-content">
                                        <div class="icon-holder">
                                            <span class="icon-wallet"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Reasonable<br> Price</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <div class="box">
                                            <div class="inner-text">
                                                <p>Have to accepted That is wise man of therefore always we indignation.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Advantages Box-->
                    </div>
                </div>

                <div class="how-work-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="image-box">
                                <img src="{{asset('front_end2/images/services/service-single/how-work.jpg')}}" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="how-works-content">
                                <h2>How We Work</h2>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 1</span>
                                            <h3>Brief & Concept</h3>
                                            <p>Production technque irrigation managment recommended nitrogen inputs.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 2</span>
                                            <h3>Detailed Design</h3>
                                            <p>Improving agricultural productivity in terms of quantity and quality.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <span>Stage 3</span>
                                            <h3>Installation</h3>
                                            <p>Minimizing the effects pests weeds, insects, pathogens, nematodes on animal</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single Service Area-->
@endsection
