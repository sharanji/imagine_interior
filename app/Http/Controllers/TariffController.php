<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;


class TariffController extends Controller
{
    //
    public function  __construct(){
        $this->middleware('auth');
		$this->back_end = 'back_end';
    }

    function manageTariff(Request $request,$type="view",$id=0) {
        $pageData['pageTitle'] = "Manage Tariff";
		$pageData['tariff'] = 1;
		$pageData['type'] = $type;

        switch ($type) {
            case 'add':
                if (isset($_POST['title'])) {
                    $headerId = DB::table('tariff')->insertGetId(
                        array(
                            'tittle' => $_POST['title'],
                        )
                    );
                    
                    for ($i=0; $i < count($_POST['plan_item']); $i++) { 
                        DB::table('tariff_line')->insert(
                            array(
                                'tariff_header_id' => $headerId,
                                'plan' => $_POST['plan_item'][$i],
                                'description' => $_POST['plan_desc'][$i],
                            )
                        );
                    }
                    return redirect('manage-tariff.html');
                }
                else
                {
                    $view =  view($this->back_end."/tariff/manageTariff", $pageData);
                    return $view;
                }
            case 'edit':
                if (isset($_POST['title'])) {
                    $headerId = DB::table('tariff')->insertGetId(
                        array(
                            'tittle' => $_POST['title'],
                        )
                    );
                    
                    for ($i=0; $i < count($_POST['plan_item']); $i++) { 
                        DB::table('tariff_line')->insert(
                            array(
                                'tariff_header_id' => $headerId,
                                'plan' => $_POST['plan_item'][$i],
                                'description' => $_POST['plan_desc'][$i],
                            )
                        );
                    }
                    return redirect('manage-tariff.html');
                }
                else
                {
                    $pageData['editData'] = DB::table('tariff')->where('tariff_id','=',$id)->first();
                    $view =  view($this->back_end."/tariff/manageTariff", $pageData);
                    return $view;
                }
            default:
                $page_items = isset($request->page_items) ? $request->page_items : 10; 
                $keywords = isset($request->keywords) ? $request->keywords : ""; 
                
                $pageData['tariffs'] = DB::table('tariff')->get();
                // dd($pageData);
                
                $view =  view($this->back_end."/tariff/manageTariff", $pageData);
                return $view;
        }



        

		
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
