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
     protected function get_education_by_userName($data)
    {

        $assignBy=\DB::table('educations_info')
                    ->select()
                    ->where('userName', $data)
                    ->get();
        return $assignBy;
    
    }
    protected function get_education_by_id($data)
    {

        $assignBy=\DB::table('educations_info')
                    ->select()
                    ->where('id', $data)
                    ->first();
        return $assignBy;
    
    }
     protected function get_experience_by_userName($data)
    {

        $assignBy=\DB::table('professionals_info')
                    ->select()
                    ->where('userName', $data)
                    ->get();
        return $assignBy;
    
    }
    protected function get_user_valid($data)
    {

        $assignBy=\DB::table('users_info')
                    ->select()
                    ->where('userName', $data)
                    ->count();
        return $assignBy;

    }
    protected function store_experience($data)
    {
         $add=\DB::table('professionals_info')

            ->insert(['designation' =>$data['designation'],'companyName' =>$data['companyName'],'jobStatus' =>$data['jobStatus'], 'description'=>$data['description'],'jobStart'=>$data['jobStart'],'jobEnd'=>$data['jobEnd'],'userName'=>$data['userName']]);
     return $add;
    }
    protected function store_education($data)
    {
         $add=\DB::table('educations_info')
            ->insert(['degreeName' =>$data['degreeName'],'degreeTitle' =>$data['degreeTitle'],'major' =>$data['major'], 'institution'=>$data['institution'],'result'=>$data['result'],'grading'=>$data['grading'],'passingYear'=>$data['passingYear'],'userName'=>$data['userName']]);
     return $add;
    }
     protected function update_education($data)
    {
         $add=\DB::table('educations_info')
            ->where('id',$data['id'])
            ->update(['degreeName' =>$data['degreeName'],'degreeTitle' =>$data['degreeTitle'],'major' =>$data['major'], 'institution'=>$data['institution'],'result'=>$data['result'],'grading'=>$data['grading'],'passingYear'=>$data['passingYear'],'userName'=>$data['userName']]);
     return $add;
    }
    protected function delete_experience($data)
    {
         $add=\DB::table('professionals_info')
            ->where('id',$data)
            ->delete();
     return $add;
    }

}
