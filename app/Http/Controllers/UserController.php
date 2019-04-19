<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class UserController extends Controller
{
    public function storeUser(Request $request){

		$data['fullName'] = $request->input('fullName');
		$data['fatherName'] = $request->input('fatherName');
		$data['motherName'] = $request->input('motherName');
		$data['religion'] = $request->input('religion');
		$data['maritialStatus'] = $request->input('maritialStatus');
		$data['gender'] = $request->input('gender');
    	$data['address'] = $request->input('address');
    	$data['mobileNo'] = $request->input('mobileNo');
    	$data['bio'] = $request->input('bio');
    	$data['userName'] = $request->input('userName');
        $data['email']  = $request->input('email');
        $data['city']  = $request->input('city');
        $data['password']  =md5($request->input('password'));
        $pass  = md5($request->input('conPassword'));
    	$image  = $request->file('image');
        $profileImageSaveAsName = time() . "-profile." . 
        $image->getClientOriginalExtension();
        $upload_path = 'profileImages/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $data['image']=$profile_image_url;

		$year = $request->input('birth_year');
		$month = $request->input('birth_month');
		$day = $request->input('birth_day');


        $date=$year.'-'.$month.'-'.$day;
        $time = strtotime($date);
        $data['dob'] = date('Y-m-d',$time);
        if($pass==$data['password']){
	     	if(UserModel::store_user($data))
	     	{
	     		// $data['password']=md5($pass);
		        $success = $image->move($upload_path, $profileImageSaveAsName);
		        \Session::flash('message', 'You are successfully Signup. Please check your email to verify.');  
	        	\Session::flash('alert-type', 'success');
	     		return redirect("/");
	     	}
	     	else 
	     	{
	     		return redirect("/Signup");
	     	}
	     }
	     else{
			\Session::flash('message', "Password didn't match!");  
	        \Session::flash('alert-type', 'error');
	     		return redirect("/Signup");

	     }
    }

    public function login(Request $request){
    	$data['userName'] = $request->input('userName');
        $data['password']  = md5($request->input('password'));
        // print_r(UserModel::login_user($data)); exit();
        if(UserModel::login_user($data))
        {

	        \Session::flash('message', 'You are successfully Logged in.');  
	        \Session::flash('alert-type', 'success');  
	        session()->put('userName', $data['userName']);
	        

     		return redirect("/Home");

        }
        else {
        	 \Session::flash('message', 'Wrong Username or Password! Please try again!');  
	        \Session::flash('alert-type', 'error');
     		return redirect("/");

        }
    }
    public function home()
    {
    	if(session()->get('userName')){
	    	$details=UserModel::get_details_by_userName(session()->get('userName'));
	    	session()->put('fullName', $data['fullName']);
	    	// print_r($details); exit();
	    	return view('user.home',['details'=>$details]);
	    }
	    else redirect("/");
    }
    public function profile()
    {
    	$details=UserModel::get_details_by_userName(session()->get('userName'));
    	return view('user.profile',['details'=>$details]);
    }
     public function addEducation()
    {
    	return view('user.addEducation');
    }



}
