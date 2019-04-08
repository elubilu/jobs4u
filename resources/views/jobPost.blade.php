  
<?php $title="Post Job"; ?>
@extends('include.header')
@section('content') 

        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
  <!--Breadcrumb Banner Area Start-->

                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Post a job</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="/">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Post a Job</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="#">
                                    <div class="single-job-content">
                                        <div class="area-title text-center">
                                            <h2 class="pt-10 pb-10">Describe Your Job</h2>
                                        </div>
                                        <div class="title uppercase pt-70 pb-38"><span>Job Details</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info pb-14">
                                                <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="title" name="title" placeholder="Enter your job title">
                                                </div>
                                            </div>
                                             <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">Description</label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                    <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="description" class="fix textarea" cols="30" rows="10" placeholder="Please enter your job description"></textarea>
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="location" class="uppercase pull-left m-0">Job location</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="location" name="location" placeholder="Enter your job location">
                                                </div>
                                            </div>
                                            <div class="map-area ml-160 mb-14">
                                                <div style="width: 100%"><iframe width="100%" height="200" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Sylhet+(Jobs4u)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/"></a></iframe></div><br/>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="type" class="uppercase pull-left m-0">Job type</label>
                                                <div class="form-box fix">
                                                    <div class="select large">
                                                        <select name="jobType">
                                                            <option>Volunteer</option>
                                                            <option>Internship</option>
                                                            <option>Part Time</option>
                                                            <option>Full Time</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="category" class="uppercase pull-left m-0">Job Category </label>
                                                <div class="form-box fix">
                                                    <input type="text" id="category" name="category" placeholder="Enter your job category">
                                                </div>
                                            </div>
                                            
                                            <div class="single-info pb-14">
                                                <label for="category" class="uppercase pull-left m-0">Salary </label>
                                                <div class="form-box fix">
                                                    <input type="text" id="category" name="salary" placeholder="Enter Salary">
                                                </div>
                                            </div>
                                             <div class="single-info pb-14">
                                                <label for="vacancy" class="uppercase pull-left m-0">No of Position</label>
                                                <div class="form-box fix">
                                                    <input type="text" id="vacancy" name="vacancy" placeholder="Enter No of Position">
                                                </div>
                                            </div>
                                             <div class="single-info pb-14">
                                                <label for="qualification" class="uppercase pull-left m-0"> Education </label>
                                                <div class="form-box fix">
                                                    <input type="text" id="qualification" name="qualification" placeholder="Educational Qualification">
                                                </div>
                                            </div>
                                             <div class="single-info pb-14">
                                                <label for="experience" class="uppercase pull-left m-0">Experience </label>
                                                <div class="form-box fix">
                                                    <input type="text" id="experience" name="experience" placeholder="Enter Experience">
                                                </div>
                                            </div>
                                             
                                            <div class="single-info">
                                                <label for="date" class="uppercase pull-left m-0">Closing date</label>
                                                <div class="form-box fix">
                                                    <input type="date" id="date" name="deadline">
                                                </div>
                                            </div>
                                        </div>
    
                                            <div class="ml-160 mt-38">
                                                <button class="button button-large-box">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->
            </div>
        </div>

@stop