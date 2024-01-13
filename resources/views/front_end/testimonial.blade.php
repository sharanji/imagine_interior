@extends('front_end.template')

@section('content')

<section class="bg-half-170 d-table w-100" style="background: url('{{asset('assets/images/company/aboutus.jpg')}}');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Testimonials </h2>
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
                    <li class="breadcrumb-item active" aria-current="page">Creations</li>
                </ul>
            </nav>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<section class="section">
    <link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
    <!-- Testi Start -->
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h4 class="title mb-4">Customer's Review</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Imagine Interiors</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>
        </div>
        <!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="tns-outer" id="tns1-ow">
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">1 to 2</span> of 6</div>
                    <div id="tns1-mw" class="tns-ovh">
                        <div class="tns-inner" id="tns1-iw">
                            <div class="tiny-three-item wow animate__ animate__fadeInUp  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal animated" data-wow-delay=".3s" id="tns1" style="transform: translate3d(0%, 0px, 0px); visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="tiny-slide tns-item tns-slide-active" id="tns1-item0">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/01.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                            <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="tiny-slide tns-item tns-slide-active" id="tns1-item1">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/02.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                            <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="tiny-slide tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/03.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                            <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="tiny-slide tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/04.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                            <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="tiny-slide tns-item" id="tns1-item4" aria-hidden="true" tabindex="-1">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/05.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                            <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="tiny-slide tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{asset('assets/images/client/06.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                            <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1 (Current Slide)" class="tns-nav-active"></button><button type="button" data-nav="1" aria-controls="tns1" style="" aria-label="Carousel Page 2" class="" tabindex="-1"></button><button type="button" data-nav="2" aria-controls="tns1" style="" aria-label="Carousel Page 3" class="" tabindex="-1"></button><button type="button" data-nav="3" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 4"></button><button type="button" data-nav="4" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 5"></button><button type="button" data-nav="5" tabindex="-1" aria-controls="tns1" style="display:none" aria-label="Carousel Page 6"></button></div> --}}
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- Testi end -->

</section>

<!-- SLIDER -->
<script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
@endsection
