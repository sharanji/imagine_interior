@extends('front_end.template')
@section('content')
<section class="bg-half-260 bg-primary d-table w-100" style="background-image: url({{asset('assets/images/course/detail.png')}});">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <span class="badge text-bg-success h6 rounded-pill">₹7,900 only full Plan</span>
                    <h2 class="title text-white title-dark mt-3 mb-0"> Make your dream home now </h2>

                    <ul class="list-unstyled mt-3 mb-0">
                        <li class="align-items-center justify-content-center list-inline-item mx-1">
                            <img src="{{asset('assets/images/client/05.jpg')}}" class="avatar avatar-ex-small rounded-pill shadow" alt="">
                            <a href="javascript:void(0)" class="text-white title-dark ms-1">Cristina Murphy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <ul class="list-unstyled mt-4 mb-0 position-middle-bottom">
            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-clock fs-5 text-white title-dark align-middle"></i>
                <span class="text-white-50 ms-1">10 Weeks</span>
            </li>

            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-signal fs-5 text-white title-dark align-middle"></i>
                <span class="text-white-50 ms-1">All Levels</span>
            </li>

            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-book-open fs-5 text-white title-dark align-middle"></i>
                <span class="text-white-50 ms-1">16 Lessons</span>
            </li>

            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-cube fs-5 text-white title-dark align-middle"></i>
                <span class="text-white-50 ms-1">0 Quiz</span>
            </li>

            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-book-reader fs-5 text-white title-dark align-middle"></i>
                <span class="text-white-50 ms-1">5 Students</span>
            </li>

            <li class="align-items-center justify-content-center list-inline-item mx-2">
                <i class="uil uil-shopping-cart fs-5 text-white title-dark align-middle"></i>
                <a href="#!" class="text-white">Enquire Now</a>
            </li>
        </ul>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title">
                    <h4 class="title mb-0">Popular Plans</h4>

                    <div class="row">
                        @foreach ($tariffs as $tf)

                        <div class="col-md-6 mt-4 pt-2">
                            <h5 class="mb-0">{{$tf->tittle}}</h5>

                            <div class="table-responsive bg-white shadow rounded mt-4">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Plans</th>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end">Descriptions</th>
                                        </tr>
                                    </thead>

                                    @php
                                    $plans = DB::table('tariff_line')->where('tariff_header_id','=',$tf->tariff_id)->get();
                                    @endphp
                                    <tbody>
                                        @foreach ($plans as $item)

                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">{{$item->plan}}</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><span class="badge bg-soft-primary">{{$item->description}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        @endforeach
                        {{-- <div class="col-md-6 mt-4 pt-2">
                            <h5 class="mb-0">Mastery</h5>

                            <div class="table-responsive bg-white shadow rounded mt-4">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Lessons</th>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 11</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><span class="badge bg-soft-primary">Read Free</span></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 12</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 13</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 14</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 mt-4 pt-2">
                            <h5 class="mb-0">Final Thoughts</h5>

                            <div class="table-responsive bg-white shadow rounded mt-4">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Lessons</th>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 21</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><span class="badge bg-soft-primary">Read Free</span></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 22</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 23</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 24</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 mt-4 pt-2">
                            <h5 class="mb-0">Bonus</h5>

                            <div class="table-responsive bg-white shadow rounded mt-4">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Lessons</th>
                                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 31</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><span class="badge bg-soft-primary">Read Free</span></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 32</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 33</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="p-3">
                                                <div class="align-items-center">
                                                    <i class="uil uil-notes h6"></i>
                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a href="javascript:void(0)" class="text-muted">Lesson 34</a></p>
                                                </div>
                                            </th>
                                            <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4 pt-2"><img src="{{asset('uploads/images/bookshelf.jpg')}}" class="img-fluid rounded shadow" alt=""></div>
                    <div class="col-md-6 mt-4 pt-2">
                        <div class="position-relative">
                            <img src="{{asset('uploads/images/minimalist-bedroom.jpg')}}" class="rounded img-fluid mx-auto d-block" alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox border-0">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                {{-- <div class="section-title mt-4 pt-2">
                    <h4 class="title mb-0">Instructor</h4>

                    <div class="d-md-flex align-items-center mt-4 pt-2">
                        <img src="{{asset('assets/images/client/05.jpg')}}" class="avatar avatar-medium rounded-pill" alt="">

                <div class="ms-md-3 mt-4 mt-sm-0">
                    <a href="javascript:void(0)" class="text-dark h5">Cristina Murphy</a>
                    <p class="text-muted mb-0 mt-2">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                </div>
            </div>
        </div> --}}
    </div>
    <!--end col-->
    </div>
    <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection
