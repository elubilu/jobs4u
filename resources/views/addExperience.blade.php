  
<?php $title="Experience"; ?>
@extends('include.header')
@section('content') 
               

  <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Add Experience</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="/">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Experience</li>
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
                            <div class="title uppercase mt-45 mb-38"><span class="lg">Experience</span></div>
                            <div class="single-job-form">
                                <div class="single-info pb-14">
                                    <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                    <div class="form-box fix">
                                        <input type="text" id="title" name="title" placeholder="Enter your title" required>
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="date_from" class="uppercase pull-left m-0">date from</label>
                                    <div class="form-box fix">
                                        <input type="text" id="date_from" name="date_from" placeholder="Please enter date" required>
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="date_to" class="uppercase pull-left m-0">date to</label>
                                    <div class="form-box fix">
                                        <input type="text" id="date_to" name="date_to" placeholder="Please enter date" required>
                                    </div>
                                </div>
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">description </label>
                                    <div class="desc fix">
                                        <textarea name="textarea" class="fix small textarea" cols="30" rows="10" placeholder="Please enter description" required></textarea>
                                    </div>
                                </div>
                                 <div class="ml-160 mt-42">
                                    <a href="#" class="button button-medium-box">Add Experience</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
