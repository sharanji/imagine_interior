<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Str;
use DB;
use Session;
use App\Models\Reports;
use App\Models\Common;

class AdminController extends Controller
{
    #Construct
    public function __construct()
	{
        $this->middleware('auth');
		$this->back_end = 'back_end';
	}

	#Dashboard
    public function dashboard(Request $request)
	{
		$pageData['pageTitle'] = "Dashboard";
		$pageData['dashboard'] = 1;

		$pageData['DashboardData'] = [];
		$reports = new Reports();
		$pageData['enquiry'] = $reports->enquiryReports();

		$view =  view($this->back_end.'/admin/dashboard', $pageData);
		return $view;

    }

	#My Profile
    public function myProfile(Request $request)
	{
		$pageData['pageTitle'] = "My Profile";
		$view =  view($this->back_end.'/admin/myProfile', $pageData);
		return $view;
	}

	#Edit Profile
	public function editProfile(Request $request)
	{
		$pageData['pageTitle'] = "Edit Profile";
		$view= view($this->back_end.'/admin/editProfile',$pageData);

		if ($_POST)
		{
			$user = User::find(auth()->user()->id);

			$user->first_name     = $request->first_name;
			$user->last_name      = $request->last_name;
			$user->gender		  = $request->gender;
			$user->dob			  = strtotime($request->dob);
			$user->marital_status = $request->marital_status;
			$user->email          = $request->email;
			$user->mobile_number  = $request->mobile_number;
			$user->address1		  = $request->address1;
			$user->city_name      = $request->city_name;
			$user->website        = $request->website;
			$user->country_name   = $request->country_name;

			$user->save();

			if( !empty($_FILES['profile_image']['name']) )
			{
				move_uploaded_file($_FILES['profile_image']['tmp_name'], 'public/uploads/admin_profile_image/' . auth()->user()->id . '.png');
			}

			if( !empty($_FILES['cover_image']['name']) )
			{
				move_uploaded_file($_FILES['cover_image']['tmp_name'], 'public/uploads/admin_cover_image/' . auth()->user()->id . '.png');
			}

			return redirect('my-profile.html')->with('success','Profile Saved Successfully');
		}

		return $view;
	}

	#Change Password
    public function changePassword(Request $request)
	{

		$pageData['pageTitle'] = "Change Password";
		$view =  view($this->back_end.'/admin/changePassword', $pageData);

		if($_POST)
		{
			if (Hash::check($request->password, auth()->user()->password)) {

				$user = User::find(auth()->user()->id);
				$password = $request->new_password;

				$user->forceFill([
					'password' => bcrypt($password),
					'remember_token' => Str::random(60),
				])->save();

				return redirect('dashboard.html')->with('success','Password Changed Succesfully!');

			}else {
				return back()->with('errors','New Password not Matched!');
			} ;

		}

		return $view;
    }

