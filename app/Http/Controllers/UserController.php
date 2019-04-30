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
        	if(UserController::get_user_valid($data['userName']))
        	{
        		\Session::flash('message', "Already have an account with this User Name");  
	        	\Session::flash('alert-type', 'error');
	        	return redirect("/Signup");
        	}
        	else{
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
	    	$education=UserModel::get_education_by_userName(session()->get('userName'));
	    	$experience=UserModel::get_experience_by_userName(session()->get('userName'));
	    	// session()->put('fullName', $details->fullName);
	    	// print_r($details); exit();
	    	return view('user.home',['details'=>$details,'education'=>$education,'experience'=>$experience]);
	    }
	    else redirect("/");
    }
     public function addExperience()
    {
    	if(session()->get('userName')){
    		$experience=UserModel::get_experience_by_userName(session()->get('userName'));
	    	return view('user.addExperience',['experiences'=>$experience]);
	    }
	    else redirect("/");
    }
    public function deleteExperience($id)
    {
    	if(session()->get('userName')){
    		if(UserModel::delete_experience($id)){

	        \Session::flash('message', 'You are successfully Deleted Experience.');  
	        \Session::flash('alert-type', 'success');  
	        // session()->put('userName', $data['userName']);
	    	return redirect("/Experience");
	    	}
	    	
	    	else 
	    	{
	    		\Session::flash('message', 'Sorry! You are can not Delete Experience.');  
	        	\Session::flash('alert-type', 'error');  
	    		return redirect("/Experience");
	    	}

	    }
	    else 
	    	{
	    		\Session::flash('message', 'Sorry! You are can not Delete Experience.');  
	        	\Session::flash('alert-type', 'error');  
	    		return redirect("/Experience");
	    	}
    }
    public function profile()
    {
    	if(session()->get('userName')){

	    	$details=UserModel::get_details_by_userName(session()->get('userName'));
	    	return view('user.profile',['details'=>$details]);
	    }
	    else return redirect("/");

    }
     public function addEducation()
    {
    	if(session()->get('userName')){
	    	$education=UserModel::get_education_by_userName(session()->get('userName'));
	    	return view('user.addEducation',['educations'=>$education]);
	    }
	    else return  redirect("/");

    }
    public function editEducation($id)
    {
    	if(session()->get('userName')){
	    	$education=UserModel::get_education_by_id($id);
	    	// print_r($education); exit();
	    	return view('user.editEducation',['education'=>$education]);
	    }
	    else return redirect("/");

    }
     public function storeExperience(Request $request){

		$data['designation'] = $request->input('designation');
		$data['companyName'] = $request->input('companyName');
		$data['jobStatus'] = $request->input('jobStatus');
		$data['description'] = $request->input('description');
		$data['userName'] = $request->input('userName');

		

		$syear = $request->input('startDay');
		$smonth = $request->input('startMonth');
		$sday = $request->input('startYear');
		$eyear = $request->input('endDay');
		$emonth = $request->input('startMonth');
		$eday = $request->input('endYear');


        $sdate=$syear.'-'.$smonth.'-'.$sday;
        $stime = strtotime($sdate);
        $data['jobStart'] = date('Y-m-d',$stime);

        $edate=$eyear.'-'.$emonth.'-'.$eday;
        $etime = strtotime($edate);
        $data['jobEnd'] = date('Y-m-d',$etime);

     	if(UserModel::store_experience($data))
     	{
	        \Session::flash('message', 'You are successfully added your Experience.');  
        	\Session::flash('alert-type', 'success');
     		return redirect("/Experience");
     	}
     	else 
     	{
     		\Session::flash('message', "Can't add Experience,Try again later.");  
	        \Session::flash('alert-type', 'error');
     		return redirect("/Experience");
     	}
		   
    }
     public function storeEducation(Request $request){

		$data['degreeName'] = $request->input('degreeName');
		$data['degreeTitle'] = $request->input('degreeTitle');
		$data['major'] = $request->input('major');
		$data['institution'] = $request->input('institution');
		$data['result'] = $request->input('result');
		$data['grading'] = $request->input('grading');
		$data['passingYear'] = $request->input('passingYear');
		$data['userName'] = $request->input('userName');
		
     	if(UserModel::store_education($data))
     	{
	        \Session::flash('message', 'You are successfully added your Education.');  
        	\Session::flash('alert-type', 'success');
     		return redirect("/Education");
     	}
     	else 
     	{
     		\Session::flash('message', "Can't add Education,Try again later.");  
	        \Session::flash('alert-type', 'error');
     		return redirect("/Education");
     	}
		   
    }
    public function updateEducation(Request $request){

		$data['degreeName'] = $request->input('degreeName');
		$data['degreeTitle'] = $request->input('degreeTitle');
		$data['major'] = $request->input('major');
		$data['institution'] = $request->input('institution');
		$data['result'] = $request->input('result');
		$data['grading'] = $request->input('grading');
		$data['passingYear'] = $request->input('passingYear');
		$data['userName'] = $request->input('userName');
		
     	if(UserModel::update_education($data))
     	{
	        \Session::flash('message', 'You are successfully added your Education.');  
        	\Session::flash('alert-type', 'success');
     		return redirect("/Education");
     	}
     	else 
     	{
     		\Session::flash('message', "Can't add Education,Try again later.");  
	        \Session::flash('alert-type', 'error');
     		return redirect("/Education");
     	}
		   
    }



}
