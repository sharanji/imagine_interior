<section class="brand-area style2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul>
                    @foreach (DB::select('select * from vendors') as $item)
                    <!--Start Single Brand Item-->
                    <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <a href="#"><img src="{{asset('uploads/vendors/'.$item->vendor_id.'.png')}}" height="100px" width="100px" alt="Awesome Brand Image"></a>
                        <div class="overlay-content">
                            <p>{{$item->vendor_name}}</p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
