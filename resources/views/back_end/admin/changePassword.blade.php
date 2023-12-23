@extends('back_end/template')
@section('content')
<style>
	a.view-password {
		float: right !important;
		padding: 10px !important;
		font-size: 15px !important;
		margin: -2px 0px 0px -54px;
		z-index: 9;
}
</style>

		<div class="content-body">
			<!-- Multiple Rules Validation start -->
			<section class="multiple-validation mt-7">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title"><?php echo isset($pageTitle) ? $pageTitle :"";?></h4>
							</div>
							<div class="card-content">
								<div class="card-body"> 
									<form action="" method="post" class="form-horizontal" novalidate> @csrf
										<div class="form-body">
											<div class="row">
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-3">
															Current Password <span class="required-start">*</span>
														</div>
														<div class="col-md-4 controls">
															<input type="password" name="password" class="form-control" required />
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-3">
															New Password <span class="required-start">*</span>
														</div>
														<div class="col-md-4 controls">
															<input type="password" name="new_password" id="new_password" required class="form-control"  required="" data-validation-required-message="The password field is required" minlength="6"  />
														</div>
														<a class="view-password" href="javascript:void(0);" onclick="viewPassword()">
															<i class="fa fa-eye"></i>
														</a>
													</div>
												</div>
												
												<script>
													function viewPassword() 
													{
														var x = document.getElementById("new_password");
														
														if (x.type === "text") 
														{
															x.type = "password";
														} 
														else 
														{
															x.type = "text";
														}
													}
												</script>
												
												<div class="col-12">
													<div class="form-group row">
														<div class="col-md-3">
															Confirm New Password <span class="required-start">*</span>
														</div>
														<div class="col-md-4 controls">
															<input type="password" name="confirm_new_password" id="confirm_new_password" required class="form-control" data-validation-match-match="new_password" data-validation-required-message="The Confirm password field is required" minlength="6" />
														</div>
													</div>
												</div>
											</div>
											
											<div class="row float-right">
												<div class="col-12 ">
													<a href="{{route('dashboard')}}" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Cancel</a>
													<button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
												</div>
											</div>
										</div>
										
										<!-- <div class="card-body">
											<form class="form-horizontal" novalidate="">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="controls">
																<input type="text" name="name" class="form-control" placeholder="Your Name" required="" data-validation-required-message="This name field is required">
															<div class="help-block"></div></div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="controls">
																<input type="email" name="email" class="form-control" placeholder="Your Email" required="" data-validation-required-message="The email field is required">
															<div class="help-block"></div></div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="controls">
																<input type="password" name="password" class="form-control" placeholder="Your Password" required="" data-validation-required-message="The password field is required" minlength="6">
															<div class="help-block"></div></div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="controls">
																<input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required="" data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
															<div class="help-block"></div></div>
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
											</form>
										</div> -->
										
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