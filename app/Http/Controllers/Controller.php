<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

define('CURRENCY_SYMBOL', '$');
define('COMPANY_NAME', 'Imagine Interior');
define('SITE_NAME', 'Imagine Interior');
define('SITE_TITTLE', 'Imagine Interior');
define('NO_DATA_FOUND', 'No Data Found');

#Arrays
define('gender', array("1"=>"Male","2"=>"Female","3"=>"Transgender") );
define('marital_status', array("1"=>"Married","2"=>"Unmarried") );
define('user_type', array("0"=>"Super Admin","1"=>"Admin","2"=>"Organization","3"=>"Customer","4"=>"Supplier") );
define('page_items', array("10"=>"10","25"=>"25","50"=>"50","100"=>"100","500"=>"500","1000"=>"1000") );
define('yesorno', array("1"=>"Yes","0"=>"No") );
define('FILLING_FREQUENCY', array("Monthly","Quaterly","Half-Yearly",'Yearly') );
define('DASHBOARD_FILTER',array('1'=>'Today','2'=>'This Week','3'=>'This Month','4'=>'This Year','5'=>'All Time'));

$theme_selection ='1';

defined('THEME_SELECTED') || define('THEME_SELECTED',$theme_selection);

switch ($theme_selection) 
{
    case '1':
        defined('THEME_CLASS') || define('THEME_CLASS','vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static ') ;
        defined('THEME_FOOTER') || define('THEME_FOOTER','footer footer-static footer-light') ;
    break;
    
    case '2':
        defined('THEME_CLASS') || define('THEME_CLASS','vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static ');
        defined('THEME_FOOTER') || define('THEME_FOOTER','footer footer-static footer-dark') ;
    break;
    
    case '3':
        defined('THEME_CLASS') || define('THEME_CLASS','vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed');
        defined('THEME_FOOTER') || define('THEME_FOOTER','footer footer-static footer-light') ;
    break;	
    
    case '4':
        defined('THEME_CLASS') || define('THEME_CLASS','vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static   menu-collapsed');
        defined('THEME_FOOTER') || define('THEME_FOOTER','footer footer-static footer-light') ;
    break;	
    
    default:
        defined('THEME_CLASS') || define('THEME_CLASS','vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  ');
        defined('THEME_FOOTER') || define('THEME_FOOTER','footer footer-static footer-light') ;
    break;
}

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
