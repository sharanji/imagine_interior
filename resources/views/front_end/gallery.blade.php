@extends('front_end.template')
@section('content')


<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{asset('assets/images/company/aboutus.jpg')}}');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Our Gallery </h2>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Start working with Imagine Interiors and Discover Endless Possibilities with Our Top Categories.</p>
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
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-4 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter filter-border list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item text-uppercase position-relative active" data-group="all">All</li>
                        @foreach ($gallery_lables as $item)
                        <li class="list-inline-item text-uppercase position-relative" data-group="{{$item->label_name}}">{{$item->label_name}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div id="grid" class="row shuffle" style="position: relative; overflow: hidden; height: 703.6px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
            @foreach ($gallery_lables as $item)
            @php
            $images = DB::table('gallery')->where('label_id','=',$item->label_id)->get();

            @endphp
            @foreach ($images as $image)

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2 picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;{{$item->label_name}}&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div class="card work-container work-primary work-modern position-relative overflow-hidden shadow rounded border-0">
                    <div class="card-body p-0">
                        <img src="{{asset("uploads/gallery_images/$image->image_label")}}" class="img-fluid rounded" alt="work-image">
                        <div class="overlay-work"></div>
                        <div class="content">
                            {{-- <a href="portfolio-detail-one.html" class="title text-white d-block fw-bold">Shifting Perspective</a>
                            <small class="text-white-50">Studio</small> --}}
                        </div>
                        <div class="client">
                            {{-- <small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small> --}}
                            <small class="date"><i class="muil uil-calendar-alt"></i> {{date("d M Y",strtotime($image->created_date))}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--end col-->
            @endforeach
        </div>

    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->


@endsection
