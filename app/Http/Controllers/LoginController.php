<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest')->except('adminLogout');
		$this->back_end = 'back_end';
    }
	
	#Admin Login
	public function adminRedirectLogin(Request $request)
    {
		return redirect('/admin-login.html');
	}
	
    public function adminLogin(Request $request)
    {
		$pageData['pageTitle'] = "Admin Login";
		
		$view =  view($this->back_end.'/auth/login', $pageData);
		
		if($_POST)
		{
			/*auth()->attempt($request->only('user_name','password'),$request->remember);*/

			$username = $request->user_name;

			if(filter_var($username, FILTER_VALIDATE_EMAIL)) 
			{
				//user sent their email 
				auth()->attempt(['email' => $username, 'password' => $request->password],$request->remember);				
			} 
			else
			{
				//they sent their username instead 
				auth()->attempt(['user_name' => $username, 'password' => $request->password],$request->remember);
			}
			
			if (!Auth::check()) 
			{
				#session()->put('error', 'Invalid Login Details!');
				return back()->with('error','Invalid Login Details');
			}
			else
			{
				$userType = auth()->user()->user_type;
				
				// session()->put('success', 'You are successfully logged in!');
				return redirect('/dashboard.html')->with('success', 'You are successfully logged in!');
				
			}
		}
		
		return $view;
	}

    public function adminLogout(Request $request)
    {
		Auth::guard('web')->logout();
		$request->session()->flush();
		$request->session()->regenerate();
        return redirect('/admin-login.html');
    } 
	
} #Controller End
