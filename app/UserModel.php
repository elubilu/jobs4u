<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected function store_user($data)
    {
    	 $add=\DB::table('employees_info')
        	->insert(['fullName' =>$data['fullName'],'fatherName' =>$data['fatherName'],'motherName' =>$data['motherName'],'image' =>$data['image'],'dob' =>$data['dob'], 'religion'=>$data['religion'],'maritialStatus'=>$data['maritialStatus'],'gender'=>$data['gender'],'email'=>$data['email'],'mobileNo'=>$data['mobileNo'],'userName'=>$data['userName'],'password'=>$data['password'],'bio'=>$data['bio']]);
     return $add;
    }
}
