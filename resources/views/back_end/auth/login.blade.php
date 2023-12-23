@extends('back_end/auth')
@section('content')
<style>
    a.view-password {
        float: right !important;
        padding: 10px !important;
        font-size: 15px !important;
        margin: -39px 0px 0px 0px;
    }

</style>

<section class="row flexbox-container" style="background-image: url({{asset('uploads/background.jpg')}});background-size : cover;">
    <div class="col-xl-8 col-11 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{asset('uploads/login.png')}}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Login</h4>
                            </div>
                        </div>
                        <p class="px-2">Welcome back, please login to your account.</p>

                        <div class="card-content">
                            <div class="card-body mb-2">
                                <form method="POST" action="{{route('adminLogin')}}">
                                    @csrf
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input id="email" type="text" class="form-control @if(Session::has('error')) border-danger @endif" name="user_name" placeholder="User Name / E-Mail" value="" required autocomplete="email" autofocus>
                                        <div class="form-control-position">
                                            <i class="feather icon-user @if(Session::has('error')) text-danger @endif"></i>
                                        </div>
                                        <label for="email">User Name / E-Mail</label>
                                    </fieldset>

                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input id="password" type="password" class="form-control @if(Session::has('error')) border-danger @endif" name="password" placeholder="Password" required autocomplete="current-password">
                                        <a class="view-password" href="javascript:void(0);" onclick="viewPassword()">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <div class="form-control-position">
                                            <i class="feather icon-lock @if(Session::has('error')) text-danger @endif"></i>
                                        </div>
                                        <label for="password">Password</label>
                                    </fieldset>

                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div class="text-left">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" selected name="remember">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Remember me</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="text-right"><a href="{{--{{route('forgot-password')}}--}}" class="card-link">Forgot Password?</a></div>
                                    </div>
                                    {{-- <a href="{{url('register')}}" class="btn btn-outline-primary float-left btn-inline">Register</a> --}}

                                    <button type="submit" class="btn btn-block btn-primary float-right btn-inline">Login</button>
                                </form>
                            </div>
                        </div>
                        <script>
                            function viewPassword() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }

                        </script>
                        <div class="login-footer">
                            <div class="divider"> </div>
                            <!--<div class="divider">
								<div class="divider-text">OR LOGIN WITH</div>
						  	</div>
						  <div class="footer-btn d-inline">
							<a href="{{url('auth/facebook')}}" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
							<a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
							<a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
							<a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
						  </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(Session::has('error'))
<script>
    $(document).ready(function() {
        $('input').keyup(function() {
            $('input').removeClass('border-danger');
            $('.feather').removeClass('text-danger');
        })
    })

</script>
@endif
@endsection
