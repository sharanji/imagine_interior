@extends('back_end/template')
@section('content')


		
		<!-- breadcrumb start
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<i class="feather icon-home"></i> <a href="{{url('dashboard.html')}}">Home</a>
								</li>
								<li class="breadcrumb-item active">
									<?php echo isset($pageTitle) ? $pageTitle :"";?>
								</li>
							</ol>
						</h2>
					</div>
				</div>
			</div>
		</div>
		breadcrumb end -->
		<div class="content-body">
			<div id="user-profile">
				<div class="row">
					<div class="col-12">
						<div class="profile-header mb-2">
							<div class="relative">
								<div class="cover-container">
									<?php
										if(file_exists(public_path('/uploads/admin_cover_image/'.auth()->user()->id.'.png')))
										{
											?>
											<img src="<?php echo asset('public/uploads/admin_cover_image/'.auth()->user()->id.'.png');?>" class="img-fluid bg-cover rounded-0 w-100" alt="Cover Image" style="max-height:350px">
											<?php
										}
										else
										{
											?>
											<img src="<?php echo "public/uploads/default-cover.jpg"; ?>" alt="Cover Image" style="max-height:350px;width:1030px;">
											<?php
										}
									?>
								</div>
								<div class="profile-img-container d-flex align-items-center justify-content-between">
									<?php 
										if(file_exists(public_path('/uploads/admin_profile_image/'.auth()->user()->id.'.png')))
										{
											?>
											<img src="<?php echo asset('public/uploads/admin_profile_image/'.auth()->user()->id.'.png');?>" class="rounded-circle img-border box-shadow-1" alt="Profile Image">
											<?php
										}
										else
										{
											?>
											<img src="<?php echo "public/uploads/no_image.png"; ?>" class="rounded-circle img-border box-shadow-1" alt="Profile Image">
											<?php
										}
									?>
									<div class="float-right">
										<a href="{{url('edit-profile.html')}}" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1"> <i class="feather icon-edit-2"></i></a>
									   
										<a href="{{url('company-setting.html')}}" class="btn btn-icon btn-icon rounded-circle btn-primary">
											<i class="feather icon-settings"></i>
										</a>
									</div>
								</div>
							</div>
							
							
							<?php /* <div class="d-flex justify-content-end align-items-center profile-header-nav">
								<nav class="navbar navbar-expand-sm w-100 pr-0">
									<button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
										data-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
									</button>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">Timeline</a>
											</li>
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">About</a>
											</li>
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">Photos</a>
											</li>
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">Friends</a>
											</li>
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">Videos</a>
											</li>
											<li class="nav-item px-sm-0">
												<a href="#" class="nav-link font-small-3">Events</a>
											</li>
										</ul>
									</div>
								</nav>
							</div> */ ?>
						</div>
					</div>
				</div>
				<section id="profile-info">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="card mt-3">
								<div class="card-header">
									<h4>About Me</h4>
								</div>
								<div class="card-body">

									<div class="tab-content">
										<div class="row">
											<div class="col-lg-12">
												<div class="general-info">
													<div class="row" id="view-info">
														<div class="col-lg-12 col-xl-6">
															<div class="table-responsive">
																<table class="table m-0">
																	<tbody>
																		<tr>
																			<th scope="row">Full Name
																			</th>
																			<td --class="text-uppercase">
																				{{ ucfirst(auth()->user()->first_name) }}
																				{{ auth()->user()->last_name }}
																			</td>
																		</tr>
																		<tr>
																			<th scope="row">Gender</th>
																			<td>
																				<?php 
																					if(!empty(auth()->user()->gender))
																					{
																						foreach(gender as $key=>$value)
																						{
																							if(auth()->user()->gender == $key)
																							{
																								echo $value;
																							} 
																						} 
																					}
																					else
																					{ 
																						echo '--';
																					}
																				?>
																			</td>
																		</tr>
																		<tr>
																			<th scope="row">Birth Date</th>
																			<td>
																				<?php 
																					if(!empty(auth()->user()->dob) && isset(auth()->user()->dob))
																					{
																						
																						echo (date('d-M-Y',auth()->user()->dob));
																					
																					}
																					else
																					{
																						echo '--';
																					}
																				?>
																			</td>
																		</tr>
																		 
																		<tr>
																			<th scope="row">Marital Status</th>
																			<td>
																				<?php 
																					if(!empty(auth()->user()->marital_status))
																					{
																						foreach(marital_status as $key=>$value)
																						{
																							if(auth()->user()->marital_status == $key)
																							{
																								echo $value;
																							} 
																						} 
																					}
																					else
																					{ 
																						echo '--';
																					}
																				?>
																			</td>
																		</tr>
																		
																		<tr>
																			<th scope="row">Location</th>
																			<td>{{ Ucfirst(auth()->user()->address1) }}</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-lg-12 col-xl-6">
															<div class="table-responsive">
																<table class="table">
																	<tbody>
																		<tr>
																			<th scope="row">Email</th>
																			<td>{{ auth()->user()->email }}</td>
																		</tr>
																		<tr>
																			<th scope="row">Mobile Number</th>
																			<td>{{ auth()->user()->mobile_number }} </td>
																		</tr>
																		<tr>
																			<th scope="row">Address</th>
																			<td>
																				<Address>
																					{{ ucfirst(auth()->user()->address1) }}
																				</Address>
																			</td>
																		</tr>
																		<tr>
																			<th scope="row">Country Name</th>
																			<td>{{ ucfirst(auth()->user()->country_name) }}
																			</td>
																		</tr>
																		<tr>
																			<th scope="row">Website</th>
																			<td><a href="{{ isset(auth()->user()->website)? auth()->user()->website:'javascript:void(0)' }}" {{isset(auth()->user()->website)? 'target="_blank"':''}} title="{{ isset(auth()->user()->website)? auth()->user()->website:'--' }}">{{ isset(auth()->user()->website)? auth()->user()->website:'--' }}</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="mt-1">
										{{-- <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i
												class="feather icon-facebook"></i></button>
										<button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i
												class="feather icon-twitter"></i></button>
										<button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i
												class="feather icon-instagram"></i></button> --}}
									</div>
								</div>
							</div>

						</div>
					</div>

				</section>
			</div>

		</div>
		



@endsection
