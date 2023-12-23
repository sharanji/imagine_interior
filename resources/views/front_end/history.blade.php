@extends('front_end.template')
@section('content')


<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{asset('assets/images/company/aboutus.jpg')}}');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Our Story </h2>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Start working with Imagine Interiors that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Imagine Interiors</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Story</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="main-icon rounded-pill text-primary text-center mt-4 pt-2">
                    <i data-feather="star" class="fea icon-md-sm"></i>
                </div>
                <div class="timeline-page pt-2 position-relative">
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2002</div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/01.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Founding</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/02.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Partnership</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2006</div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2012</div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/03.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Secuirty</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/04.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Branch</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2013</div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2016</div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/05.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Global</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{asset('assets/images/blog/06.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Branches</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2018</div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline item-->
                </div>
                <!--end timeline page-->
                <!-- TIMELINE END -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>


@endsection
