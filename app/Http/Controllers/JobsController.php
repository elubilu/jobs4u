<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;


class JobsController extends Controller
{
    public function home(){

     	return view('home');

    }
    public function allJobs(){

     	return view('allJobs');

    }
    public function jobPost(){

     	return view('jobPost');

    }
    public function signup(){

     	return view('signupEmployee');

    }
     
}
