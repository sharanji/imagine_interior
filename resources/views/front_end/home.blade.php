@extends('front_end.template')

@section('content')
<!-- Hero Start -->
<section class="home-slider position-relative">
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="6000">
                <div class="bg-home zoom-image d-flex align-items-center">
                    <div class="bg-overlay image-wrap" style="background-image:url('{{asset('assets/images/furniture/bg1.jpg')}}')"></div>
                    <div class="bg-overlay opacity-5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-heading position-relative mt-5" style="z-index: 1;">
                                    <h1 class="fw-bold display-4 mb-3 text-white title-dark">Imagine Interiors</h1>
                                    <p class="para-desc text-white-50">Crafting spaces that speak volumes, because your home deserves a story worth telling.Elevate your living with our exquisite designs – where style meets the warmth of home.</p>
                                    <div class="mt-4 pt-2">
                                        <a href="{{url('/view-360.html')}}" class="btn btn-primary">Experiance 360 view</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="6000">
                <div class="bg-home zoom-image d-flex align-items-center">
                    <div class="bg-overlay image-wrap" style="background-image:url('{{asset('assets/images/furniture/bg2.jpg')}}')"></div>
                    <div class="bg-overlay opacity-5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-heading position-relative mt-5" style="z-index: 1;">
                                    <h1 class="fw-bold display-4 mb-3 text-white title-dark">Modern Interior <br> For House</h1>
                                    <p class="para-desc text-white-50">Designing dreams into reality, one room at a time. Welcome to a world of timeless elegance. <br> Transforming houses into homes, where every detail reflects your unique story.</p>
                                    <div class="mt-4 pt-2">
                                        <a href="#!" class="btn btn-primary">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="6000">
                <div class="bg-home zoom-image d-flex align-items-center">
                    <div class="bg-overlay image-wrap" style="background-image:url('{{asset('assets/images/furniture/bg3.jpg')}}')"></div>
                    <div class="bg-overlay opacity-5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-heading position-relative mt-5" style="z-index: 1;">
                                    <h1 class="fw-bold display-4 mb-3 text-white title-dark">Make Your Living Room <br>Comfortable</h1>
                                    <p class="para-desc text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                    <div class="mt-4 pt-2">
                                        <a href="#!" class="btn btn-primary">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Top Categories</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Imagine Interiors</span> and Discover Endless Possibilities with Our Top Categories.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row mt-4">
            <div class="col-md-6 p-2">
                <div class="features feature-primary feature-clean position-relative overflow-hidden rounded-md">
                    <img src="{{asset('assets/images/furniture/fea1.jpg')}}" class="img-fluid" alt="">
                    <div class="bg-overlay bg-linear-gradient-2"></div>
                    <div class="position-absolute bottom-0 end-0 start-0 m-4 mt-0">
                        <a href="{{url('gallery.html')}}" class="d-flex justify-content-between align-items-center">
                            <span>
                                <span class="d-block title text-white title-dark fs-5 fw-semibold">Bedroom</span>
                                <span class="fs-6 text-white-50 d-block">Artworks / Designs</span>
                            </span>

                            <i class="uil uil-arrow-up-right text-white title-dark fs-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-2">
                                <div class="features feature-primary feature-clean position-relative overflow-hidden rounded-md">
                                    <img src="{{asset('assets/images/furniture/fea2.jpg')}}" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-linear-gradient-2"></div>
                                    <div class="position-absolute bottom-0 end-0 start-0 m-2 m-md-4 mt-0">
                                        <a href="{{url('gallery.html')}}" class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <span class="d-block title text-white title-dark fs-5 fw-semibold">Kitchen</span>
                                                <span class="fs-6 text-white-50 d-block">Woodworks / Interiors</span>
                                            </span>

                                            <i class="uil uil-arrow-up-right text-white title-dark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12 p-2">
                                <div class="features feature-primary feature-clean position-relative overflow-hidden rounded-md">
                                    <img src="{{asset('assets/images/furniture/fea3.jpg')}}" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-linear-gradient-2"></div>
                                    <div class="position-absolute bottom-0 end-0 start-0 m-2 m-md-4 mt-0">
                                        <a href="{{url('gallery.html')}}" class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <span class="d-block title text-white title-dark fs-5 fw-semibold">Office</span>
                                                <span class="fs-6 text-white-50 d-block">Furnishments / Plans</span>
                                            </span>

                                            <i class="uil uil-arrow-up-right text-white title-dark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-2">
                                <div class="features feature-primary feature-clean position-relative overflow-hidden rounded-md">
                                    <img src="{{asset('assets/images/furniture/fea4.jpg')}}" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-linear-gradient-2"></div>
                                    <div class="position-absolute bottom-0 end-0 start-0 m-2 m-md-4 mt-0">
                                        <a href="{{url('gallery.html')}}" class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <span class="d-block title text-white title-dark fs-5 fw-semibold">Living Room</span>
                                                <span class="fs-6 text-white-50 d-block">Interiors</span>
                                            </span>

                                            <i class="uil uil-arrow-up-right text-white title-dark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12 p-2">
                                <div class="features feature-primary feature-clean position-relative overflow-hidden rounded-md">
                                    <img src="{{asset('assets/images/furniture/fea5.jpg')}}" class="img-fluid" alt="">
                                    <div class="bg-overlay bg-linear-gradient-2"></div>
                                    <div class="position-absolute bottom-0 end-0 start-0 m-2 m-md-4 mt-0">
                                        <a href="{{url('gallery.html')}}" class="d-flex justify-content-between align-items-center">
                                            <span>
                                                <span class="d-block title text-white title-dark fs-5 fw-semibold">Dining Hall</span>
                                                <span class="fs-6 text-white-50 d-block">Customised Plans</span>
                                            </span>

                                            <i class="uil uil-arrow-up-right text-white title-dark fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

            <div class="col-12 mt-4">
                <div class="text-center">
                    <a href="{{url('gallery.html')}}" class="btn btn-link primary fw-semibold mb-0">See More Categories <span class="h5 mb-0 ms-1"><i class="uil uil-arrow-right align-middle"></i></span></a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Best Solutions for Your Home</h4>
                    <p class="para-desc text-muted mx-auto mb-0">Transform your home, one category at a time. Start your journey to inspired living today.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/conversation.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold"> Interior Consultation</a>
                            <p class="text-muted mt-2">Embark on a transformative journey with our Interior Consultation service, where personalized expertise meets your unique vision. Let us guide you to create a space that reflects your style and elevates your lifestyle.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/feature-selection.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold">Furniture Selection and Placement</a>
                            <p class="text-muted mt-2">Elevate your space effortlessly with our Furniture Selection and Placement service. Let us curate a harmonious blend of style and functionality, ensuring each piece is thoughtfully positioned for maximum impact and comfort.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/web-design.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold">Customized Design Plans</a>
                            <p class="text-muted mt-2">Immerse your surroundings in a symphony of hues with our Color Palette and Styling service. From timeless classics to vibrant palettes, we tailor colors to your taste, creating a visually stunning and harmonious atmosphere in every room.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/color-palette.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold">Color Palette and Styling</a>
                            <p class="text-muted mt-2">Define your space with personality through our Decor and Accessories Curation service. From statement pieces to subtle accents, let us curate a collection that adds the perfect finishing touch, transforming your home into a reflection of your unique style.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/living-room.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold">Decor and Accessories Curation</a>
                            <p class="text-muted mt-2">Define your space with personality through our Decor and Accessories Curation service. From statement pieces to subtle accents, let us curate a collection that adds the perfect finishing touch, transforming your home into a reflection of your unique style.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <img src="{{asset("assets/outdoor.png")}}" alt="Decor" width="50" height="50">
                        </div>
                        <div class="content mt-3">
                            <a href="javascript:void(0)" class="title text-dark fw-semibold">Space Optimization</a>
                            <p class="text-muted mt-2">Unlock the full potential of your living spaces with our Space Optimization service. Our experts reimagine and maximize every inch, ensuring functionality meets aesthetics, creating a harmonious and efficient environment in your home.</p>
                            <a href="javascript:void(0)" class="btn btn-link primary fw-semibold mb-0">Read More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- Cta start -->
    <div class="container-fluid mt-100 mt-60 px-md-3 px-0">
        <div class="bg-half-170 rounded-md rounded-md-0 shadow-md position-relative overflow-hidden jarallax" data-jarallax data-speed="0.5" style="background: url('{{asset('assets/images/furniture/bg4.jpg')}}') center center;"></div>
        <!--end slide-->
    </div>
    <!--end container-->
    <!-- Cta End -->
