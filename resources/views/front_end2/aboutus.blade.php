@extends('front_end2.template')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Talented Interior Designers.</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Company Overview Area-->
<section class="company-overview-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="intro-box clearfix">
                    <div class="sec-title">
                        <p>Company Overview</p>
                        <div class="h2 text-dark">Modern & Luxury<br> <span>Interior Designers in Hosur</span></div>
                    </div>
                    <div class="text">
                        <p>We feel that interior design is one of the most important investments you will ever make. Whether your needs are Residential or Commercial Interior Design or Model Home Merchandising, our commitment to your project.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="history-content-box clearfix">
                    <div class="history-carousel owl-carousel owl-theme">
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('front_end2/images/resources/history-1.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>2019</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Imagine Interiors Was Founded by<br> Chris Miller in Hosur.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Founded with a passion for transforming spaces, our interior design company aims to bring creativity and functionality into every project.</p>
                                        <a class="btn-two" href="#about_detail">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('front_end2/images/resources/history-2.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>Top Rated</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Unlocking the Potential:</h3>
                                    </div>
                                    <div class="text">
                                        <p class="h5">The Power of Interior Design in Transforming Spaces</p>
                                        <p>
                                            Discover how interior design can breathe new life into any space, from humble homes to bustling commercial venues. Explore the art of creating environments that inspire, comfort, and reflect individuality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('front_end2.components.completed_row')
    </div>
</section>
<!--End Company Overview Area-->

<section class="working-style2-area" style="background-image:url(asset('front_end2/images/parallax-background/working-style2-bg.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="working-style2-content clearfix">
                    <!--Start Single Working Box Style2-->
                    <div class="single-working-box-style2">
                        <div class="img-holder">
                            <img src="{{asset('front_end2/images/resources/working-v2-1.jpg')}}" alt="Awesome Image">
                            <div class="static-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-architecture-and-city"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Residential Design</h3>
                                                <div class="count">01</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-architecture-and-city"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Residential Design</h3>
                                                <div class="count">01</div>
                                            </div>
                                            <div class="text">
                                                <p>Which is the same as saying in<br> through shrrinkings from toil and<br> cases are perfectly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href="#"><span class="icon-next"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Box Style2-->
                    <!--Start Single Working Box Style2-->
                    <div class="single-working-box-style2">
                        <div class="img-holder">
                            <img src="{{asset('front_end2/images/resources/working-v2-2.jpg')}}" alt="Awesome Image">
                            <div class="static-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-sheriff"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Commercial Design</h3>
                                                <div class="count">02</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-sheriff"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Commercial Design</h3>
                                                <div class="count">02</div>
                                            </div>
                                            <div class="text">
                                                <p>Which is the same as saying in<br> through shrrinkings from toil and<br> cases are perfectly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href="#"><span class="icon-next"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Box Style2-->
                    <!--Start Single Working Box Style2-->
                    <div class="single-working-box-style2">
                        <div class="img-holder">
                            <img src="{{asset('front_end2/images/resources/working-v2-3.jpg')}}" alt="Awesome Image">
                            <div class="static-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-cross"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Hospitality Design</h3>
                                                <div class="count">03</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="icon-cross"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Hospitality Design</h3>
                                                <div class="count">03</div>
                                            </div>
                                            <div class="text">
                                                <p>Which is the same as saying in<br> through shrrinkings from toil and<br> cases are perfectly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href="#"><span class="icon-next"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Box Style2-->
                    <!--Start Single Working Box Style2-->
                    <div class="single-working-box-style2">
                        <div class="img-holder">
                            <img src="{{asset('front_end2/images/resources/working-v2-4.jpg')}}" alt="Awesome Image">
                            <div class="static-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="flaticon-architecture-and-city"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Industrial Design</h3>
                                                <div class="count">04</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="box">
                                    <div class="inner">
                                        <div class="icon-holder">
                                            <span class="flaticon-architecture-and-city"></span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="title">
                                                <h3>Industrial Design</h3>
                                                <div class="count">04</div>
                                            </div>
                                            <div class="text">
                                                <p>Which is the same as saying in<br> through shrrinkings from toil and<br> cases are perfectly.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href="#"><span class="icon-next"></span></a>
                        </div>
                    </div>
                    <!--End Single Working Box Style2-->
                </div>
                <div class="h3 mt-5 text-center">
                    <p>Wanna Work With Our Experienced Profesional Team? <a href="{{url('/#make_appointment')}}" class="text-danger">Make an Appointment</a>.</p>
                    {{-- <div class="button">
                        <a class="btn-one" href="#">View All Industries<span class="flaticon-next"></span></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container mt-5" id="about_detail">
    <p class="h1 text-danger text-center">Welcome to Imagine Interiors!</p>
    At Imagine Interiors, we believe that every space has the potential to inspire, uplift, and transform. Our passion for interior design drives us to create personalized, functional, and aesthetically pleasing spaces that exceed our clients' expectations.

    <p class="h6 text-danger">Who We Are:</p>
    We are a team of dedicated interior designers with a shared commitment to creativity, innovation, and excellence. With years of collective experience in the industry, we bring a diverse range of skills and perspectives to every project we undertake.

    <p class="h6 text-danger">Our Approach:</p>
    At Imagine Interiors, we understand that each client is unique, and every project presents its own set of challenges and opportunities. That's why we take a collaborative approach, working closely with our clients to understand their vision, preferences, and lifestyle. From concept development to final execution, we prioritize clear communication, attention to detail, and superior craftsmanship.

    <p class="h6 text-danger">Our Philosophy:</p>
    Our design philosophy is rooted in the belief that good design is not just about aesthetics; it's about creating spaces that enhance the way people live, work, and interact. Whether it's a cozy residential retreat, a vibrant commercial space, or a peaceful sanctuary, we strive to imbue every project with beauty, functionality, and purpose.

    <div class="h3 text-danger mt-4">History of Imagine Interiors</div>

    <p>
        Founded in 2019, Imagine Interiors emerged with a vision to redefine interior spaces and enrich lives through innovative design solutions. What began as a passion project among a group of like-minded individuals quickly blossomed into a thriving venture, fueled by a shared commitment to creativity, quality, and client satisfaction.
        <br>
        • From its humble beginnings, Imagine Interiors embarked on a journey of growth and exploration, guided by a relentless pursuit of excellence. With each project undertaken, the company honed its craft, refined its processes, and solidified its reputation as a trusted name in the industry.
        <br>
        • Over the years, Imagine Interiors has had the privilege of transforming countless spaces across Hosur, leaving a trail of delighted clients and awe-inspiring interiors in its wake. From cozy residential abodes to bustling commercial establishments, the company's portfolio boasts a diverse range of projects, each showcasing its unwavering commitment to innovation and attention to detail.
        <br>
        Driven by a passion for design and a dedication to exceeding expectations, Imagine Interiors has continued to push boundaries, challenge conventions, and set new standards of excellence in the field of interior design. With a team of talented professionals at its helm, the company remains steadfast in its mission to create spaces that inspire, uplift, and endure.

        As Imagine Interiors looks ahead to the future, it does so with a sense of excitement and optimism, eager to embark on new adventures, tackle fresh challenges, and continue making a meaningful impact in the world of design. With a rich history of accomplishments behind it and a bright future ahead, the company stands poised to leave an indelible mark on the world of interior design for years to come.
    </p>

    At Imagine Interiors, we don't just design spaces; we create experiences. Welcome to a world of timeless beauty, inspired design, and endless possibilities.
</section>

<section class="faq-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>When do I need an Interior Designer?</h4>
                            </div>
                            <div class="accord-content" style="display: none;">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why do I need an Interior Designer?</h4>
                            </div>
                            <div class="accord-content collapsed" style="display: none;">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Why do you have a design fee and purchasing fee on the product?</h4>
                            </div>
                            <div class="accord-content" style="">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>What should I have at our first meeting for my project?</h4>
                            </div>
                            <div class="accord-content" style="">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How much will my interior design project cost?</h4>
                            </div>
                            <div class="accord-content" style="display: none;">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How long will it take to to design and build my project?</h4>
                            </div>
                            <div class="accord-content" style="">
                                <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                    to ensue.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Team Area-->
{{-- <section class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title float-left">
                    <p>Behind Our Company</p>
                    <div class="title">Expert & Experinced <span>Team</span></div>
                </div>
                <div class="view-all-member style2 float-right">
                    <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start Single Team Member-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/team/v2-1.jpg')}}" alt="Awesome Image">
<ul class="sociallinks">
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
</ul>
<div class="overlay">
    <div class="box">
        <div class="link">
            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
        </div>
    </div>
</div>
</div>
<div class="name text-center">
    <p><span>CEO & Founder</span></p>
    <h3>Alison Fletcher</h3>
</div>
</div>
</div>
<!--End Single Team Member-->
<!--Start Single Team Member-->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
    <div class="single-team-member">
        <div class="img-holder">
            <img src="{{asset('front_end2/images/team/v2-2.jpg')}}" alt="Awesome Image">
            <ul class="sociallinks">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
            <div class="overlay">
                <div class="box">
                    <div class="link">
                        <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="name text-center">
            <p><span>Designer</span></p>
            <h3>Joe Wilson</h3>
        </div>
    </div>
</div>
<!--End Single Team Member-->
<!--Start Single Team Member-->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
    <div class="single-team-member">
        <div class="img-holder">
            <img src="{{asset('front_end2/images/team/v2-3.jpg')}}" alt="Awesome Image">
            <ul class="sociallinks">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
            <div class="overlay">
                <div class="box">
                    <div class="link">
                        <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="name text-center">
            <p><span>Architect</span></p>
            <h3>White Grey</h3>
        </div>
    </div>
</div>
<!--End Single Team Member-->
<!--Start Single Team Member-->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
    <div class="single-team-member">
        <div class="img-holder">
            <img src="{{asset('front_end2/images/team/v2-4.jpg')}}" alt="Awesome Image">
            <ul class="sociallinks">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
            <div class="overlay">
                <div class="box">
                    <div class="link">
                        <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="name text-center">
            <p><span>Manager</span></p>
            <h3>Kevin Smith</h3>
        </div>
    </div>
</div>
<!--End Single Team Member-->
</div>
</div>
</section> --}}
<!--End Team Area-->

@include('front_end2.components.vendors')

@endsection