	#Edit Profile
	public function companySetting(Request $request)
	{
		$pageData['companySetting'] = 1;
		$pageData['pageTitle'] = "Company Setting";
		$page_name  = 'admin/companySetting';
		$type = $request->segment(2);

		switch ($type) {
			case 'theme':
				$theme_name  = DB::table('company_settings')->where('type', 'theme')
								->update(['description' => $request->segment(3)]);
				return redirect('/company-setting.html')->with('success','Theme'.UPDATE_RESPONSE);
			break;

			case 'invoice':
				$theme_name  = DB::table('company_settings')->where('type', 'invoice_template')
								->update(['description' => $request->segment(3)]);
				return redirect('/company-setting.html')->with('success','Invoice'.UPDATE_RESPONSE);
			break;

		}

		if (isset($_POST['companySetting']) && !empty($_POST['companySetting']))
		{
			$site_name  	= DB::table('company_settings')->where('type', 'system_name')
							->update(['description' => $request->site_name]);

			$site_title  	= DB::table('company_settings')->where('type', 'system_title')
							->update(['description' => $request->site_title]);

			$company_name  	= DB::table('company_settings')->where('type', 'company_name')
							->update(['description' => $request->company_name]);

			$gst_number  	= DB::table('company_settings')->where('type', 'gst_number')
							->update(['description' => $request->gst_number]);

			$pan_number  	= DB::table('company_settings')->where('type', 'pan_number')
							->update(['description' => $request->pan_number]);

			$contact_email  = DB::table('company_settings')->where('type', 'contact_email')
							->update(['description' => $request->contact_email]);

			$webmaster_email= DB::table('company_settings')->where('type', 'webmaster_email')
							->update(['description' => $request->webmaster_email]);

			$noreply_email  = DB::table('company_settings')->where('type', 'no_reply_email')
							->update(['description' => $request->noreply_email]);

			$address  		= DB::table('company_settings')->where('type', 'address')
							->update(['description' => $request->address]);

			$address2  		= DB::table('company_settings')->where('type', 'address2')
							->update(['description' => $request->address2]);

			$primary_mobile = DB::table('company_settings')->where('type', 'phone')
							->update(['description' => $request->primary_mobile]);

			$secondary_mobile= DB::table('company_settings')->where('type', 'phone2')
							->update(['description' => $request->secondary_mobile]);

			$secondary_mobile= DB::table('company_settings')->where('type', 'company_account')
							->update(['description' => $request->company_account]);

			return back()->with('success','Settings'.UPDATE_RESPONSE);
		}
		else if(isset($_POST['emailSettings']))
		{
			$postvalue=[
						'sendgrid_host'=>$request->sendgrid_host ,
						'sendgrid_port'=>$request->sendgrid_port,
						'sendgrid_username'=>$request->sendgrid_username,
						'sendgrid_password'=>$request->sendgrid_password,
						'smtp_host'=>$request->smtp_host,
						'smtp_port'=>$request->smtp_port,
						'smtp_username'=>$request->smtp_username,
						'smtp_password'=>$request->smtp_password,
						];
			DB::table('email_settings')->where('settings_id',1)->update($postvalue);

		}
		else if (isset($_POST['image']) && !empty($_POST['image']))
		{
			$user = User::find(auth()->user()->id);

			$user->first_name     = $request->first_name;
			$user->last_name      = $request->last_name;
			$user->gender		  = $request->gender;
			$user->dob			  = $request->dob;
			$user->marital_status = $request->marital_status;
			$user->email          = $request->email;
			$user->mobile_number  = $request->mobile_number;
			$user->address1		  = $request->address1;
			$user->city_name      = $request->city_name;
			$user->website        = $request->website;
			$user->country_name   = $request->country_name;

			$user->save();

			if( !empty($_FILES['logo']['name']) )
			{
				move_uploaded_file($_FILES['logo']['tmp_name'], 'public/uploads/logo.png');
			}

			if( !empty($_FILES['logo2']['name']) )
			{
				move_uploaded_file($_FILES['logo2']['tmp_name'], 'public/uploads/logo2.png');
			}

			if( !empty($_FILES['favicon']['name']) )
			{
				move_uploaded_file($_FILES['favicon']['tmp_name'], 'public/uploads/favicon.png');
			}

			if( !empty($_FILES['user_icon']['name']) )
			{
				move_uploaded_file($_FILES['user_icon']['tmp_name'], 'public/uploads/user_icon.png');
			}

			if( !empty($_FILES['no_image']['name']) )
			{
				move_uploaded_file($_FILES['no_image']['tmp_name'], 'public/uploads/no_image.png');
			}

			if( !empty($_FILES['login']['name']) )
			{
				move_uploaded_file($_FILES['login']['tmp_name'], 'public/uploads/background.jpg');
			}

			return redirect('my-profile.html')->with('success','Image Uploded Successfully');
		}
		else if (isset($_POST['smsSettings']) && !empty($_POST['smsSettings']))
		{
			$postvalue = [
				'sms_sender_id'		=> $request->sms_sender_id,
				'sms_route'			=> $request->sms_route,
				'sms_api_key'		=> $request->sms_api_key,
			];

			DB::table('system_settings')->where('system_setting_id',1)->update($postvalue);
			return redirect('company-setting.html')->with('success','SMS Setting'.UPDATE_RESPONSE);
		}
		else if (isset($_POST['numberSettings']) && !empty($_POST['numberSettings']))
		{
			$postvalue = [
				'purchase_order_prefix'	  => strtoupper($request->purchase_order_prefix),
				'purchase_receive_prefix' => strtoupper($request->purchase_receive_prefix),
				'purchase_return_prefix'  => strtoupper($request->purchase_return_prefix),

				'sales_order_prefix'	  => strtoupper($request->sales_order_prefix),
				'sales_return_prefix'	  => strtoupper($request->sales_return_prefix),
				'shipping_prefix'		  => strtoupper($request->shipping_prefix),
				'invoice_prefix'		  => strtoupper($request->invoice_prefix),
			];

			DB::table('system_settings')->where('system_setting_id',1)->update($postvalue);
			return redirect('company-setting.html')->with('success','Default Number Settings'.UPDATE_RESPONSE);
		}

		$pageData['numberSettings'] = DB::table('system_settings')->where('system_setting_id',1)->first();
		$pageData['emailSettings'] = DB::table('email_settings')->where('settings_id',1)->first();

		$view = view($this->back_end.'/'.$page_name,$pageData);
        return $view;
	}

	#Dashboard Filters
	public function salesFilter(Request $request,$value)
	{
		Session::put(['sales_filter'=>$value]);
		return back();
	}

	public function purchaseFilter(Request $request,$value)
	{
		Session::put(['purchase_filter'=>$value]);
		return back();
	}

	public function expenseFilter(Request $request,$value)
	{
		Session::put(['expense_filter'=>$value]);
		return back();
	}

}
