
@extends('back_end/template')

@section('content')
    <!-- breadcrumb start-->
    <div class="content-header row">
        <div class="content-header-left col-md-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-md-6">
                    <h2 class="content-header-title float-left mb-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="feather icon-home"></i> <a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php
                                    if ((isset($type) && $type == 'add') || $type == 'edit' || $type =='view') 
                                    {
                                        $pageTitle = ucfirst($type) . 'Discount';
                                    }
                                    else
                                    {
                                        $pageTitle = 'Manage Discounts';
                                    } 
                                ?>
                                <a href="{{ url('manage-discount.html') }}" title="{{$pageTitle}}">{{$pageTitle}}</a>
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
					<?php
						if ((isset($type) && $type == 'add') || $type == 'edit')
						{
							?>
							<?php 
						}
						else
						{
							?>
							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">
									Add Discount
								</legend>
							</fieldset>
							
							<!-- Add Discount start-->
							<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate > @csrf
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<div class="mbl">Discount Name <span class="required-start">*</span></div>
											<div class="controls">
												<input type="text" class="form-control" name="discount_name" required >
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<div class="mbl">Discount Value<span class="required-start">*</span></div>
											<div class="controls">
												<input type="text" class="form-control" name="discount_value" required >
											</div>
										</div>
									</div>
									<div class="col-md-3 mt-2" style="padding-top: 5px;">
										<input type="submit" name="create" value="Create" class="btn btn-primary ml-1">
									</div>	
								</div>
							</form>
							<!-- Add Discounts end-->
								
							<hr>
							<fieldset>
								<legend class="legend-class">{{ $pageTitle }}</legend>
							</fieldset>
							
							<form action="" method="get">
								<div class="col-md-12 pl-0">
									<div class="row">
										<div class="col-md-3">
											<input type="search" class="form-control" name="keywords"
												value="{{ isset($_GET['keywords']) ? $_GET['keywords'] : '' }}"
												placeholder="Search...">
											<span class="search-note">Note : Discount Name</p>
										</div>
										<div class="col-md-3">
											<button type="submit"
												class="btn btn-info trans-saction-butt waves-effect waves-light">Search
												<i class="fa fa-search" aria-hidden="true"></i></button>
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
									
							<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
								<div class="row mt-1">
									<div class="col-md-12 table-responsive">
										<table class="table row-grouping dataTable" id="customers">
											<thead class="tb-head">
												<tr role="row">
													<th onclick="sortTable(1)" class="text-center">Controls</th>
													<th onclick="sortTable(2)">Discount  Name</th>
													<th onclick="sortTable(3)" class="text-center">Discount Value (%)</th>
													<th onclick="sortTable(4)" class="text-center">Status</th>
												</tr>
											</thead>
											<tbody class="tb-data">
												@if ($resultData->count() > 0 )
													@foreach ($resultData as $row)
														<tr>
															<td style="width:12%;">
																<div class="dropdown" style="text-align:center;">
																	<button type="button"
																		class="btn btn-default gropdown-toggle"
																		data-toggle="dropdown" aria-expanded="false">
																		Action <i class="fa fa-angle-down"></i>
																	</button>
																	<ul
																		class="dropdown-menu dropdown-menu-right action-links">
																		<li>
																			<a href="#" data-toggle="modal" data-target="#editModal<?php echo $row->discount_id;?>" title="Edit">
																				<i class="fa fa-pencil"></i> Edit
																			</a>
																		</li>

																		<li>
																			<?php if ($row->discount_status == 1)
																			{ 
																				?>
																					<a href="{{url('manage-discount.html/status/' . $row->discount_id . '/0')}}" title="Inactive"><i class="fa fa-ban"></i> Inactive</a>
																				<?php
																				} 
																				else
																				{
																				?>
																					<a href="{{url('manage-discount.html/status/' . $row->discount_id . '/1')}}" title="Active"><i class="fa fa-check"></i> Active</a>
																				<?php
																			}
																			?>
																		</li>
																	</ul>
																</div>
																															
																<!-- Popup start -->
																<div class="modal fade" id="editModal{{$row->discount_id}}" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content max-width----">
																			<div class="modal-header" style="background: #0074ae;color: #fff;">
																				<h5 class="modal-title" id="exampleModalLabel">Edit Discount</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<form action="" method="post">
																				<!-- modal-body start here-->
																				<div class="modal-body">
																					@csrf
																					<div class="row">
																						<div class="col-md-6">
																							<div class="form-group">
																								<div class="mbl">Discount Name <span class="required-start">*</span></div>
																								<div class="controls">
																									<input type="text" class="form-control" name="discount_name" value="{{$row->discount_name}}">
																								</div>
																							</div>
																						</div>
																						<div class="col-md-6">
																							<div class="form-group">
																								<div class="mbl">Discount Value (%)<span class="required-start">*</span></div>
																								<div class="controls">
																									<input type="text" class="form-control" name="discount_value" value="{{$row->discount_value}}">
																									<input type="hidden" class="form-control" name="discount_id" value="{{$row->discount_id}}">
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
															<td>{{ $row->discount_name }}</td>
															<td class="text-center">{{ $row->discount_value }}</td>
															<td style="width:10%;" class="text-center">
																<?php if ($row->discount_status == 1) { ?>
																	<button class="btn btn-outline-success btn-block" title="Active">
																		<i class="fa fa-check"></i> Active
																	</button>
																<?php } else { ?>
																	<button class="btn btn-outline-danger btn-block" title="Inactive">
																		<i class="fa fa-ban"></i> Inactive
																	</button>
																<?php } ?>
															</td>
														</tr>
													@endforeach
												@else
													<td colspan="4" class="text-center">No Data Found</td>
												@endif    
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
    </section>
@endsection
