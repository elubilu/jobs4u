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
        $data['password']  = $request->input('password');
        $pass  = $request->input('conPassword');
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
     	if(UserModel::store_user($data))
     	{
     		return view('home');
     	}
     	else 
     	{
     		return redirect("/Signup");
     	}
    }

}
