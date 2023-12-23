
@extends('back_end/template')

@section('content')
<!-- breadcrumb start-->
<div class="content-header row">
	<div class="content-header-left col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-md-10">
				<h2 class="content-header-title float-left mb-0">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="feather icon-home"></i> <a href="{{ route('dashboard') }}">Home</a>
						</li>
						<li class="breadcrumb-item active">
							<?php
								if ((isset($type) && $type == 'add') || $type == 'edit' || $type =='view')
								{
									$pageTitle = ucfirst($type) . ' Product Cost';
								}
								else
								{
									$pageTitle = 'Manage Products Cost';
								}
							?>
							<a href="{{ url('manage-productCost.html') }}" title="{{$pageTitle}}">{{$pageTitle}}</a>
						</li>
					</ol>
				</h2>
			</div>
		</div>
	</div>
</div>
<!--breadcrumb end -->

<section id="row-grouping">
	<div class="card">
		<div class="card-content">
			<div class="card-body card-dashboard">
				<fieldset>
					<legend class="text-uppercase font-size-sm font-weight-bold">
						Add Product Cost
					</legend>
				</fieldset>
				<div class="mt-1">
					<?php
						if ((isset($type) && $type == 'add') || $type == 'edit')
						{
							?>
							<?php
						}
						else
						{
							?>
							<!--Create Data Start-->
							<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate > @csrf
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<div class="mbl">Product<span class="required-start">*</span></div>
											<div class="controls">
												@php
													$product = DB::table('products')->select('product_id','product_name')->get();
												@endphp
												<select name="product_id" class="form-control js-example-basic-single" required>
													<option value="">- Select Product -</option>
													@foreach ($product as $item)
														<option value="{{$item->product_id}}">{{$item->product_name}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="mbl">Product Cost<span class="required-start">*</span></div>
											<div class="controls">
												<input type="number" class="form-control" name="product_cost" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<div class="mbl">Start Date<span class="required-start">*</span></div>
											<div class="controls">
												<input type="text" class="form-control default_date" name="start_date" id="start_date1"  readonly required>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="mbl">End Date<span class="required-start">*</span></div>
											<div class="controls">
												<input type="text" class="form-control default_date" name="end_date" id="end_date1" readonly required>
											</div>
										</div>
									</div>
									<div class="col-md-3 mt-2" style="padding-top: 5px;">
										<input type="submit" name="create" value="Create" class="btn btn-primary ml-1">
									</div>
								</div>
							</form>
							<!--Create Data End-->

							<hr>
							<fieldset>
								<legend class="legend-class">{{ $pageTitle }}</legend>
							</fieldset>

							<form action="" method="get">
								<div class="col-md-12 pl-0">
									<div class="row">
										<div class="col-md-3">
											<input type="search" class="form-control" name="keywords" value="{{ isset($_GET['keywords']) ? $_GET['keywords'] : '' }}" placeholder="Search...">
											<span class="search-note">Note : Product Name </p>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-info trans-saction-butt waves-effect waves-light">
												Search <i class="fa fa-search" aria-hidden="true"></i>
											</button>
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
															<option value="<?php echo $key;?>" <?php echo $selected;?>><?php echo $key;?></option>
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

							<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
								<div class="row mt-1">
									<div class="col-md-12 table-responsive">
										<table class="table row-grouping dataTable" id="customers">
											<thead class="tb-head">
												<tr role="row">
													<th onclick="sortTable(1)" class="text-center">Controls</th>
													<th onclick="sortTable(2)">Product Name</th>
													<th onclick="sortTable(3)" class="text-center">Product Cost</th>
													<th onclick="sortTable(4)" class="text-center">Start Date</th>
													<th onclick="sortTable(5)" class="text-center">End Date</th>
													<th onclick="sortTable(6)" class="text-center">Status</th>
												</tr>
											</thead>
											<tbody class="tb-data">
												@foreach ($resultData as $row)
													<tr>
														<td>
															<div class="dropdown" style="text-align:center;">
																<button type="button"
																	class="btn btn-default gropdown-toggle"
																	data-toggle="dropdown" aria-expanded="false">
																	Action <i class="fa fa-angle-down"></i>
																</button>
																<ul
																	class="dropdown-menu dropdown-menu-right action-links">
																	<li>
																		<a href="javascript:void(0)" data-toggle="modal" data-target="#editModal<?php echo $row->product_costing_id;?>" title="Edit">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>

																	<li>
																		<?php
																			if ($row->product_costing_status == 1)
																			{
																				?>
																				<a href="<?php echo url('manage-productCost.html/status/' . $row->product_costing_id . '/0'); ?>" title="Inactive">
																					<i class="fa fa-ban"></i>Inactive
																				</a>
																				<?php
																			}
																			else
																			{
																				?>
																				<a href="<?php echo url('manage-productCost.html/status/' . $row->product_costing_id . '/1'); ?>" title="Active">
																					<i class="fa fa-check"></i> Active
																				</a>
																				<?php
																			}
																		?>
																	</li>
																</ul>
															</div>
															<!-- Popup start -->
															<div class="modal fade" id="editModal{{$row->product_costing_id}}" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content max-width----">
																		<div class="modal-header" style="background: #0074ae;color: #fff;">
																			<h5 class="modal-title" id="exampleModalLabel">Edit Product Cost</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<form action="" method="post" novalidate >
																			<!-- modal-body start here-->
																			<div class="modal-body">
																				@csrf
																				<div class="row">
																					<div class="col-md-6">
																						<div class="form-group">
																							<div class="mbl">Product Cost<span class="required-start">*</span></div>
																							<div class="controls">
																								<input type="text" name="product_cost" required class="form-control" value="{{$row->product_cost}}" >
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<div class="mbl">Start Date<span class="required-start">*</span></div>
																							<div class="controls">
																								<input type="text" name="start_date" required class="form-control default_date" id="start_date" readonly value="{{date('d-M-Y',$row->start_date)}}">
																								<input type="hidden" name="product_costing_id" value="{{$row->product_costing_id}}">
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<div class="mbl">End Date <span class="required-start">*</span></div>
																							<div class="controls">
																								<input type="text" name="end_date" required class="form-control default_date" id="end_date" readonly value="{{date('d-M-Y',$row->end_date)}}" >
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- modal-body end here-->
																			<div class="modal-footer">
																				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																				<input type="submit" name="update" value="Update" class="btn btn-primary ml-1">
																			</div>
																		</form>
																	</div>
																</div>
															</div>
															<!-- Popup end -->
														</td>
														<td>{{ $row->product_name }}</td>
														<td class="text-center">
															<?php echo CURRENCY_SYMBOL;?>
															<?php echo number_format($row->product_cost,DECIMAL_VALUE,'.','');?>
														</td>
														<td class="text-center">{{ date('d-M-Y',$row->start_date) }}</td>
														<td class="text-center">{{ date('d-M-Y',$row->end_date) }}</td>
														<td style="width:12%;" class="text-center">
															<?php
																if ($row->product_costing_status == 1) { ?>
																	<button class="btn btn-outline-success btn-block" title="Active">
																		<i class="fa fa-check"></i> Active
																	</button>
																	<?php
																}
																else
																{
																	?>
																	<button class="btn btn-outline-danger btn-block" title="Inactive">
																		<i class="fa fa-ban"></i> Inactive
																	</button>
																	<?php
																}
															?>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>

										<div class="row mt-2">
											<div class="col-8 d-flex">
												<div class="8dataTables_info" id="DataTables_Table_0_info" role="status"
													aria-live="polite">
													Showing {{ $resultData->firstItem() }} to
													{{ $resultData->lastItem() }} of {{ $resultData->total() }}
													entries
												</div>
											</div>
											<div class="col-4 ">
												<div class="text-right justify-content-end float-right">
													{{ $resultData->appends(request()->input())->links() }}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection
