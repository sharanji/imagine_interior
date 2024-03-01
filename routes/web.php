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
	
    // Tariff
    Route::match(array('GET','POST'),'/manage-tariff.html',[TariffController::class,'manageTariff']);
    Route::match(array('GET','POST'),'/manage-tariff.html/{type}',[TariffController::class,'manageTariff']);
    Route::match(array('GET','POST'),'/manage-tariff.html/{type}/{id}',[TariffController::class,'manageTariff']);
	// Route::match(array('POST'),'/add-gallery-label',[TariffController::class,'addGalleryLabel'])->name('addTariff');

    // Projects
    Route::match(array('GET','POST'),'/manage-projects.html',[ProjectsController::class,'manageProjects']);
    Route::match(array('GET','POST'),'/manage-projects.html/{type}',[ProjectsController::class,'manageProjects']);
    Route::match(array('GET','POST'),'/manage-projects.html/{type}/{id}',[ProjectsController::class,'manageProjects']);
    Route::match(array('GET','POST'),'/projects/viewsingle/{id}',[ProjectsController::class,'viewsingle']);
	// Route::match(array('POST'),'/add-gallery-label',[ProjectsController::class,'addGalleryLabel'])->name('addTariff');



    // website
    Route::get('/', function () {
        $pageData['home'] = 1;
        return view('front_end2.home',$pageData);
    })->name('home');

    Route::get('/index.html', function () {
        return redirect("/");
    });

    Route::get('/aboutus{any}', function () {
        $pageData['aboutus'] = 1;
        return view('front_end2.aboutus',$pageData);
    });

    Route::get('/history{any}', function () {
        return view('front_end.history');
    });

    Route::get('/services{any}', function () {
        $pageData['services'] = 1;
        return view('front_end2.services',$pageData);
    });

    Route::get('/contact{any}', function () {
        $pageData['contact'] = 1;
        return view('front_end2.contactus',$pageData);
    });

    Route::get('/view-360{any}', function () {
        return view('front_end2.view360');
    });

    Route::get('/blog-detail{any}', function () {
        return view('front_end2.blogdetail');
    });

    Route::get('/testimonials{any}', function () {
        return view('front_end.testimonial');
    });

    Route::get('/tariff{any}', function () {
        $pageData['tariffs'] = DB::table('tariff')->get();
        return view('front_end2.tariff',$pageData);
    });

    Route::get('/gallery{any}', function () {
        $pageData['gallery_lables'] = DB::table('gallery_lables')
						->orderby("gallery_lables.label_name","DESC")->get();

        return view('front_end.gallery',$pageData);
    });

    Route::get('/portfolio{any}', function () {
        $pageData['portfolio'] = 1;
        return view('front_end2.portfolio',$pageData);
    });
    Route::get('/portfolio/{projectId}', function ($projectId) {
        $pageData['portfolio'] = 1;
        $pageData['project'] = DB::table('projects')->where('project_id','=',$projectId)->first();
        $pageData['gallery'] = DB::table('gallery')->where('project_id','=',$projectId)->get();
        return view('front_end2.projectsingle',$pageData);
    });
    
    Route::get('/factory{any}', function () {
        $pageData['factory'] = 1;
        return view('front_end2.factory',$pageData);
    });
 