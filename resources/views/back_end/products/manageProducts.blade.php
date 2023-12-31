@extends('back_end/template')
@section('content')
<!-- breadcrumb start-->
<div class="content-header row">
	<div class="content-header-left col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-md-6">
				<h2 class="content-header-title float-left mb-0">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">
							<?php
								if(isset($type) && $type == 'add' || $type == 'edit' || $type == 'view' )
								{
									$pageTitle = ucfirst($type)." Product";
								}
								else
								{
									$pageTitle = "Manage Products";
								}
							?>
							<a href="{{url('manage-products.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
						</li>
					</ol>
				</h2>
			</div>
            <?php 
				if (isset($type) && $type == 'add' || $type == 'edit')
				{
					
				}
				else
				{					
					?>
					<div class="col-md-6 text-right">
						<div class="text-right">
							<a href="#" data-toggle="modal" data-target="#importCSV" class="btn btn-warning mr-1">
								<i class="fa fa-download"></i> Import
							</a>
							<a href="<?php echo url('manage-products.html/export');?>" class="btn btn-info mr-1">
								<i class="fa fa-upload"></i> Export
							</a>
							<a href="<?php echo url('manage-products.html/add');?>" class="btn btn-primary">
								<i class="fa fa-plus-circle"></i> Add Product
							</a>
						</div>
					</div>
					
					<!-- Import csv start -->
					<div class="modal fade" id="importCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="width: 560px !important;">
								<div class="modal-header" style="background: #7367f0;color: #fff;">
									<h5 class="modal-title" id="exampleModalLabel">Import Products</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?php echo url('manage-products.html/import');?>" enctype="multipart/form-data" method="post">
									<div class="modal-body">@csrf
										<div class="row">
											<div class="col-md-12">
												<span style="color:#FF8510; font-size:16px;">
													Note : The first line in downloaded csv file should remain as it is. 
													Please do not change the order of columns and Update valid data to CSV.
												</span>
											</div>
										</div>
										
										<div class="row mt-2">
											<div class="col-md-12 text-right">
												<a href="<?php echo asset('public/uploads/sample_files/upload_sample_products.csv');?>" download class="btn btn-info btn-flat pull-right" title="Download Sample File"><i class="fa fa-download"></i> Download Sample</a>
											</div>
										</div>
										
										<div class="row mt-2">
											<div class="col-md-12">
												The correct column order is <span class="text-info">(Product Code, Product Name, Cost, Price, Alert Quantity.)</span> &nbsp; &amp; You must follow this.
											</div>
										</div>
										
										<div class="row mt-2">
											<div class="form-group col-md-10">
												<label class="col-form-label">Upload File <span class="required-start">*</span></label>
												<input type="file" name="csv"  id="chooseFile" class="form-control singleDocument" onchange="return validateSingleDocumentExtension(this)" required />
												<span style="color:#a0a0a0;">Note : Upload format CSV and upload size is 5 mb.</span>
											</div>
										</div>
									
										<script>
											/** Single Document Type & Size Validation **/
											function validateSingleDocumentExtension(fld) 
											{
												var fileUpload = fld;
												
												if (typeof (fileUpload.files) != "undefined")
												{
													var size = parseFloat( fileUpload.files[0].size / 1024 ).toFixed(2);
													var validSize = 1024 * 5; //1024 - 1Mb multiply 4mb
													
													//var validSize = 500; 
													
													if( size > validSize )
													{
														//alert("Document upload size is 4 MB");
														alert("File size should not exceed 5 MB.");
														$('.singleDocument').val('');
														var value = 1;
														return false;
													}
													else if(!/(\.csv)$/i.test(fld.value))
													//else if(!/(\.pdf)$/i.test(fld.value))
													{
														alert("Invalid document file type.");      
														$('.singleDocument').val('');
														return false;   
													}
													
													if(value != 1)	
														return true; 
												}
											}
										</script>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary waves-effect waves-light">Import</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Import csv end -->
					
					<?php 
				} 
			?>
		</div>
	</div>
