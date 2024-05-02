<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FactoryController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
		$this->back_end = 'back_end';
    }

    function manageFactory(Request $request,$type="",$id=0) {
        $pageData['pageTitle'] = "Manage Factory";
		$pageData['factory'] = 1;
		$pageData['type'] = $type;
		$pageData['id'] = $id;

        switch ($type) {
            case 'add':
                if (isset($_POST['description'])) {
                    
                    $insertId = DB::table("factory")->insertGetId(
                        array(
                            'machine_name' => $request['machine_name'],
                            'machine_desc' => $request['description'],
                        )
                    );

                    if( !empty($_FILES['machine_image']['name']) )
                    {
                        move_uploaded_file($_FILES['machine_image']['tmp_name'], 'public/uploads/factory/' . $insertId . '.png');
                    }

                    return redirect('manage-factory.html/view/'.$insertId);
                }
                else
                {
                    $view =  view($this->back_end."/factory/addFactory", $pageData);
                    return $view;
                }
            case 'view' || 'edit':
                if (isset($_POST['description'])) {
                   
                    DB::table("factory")->where('machine_id',$id)->update(
                        array(
                            'machine_name' => $request['machine_name'],
                            'machine_desc' => $request['description'],
                        )
                    );
                    
                    if( !empty($_FILES['machine_image']['name']) )
                    {
                        move_uploaded_file($_FILES['machine_image']['tmp_name'], 'public/uploads/factory/' . $id . '.png');
                    }
                    
                    return redirect('manage-factory.html');
                }
                else
                {
                    $pageData['editData'] = DB::table("factory")->where('machine_id',$id)->first();
                    $view =  view($this->back_end."/factory/addFactory", $pageData);
                    return $view;
                }
                
            default:
                $page_items = isset($request->page_items) ? $request->page_items : 10; 
                $keywords = isset($request->keywords) ? $request->keywords : ""; 
                
                $pageData['factory'] = DB::table('factory')->paginate($page_items);
                
                $view =  view($this->back_end."/factory/manageFactory", $pageData);
                return $view;
        }
	
    }

}
