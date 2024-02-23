@extends('front_end2.template')

@section('content')


<!--Start breadcrumb area-->
<section class="breadcrumb-area style2 contact-page" style="background-image: url({{asset('front_end2/images/resources/breadcrumb-bg-2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Contact Us</span>
                        <h1>Get In Touch With Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Contact Address Area-->
<section class="contact-address-area">
    <div class="container">
        <div class="row">
            <!--Start Single Contact Address Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-address-box">
                    <span class="icon-global"></span>
                    <h3>Visit Our Office</h3>
                    <p>Flat A, 20/7, Reynolds Neck Str, North Helenaville, FV77 8WS</p>
                </div>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-address-box">
                    <span class="icon-support1"></span>
                    <h3>Call Us</h3>
                    <p>+91 7397 776 102 <br><span>Mon - Friday:</span> 9.00am to 8.00pm</p>
                </div>
            </div>
            <!--End Single Contact Address Box-->
            <!--Start Single Contact Address Box-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-address-box">
                    <span class="icon-shipping-and-delivery"></span>
                    <h3>Mail Us</h3>
                    <p>imaginehsr@gmail.com<br> info@imaginedesiner.com</p>
                </div>
            </div>
            <!--End Single Contact Address Box-->
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="bottom-text text-center">
                    <p>We’re here to help with any question of our customers, <a href="faq.html">Go to FAQ’s</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Address Area-->

<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="contact-form">
                    <div class="sec-title with-text">
                        <p>Drop Us a Line</p>
                        <div class="title">Send Your <span>Message</span></div>
                        <p class="bottom-text">If you have question or would like more information on our works, Please complete the form and we’ll aim get back to you with in 24 hours.</p>
                    </div>
                    <div class="inner-box">
                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="form_name" value="" placeholder="First Name" required="">
                                        <div class="icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="form_name" value="" placeholder="Last Name" required="">
                                        <div class="icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <select class="selectmenu">
                                            <option selected="selected">Enquire About</option>
                                            <option>Concept Designs</option>
                                            <option>Project Designs</option>
                                            <option>Make Overs</option>
                                            <option>Consulting</option>
                                            <option>Glass & Wrought</option>
                                            <option>Space Planning</option>
                                        </select>
                                        <div class="icon">
                                            <i class="fa fa-question" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" value="" placeholder="Phone">
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-box">
                                        <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                        <div class="icon">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-box">
                                        <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                        <div class="icon envelop">
                                            <i class="fa fa-comment" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">Send Your Message<span class="flaticon-next"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 clearfix">
                <div class="contact-form-image-box">
                    <img src="{{asset('front_end2/images/resources/contact.png')}}" alt="Awesome Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact form area-->

{{-- <!--Start Job Career Brochures Area-->
<section class="job-career-brochures-area">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-6 col-lg-6">
                <div class="job-career-brochures-box">
                    <div class="img-holder">
                        <img src="{{asset('front_end2/images/resources/job-career-1.jpg')}}" alt="Awesome Image">
<div class="overlay-content">
    <div class="innner">
        <div class="box">
            <h1>Find a Career Opportunities</h1>
            <p>View our job listing to fing the job around the world</p>
            <a class="btn-one" href="#">Job Lisiting<span class="flaticon-next"></span></a>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="job-career-brochures-box">
        <div class="img-holder">
            <img src="{{asset('front_end2/images/resources/job-career-2.jpg')}}" alt="Awesome Image">
            <div class="overlay-content">
                <div class="innner">
                    <div class="box">
                        <h1>Attractive & Innovative Designs</h1>
                        <p>Here provides 10 interior decoration brochures</p>
                        <a class="btn-one" href="#">Brochures<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</section>
<!--End Job Career Brochures Area--> --}}

<script src="{{asset('front_end2/js/bootstrap-select.min.js')}}"></script>

@endsection
