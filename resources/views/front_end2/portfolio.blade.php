@extends('front_end2.template')

@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Projects</span>
                        <h1>More than {{DB::select("select count(*) as count from projects")[0]->count}} Projects</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="project.html">Projects</a></li>
                            {{-- <li class="active">Classic View V1</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Main project area-->
<section class="main-project-area">
    <div class="container">
        <ul class="project-filter post-filter has-dynamic-filters-counter">
            <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
            @php
            $labels = DB::select("SELECT gallery_lables.label_name,COUNT(gallery.label_id) as count
            FROM gallery_lables
            LEFT JOIN gallery ON gallery.label_id = gallery_lables.label_id
            GROUP BY gallery_lables.label_name
            HAVING COUNT(gallery.label_id) > 0
            ");
            // dd($labels);
            @endphp
            @foreach ($labels as $item)
            <li data-filter=".{{str_replace(' ','_',$item->label_name)}}"><span class="filter-text">{{$item->label_name}}</span></li>
            @endforeach
        </ul>
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
    </div>
</section>
<!--End Main project area-->



{{-- <script src="js/jquery.js"></script>
<script src="js/appear.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validation.js"></script>
<script src="js/wow.js"></script> --}}

<script src="{{asset('front_end2/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('front_end2/assets/timepicker/timePicker.js')}}"></script>
<script src="{{asset('front_end2/assets/html5lightbox/html5lightbox.js')}}"></script>

<!-- thm custom script -->
<script src="js/custom.js"></script>


@endsection
