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
							<i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">
							<?php
								if(isset($type) && $type == 'add' || $type == 'edit' || $type == 'view' )
								{
									$pageTitle = ucfirst($type)." Customer";
								}
								else
								{
									$pageTitle = "Manage Customers";
								}
							?>
							<a href="{{url('manage-customer.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
						</li>
					</ol>
				</h2>
			</div>
            
			<div class="col-md-6 text-right">
				<?php 
					if (isset($type) && $type == 'add' || $type == 'edit')
					{
					}
					else if (isset($type) && $type == 'view')
					{
						?>
						<a href="<?php echo url('manage-customer.html/');?>" class="btn btn-outline-danger">
							<i class="fa fa-arrow-left"></i> Back
						</a>
						<a href="<?php echo url('manage-customer.html/edit');?>/<?php echo $id;?>" class="btn btn-primary">
							Edit Customer
						</a>
						<?php
					}
					else
					{					
						?>
						<a href="<?php echo url('manage-customer.html/add');?>" class="btn btn-primary">
							Create Customer
						</a>
						<?php 
					} 
				?>
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
						<?php echo isset($type)? ucfirst($type)." Customer" : 'Manage Customers';?> 
					</legend>
				</fieldset>
				<?php  
					if (isset($type) && $type == "add" || $type == "edit")
					{
						?>
						<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate>
							@csrf
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">
											First Name <span class="required-start">*</span>
										</div>
										<div class="controls">
											<input type="text" name="first_name" class="form-control" required value="{{isset($editData->first_name) ? $editData->first_name :""}}">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">
											Last Name <span class="required-start">*</span>
										</div>
										<div class="controls">
											<input type="text" name="last_name" class="form-control" required value="{{isset($editData->last_name) ? $editData->last_name :""}}">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">DOB <span class="required-start">*</span></div>
										<div class="controls">
											<input type="text" name="dob" id="dob" class="form-control default_date" required value="{{isset($editData->dob) ? date('d-M-Y',$editData->dob) :""}}" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Gender <span class="required-start">*</span></div>
										<div class="controls">
											<select class="form-control js-example-basic-single" name="gender" id="gender" required>
												<option value="">- Select Gender -</option>
												<?php
													foreach(gender as $key=>$value) 
													{ 
														$selected='';
														if( isset($editData->gender) && $editData->gender == $key)
														{
															$selected='selected=selected';
														}
														?>
														<option value="{{$key}}" required {{$selected}}>{{$value}}</option>
														<?php 
													}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">E-Mail <span class="required-start">*</span></div>
										<div class="controls">
											<input type="email" name="email" class="form-control" value="{{isset($editData->email) ? $editData->email :""}}" required>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Mobile Number
											<span class="required-start">*</span>
										</div>
										<div class="controls">
											<input type="number" name="mobile_number" class="form-control" value="{{isset($editData->mobile_number) ? $editData->mobile_number :""}}" required >
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Secondary Mobile Number</div>
										<div class="controls">
											<input type="number" name="secondary_mobile_number" id="secondary_mobile_number" class="form-control" value="{{isset($editData->secondary_mobile_number) ? $editData->secondary_mobile_number :""}}" >
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Country<span class="required-start">*</span></div>
										<div class="controls">
											<select name="country" class="countries form-control js-example-basic-single " id="countryId" required >
												<option value="">- Select Country-</option>
												@if (isset($editData->country_name))
													<option selected value="{{$editData->country_name}}">{{$editData->country_name}}</option> 
												@endif
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">State<span class="required-start">*</span></div>
										<div class="controls">
											<select name="state" class="states form-control js-example-basic-single" required id="stateId">
												<option value="">- Select State -</option>
												@if (isset($editData->state_name))
													<option selected value="{{$editData->state_name}}">{{$editData->state_name}}</option> 
												@endif
											</select>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Postal Code<span class="required-start">*</span>
										</div>
										<div class="controls">
											<input type="text" name="postal_code" class="form-control" required value="{{isset($editData->postal_code) ? $editData->postal_code :""}}" required>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Address</div>
										<div class="controls">
											<textarea name="address1" rows='1' id="address" class="form-control" >{{isset($editData->address1) ? $editData->address1 :""}}</textarea>
										</div>
									</div>
								</div>                                                    
							</div>
							
							<!--
							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">
									Login Details
								</legend>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<div class="mbl">User Name<span class="required-start">*</span></div>
											<div class="controls">
												<input type="email" name="user_name" class="form-control" required value="{{isset($editData->user_name)? $editData->user_name:''}}"  >
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<div class="mbl">Password<span class="required-start">*</span></div>
											<div class="controls">
												<input type="password" name="password" class="form-control" required data-validation-required-message="The password field is required" minlength="6" value="{{isset($editData->orginal_password)? $editData->orginal_password:''}}" >
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<div class="mbl">Confirm Password<span class="required-start">*</span></div>
											<div class="controls">
												<input type="text" name="confirm_password" class="form-control" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6" value="{{isset($editData->orginal_password)? $editData->orginal_password:''}}" >
											</div>
										</div>
									</div>
								</div>
							</fieldset> -->
							
							<div class="row mb-2 float-right">
								<div class="col-md-12">
									<a href="<?php echo url('manage-customer.html');?>" class="btn btn-danger mr-1">
										Cancel
									</a>
									<?php
										if( isset($type) && $type == "add" )
										{
											?>
											<button type="submit" class="btn btn-primary">Create</button>
											<?php 
										} 
										else
										{
											?>
											<button type="submit" class="btn btn-primary">Update</button>
											<?php 
										} 
									?>
								</div>
							</div>
						</form>
						<?php
					}
					else if (isset($type) && $type == "view" )
					{
						?>
						<div class="row">
							<div class="col-md-12">
								<table class="table">
									<tbody>
										<tr>
											<td class="font-weight-bold">First Name</td>
											<td>{{ucfirst($editData->first_name)}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Last Name</td>
											<td>{{ucfirst($editData->last_name)}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Date of Birth</td>
											<td>{{date('d-M-Y',$editData->dob)}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Gender</td>
											<td>
												@foreach (gender as $key=>$value)
													@if ($key == $editData->gender)
														{{$value}}
													@endif
												@endforeach
											</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Email</td>
											<td>{{$editData->email}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Mobile Number</td>
											<td>
												{{$editData->mobile_number}}
											</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Country</td>
											<td>{{$editData->country_name}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">State</td>
											<td>{{$editData->state_name}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Postal Code</td>
											<td>{{$editData->postal_code}}</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Address</td>
											<td>{{$editData->address1}}</td>
										</tr>
										
										<tr>
											<td class="font-weight-bold">Created Date</td>
											<td>{{date('d-M-Y',$editData->creation_date)}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<?php
					}
					else
					{
						?>
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
							<form action="" method="get">
								<div class="col-md-12 pl-0">
									<div class="row">
										<div class="col-md-3">	
											<input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
											<span class="search-note">Note : Full Name, Mobile Number. </p>
										</div>	
										<div class="col-md-3">
											<button type="submit" class="btn btn-info trans-saction-butt waves-effect waves-light">Search <i class="fa fa-search" aria-hidden="true"></i></button>
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
							<div class="row mt-2">
								<div class="col-md-12 table-responsive">
									<table class="table row-grouping dataTable" id="customers">
										<thead class="tb-head">
											<tr role="row">
												<th  class="text-center">Controls</th>
												<th onclick="sortTable(2)">Full Name</th>   
												<th onclick="sortTable(3)" class="text-center">Mobile Number</th>
												<th onclick="sortTable(4)" class="">Date Of Birth</th>
												<th onclick="sortTable(5)" class="">Gender</th>
												<th onclick="sortTable(4)" class="text-center">Created Date</th>
												<th onclick="sortTable(5)" class="text-center">Status</th>
											</tr>
										</thead>
										<tbody class="tb-data">
											@if ($resultData->count() >0)                                                           
												@foreach ($resultData as $row)
													<tr>
														<td style="width:12%;">
															<div class="dropdown" style="text-align:center;">
																<button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																	Action <i class="fa fa-angle-down"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-right action-links">
																	<li>
																		<a href="{{url('manage-customer.html/edit/'.$row->id)}}" title="Edit">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>
																	
																	<li>
																		<?php 
																			if($row->user_status == 1)
																			{
																				?>
																				<a href="<?php echo url('manage-customer.html/status/'.$row->id.'/0');?>" title="Inactive"><i class="fa fa-ban"></i> Inactive</a>
																				<?php 
																			}
																			else
																			{ 
																				?>
																				<a href="<?php echo url('manage-customer.html/status/'.$row->id.'/1');?>" title="Active"><i class="fa fa-check"></i>  Active</a>
																				<?php 
																			} 
																		?>
																	</li>

																	<li>
																		<a href="{{url('manage-customer.html/view/'.$row->id)}}" title="view">
																			<i class="fa fa-eye"></i> View
																		</a>
																	</li>
																</ul>
															</div>
														</td>
														<td>{{ucfirst($row->first_name)}} {{$row->last_name}}</td>
														<td class="text-center">{{$row->mobile_number}}</td>
														<td class="">{{date('d-M-Y',$row->dob)}}</td>
														<td class="">
															@foreach (gender as $key=>$value)
																@if ($key == $row->gender)
																	{{$value}}
																@endif
															@endforeach
														</td>
														<td class="text-center">{{date('M d-Y',$row->creation_date)}}</td>
														<td style="width:10%;" class="text-center">
															<?php 
																if($row->user_status == 1)
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
													<td class="text-center" colspan="11">
														<?php echo NO_DATA_FOUND;?>
													</td>
												</tr>
											@endif    
										</tbody>
									</table>
									
									<div class="row mt-2">
										<div class="col-md-8 d-flex">
											<div class="8dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
												Showing {{$resultData->firstItem()}} to {{$resultData->lastItem()}} of {{$resultData->total()}} entries
											</div>
										</div>
										<div class="col-md-4">
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
 
<script type="text/javascript">  
    function selectState(val)
    {
        if(val !='')
        {
            $("#state_id").html('');
            
            $.ajax({
                url:"{{url('getAjaxSelectState')}}",
                type: "POST",
                data: {
                    id: val,
                    _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result)
                {
                    $('#state_id').html('<option value="">- Select State -</option>'); 
                    $('#district_id').html('<option value="">- Select State -</option>'); 
                    $.each(result.states,function(key,value)
                    {
                        $("#state_id").append('<option value="'+value.state_id+'">'+value.state_name+'</option>');
                    });
                }
            });
        }
        else 
        { 
            alert("No States under this Country!");
        }
    }
    
    function selectDistrict(val)
    {
        if(val !='')
        {
            $("#district_id").html('');
            $.ajax({
                url:"{{url('getAjaxSelectDistrict')}}",
                type: "POST",
                data: {
                    id: val,
                    _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result)
                {
                    $('#district_id').html('<option value="">- Select District -</option>'); 
                    $.each(result.data,function(key,value)
                    {
                        $("#district_id").append('<option value="'+value.district_id+'">'+value.district_name+'</option>');
                    });
                }
            });
        }
        else 
        { 
            alert("No districts under this state!");
        }
    }
</script>

@endsection
