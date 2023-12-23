<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;

class EnquiryController extends Controller
{
    public function  __construct(){
        $this->middleware('auth')->except('addEnquiry');
		$this->back_end = 'back_end';
    }

    public function manageEnquiry(Request $request,$type="",$enquiryId="",$status="") {
        if ($type=="status") {
            DB::table('enquiry')->where("enquiry_id",'=',$enquiryId)->update(array('status'=>$status));
            return redirect("manage-enquiry.html");
        }
        $pageData['pageTitle'] = "Enquiry Form";
		$pageData['enquiry'] = 1;
		$pageData['type'] = 'view';

        $page_items = isset($request->page_items) ? $request->page_items : 10; 
        $keywords = isset($request->keywords) ? $request->keywords : ""; 
        
		$pageData['resultData'] = DB::table('enquiry')
                        ->where("first_name","like","%".$keywords."%" )
						->orwhere("email","like","%".$keywords."%")
						->orderby("enquiry_id","DESC")
                        ->paginate($page_items);

		$view =  view($this->back_end.'/enquiry/manageEnquiry', $pageData);
		return $view;
    }

    public function addEnquiry(Request $request) {
        if (isset($_POST)) {
            DB::table('enquiry')->insert(array(
                'first_name' => $request->name,
                'email' => $request->email,
                'enquiry_subject' => $request->subject,
                'enquiry_body' => $request->comments,
                'date_time' => date("Y/m/d h:i"),
            ));
            return redirect()->back();
        }
    }

}
