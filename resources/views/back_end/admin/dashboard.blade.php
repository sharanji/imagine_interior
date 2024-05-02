@extends('back_end/template')

@section('content')

<!--Css for charts Start-->
<link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back_end/app-assets/css/pages/card-analytics.css')}}">
<!--Css for charts End-->
<style>
    a .card,
    .card a {
        color: #626262;
    }

</style>


<section id="dashboard-analytics">
    <div class="row">
        <!-- Profile start here-->
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card bg-analytics text-white">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="<?php echo asset('uploads/images/decore-left.png');?>" class="img-left" alt="card-img-left">
                        <img src="<?php echo asset('uploads/images/decore-right.png');?>" class="img-right" alt="card-img-right">
                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                            <div class="avatar-content">
                                <i class="feather icon-award white font-large-1"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-2 text-white">
                                Congratulations <?php echo ucfirst(auth()->user()->first_name);?>,
                            </h1>
                            {{-- @php
												$TodaySale = $totalSales['todaySales'][0]->value ? $totalSales['todaySales'][0]->value :'0';
											@endphp --}}
                            <p class="m-auto w-75">
                                website have reached more users today. Keep working
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile end here-->

        <div class="col-lg-3 col-md-6 col-12">
            <a href="<?php echo url('manage-users.html');?>" title="Total Users">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <?php 
											$userQuery = "select id from users where user_type =1";
											$userCount = DB::select($userQuery);
										?>
                        <h2 class="text-bold-700 mt-1 mb-25">
                            <?php echo count($userCount); ?>
                        </h2>
                        <p class="mb-0">Total Users</p>
                    </div>

                    <ul class="list-group list-group-flush customer-info">
                        <li class="list-group-item d-flex justify-content-between ">
                            <?php 
												$activeUserQuery = "select id from users where user_type =1 and user_status=1";
												$activeUserCount = DB::select($activeUserQuery);
											?>
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-success"></i>
                                <span class="text-bold-600">Active</span>
                            </div>
                            <div class="product-result">
                                <span><?php echo count($activeUserCount); ?></span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between ">
                            <?php 
												$InactiveUserQuery = "select id from users where user_type =1 and user_status=0";
												$InactiveUserCount = DB::select($InactiveUserQuery);
											?>
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                <span class="text-bold-600">Inactive</span>
                            </div>
                            <div class="product-result">
                                <span><?php echo count($InactiveUserCount); ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <a href="<?php echo url('manage-customer.html');?>" title="Total Users">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-user text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <?php 
											$customerQuery = "select id from users where user_type = 3";
											$customerCount = DB::select($customerQuery);
										?>
                        <h2 class="text-bold-700 mt-1 mb-25">
                            <?php echo count($customerCount); ?>
                        </h2>
                        <p class="mb-0">Total Customers</p>
                    </div>
                    <ul class="list-group list-group-flush customer-info">
                        <li class="list-group-item d-flex justify-content-between ">
                            <?php 
												$activeCustomerQuery = "select id from users where user_type = 3 and user_status=1";
												$activeCustomerCount = DB::select($activeCustomerQuery);
											?>
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-success"></i>
                                <span class="text-bold-600">Active</span>
                            </div>
                            <div class="product-result">
                                <span><?php echo count($activeCustomerCount); ?></span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between ">
                            <?php 
												$InactiveCustomerQuery = "select id from users where user_type = 3 and user_status=0";
												$InactiveCustomerCount = DB::select($InactiveCustomerQuery);
											?>
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                <span class="text-bold-600">Inactive</span>
                            </div>
                            <div class="product-result">
                                <span><?php echo count($InactiveCustomerCount); ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
    <!--Row end-->

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0">
                    <h4 class="card-title">Enquiry Tracker</h4>
                    {{-- <div class="dropdown chart-dropdown">
                        <button class="btn btn-sm border-0 dropdown-toggle p-0 waves-effect waves-light" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Last 7 Days
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                            <a class="dropdown-item" href="#">Last 28 Days</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div> --}}
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">{{$enquiry['total_enquiry']}}</h1>
                                <small>Enquiry</small>
                            </div>
                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                <div id="support-tracker-chart" style="min-height: 290px;">

                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 385px; height: 291px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="chart-info d-flex justify-content-between">
                            <div class="text-center">
                                <p class="mb-50">Open Tickets</p>
                                <span class="font-large-1">{{$enquiry['unclosed_enquiry']}}</span>
                            </div>
                            <div class="text-center">
                                <p class="mb-50">Closed Tickets</p>
                                <span class="font-large-1">{{$enquiry['closed_enquiry']}}</span>
                            </div>
                            <div class="text-center">
                                <p class="mb-50">Response Time</p>
                                <span class="font-large-1">1d</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    var enquiry_percentage = "{{round(($enquiry['closed_enquiry']/$enquiry['total_enquiry'])*100,2)}}";

</script>

<!--Script for charts Start-->
<script src="{{asset('back_end/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<!--Script for charts End-->


@endsection
