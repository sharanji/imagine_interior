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
                                You have done <strong> <?php echo CURRENCY_SYMBOL;?>
                                    <?php //echo number_format($TodaySale,DECIMAL_VALUE,'.','');?>
                                </strong>
                                more sales today. Check your Today Sales.
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

    <!--- Sale/Expense/Purchase Start -->
    {{-- <form action="" method="get">
        <div class="row">
            <?php
								$week =  date('W');
								$year = date("Y");
								
								$ReportCurrentMonth = date('Y-m-d');
							
								$fromWeek = date("M d", strtotime("{$year}-W{$week}-1"));
								$toWeek = date("M d", strtotime("{$year}-W{$week}-7"));
							
								$TotalSale = 0;
								$SaleTitle = 'Today Sale';
								$ReportTitle = 'Today - '.date("M d");
							?>
            <!--sale Start-->

            <div class="col-md-4">
                <div class="section-new-1 mb-3 dashboard-gradients" style="background: rgb(1,170,173);background: linear-gradient(166deg, rgba(1,170,173,1) 0%, rgba(15,238,242,1) 93%);height: 16rem;">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-white">
                                    <span class="users-section">Sale</span>
                                </h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="dropdown chart-dropdown">
                                    <button class="btn btn-sm border-0 dropdown-toggle p-0 text-white" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php
														$salesFilter = Session::get('sales_filter')?Session::get('sales_filter'):'1';
														foreach(DASHBOARD_FILTER as $key=>$value)
														{
															if($salesFilter == $key)
															{
																?>
                                        {{$value}}
    <?php 
															}
														} 
													?>
    </button>
    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; transform: translate3d(166px, -132px, 0px); top: 0px; left: 0px; will-change: transform;" id="sales_filter">
        <?php 
														foreach(DASHBOARD_FILTER as $key=>$value)
														{
															if($salesFilter != $key)
															{
																?>
        <a href="{{url('salesfilter.html/'.$key)}}" class="dropdown-item">{{$value}}</a>
        <?php 
															}
														} 
													?>
    </div>
    </div>
    </div>
    </div>
    <div class="box-contnt-mid">
        <div class="row">
            <div class="col-md-8">

                <h2 class="text-bold-700 mt-1 mb-25 text-white">
                    <?php echo CURRENCY_SYMBOL;?>
                </h2>
                <p class="mt-2 font-medium">Total Sale ()</p>
            </div>

            <div class="col-md-4">
                <div class="graph">
                    <i class="fa fa-shopping-bag font-large"></i>
                </div>
            </div>
        </div>
    </div>
    <p class="sub-name-dashboard">Report : </p>
    </div>
    </div>
    </div>
    <!--sale End-->

    <!--Purchase Start-->
    <div class="col-md-4">
        <div class="section-new-1 mb-3 dashboard-gradients" style="background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% );height: 16rem;">
            <div class="p-2">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-white">
                            <span class="users-section">Purchase</span>
                        </h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle p-0 text-white" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; transform: translate3d(166px, -132px, 0px); top: 0px; left: 0px; will-change: transform;" id="sales_filter">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-contnt-mid">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="text-bold-700 mt-1 mb-25 text-white">
                                <?php echo CURRENCY_SYMBOL?>

                            </h2>
                            <p class="mt-2 font-medium">Total Purchase ()</p>
                        </div>

                        <div class="col-md-4">
                            <div class="graph">
                                <i class="fa fa-shopping-cart font-large"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="sub-name-dashboard">Report : </p>
            </div>
        </div>
    </div>
    <!--Purchase End-->

    <!--Expense Start-->
    <div class="col-md-4">
        <div class="section-new-1 mb-3 dashboard-gradients" style="background-image: linear-gradient(120deg, #F761A1 0%, #8C1BAB 100%);height: 16rem;">
            <div class="p-2">
                <div class="row">
                    <div class="col-md-6 icons">
                        <h4 class="text-white">
                            <span class="users-section">Expense</span>
                        </h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle p-0 text-white" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
														$expenseFilter = Session::get('expense_filter')?Session::get('expense_filter'):'1';
														foreach(DASHBOARD_FILTER as $key=>$value)
														{
															if($expenseFilter == $key)
															{
																?>
                                {{$value}}
                                <?php 
															}
														} 
													?>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; transform: translate3d(166px, -132px, 0px); top: 0px; left: 0px; will-change: transform;" id="sales_filter">
                                <?php 
														foreach(DASHBOARD_FILTER as $key=>$value)
														{
															if($expenseFilter != $key)
															{
																?>
                                <a href="{{url('expensefilter.html/'.$key)}}" class="dropdown-item">{{$value}}</a>
                                <?php 
															}
														} 
													?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-contnt-mid">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="text-bold-700 mt-1 mb-25 text-white">
                                <?php echo CURRENCY_SYMBOL;?>

                            </h2>
                            <p class="mt-2 font-medium">Total Expense ()</p>
                        </div>

                        <div class="col-md-4">
                            <div class="graph">
                                <i class="fa fa-credit-card font-large"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="sub-name-dashboard">Report : </p>
            </div>
        </div>
    </div>
    <!--Expesnse End-->
    </div>
    </form> --}}
    <!--- Sale/Expense/Purchase end -->



</section>


<!--Script for charts Start-->
<script src="{{asset('back_end/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<!--Script for charts End-->

@endsection
