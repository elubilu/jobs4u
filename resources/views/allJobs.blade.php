<?php $title="All Jobs"; ?>
@extends('include.header')
@section('content') 

		 <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-150 bg-3 bg-opacity-black-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Job Board</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="index.html">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Job Board</li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="#" method="post" style="width: 100%">
                                    <div class="form-container fix bg-opacity-blue-85 mt-125" >
                                        <div class="box-select">
                                            <div class="select large">
                                                <select name="category">
                                                    <option>Category</option>
                                                    <option>Finance</option>
                                                    <option>Accountant</option>
                                                    <option>Enginner</option>
                                                    <option>Programmer</option>
                                                    <option>Developer</option>
                                                </select>
                                            </div>
                                            <div class="select small">
                                                <select name="region">
                                                    <option>All Regions</option>
                                                    <option>Dhaka</option>
                                                    <option>Shylet</option>
                                                    <option>Khulna</option>
                                                    <option>Barishal</option>
                                                    <option>Chittagong</option>
                                                </select>
                                            </div>
                                            <div class="select medium">
                                                <select name="type">
                                                    <option>Volunteer</option>
                                                    <option>Part Time</option>
                                                    <option>Full Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button" class="button-dark pull-right">Search</button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Start of Job Post Area-->
                <div class="job-post-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">All Jobs</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-post-container fix">
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/1.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Graphic Designer</h4>
                                                <h5><a href="#">Devitems</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 200.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Designer</h4>
                                                <h5><a href="#">Hastech</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 450.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/3.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Print Designer</h4>
                                                <h5><a href="#">Bootexperts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-dark-blue">Internship</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/4.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">UI/UX Designer</h4>
                                                <h5><a href="#">CodeCarnival</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Development</h4>
                                                <h5><a href="#">PowerBoosts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button">Part Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Development</h4>
                                                <h5><a href="#">PowerBoosts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button">Part Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/4.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">UI/UX Designer</h4>
                                                <h5><a href="#">CodeCarnival</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/3.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Print Designer</h4>
                                                <h5><a href="#">Bootexperts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-dark-blue">Internship</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Graphic Designer</h4>
                                                <h5><a href="#">Devitems</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 200.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Job Post Area -->

@stop