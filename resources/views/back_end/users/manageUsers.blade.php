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
									$pageTitle = ucfirst($type)." User";
								}
								else
								{
									$pageTitle = "Manage Users";
								}
							?>
							<a href="{{url('manage-users.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
						</li>
					</ol>
				</h2>
			</div>
			<div class="col-md-6 text-right">
				<?php 
					if (isset($type) && $type == 'add' || $type == 'edit')
					{
						
					}
					else if (isset($type) || $type == 'view')
					{
						?>
						<a href="<?php echo url('manage-users.html');?>" class="btn btn-outline-danger">
							<i class="fa fa-arrow-left"></i> Back
						</a>
						<a href="<?php echo url('manage-users.html/edit');?>/<?php echo $id;?>" class="btn btn-primary">
							Edit User
						</a>
						<?php
					}
					else
					{					
						?>
						<a href="<?php echo url('manage-users.html/add');?>" class="btn btn-primary">
							Create User
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
			<div class="card-body">
				<fieldset>
					<legend class="text-uppercase font-size-sm font-weight-bold">
						<?php echo isset($type)? ucfirst($type)." User" : 'Manage Users';?> 
					</legend>
				</fieldset>
				<?php  
					if (isset($type) && $type == "add" || $type == "edit")
					{
						?>
						<!-- Assets for Image upload Start -->
						<script language="javascript" type="text/javascript">
							$(function () {
								$("#fileupload").change(function () {
									if (typeof (FileReader) != "undefined") {
										var dvPreview = $("#dvPreview");
										dvPreview.html("");
										var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
										$($(this)[0].files).each(function () {
											var file = $(this);
											if (regex.test(file[0].name.toLowerCase())) {
												var reader = new FileReader();
												reader.onload = function (e) {
													var img = $("<img />");
													img.attr("style", "height:210px; width: 242px");
													img.attr("src", e.target.result);
													dvPreview.append(img);
												}
												reader.readAsDataURL(file[0]);
											} else {
												alert(file[0].name + " is not a valid image file.");
												dvPreview.html("");
												return false;
											}
										});
									} else {
										alert("This browser does not support HTML5 FileReader.");
									}
								});
							});
						</script>
						<style>
							div#dvPreview img {
								width: 235px;
								height: 189px;
								border: 1px solid #000;
							}
						</style>
							
						<!-- Assets for Image upload End -->

						<div class="row"> 
							<div class="col-md-3">
								<div class="form-group">
									<div id="dvPreview" class="profile-image">
										<?php 
											if (file_exists(public_path('/uploads/user_profile_image/'.$id.'.png')))
											{
												?>
												<img src="<?php echo asset("public/uploads/user_profile_image/".$id.".png"); ?>">
												<?php
											} 
											else 
											{
												?>
												<img src="{{asset('public/uploads/no_image.png')}}" style="width: 70%;height: 70%">
												<?php
											}   
										?>
									</div>
									
									<div class="">
										<label for="fileupload" class="btn btn-primary mt-2">Choose image</label>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate>
									@csrf
									<input class="d-none" id="fileupload" name="profile_image" type="file"  />
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Role Name<span class="required-start">*</span></div>
												<div class="controls">
													@php
														$userRole  = DB::table('acc_roles')->where('role_status',1)->get();
													@endphp
													<select name="role_id" id="role_id" class="form-control js-example-basic-single" required >
														<option value="">- Select Role Name -</option>
														@foreach ($userRole as $row)
															@php
																$selected  = '';
																if (isset($editData->role_id) && $editData->role_id == $row->role_id ) {
																	$selected = 'selected';
																}
															@endphp
															<option {{$selected}} value="{{$row->role_id}}">{{ucfirst($row->role_name)}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">First Name 
													<span class="required-start">*</span>
												</div>
												<div class="controls">
													<input type="text" name="first_name" id="first_name" class="form-control" required value="{{isset($editData->first_name) ? $editData->first_name :""}}">
												</div>
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Last Name 
													<span class="required-start">*</span>
												</div>
												<div class="controls">
													<input type="text" name="last_name" class="form-control" required value="{{isset($editData->last_name) ? $editData->last_name :""}}">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">DOB <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="dob" id="dob" class="form-control default_date" readonly required value="{{isset($editData->dob) ? date('d-M-Y',$editData->dob) :""}}">
												</div>
											</div>
										</div>
										<script>
											
											function calculateAge (birthDate, otherDate) {
												birthDate = new Date(birthDate);
												otherDate = new Date(otherDate);

												var years = (otherDate.getFullYear() - birthDate.getFullYear());

												if (otherDate.getMonth() < birthDate.getMonth() || 
													otherDate.getMonth() == birthDate.getMonth() && otherDate.getDate() < birthDate.getDate()) {
													years--;
												}
												
												return years;
											}
											now =  Date.now();

											$('#ui-datepicker-div ,body').on('change click',function () {
												dob = $('#dob').val();
												dob = new Date(dob);
												$('#age').val(calculateAge(dob,now));
											})

										</script>
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Age </div>
												<div class="controls">
													<input type="text" name="age" id="age" class="form-control" readonly value="{{!empty($editData->dob)?date_diff(date_create(date('d-m-Y',$editData->dob)), date_create('today'))->y:''}}">
												</div>
											</div>
										</div>
										<div class="col-md-4">
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
									</div>
									
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">E-mail <span class="required-start">*</span></div>
												<div class="controls">
													<input type="email" name="email" class="form-control" required value="{{isset($editData->email) ? $editData->email :""}}">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Primary Phone<span class="required-start">*</span>
												</div>
												<div class="controls">
													<input type="number" name="mobile_number" class="form-control" required value="{{isset($editData->mobile_number) ? $editData->mobile_number :""}}">
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Secondary Phone</div>
												<div class="controls">
													<input type="number" name="secondary_mobile_number" class="form-control" value="{{isset($editData->secondary_mobile_number) ? $editData->secondary_mobile_number :""}}" >
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												@php
													$qualification = DB::table('qualification')->where('qualification_status',1)->get();
												@endphp
												<div class="mbl">Qulaification<span class="required-start">*</span></div>
												<div class="controls">
													<select name="qualification_id" id="qualification" class="form-control js-example-basic-single">
														<option value="">- Select Qualification -</option>	
														<?php
															foreach ($qualification as $item)
															{
																$selected = "";
																if(isset($editData->qualification_id) && $editData->qualification_id == $item->qualification_id)
																{
																	$selected = 'selected';
																}
																?>	
																	<option {{$selected}} value="{{$item->qualification_id}}">{{$item->qualification_name}}</option>
																<?php
															}
														?>
													</select>	
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												@php
													$department = DB::table('emp_departments')->where('department_status',1)->get();
												@endphp
												<div class="mbl">Department </div>
												<div class="controls">
													<select name="department_id" id="department" class="form-control js-example-basic-single">
														<option value="">- Select Department -</option>	
														<?php
															foreach ($department as $item)
															{
																$selected = "";
																if(isset($editData->department_id) && $editData->department_id == $item->department_id)
																{
																	$selected = 'selected';
																}
																?>	
																	<option {{$selected}} value="{{$item->department_id}}">{{$item->department_name}}</option>
																<?php
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												@php
													$designation = DB::table('emp_designations')->where('designation_status',1)->get();
												@endphp
												<div class="mbl">Designation<span class="required-start">*</span></div>
												<div class="controls">
													<select name="designation_id" id="designation" class="form-control js-example-basic-single">
														<option value="">- Select Designation -</option>	
														<?php
															foreach ($designation as $item)
															{
																$selected = "";
																if(isset($editData->designation_id) && $editData->designation_id == $item->designation_id)
																{
																	$selected = 'selected';
																}
																?>	
																	<option {{$selected}} value="{{$item->designation_id}}">{{$item->designation_name}}</option>
																<?php
															}
														?>
													</select>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Country<span class="required-start">*</span></div>
												<div class="controls">
													<select name="country" class="countries form-control js-example-basic-single " id="countryId" required>
														<option value="">- Select Country-</option>
														@if (isset($editData->country_name))
															<option selected value="{{$editData->country_name}}">{{$editData->country_name}}</option> 
														@endif
													</select>
												</div>
											</div>
										</div>

										<div class="col-md-4">
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
										<div class="col-md-4">
											<div class="form-group">
												<div class="mbl">Postal Code
													<span class="required-start">*</span>
												</div>
												<div class="controls">
													<input type="text" name="postal_code" class="form-control" required value="{{isset($editData->postal_code) ? $editData->postal_code :""}}" required>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group col-md-4">
											<label class="col-form-label">Address</label>
											<textarea name="address1" id="address" class="form-control" required >{{isset($editData->address1) ? $editData->address1 :""}}</textarea>
										</div>
									</div>

									<fieldset>
										<legend class="text-uppercase font-size-sm font-weight-bold">
											User Login Details
										</legend>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<div class="mbl">User Name <span class="required-start">*</span></div>
													<div class="controls">
														<input type="text" name="user_name" class="form-control" required value="{{isset($editData->user_name)? $editData->user_name:''}}"  >
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<div class="mbl">Password <span class="required-start">*</span></div>
													<div class="controls">
														<input type="password" name="password" class="form-control" required data-validation-required-message="The password field is required" minlength="6" value="{{isset($editData->orginal_password)? $editData->orginal_password:''}}" >
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<div class="mbl">Confirm Password <span class="required-start">*</span></div>
													<div class="controls">
														<input type="text" name="confirm_password" class="form-control" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6" value="{{isset($editData->orginal_password)? $editData->orginal_password:''}}" >
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="row float-right">
										<div class="col-12 ">
											<a href="{{ url('manage-users.html') }}"class="btn btn-danger mr-1">Cancel</a>
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
							</div>
						</div>
						<?php
					}
					else if (isset($type) && $type == "view")
					{
						?>
						<table class="table">
							<tbody>
								<tr>
									<td class="font-weight-bold">First Name</td>
									<td>{{$editData->first_name}}</td>
								
									<td class="font-weight-bold">Last Name</td>
									<td>{{$editData->first_name}}</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Email</td>
									<td>{{$editData->email}}</td>

									<td class="font-weight-bold">Mobile Number</td>
									<td>
										{{$editData->mobile_number}}
									</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Qualification</td>
									<td>
										{{$editData->qualification_name}}
									</td>
								
									<td class="font-weight-bold">Department</td>
									<td>
										{{$editData->department_name}}
									</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Designation</td>
									<td>
										{{$editData->designation_name}}
									</td>

									<td class="font-weight-bold">State</td>
									<td>{{$editData->state_name}}</td>
								</tr>
								<tr>
									<td class="font-weight-bold">Country</td>
									<td>{{$editData->country_name}}</td>
								
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
								
									<td class="font-weight-bold">Role Name</td>
									<td><button class="btn btn-warning">Admin</button> </td>
								</tr>
								<tr>
									<td class="font-weight-bold">Profile</td>
									<td>
										<?php 
											if (file_exists(public_path('/uploads/user_profile_image/'.$id.'.png')))
											{
												?>
												<img src="<?php echo asset("public/uploads/user_profile_image/".$id.".png"); ?>" class="card-img-top" alt="avatar" style="width:75px; border-radius: 50%" >
												<?php
											} 
											else 
											{
												?>
												<img src="{{asset('public/uploads/no_image.png')}}" class="card-img-top" style="width:75px; border-radius: 50%" alt="avatar">
												<?php
											}   
										?>
									</td>
									
									<tr>
										<td colspan="2">
											<b>	Login Details</b>
										</td>
									</tr>
									<tr>
										<td class="font-weight-bold">User Name</td>
										<td>{{$editData->user_name}}</td>
									</tr>
									<tr>
										<td class="font-weight-bold">E-Mail</td>
										<td>{{$editData->email}}</td>
									</tr>
									<tr>
										<td class="font-weight-bold">Password</td>
										<td>{{$editData->orginal_password}}</td>
									</tr>
									<tr>
										<td class="font-weight-bold">Creation Date</td>
										<td>{{date('d-M-Y',$editData->creation_date)}}</td>
									</tr>
								</tr>
							</tbody>
						</table>
						<?php
					}
					else
					{
						?>
						<form action="" method="get">
							<div class="row">
								<div class="col-md-3">	
									<input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
									<span class="search-note">Note : Full Name, Mobile Number</p>
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
														<option value="<?php echo $key;?>" <?php echo $selected;?> ><?php echo $key;?></option>
														<?php 
													} 
												?>
											</select>
										</div>
										<div class="entries mr-2 ml-1">
											entries
										</div>
									</div>
								</div>
							</div>
						</form>
						
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 pr-1">
							<div class="row mt-1">
								<div class="col-md-12 table-responsive">
									<table class="table row-grouping dataTable" id="customers" style="width: 130%">
										<thead class="tb-head">
											<tr role="row">
												<th class="text-center">Controls</th>
												<th class="text-center">Profile Image</th>
												<th onclick="sortTable(3)">Full Name</th>
												<th onclick="sortTable(4)" class="text-center">Mobile Number</th>
												<th onclick="sortTable(4)" class="text-center">Qualification Name</th>
												<th onclick="sortTable(4)" class="text-center">Department</th>
												<th onclick="sortTable(4)" class="text-center">Designation</th>
												<th onclick="sortTable(4)" class="text-center">Date Of Birth</th>
												<th onclick="sortTable(7)" class="text-center">Gender</th>
												<th onclick="sortTable(8)" class="text-center">Role Name</th>
												<th onclick="sortTable(9)" class="text-center">Created Date</th>
												<th onclick="sortTable(11)" class="text-center">Status</th>
											</tr>
										</thead>
										<tbody class="tb-data">
											@if ($resultData->count() >0)                                                           
												@foreach ($resultData as $row)
													<tr>
														<td>
															<div class="dropdown" style="text-align:center;">
																<button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																	Action <i class="fa fa-angle-down"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-right action-links">
																	<li>
																		<a href="{{url('manage-users.html/edit/'.$row->id)}}" title="Edit">
																			<i class="fa fa-pencil"></i> Edit
																		</a>
																	</li>
																	
																	<li>
																		<?php 
																			if($row->user_status == 1)
																			{
																				?>
																				<a href="<?php echo url('manage-users.html/status/'.$row->id.'/0');?>" title="Inactive"><i class="fa fa-ban"></i> Inactive</a>
																				<?php 
																			}
																			else
																			{ 
																				?>
																				<a href="<?php echo url('manage-users.html/status/'.$row->id.'/1');?>" title="Active"><i class="fa fa-check"></i>  Active</a>
																				<?php 
																			} 
																		?>
																	</li>

																	<li>
																		<a href="{{url('manage-users.html/view/'.$row->id)}}" title="view">
																			<i class="fa fa-eye"></i> View
																		</a>
																	</li>
																</ul>
															</div>
														</td>
														<td class="text-center">
															<?php 
																if (file_exists(public_path('/uploads/user_profile_image/'.$row->id.'.png')))
																{
																	?>
																		<img src="<?php echo asset("public/uploads/user_profile_image/".$row->id.".png");?>" class="round" width="50px" height="50px" >
																	<?php
																} 
																else 
																{
																	?>
																	<img src="{{asset('public/uploads/no_image.png')}}" class="round" width="50px">
																	<?php
																}   
															?>
														</td>
														<td>{{ucfirst($row->first_name)}} {{ucfirst($row->last_name)}}</td>
														<td class="text-center">{{$row->mobile_number}}</td>
														<td class="text-center">{{$row->qualification_name}}</td>
														<td class="text-center">{{$row->department_name}}</td>
														<td class="text-center">{{$row->designation_name}}</td>
														<td class="text-center">{{date('d-M-Y',$row->dob)}}</td>
														<td class="text-center">
															@foreach(gender as $key=>$value)
																@if ($key == $row->gender)
																	{{$value}}
																@endif
															@endforeach
														</td>
														<td class="">
															<button class="btn btn-block btn-outline-info">{{ucfirst($row->role_name)}}</button> 	
														</td>
														<td class="text-center">{{!empty($row->creation_date) ? date('d-M-Y',$row->creation_date) :'--'}}</td>
														<td style="width:12%;" class="text-center">
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
