@extends('front_end.template')

@section('content')


<body>
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{asset('assets/images/company/aboutus.jpg')}}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Aboutus </h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">Start working with Imagine Interiors that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="index.html">Imagine Interiors</a></li>
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Aboutus</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row align-items-center" id="counter">
                <div class="col-md-6">
                    <img src="{{asset('assets/images/company/about2.png')}}" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ms-lg-4">
                        <div class="d-flex mb-4">
                            <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="15">0</span>+</span>
                            <span class="h6 align-self-end ms-2">Years <br> Experience</span>
                        </div>
                        <div class="section-title">
                            <h4 class="title mb-4">Who we are ?</h4>
                            <p class="text-muted">Start working with <span class="text-primary fw-bold">Imagine Interiors</span> that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                            <a href="javascript:void(0)" class="btn btn-primary mt-3">Contact us</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/amazon.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/google.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/lenovo.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/paypal.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/shopify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="{{asset('assets/images/client/spotify.svg')}}" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class="text-primary">Work Process</h6>
                        <h4 class="title mb-4">How do we works ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Imagine Interiors</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-presentation-edit rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Discussion</h5>
                            <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Strategy & Testing</h5>
                            <p class="text-muted mb-0">Generators convallis odio, vel pharetra quam malesuada vel. Nam porttitor malesuada.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div class="card features feature-primary feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-image-check rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Reporting</h5>
                            <p class="text-muted mb-0">Internet Proin tempus odio, vel pharetra quam malesuada vel. Nam porttitor malesuada.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-end mb-4 pb-4">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h6 class="text-primary">Services</h6>
                        <h4 class="title mb-4">What we do ?</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary fw-bold">Imagine Interiors</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-md-end">
                        <a href="javascript:void(0)" class="text-primary h6">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="webdeveloping" data-bs-toggle="pill" href="#developing" role="tab" aria-controls="developing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Web Developing</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="database" data-bs-toggle="pill" href="#data-analise" role="tab" aria-controls="data-analise" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Database Analysis</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="server" data-bs-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Server Security</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#designing" role="tab" aria-controls="designing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Web Designing</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                    </ul>
                    <!--end nav pills-->
                </div>
                <!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active p-4 rounded shadow" id="developing" role="tabpanel" aria-labelledby="webdeveloping">
                            <img src="{{asset('assets/images/work/7.jpg')}}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade p-4 rounded shadow" id="data-analise" role="tabpanel" aria-labelledby="database">
                            <img src="{{asset('assets/images/work/8.jpg')}}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade p-4 rounded shadow" id="security" role="tabpanel" aria-labelledby="server">
                            <img src="{{asset('assets/images/work/9.jpg')}}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade p-4 rounded shadow" id="designing" role="tabpanel" aria-labelledby="webdesigning">
                            <img src="{{asset('assets/images/work/12.jpg')}}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <!--end teb pane-->
                    </div>
                    <!--end tab content-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Start -->
    <section class="section bg-light pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="{{asset('assets/images/cta-bg.jpg')}}" class="img-fluid rounded-md shadow-lg" alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox border-0">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow-lg"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content mt-md-4 pt-md-2">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mt-4 pt-2">
                                            <div class="section-title text-md-start">
                                                <h6 class="text-white-50">Team</h6>
                                                <h4 class="title text-white title-dark mb-0">Meet Experience <br> Team Member</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-4 pt-md-2">
                                            <div class="section-title text-md-start">
                                                <p class="text-white-50 para-desc">Start working with Imagine Interiors that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="javascript:void(0)" class="text-white title-dark">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row -->
            <div class="feature-posts-placeholder bg-primary bg-gradient"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
</body>

@endsection