</section>
<!--end section-->
<!-- End -->

<!-- FEATURES START -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="features-absolute">
                    <div class="row align-items-end">
                        <div class="col-md-3 col-6">
                            <img src="{{asset('assets/images/furniture/cta1.jpg')}}" class="img-fluid rounded-md shadow" alt="">
                        </div>
                        <!--end col-->

                        <div class="col-md-3 col-6">
                            <img src="{{asset('assets/images/furniture/cta2.jpg')}}" class="img-fluid rounded-md shadow" alt="">
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="section-title bg-white-color p-4 rounded-md text-md-start text-center">
                                <h2 class="fw-bold mb-3">We Provide You The <br> Best Experience</h2>
                                <a href="#!" class="btn btn-link primary text-muted title-dark fw-semibold"><i class="uil uil-shopping-cart-alt"></i> Explore Now</a>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

        <div id="grid" class="row mt-5 pt-3">
            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i1.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Mockup Collection</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">Mockup</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i1.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i4.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Mockup Collection</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">Mockup</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i4.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i2.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Abstract images</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">Abstract</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i2.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i3.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Company V-card</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">V-card</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i3.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i5.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Yellow bg with Books</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">Books</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i5.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/furniture/i6.jpg')}}" class="img-fluid" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-white title">Mockup box with paints</a></h5>
                            <h6 class="text-white-50 tag mt-1 mb-0">Photography</h6>
                        </div>
                        <div class="icons text-center">
                            <a href="{{asset('assets/images/furniture/i6.jpg')}}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->
@endsection
