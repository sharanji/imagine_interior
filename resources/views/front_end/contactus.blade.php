@extends('front_end.template')
@section('content')
<!-- Hero Start -->

<section class="bg-half-170 bg-light d-table w-100" style="background: url({{asset('assets/images/company/aboutus.jpg')}});">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Contact Us </h2>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Start working with Imagine Interiors and Discover Endless Possibilities</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Imageine Interiors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ul>
            </nav>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Start Contact -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-phone rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Phone</h5>
                        <p class="text-muted">Start working with ImagineInteriors that can provide everything</p>
                        <a href="tel:+152534-468-854" class="read-more">+91 7397776102</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-envelope rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Email</h5>
                        <p class="text-muted">Start working with ImagineInteriors that can provide everything</p>
                        <a href="mailto:contact@example.com" class="read-more">contact@imagineinterior.com</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-map-marker rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Location</h5>
                        <p class="text-muted">172,TNHB Phase XV,Royakottai Road,<br>Pillaiyar Nagar, Karapalli Hosur, India 635109</p>
                        <a href="https://www.google.com/maps/search/172,TNHB+Phase+XV,Royakottai+Road/@12.7128642,77.8462656,17z/data=!3m1!4b1?entry=ttu" data-type="iframe" class="video-play-icon read-more lightbox">View on Google map</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="card shadow rounded border-0">
                    <div class="card-body py-5">
                        <h4 class="card-title">Enquire Now</h4>
                        <div class="custom-form mt-3">
                            <form method="post" name="myForm" action="{{route('addEnquiry')}}" id="myForm">
                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" required class="form-control ps-5" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" required class="form-control ps-5" placeholder="subject :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                <textarea name="comments" id="comments" required rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send" class="btn btn-primary">Send Enquiry</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end custom-form-->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-7 col-md-6 order-1 order-md-2">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <img src="{{asset('assets/images/contact.svg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card map border-0">
                    <div class="card-body p-0">
                        <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=12.7128642,77.8462656&amp;q=Old+Rayakottah+Hudco,+Hosur,+Tamil+Nadu+635109/@12.7128642,77.8462656,15z/data=!3m1!4b1!4m6!3m5!1s0x3bae70b3064e7e59:0xc61546d477a876c5!8m2!3d12.7148366!4d77.8410163!16s%2Fg%2F1tf1m83_    ;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen>
                        </iframe>
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
<!-- End contact -->

@endsection
