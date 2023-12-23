
@extends('back_end/template')

@section('content')
    <!-- breadcrumb start-->
    <div class="content-header row">
        <div class="content-header-left col-md-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-md-12">
                    <h2 class="content-header-title float-left mb-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <i class="feather icon-home"></i> <a href="{{ route('dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php
                                    if ((isset($type) && $type == 'add') || $type == 'edit' || $type =='view') 
                                    {
                                        $pageTitle = ucfirst($type).'Product Type';
                                    }
                                    else
                                    {
                                        $pageTitle = 'Manage Product Types';
                                    } 
                                ?>
                                <a href="{{ url('manage-producttype.html') }}" title="{{$pageTitle}}">{{$pageTitle}}</a>
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
							<?php echo isset($type)? ucfirst($type)." Product Type" : 'Product Type';?> 
						</legend>
					</fieldset>
					<?php
						if ((isset($type) && $type == 'add') || $type == 'edit')
						{
							?>
							<?php 
						}
						else
						{
							?>
							<div class="mt-1">
								<!-- Add Product Cost start-->
								<fieldset>
									<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate > @csrf
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<div class="mbl">Product Type<span class="required-start">*</span></div>
													<div class="controls">
														<input type="text" class="form-control" name="product_type" required >
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<div class="mbl">Product Type Description</div>
													<div class="controls">
														<input type="text" class="form-control" name="product_type_description">
													</div>
												</div>
											</div>
											<div class="col-md-3 mt-2" style="padding-top: 5px;">
												<input type="submit" name="create" value="Create" class="btn btn-primary ml-1">
											</div>
										</div>
									</form>
								</fieldset>
								
								<!-- Add Product Cost end-->
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
												<span class="search-note">Note : Product Type</p>
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
														<th onclick="sortTable(2)">Product Type</th>
														<th onclick="sortTable(3)">Product Type Description</th>
														<th class="text-center">Status</th>
													</tr>
												</thead>
												<tbody class="tb-data">
													@if ($resultData->count() > 0)
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
																				<a href="javascript:void(0)" data-toggle="modal" data-target="#editModal<?php echo $row->product_type_id;?>" title="Edit">
																					<i class="fa fa-pencil"></i> Edit
																				</a>
																			</li>

																			<li>
																				<?php
																					if ($row->product_type_status== 1)
																					{
																						?>
																						<a href="<?php echo url('manage-producttype.html/status/' . $row->product_type_id . '/0'); ?>" title="Inactive">
																							<i class="fa fa-ban"></i>Inactive
																						</a>
																						<?php 
																					}
																					else
																					{
																						?>
																						<a href="<?php echo url('manage-producttype.html/status/' . $row->product_type_id . '/1'); ?>" title="Active">
																							<i class="fa fa-check"></i> Active
																						</a>
																						<?php
																					}
																				?>
																			</li>
																		</ul>
																	</div>
																	<!-- Popup start -->
																	<div class="modal fade" id="editModal{{$row->product_type_id}}" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width----">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Edit Product Type</h5>
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
																									<div class="mbl">Product Type<span class="required-start">*</span></div>
																									<div class="controls">
																										<input type="text" name="product_type" required class="form-control" value="{{$row->product_type}}" >
																									</div>
																								</div>
																							</div>
																							<div class="col-md-6">
																								<div class="form-group">
																									<div class="mbl">Product Type Description</div>
																									<div class="controls">
																										<input type="text" name="product_type_description" class="form-control" value="{{$row->product_type_description}}">                                                                                                
																										<input type="hidden" name="product_type_id" value="{{$row->product_type_id}}">
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
																<td>{{ ucfirst($row->product_type) }}</td>
																<td>{{ ucfirst($row->product_type_description)}}</td>
																<td style="width:12%;" class="text-center">
																	<?php
																		if ($row->product_type_status== 1) { ?>
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
													@else
														<tr>
															<td class="text-center" colspan="4"><?php echo NO_DATA_FOUND;?></td>
														</tr>
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
							</div>
							<?php 
						}
					?>
				</div>
			</div>
		</div>
            
    </section>

 

@endsection
