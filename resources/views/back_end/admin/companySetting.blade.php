@extends('back_end/template')

@section('content')


<!-- BEGIN: Content-->
<section id="row-grouping">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <fieldset>
                    <legend class="text-uppercase font-size-sm font-weight-bold">
                        Company Settings
                    </legend>
                </fieldset>
                <div class="row">
                    <!-- row start-->

                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                    Company Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="feather icon-mail mr-50 font-medium-3"></i>
                                    Mailer Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i class="feather icon-image mr-50 font-medium-3"></i>
                                    Image Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-theme" data-toggle="pill" href="#account-vertical-theme" aria-expanded="false">
                                    <i class="feather icon-monitor mr-50 font-medium-3"></i>
                                    Theme Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-sms" data-toggle="pill" href="#account-vertical-sms" aria-expanded="false">
                                    <i class="feather icon-message-square mr-50 font-medium-3"></i>
                                    SMS Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-invoice" data-toggle="pill" href="#account-vertical-invoice" aria-expanded="false">
                                    <i class="feather icon-file-text mr-50 font-medium-3"></i>
                                    Invoice Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-numbers" data-toggle="pill" href="#account-vertical-numbers" aria-expanded="false">
                                    <i class="feather icon-monitor mr-50 font-medium-3"></i>
                                    Default Numbers
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="tab-content">

                            <!-- Company Setting end -->
                            <div role="tabpanel" class="tab-pane active mt-2" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                <form action="" name="sharanji" novalidate method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mbl">Site Name<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" name="site_name" class="form-control" required value="{{SITE_NAME}}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mbl">Site Title<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" name="site_title" class="form-control" required value="{{SITE_TITTLE}}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mbl">Company Name<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" name="company_name" class="form-control" required value="{{COMPANY_NAME}}" />
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="mbl">GST Number<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" name="gst_number" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="mbl">PAN Number<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" name="pan_number" class="form-control" required />
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-4 col-sm-12">
                                            <div class="form-group">
                                                <div class="mbl">Primary Mobile Number<span class="required-start">*</span></div>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="primary_mobile" required value="{{PRIMARY_MOBILE}}">
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Secondary Mobile Number<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" class="form-control" name="secondary_mobile" required value="{{SECONDARY_MOBILE}}">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Contact E-mail<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" class="form-control" name="contact_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Webmaster E-mail<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" class="form-control" name="webmaster_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">No-reply E-mail<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" class="form-control" name="noreply_email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Address 2<span class="required-start">*</span></div>
                                <div class="controls">
                                    <textarea class="form-control" name="address" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Address 1<span class="required-start">*</span></div>
                                <div class="controls">
                                    <textarea class="form-control" name="address2" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="mbl">Company Account<span class="required-start">*</span></div>
                                <div class="controls">
                                    <textarea type="text" class="form-control" name="company_account" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2 float-right">
                        <div class="col-md-12">
                            <input type="submit" name="companySetting" value="Update" class="btn btn-primary mr-sm-1  mb-sm-0">
                        </div>
                    </div>
                    </form>
                </div>
                <!-- Company Setting end -->

                <!-- Mailer start -->
                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                    <form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate>
                        @csrf

                        <div class="row mb-1">
                            <div class="col-md-3">
                                <input type="radio" name="mail" checked id="send-grid">
                                <label class="h5" for="send-grid">Send-grid</label>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="mail" id="smtp">
                                <label class="h5" for="smtp">SMTP</label>
                            </div>
                        </div>

                        <!-- send grid start here-->
                        <div class="send-grid">
                            <div class="row mb-2">
                                <div class="col-lg-5">
                                    <div class="mbl">Sendgrid Host<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="sendgrid_host" class="form-control" required value="{{$emailSettings->sendgrid_host}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mbl">Sendgrid Port<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="sendgrid_port" class="form-control" required value="{{$emailSettings->sendgrid_port}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mbl">Sendgrid User Name <span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="sendgrid_username" class="form-control" required value="{{$emailSettings->sendgrid_username}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mbl">Sendgrid Password<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="sendgrid_password" class="form-control" required value="{{$emailSettings->sendgrid_password}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- send grid end here-->

                        <!--SMTP start here-->
                        <div class="smtp" style="display: none;">
                            <div class="row mb-2">
                                <div class="col-lg-5">
                                    <div class="mbl">SMTP Host<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="smtp_host" class="form-control" required value="{{$emailSettings->smtp_host}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mbl">SMTP Port<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="smtp_port" class="form-control" required value="{{$emailSettings->smtp_port}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5">
                                    <div class="mbl">SMTP User Name<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="email" name="smtp_username" class="form-control" required value="{{$emailSettings->smtp_username}}">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mbl">SMTP Password<span class="required-start">*</span></div>
                                    <div class="controls">
                                        <input type="text" name="smtp_password" class="form-control" required value="{{$emailSettings->smtp_password}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SMTP end here-->

                        <div class="row mb-2 float-right">
                            <div class="col-md-12">
                                <input type="submit" name="emailSettings" value="Update" class="btn btn-primary mr-sm-1  mb-sm-0">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Mailer end -->

                <!-- Image Setting start -->
                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                    <div class="tab-content">
                        <form action id="formValidation" enctype="multipart/form-data" method="post" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Primary Logo <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="image-file">Upload new photo</label>
                                        <input type="file" onchange="updateSize(image-file)" id="image-file" name="logo" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed PNG. Max size of 800kB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <?php 
													if (file_exists(public_path('/uploads/logo.png')))
													{
														?>
                                    <img class src="<?php echo asset('public/uploads/logo.png');?>" alt="logo" width="200" height="60">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="No Image" width="80">
                                    <?php
													}
												?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Secondary Logo <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="logo">Upload new photo</label>
                                        <input type="file" id="logo" name="logo2" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed PNG. Max size of 800kB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <?php 
													if (file_exists(public_path('/uploads/logo2.png')))
													{
														?>
                                    <img class src="<?php echo asset('public/uploads/logo2.png');?>" alt="logo" width="200" height="60">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="No Image" width="80">
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">User icon <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="user_id">Upload new photo</label>
                                        <input type="file" id="user_id" name="user_icon" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed PNG. Max size of 800kB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <?php 
													if (file_exists(public_path('/uploads/user_icon.png')))
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/user_icon.png');?>" alt="User Image" height="80" width="80">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="Profile Image" height="80" width="80">
                                    <?php
													}
												?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Favicon <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="favicon">Upload new photo</label>
                                        <input type="file" id="favicon" name="favicon" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed PNG. Max size of 800kB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br><br>
                                    <?php 
													if (file_exists(public_path('/uploads/favicon.png')))
													{
														?>
                                    <img class="mx-2" src="<?php echo asset('public/uploads/favicon.png');?>" alt="Profile Image" height="40" width="40">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="Profile Image" height="80" width="100">
                                    <?php
													}
												?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">No image <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="no_image">Upload new photo</label>
                                        <input type="file" id="no_image" name="no_image" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed PNG. Max size of 800kB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <?php 
													if (file_exists(public_path('/uploads/no_image.png')))
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="Profile Image" height="80" width="80">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="No Image" height="40" width="40">
                                    <?php
													}
												?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Login Background Image <span class="text-danger">*</span></label><br>
                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="login">Upload new photo</label>
                                        <input type="file" id="login" name="login" hidden>
                                    </div>
                                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG size of 1 MB</small></p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="form-group col-md-4">
                                    <br>
                                    <?php 
													if (file_exists(public_path('/uploads/background.jpg')))
													{
														?>
                                    <img class src="<?php echo asset('public/uploads/background.jpg');?>" alt="Profile Image" height="100" width="250">
                                    <?php
													}
													else
													{
														?>
                                    <img class="round" src="<?php echo asset('public/uploads/no_image.png');?>" alt="No Image" height="40" width="40">
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row" style="text-align:right;">
                                <div class="col-md-7">
                                </div>
                                <div class="col-md-5">
                                    <button type="reset" class="btn btn-outline-warning mr-sm-1 mb-1 mb-sm-0">Cancel</button>
                                    <input type="submit" name="image" value="update" class="btn btn-primary ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Image Setting end -->

                <!-- Theme Setting start -->
                <div class="tab-pane fade " role="tabpanel" id="account-vertical-theme" aria-labelledby="account-pill-theme" aria-expanded="true">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('public/uploads/themes/1.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Default(Semi Dark)</h5>
                                    <a href="{{url('company-setting.html/theme/6')}}" class="btn @if(THEME_SELECTED >= 5 ) btn-success disabled @else btn-primary @endif">@if(THEME_SELECTED >= 5 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('public/uploads/themes/2.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Full Light </h5>
                                    <a href="{{url('company-setting.html/theme/1')}}" class="btn @if(THEME_SELECTED == 1 ) btn-success disabled @else btn-primary @endif">@if(THEME_SELECTED == 1 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('public/uploads/themes/3.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Full Dark </h5>
                                    <a href="{{url('company-setting.html/theme/2')}}" class="btn @if(THEME_SELECTED == 2 ) btn-success disabled @else btn-primary @endif">@if(THEME_SELECTED == 2 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('public/uploads/themes/4.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Light Menu</h5>
                                    <a href="{{url('company-setting.html/theme/3')}}" class="btn @if(THEME_SELECTED == 3 ) btn-success disabled @else btn-primary @endif">@if(THEME_SELECTED == 3 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('public/uploads/themes/5.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Dark Menu</h5>
                                    <a href="{{url('company-setting.html/theme/4')}}" class="btn @if(THEME_SELECTED == 4 ) btn-success disabled @else btn-primary @endif">@if(THEME_SELECTED == 4 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Theme Setting end -->

                <!-- sms Setting start -->
                <div class="tab-pane fade " role="tabpanel" id="account-vertical-sms" aria-labelledby="account-pill-sms" aria-expanded="true">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mbl">SMS Sender ID<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="sms_sender_id" class="form-control" required value="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mbl">SMS Route<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="sms_route" class="form-control" required value="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-5">
                                <div class="mbl">SMS API Key<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="sms_api_key" class="form-control" required value="">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 float-right">
                            <div class="col-md-8">
                                <input type="submit" name="smsSettings" value="Update" class="btn btn-primary mr-sm-1 mb-sm-0">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- sms Setting end -->

                <!-- Invoice Setting start -->
                <div class="tab-pane fade " role="tabpanel" id="account-vertical-invoice" aria-labelledby="account-pill-invoice" aria-expanded="true">
                    @php
                    $invoice_template = DB::table('company_settings')->where('type','invoice_template')->first();
                    @endphp
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 50%;">
                                <img class="card-img-top" src="{{asset('public/uploads/invoice/1.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Default(Semi Dark)</h5>
                                    <a href="{{url('company-setting.html/invoice/1')}}" class="btn @if($invoice_template->description == 1 ) btn-success disabled @else btn-primary @endif">@if($invoice_template->description == 1 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 50%;">
                                <img class="card-img-top" src="{{asset('public/uploads/invoice/2.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Full Light </h5>
                                    <a href="{{url('company-setting.html/invoice/2')}}" class="btn @if($invoice_template->description == 2 ) btn-success disabled @else btn-primary @endif">@if($invoice_template->description == 2 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 50%;">
                                <img class="card-img-top" src="{{asset('public/uploads/invoice/3.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Full Dark </h5>
                                    <a href="{{url('company-setting.html/invoice/3')}}" class="btn @if($invoice_template->description == 3 ) btn-success disabled @else btn-primary @endif">@if($invoice_template->description == 3 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 50%;">
                                <img class="card-img-top" src="{{asset('public/uploads/invoice/4.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Light Menu</h5>
                                    <a href="{{url('company-setting.html/invoice/4')}}" class="btn @if($invoice_template->description == 4 ) btn-success disabled @else btn-primary @endif">@if($invoice_template->description == 4 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="card" style="width: 50%;">
                                <img class="card-img-top" src="{{asset('public/uploads/invoice/5.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Dark Menu</h5>
                                    <a href="{{url('company-setting.html/invoice/5')}}" class="btn @if($invoice_template->description == 5 ) btn-success disabled @else btn-primary @endif">@if($invoice_template->description == 5 ) <i class="fa fa-check" aria-hidden="true"></i> Applied @else Apply this Theme @endif</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Invoice Setting end -->

                <!-- Default Number Setting start -->
                <div class="tab-pane fade " role="tabpanel" id="account-vertical-numbers" aria-labelledby="account-pill-numbers" aria-expanded="true">
                    <form action="" method="post" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mbl">Purchase Order Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="purchase_order_prefix" class="form-control" required value="{{isset($numberSettings->purchase_order_prefix)? $numberSettings->purchase_order_prefix:''}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mbl">Purchase Receive Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="purchase_receive_prefix" class="form-control" required value="{{isset($numberSettings->purchase_receive_prefix)? $numberSettings->purchase_receive_prefix:''}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mbl">Purchase Return Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="purchase_return_prefix" class="form-control" required value="{{isset($numberSettings->purchase_return_prefix)? $numberSettings->purchase_return_prefix:''}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4">
                                <div class="mbl">Sales Order Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="sales_order_prefix" class="form-control" required value="{{isset($numberSettings->sales_order_prefix)? $numberSettings->sales_order_prefix:''}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mbl">Sales Return Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="sales_return_prefix" class="form-control" required value="{{isset($numberSettings->sales_return_prefix)? $numberSettings->sales_return_prefix:''}}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mbl">Shipping Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="shipping_prefix" class="form-control" required value="{{isset($numberSettings->shipping_prefix)? $numberSettings->shipping_prefix:''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-4">
                                <div class="mbl">Invoice Prefix<span class="required-start">*</span></div>
                                <div class="controls">
                                    <input type="text" name="invoice_prefix" class="form-control" required value="{{isset($numberSettings->invoice_prefix)? $numberSettings->invoice_prefix:''}}">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 float-right">
                            <div class="col-md-8">
                                <input type="submit" name="numberSettings" value="Update" class="btn btn-primary mr-sm-1 mb-sm-0">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Default Number Setting end -->

            </div>
        </div>
    </div><!-- row end-->

    </div>
    </div>
    </div>
</section>



<script type="text/javascript">
    $(document).ready(function() {
        $('#send-grid').click(function() {
            $('.smtp').hide();
            $('.send-grid').show();
        })

        $('#smtp').click(function() {
            $('.send-grid').hide();
            $('.smtp').show();
        })
    })

    $('#image-file').on('change', function() {
        var numb = $(this)[0].files[0].size / 1024 / 1024;
        numb = numb.toFixed(2);
        if (numb > 1) {
            alert('To Big, Maximum is 1MiB. Your File Size is: ' + numb + ' MiB');
            return false;
        }
    });

</script>

@endsection
