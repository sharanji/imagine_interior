@extends('back_end/template')

@section('content')
<!-- breadcrumb start-->
<div class="content-header row">
	<div class="content-header-left col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-md-6 col-sm-8">
				<h2 class="content-header-title float-left mb-0">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">
							<?php
								$pageTitle = "Sales Return Report";
							?>
							<a href="{{url('manage-salesReturnReport.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
						</li>
					</ol>
				</h2>
			</div>
            <div class="col-md-6 text-right">
				
            </div>
		</div>
	</div>
</div>
<section id="row-grouping" class="">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-content">
					<div class="card-body card-dashboard body_right_right">
						<fieldset>
							<legend class="text-uppercase font-size-sm font-weight-bold">
								<?php echo ucfirst($pageTitle);?> 
							</legend>
						</fieldset>
						
						<form action="" method="get">
							<div class="col-md-12 pl-0">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<div class="controls">
												<input type="search" placeholder="From Date" class="form-control" id="from_date" readonly name="from_date" value="{{isset($_GET['from_date'])? $_GET['from_date'] :''}}"  autocomplete="off" >
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<div class="controls">
												<input type="search" placeholder="To Date" class="form-control" id="to_date" readonly name="to_date" value="{{isset($_GET['to_date'])? $_GET['to_date'] :''}}"  autocomplete="off" >
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<div class="controls">
												@php
													$warehouse = DB::table('warehouse')->where('warehouse_status',1)->select('warehouse_id','warehouse_name')->get();
												@endphp
												<select id="warehouse" name="warehouse_id" class="form-control js-example-basic-single" >
													<option value="">- Select Warehouse -</option>
													@foreach ($warehouse as $item)
														@php
															$selected = "";
															if (isset($_GET['warehouse_id']) && $item->warehouse_id == $_GET['warehouse_id'] ) {
																$selected = "selected";
															}
														@endphp
														<option {{$selected}} value="{{$item->warehouse_id}}">{{$item->warehouse_name}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">	
										<input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
										<span class="search-note">Note : Reference No. </p>
									</div>	
									<div class="col-md-3">
										<button type="submit" class="btn btn-info">Search <i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
									<div class="col-md-6" style="float:right;">
										<div class="row counting">
											<div class="show" style="margin-right:10px;">
												Show
											</div>
											<div class="filter-new-option">
												<select name="page_items" class="form-control count-arrow" onchange="this.form.submit()">
													<?php 
														foreach(page_items as $key=>$value)
														{ 
															$selected="";
															if(isset($_GET['page_items']) && $_GET['page_items'] == $key)
															{
																$selected="selected='selected'";
															}
															?>
															<option value="{{$key}}" {{$selected}}>{{$key}}</option>
															<?php 
														} 
													?>
												</select>
											</div>
											<div class="entries" style="margin-left:10px;">
												entries
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						
						<div class="row mt-1">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table row-grouping dataTable nowrap scroll-horizontal-vertical" id="customers">
										<thead class="tb-head">
											<tr>
												<th class="text-center">Date</th>
												<th class="text-center">Reference No.</th>
												<th onclick="sortTable(1)"  >Warehouse</th>
												<th onclick="sortTable(2)"  >Dealer</th>
												<th onclick="sortTable(3)" class="pl-1" >Product (Qty)</th>
												<th onclick="sortTable(4)" class="text-center" >Total</th>
											</tr>
										</thead>
										<tbody class="tb-data">
											@if ($resultData->count() > 0 )
												@foreach ($resultData as $row)
												<tr>
													<td class="text-center" >{{date('d-M-Y',$row->invoice_billing_date)}}</td>
													<td class="text-center" > <a target="_blank" title="Sales Return Order" href="{{url('manage-salesReturn.html/edit/'.$row->sale_return_id)}}"> {{$row->reference_no}} </a></td>
													<td>{{ucfirst($row->warehouse_name)}}</td>
													<td>{{ucfirst($row->dealer_name)}}</td>
													<td class="pl-1">
														@foreach($purchase_items as $value)
															@if($value->sale_return_id == $row->sale_return_id)
																{{$value->product_name}} ( {{$value->quantity}} ) <br>
															@endif
														@endforeach
													</td>
													<td class="text-center">{{CURRENCY_SYMBOL}} {{$row->total}}</td>
												</tr>
												@endforeach	
											@else
												<tr>
													<td class="text-center" colspan="12">
														<?php echo NO_DATA_FOUND;?>
													</td>
												</tr>
											@endif
										</tbody>
									</table>
								</div>
								<div class="row mt-2">
									<div class="col-8 d-flex">
										<div class="8dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
											Showing {{$resultData->firstItem()}} to {{$resultData->lastItem()}} of {{$resultData->total()}} entries
										</div>
									</div>
									<div class="col-4 ">
										<div class="text-right justify-content-end float-right" >
											{{$resultData->appends(request()->input())->links()}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>				
@endsection
