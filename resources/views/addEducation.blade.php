  
<?php $title="Education"; ?>
@extends('include.header')
@section('content') 




  <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Add Education</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="/">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Education</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
   <div class="single-job-post-area pt-70 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="#">
                            @csrf
                             <div class="title uppercase mt-45 mb-38"><span class="lg">Education </span></div>
                                <div class="single-job-form">
                                    <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">Institution's name<span>*</span></label>
                                        <div class="form-box fix">
                                            <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                        </div>
                                    </div>
                                    <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">degree name<span>*</span></label>
                                        <div class="form-box fix">
                                         
                                                <select name="maritialStatus">
                                                    <option>Degree</option>
                                                    <option>Below SSC</option>
                                                    <option>O Level</option>
                                                    <option>A Level</option>
                                                    <option>SSC</option>
                                                    <option>HSC</option>
                                                    <option>Diploma</option>
                                                    <option>Bachelor</option>
                                                    <option>Master's</option>
                                                </select>
                                            
                                        </div>
                                    </div>
                                     <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">degree Title</label>
                                        <div class="form-box fix">
                                            <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                         
                                        </div>
                                    </div>
                                    <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">major<span>*</span></label>
                                        <div class="form-box fix">
                                            <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                         
                                        </div>
                                    </div>
                                     <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">result<span>*</span></label>
                                        <div class="form-box fix">
                                            <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                         
                                        </div>
                                    </div>
                                    <div class="single-info mb-14">
                                        <label for="school_name" class="uppercase pull-left m-0">passing year<span>*</span></label>
                                        <div class="form-box fix">
                                            <input type="text" id="school_name" name="school_name" placeholder="Please enter your school name">
                                        </div>
                                    </div>
                                    <div class="single-info mb-14 fix">
                                        <label class="uppercase pull-left m-0">description<span>*</span></label>
                                        <div class="desc fix">
                                            <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-160 mt-42">
                                    <button class="button button-medium-box">Add Education</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
                                        
       
@stop