</div>
<section id="row-grouping">
	<div class="card">
		<div class="card-content">
			<div class="card-body">
				<fieldset>
					<legend class="text-uppercase font-size-sm font-weight-bold">
						<?php echo isset($type)? ucfirst($type)." Product" : 'Manage Products';?> 
					</legend>
				</fieldset>
				<?php 
					if( isset($type) && $type == "add" || $type == "edit" )
					{
						?>
						<form novalidate enctype="multipart/form-data" method="post"> @csrf
							<div class="row">
								<div class="form-group col-md-3">
									<div class="mbl">Product Code <span class="required-start">*</span></div>
									<div class="controls">
										<input type="text" class="form-control" name="product_code" required value="<?php echo isset($resultData->product_code) ? $resultData->product_code : '';?>" >
									</div>
								</div>
								<div class="form-group col-md-3">
									<div class="mbl">Product Name <span class="required-start">*</span></div>
									<div class="controls">
										<input type="text" class="form-control" name="product_name" required value="<?php echo isset($resultData->product_name) ? ucfirst($resultData->product_name) : '';?>" >
									</div>
								</div>
								<div class="form-group col-md-3">
									<div class="mbl">Net Dealer Price <span class="required-start">*</span></div>
									<div class="controls">
										<input type="text" class="form-control" name="cost" required value="<?php echo isset($resultData->cost) ? $resultData->cost : 0;?>" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									<div class="mbl">Selling Price <span class="required-start">*</span></div>
									<div class="controls">
										<input type="text" name="price" class="form-control" required value="<?php echo isset($resultData->price) ? $resultData->price : 0;?>" >
									</div>
								</div>
								
								<div class="form-group col-md-3">
									<div class="mbl">Category <span class="required-start">*</span></div>
									<div class="controls">
										<?php
											$category  = DB::table('category')
														->where('category_layer','1')
														->select('category_id','category_name')
														->get();
										?>
										<select name="category_id" onchange="selectSubCategory(this.value);" class="form-control js-example-basic-single" required > 
											<option value="">- Select Category -</option>
											<?php
												foreach ($category as $item)
												{
													$selected = '';
													if (isset($resultData->category_id) && $resultData->category_id == $item->category_id ) 
													{
														$selected = "selected";
													}
													?>
													<option value="<?php echo $item->category_id;?>" <?php echo $selected;?>><?php echo $item->category_name;?></option>
													<?php 
												} 
											?>
										</select>
									</div>
								</div>
								<div class="form-group col-md-3">
									<div class="mbl">Sub Category </div>
									<div class="controls">
										<select name="subcategory_id" id="subcategory_id" class="form-control js-example-basic-single" >
											<option value="">- Select Sub Category -</option>
											<?php
												if(isset($resultData->category_id))
												{
													$sub_category = DB::table('category')
															->select('category_id','category_name')
															->where('main_category_id',$resultData->category_id)
															->get();
													foreach($sub_category as $item)
													{
														$selected = '';
														if (isset($resultData->subcategory_id) && $resultData->subcategory_id == $item->category_id ) 
														{
															$selected = "selected";
														}
														?>
														<option selected value="<?php echo $item->category_id;?>"><?php echo ucfirst($item->category_name);?></option>	
														<?php 
													} 
												} 
											?>
										</select>

										<script>
											function selectSubCategory(val)
											{
												if(val !='')
												{
													
													$('#subcategory_id').html('<option value="">- Select Sub Category -</option>'); 
													$.ajax({
														url:"{{url('getAjaxSelectSubCategory')}}",
														type: "POST",
														data: {
															id: val,
															_token: '{{csrf_token()}}' 
														},
														dataType : 'json',
														success: function(result)
														{
															$('#subcategory_id').html('<option value="">- Select Sub Category -</option>'); 
															
															$.each(result.category,function(key,value)
															{
																$("#subcategory_id").append('<option value="'+value.category_id+'">'+value.category_name+'</option>');
															});
														}
													});
												}
												else 
												{ 
													alert("No SubCategory under this Category!");
												}

												//HSN Code
												if(val !='')
												{
													$.ajax({
														url:"{{url('/products/getHsnCodes')}}",
														type: "POST",
														data: {
															id: val,
															_token: '{{csrf_token()}}' 
														},
														//dataType : 'json',
														success: function(result)
														{ 
															data = JSON.parse(result);
															
															$('#hsn_sac_code').val(data[0]['hsn_code_id']);
															$('#hsn_sac_name').val(data[0]['hsn_code']);
															$('#tax_name').val(data[0]['tax_name']);
															$('#tax_id').val(data[0]['tax_id']);
														}
													});
													
												}
												else 
												{ 
													alert("No tax for this HSN !");
												}
											}
										</script>
									</div>	
								</div>

								
							</div>
							<div class="row">
							<div class="form-group col-md-3">
									<div class="mbl">HSN Code </div>
									<div class="controls">
									<input type="hidden" name="hsn_sac_name" id="hsn_sac_name" class="form-control"  value="<?php echo isset($resultData->hsn_sac_name) ? $resultData->hsn_sac_name :'0';?>" placeholder="">
									
									{{-- <input type="hidden" name="hsn_sac_code" id="hsn_sac_code" class="form-control" value="<?php echo isset($resultData->hsn_sac_code) ? $resultData->hsn_sac_code :'0';?>" placeholder=""> --}}
										
										<?php 
											$hsn_code = DB::table('inv_hsn_codes')
													->select('hsn_code_id','hsn_code')
													->get();
										?>
										<select name="hsn_sac_code" class="form-control js-example-basic-single" onchange="getval(this)" >
											<option value="">- Select HSN Code -</option>
											<?php
												foreach ($hsn_code as $item)
												{
													$selected = '';
													if (isset($resultData->hsn_sac_code) && $resultData->hsn_sac_code == $item->hsn_code_id ) 
													{
														$selected = "selected";
													}
													?>
													<option value="<?php echo $item->hsn_code_id;?>" <?php echo $selected;?>><?php echo $item->hsn_code;?></option>
													<?php 
												} 
											?>
										</select> 
									</div>	
								</div>
								<script>
									const hsn_code = <?php echo json_encode($hsn_code); ?>;
									function getval(sel)
									{
										selectHsn = hsn_code[sel.value];
										$('#hsn_sac_name').val(selectHsn['hsn_code']);
									}
								</script>
								
								<div class="form-group col-md-3">
									<div class="mbl">Product Tax </div>
									<div class="controls">
									<input type="text" name="tax_name" id="tax_name" class="form-control" readonly value="<?php echo isset($resultData->tax_name) ? $resultData->tax_name :'0';?>" placeholder="">
									<input type="hidden" name="tax_id" id="tax_id" class="form-control" value="<?php echo isset($resultData->tax_id) ? $resultData->tax_id :'0';?>" placeholder="">
										<?php /* <?php
											$tax = DB::table('tax')->select('tax_id','tax_name')->get();
										?>
										<select name="tax_id" class="form-control js-example-basic-single" >
											<option value="">- Select Tax -</option>
											<?php
												foreach($tax as $item)
												{
													$selected = '';
													if (isset($resultData->tax_id) && $resultData->tax_id == $item->tax_id ) 
													{
														$selected = "selected";
													}
													?>
													<option value="<?php echo $item->tax_id;?>" <?php echo $selected;?>><?php echo $item->tax_name;?></option>
													<?php 
												}
											?>
										</select> */ ?>
									</div>	
								</div>
								<div class="form-group col-md-3">
									<div class="mbl">Alert Quantity</div>
									<div class="controls">
										<input type="number" name="alert_quantity" class="form-control" value="<?php echo isset($resultData->alert_quantity) ? $resultData->alert_quantity : 0;?>" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									<div class="mbl">UOM <span class="required-start">*</span></div>
										<div class="controls">
											<?php
												$uom = DB::table('uom')
													->select('uom_class_id','uom_code')
													->get();
											?>
											<select name="unit" required class="form-control js-example-basic-single" required >
												<option value="">- Select UOM -</option>
												<?php
													foreach($uom as $item)
													{
														$selected = '';
														if (isset($resultData->unit) && $resultData->unit == $item->uom_code ) 
														{
															$selected = "selected";
														}
														?>
														<option value="<?php echo $item->uom_code;?>" <?php echo $selected;?>><?php echo $item->uom_code;?></option>
														<?php 
													}
												?>
											</select>
										</div>
								</div>
								
								<div class="form-group col-md-3">
									<div class="mbl">Brand</div>
									<div class="controls">
										<?php
											$brand = DB::table('brand')->where('brand_status','1')->select('brand_id','brand_name')->get();
										?>
										<select name="brand_id" class="form-control js-example-basic-single" >
											<option value="">- Select Brand -</option>
											<?php
												foreach($brand as $item)
												{
													$selected = '';
													if (isset($resultData->brand_id) && $resultData->brand_id == $item->brand_id ) 
													{
														$selected = "selected";
													}
													?>
													<option value="<?php echo $item->brand_id;?>" <?php echo $selected;?>><?php echo ucfirst($item->brand_name);?></option>
													<?php 
												}
											?>
										</select>
									</div>
								</div>
								
								<div class="form-group col-md-3">
									<div class="mbl">Product Type</div>
									<div class="controls">
										<?php
											$product_type = DB::table('inv_product_types')->where('product_type_status','1')->select('product_type_id','product_type')->get();
										?>
										<select name="product_type_id" class="form-control js-example-basic-single">
											<option value="">- Select Product Type -</option>
											<?php
												foreach($product_type as $item)
												{
													$selected = '';
													if (isset($resultData->product_type_id) && $resultData->product_type_id == $item->product_type_id ) 
													{
														$selected = "selected";
													}
													?>
													<option value="<?php echo $item->product_type_id;?>" <?php echo $selected;?>><?php echo ucfirst($item->product_type);?></option>
													<?php 
												}
											?>
										</select>
									</div>	
								</div>
							</div>
							<div class="row">											
								<div class="form-group col-md-6">
									<div class="mbl">Detailed Description </div>
									<div class="controls">
										<textarea name="description" class="form-control" placeholder="Please enter detailed description"><?php echo isset($resultData->description) ? $resultData->description : '';?></textarea>
									</div>
								</div>
								<div class="form-group col-md-3">
									<div class="mbl">Product Image </div>
									<div class="controls">
										<input class="form-control" id="fileupload" name="product_image" type="file" />
									</div>
								</div>
							</div>
							
							<div class="row mb-2 float-right">
								<div class="col-md-12">
									<a href="<?php echo url('manage-products.html');?>" class="btn btn-danger mr-1">
										Cancel
									</a>
									<?php
										if( isset($type) && $type == "add" )
										{
											?>
											<button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
											<?php 
										} 
										else
										{
											?>
											<button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
											<?php 
										} 
									?>
								</div>
							</div>
						</form>
						<?php
					}
					else
					{
						?>
						<form action="" method="get">
							<div class="col-md-12 pl-0">
								<div class="row">
									<div class="col-md-3">	
										<input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
										<span class="search-note">Note : Product Name, HSN Code, Product Code </p>
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
						
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
							<div class="row mt-1">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table row-grouping dataTable nowrap scroll-horizontal-vertical" style="width: 1600.6px;" id="customers">
											<thead class="tb-head">
												<tr>
													<th class="text-center" >Controls</th>
													<th class="text-center">Image</th>
													<th onclick="sortTable(1)" class="text-center" >Product Code</th>
													<th onclick="sortTable(2)" class="text-center" >HSN Code</th>
													<th onclick="sortTable(3)" style="width: 20%;" >Product Name</th>
													<th onclick="sortTable(4)" >Category</th>
													<th onclick="sortTable(5)" class="text-center" >Cost</th>
													<th onclick="sortTable(6)" class="text-center" >Price</th>
													<th onclick="sortTable(7)" class="text-center" >Quantity</th>
													<th onclick="sortTable(8)" class="text-center" >UOM</th>
													<th onclick="sortTable(9)" class="text-center" >Alert Quantity</th>
													<th onclick="sortTable(9)" class="text-center" >Status</th>
												</tr>
											</thead>
											<tbody class="tb-data">
												@if ($resultData->count() > 0 )
													@foreach ($resultData as $row)
													<tr>
														<td>
															<div class="dropdown" style="text-align:center;">
																<button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																	Action <i class="fa fa-angle-down"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-right action-links">
																	<li>
																		<a href="{{'manage-products.html/edit/'.$row->product_id}}" title="Edit">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>
																	
																	<li>
																		<?php 
																			if($row->product_status == 1)
																			{
																				?>
																				<a href="<?php echo url('manage-products.html/status/'.$row->product_id.'/0');?>" title="Inactive"><i class="fa fa-ban"></i> Inactive</a>
																				<?php 
																			}
																			else
																			{ 
																				?>
																				<a href="<?php echo url('manage-products.html/status/'.$row->product_id.'/1');?>" title="Active"><i class="fa fa-check"></i>  Active</a>
																				<?php 
																			} 
																		?>
																	</li>
																</ul>
															</div>
														</td>
														<td class="text-center">
															<?php 
																if (file_exists(public_path('/uploads/products/'.$row->product_id.'.png')))
																{
																	?>
																	<img src="<?php echo asset("public/uploads/products/".$row->product_id.".png");?>" width="60px" height="60px" >
																	<?php
																} 
																else 
																{
																	?>
																	<img src="{{asset('public/uploads/no_image.png')}}" class="round" width="60px">
																	<?php
																}   
															?>
														</td>
														<td class="text-center" >{{$row->product_code}}</td>
														<td class="text-center" >{{$row->hsn_sac_name}}</td>
														<td>{{$row->product_name}}</td>
														<td>{{$row->category_name}}</td>
														<td class="text-center">
															<?php echo CURRENCY_SYMBOL;?> 
															<?php echo number_format($row->cost,DECIMAL_VALUE,'.','');?>
														</td>
														<td class="text-center">
															<?php echo CURRENCY_SYMBOL;?> 
															<?php echo number_format($row->price,DECIMAL_VALUE,'.','');?>
														</td>
														<td class="text-center">{{$row->quantity}}</td>
														<td class="text-center">{{$row->unit}}</td>
														<td class="text-center">{{$row->alert_quantity}}</td>
														<td class="text-center">
															<?php 
																if($row->product_status == 1)
																{
																	?>
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
						<?php 
					} 
				?>
			</div>
		</div>
	</div>
</section>				
@endsection
