<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectsController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
		$this->back_end = 'back_end';
    }

    function manageProjects(Request $request,$type="",$id=0) {
        $pageData['pageTitle'] = "Manage Projects";
		$pageData['projects'] = 1;
		$pageData['type'] = $type;
		$pageData['id'] = $id;

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
                    $view =  view($this->back_end."/projects/manageProjects", $pageData);
                    return $view;
                }
            case 'view':
                if (isset($_POST['description'])) {
                    unset($_POST['_token']);
                    DB::table("projects")->insert($_POST);

                    return redirect('manage-projects.html');
                }
                else
                {
                    $view =  view($this->back_end."/projects/manageProjects", $pageData);
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
                
                $pageData['projects'] = DB::table('projects')->paginate($page_items);
                
                $view =  view($this->back_end."/projects/manageProjects", $pageData);
                return $view;
        }
	
    }

}
