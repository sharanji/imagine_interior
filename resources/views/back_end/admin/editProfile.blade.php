@extends('back_end/template')

@section('content')

	<div class="content-body">
		<!-- Multiple Rules Validation start -->
		<section class="multiple-validation">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"><?php echo isset($pageTitle) ? $pageTitle :"";?></h4>
						</div>
						<div class="card-content">
							<div class="card-body">
								<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate > @csrf
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">First Name <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="first_name" class="form-control" value="{{auth()->user()->first_name}}" placeholder="Your Name" required data-validation-required-message="This name field is required">
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Last Name <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="last_name" class="form-control" value="{{auth()->user()->last_name}}" required data-validation-required-message="The email field is required">
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">E-mail <span class="required-start">*</span></div>
												<div class="controls">
													<input type="email" name="email" class="form-control" required value="{{auth()->user()->email}}">
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Mobile Number <span class="required-start">*</span></div>
												<div class="controls">
													<input type="number" name="mobile_number" class="form-control"  required value="{{auth()->user()->mobile_number}}">
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Country <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="country_name" class="form-control"  required value="{{auth()->user()->country_name}}">
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">City <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="city_name" class="form-control" placeholder="Confirm Password" required value="{{auth()->user()->city_name}}">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Gender <span class="required-start">*</span></div>
												<div class="controls">
													<select class="form-control js-example-basic-single" name="gender" id="gender" required >
														<option value="">- Select Gender -</option>
														<?php 
															foreach(gender as $key=>$value) 
															{ 
																$selected='';
																if($key == auth()->user()->gender)
																{
																	$selected='selected=selected';
																}
																?>
																<option value="<?php echo $key;?>" <?php echo $selected;?>><?php echo $value;?></option>
																<?php 
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Marital Status <span class="required-start">*</span></div>
												<div class="controls">
													<select class="form-control js-example-basic-single" name="marital_status" id="marital_status" required>
														<option value="">- Select Marital Status -</option>
														<?php 
															foreach(marital_status as $key=>$value) 
															{ 
																$selected='';
																if($key == auth()->user()->marital_status)
																{
																	$selected='selected=selected';
																}
																?>
																<option value="<?php echo $key;?>" <?php echo $selected;?>><?php echo $value;?></option>
																<?php 
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">DOB <span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="dob" class="form-control default_date" required value="<?php echo !empty(auth()->user()->dob) ? date('d-M-Y',auth()->user()->dob) :"";  ?>">
												</div>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Website</div>
												<div class="controls">
													<input type="url" name="website" class="form-control"  value="{{auth()->user()->website}}">
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Address<span class="required-start">*</span></div>
												<div class="controls">
													<input type="text" name="address1" class="form-control" required value="{{auth()->user()->address1}}" >
												</div>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Profile Image </div>
												<div class="">
													<input type="file" name="profile_image" class="form-control">
													
													<?php 
														if (file_exists('public/uploads/admin_profile_image/'.auth()->user()->id.'.png'))
														{
															?>
															<img src="<?php echo 'public/uploads/admin_profile_image/'.auth()->user()->id.'.png';?>" class="mt-2" style="height: 100px">
															<?php
														}
														else
														{
															?>
															<img src="<?php echo "public/uploads/no_image.png"; ?>" class="rounded-circle img-border box-shadow-1" class="mt-2" style="height: 100px">
															<?php
														}
													?>
												</div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="mbl">Cover Image</div>
												<div class="">
													<input type="file" name="cover_image" class="form-control"  >
													<br>
													<?php 
														if (file_exists('public/uploads/admin_cover_image/'.auth()->user()->id.'.png'))
														{
															?>
															<img src="<?php echo 'public/uploads/admin_cover_image/'.auth()->user()->id.'.png';?>" class="mt-2" style="height: 100px">
															<?php
														}
														else
														{
															?>
															<img src="<?php echo "public/uploads/no_image.png"; ?>" class="rounded-circle img-border box-shadow-1" class="mt-2" style="height: 100px">
															<?php
														}
													?>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row float-right">
										<div class="col-12 ">
											<a href="{{url('my-profile.html')}}" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Cancel</a>
											<button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Multiple Rule Validation end -->
	</div>  

@endsection     