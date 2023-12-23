<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;


class GalleryController extends Controller
{
    //
    public function  __construct(){
        $this->middleware('auth');
		$this->back_end = 'back_end';
    }

    function manageGallery(Request $request) {
        $pageData['pageTitle'] = "Manage Gallery";
		$pageData['gallery'] = 1;
		$pageData['type'] = 'view';

        $page_items = isset($request->page_items) ? $request->page_items : 10; 
        $keywords = isset($request->keywords) ? $request->keywords : ""; 

        if( !empty($_FILES['images']) )
        {
            $images = $_FILES['images'];
            for ($i=0; $i < count($images['name']); $i++) { 
                move_uploaded_file($images['tmp_name'][$i], 'public/uploads/gallery_images/'.$images['name'][$i]);
                DB::table('gallery')->insert(
                    array( 
                        "label_id" => $request['label_id'],
                        "image_label" => $images['name'][$i],
                    )
                );
            }
            return redirect('/manage-gallery.html');
        }

        
		$pageData['galleryLables'] = DB::table('gallery_lables')
						->orderby("gallery_lables.label_name","DESC")->get();
        $firstLabel = $pageData['galleryLables'][0]->label_name;
		$view =  view($this->back_end."/gallery/manageGallery", $pageData);

        if(!isset($_GET['label'])) {
            $_GET['label']=  $firstLabel;
        }
		return $view;
    }

    function addGalleryLabel(Request $request) {
       $chk_exsist = DB::table('gallery_lables')->where('label_name','=',$request['label_name']);
       if($chk_exsist->count() > 0){
           return;
       }
       DB::table('gallery_lables')->insert(array('label_name'=>$request['label_name']));
       return Redirect::to('/manage-gallery.html');
    }
}
