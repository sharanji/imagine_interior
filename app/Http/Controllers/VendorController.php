<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VendorController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
		$this->back_end = 'back_end';
    }

    function manageVendor(Request $request,$type="",$id=0) {
        $pageData['pageTitle'] = "Manage Vendor";
		$pageData['vendor'] = 1;
		$pageData['type'] = $type;
		$pageData['id'] = $id;

        switch ($type) {
            case 'add':
                if (isset($_POST['vendor_name'])) {
                    // dd($request);
                    $insertId = DB::table("vendors")->insertGetId(
                        array(
                            'vendor_name' => $request['vendor_name'],
                        )
                    );

                    if( !empty($_FILES['vendor_image']['name']) )
                    {
                        move_uploaded_file($_FILES['vendor_image']['tmp_name'], 'public/uploads/vendors/' . $insertId . '.png');
                    }

                }
                
                return redirect('manage-vendor.html');
                
            case 'delete':
                if (isset($id)) {
                   
                    DB::table("vendors")->where('vendor_id',$id)->delete();
                    
                    
                }
                return redirect('manage-vendor.html');
                
            default:
                $page_items = isset($request->page_items) ? $request->page_items : 10; 
                $keywords = isset($request->keywords) ? $request->keywords : ""; 
                
                $pageData['resultData'] = DB::table('vendors')->paginate($page_items);
                
                $view =  view($this->back_end."/vendor/manageVendor", $pageData);
                return $view;
        }
	
    }

}
