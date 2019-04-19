<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected function store_user($data)
    {
    	 $add=\DB::table('users_info')
        	->insert(['fullName' =>$data['fullName'],'fatherName' =>$data['fatherName'],'motherName' =>$data['motherName'],'image' =>$data['image'],'dob' =>$data['dob'], 'religion'=>$data['religion'],'maritialStatus'=>$data['maritialStatus'],'gender'=>$data['gender'],'email'=>$data['email'],'mobileNo'=>$data['mobileNo'],'userName'=>$data['userName'],'password'=>$data['password'],'address'=>$data['address'],'city'=>$data['city'],'bio'=>$data['bio']]);
     return $add;
    }
    protected function login_user($data)
    {

        $assignBy=\DB::table('users_info')
                    ->select()
                    ->where('userName', $data['userName'])
                    ->where('password', $data['password'])
                    ->count();
    	return $assignBy;

    }
    protected function get_details_by_userName($data)
    {

        $assignBy=\DB::table('users_info')
                    ->select()
                    ->where('userName', $data)
                    ->first();
        return $assignBy;
    
    }

}
