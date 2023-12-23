<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;



    # Route url
	Route::get('/admin',[LoginController::class,'adminRedirectLogin']);
	Route::match(array('GET', 'POST'), 'admin-login.html', [LoginController::class,'adminLogin'])->name('adminLogin');

    #Logout
	Route::get('/logout.html',[LoginController::class,'adminLogout'])->name('logout');

	Route::match(array('GET','POST'),'/dashboard.html', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/my-profile.html', [AdminController::class,'myProfile']);

    #Theme-selection and Invoice Selection
	Route::match(array('GET','POST'),'/company-setting.html',[AdminController::class,'companySetting']);
	Route::get('/company-setting.html/{type}/{id}', [AdminController::class,'companySetting']);

    // Enquiry
	Route::match(array('GET','POST'),'/manage-enquiry.html',[EnquiryController::class,'manageEnquiry']);
	Route::match(array('GET','POST'),'/manage-enquiry.html/{type}/{enquiryId}/{status}',[EnquiryController::class,'manageEnquiry']);
	Route::match(array('POST'),'/addEnquiry',[EnquiryController::class,'addEnquiry'])->name('addEnquiry');

    // Gallery
	Route::match(array('GET','POST'),'/manage-gallery.html',[GalleryController::class,'manageGallery']);
	Route::match(array('POST'),'/add-gallery-label',[GalleryController::class,'addGalleryLabel'])->name('addGalleryLabel');



    // website
    Route::get('/', function () {
        return view('front_end.home');
    })->name('home');

    Route::get('/aboutus{any}', function () {
        return view('front_end.aboutus');
    });

    Route::get('/history{any}', function () {
        return view('front_end.history');
    });

    Route::get('/contact{any}', function () {
        return view('front_end.contactus');
    });

    Route::get('/view-360{any}', function () {
        return view('front_end.view360');
    });

    Route::get('/blog-detail{any}', function () {
        return view('front_end.blogdetail');
    });

    Route::get('/gallery{any}', function () {
        $pageData['gallery_lables'] = DB::table('gallery_lables')
						->orderby("gallery_lables.label_name","DESC")->get();

        return view('front_end.gallery',$pageData);
    });