  
<?php $title="Account Information"; ?>
@extends('include.header')
@section('content') 

  <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area pt-94 pb-85 bg-3 bg-opacity-dark-blue-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h2 class="text-center text-white uppercase mb-17">Create Account</h2>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center m-0">
                                            <li class="text-white uppercase ml-15 mr-15"><a href="/">Home</a></li>
                                            <li class="text-white uppercase ml-15 mr-15">Signup</li>
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
                                <form action="#" enctype="multipart/form-data" method="Post">
                                	@csrf
                                    <div class="single-job-content">
                                        <div class="title uppercase pt-50 pb-38"><span class="lg">Profile</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label for="photo" class="uppercase pull-left m-0">photo <span>*</span></label>
                                                <div class="photo-uploader fix pull-left" id="fileupload" >
                                                    <input type="file" id="photo" name="image" required>
                                                    <span class="filename">Upload photo</span>            
                                                    <span class="action">Browse</span>    
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="f_name" class="uppercase pull-left m-0" >Full Name <span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="f_name" name="fullName" placeholder="Please enter your Full name" required>
                                                </div>
                                            </div>
                                            <div class="single-info pb-14">
                                                <label for="m_name" class="uppercase pull-left m-0">Father's name <span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="m_name" name="fatherName" placeholder="Please enter your father's name" required>
                                                </div>
                                            </div>
                                            <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">Mother's name <span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="l_name" name="motherName" placeholder="Please enter your mother's name" required>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">Religion <span>*</span></label>
                                                <div class="form-box fix">
                                                        <select name="religion" required>
                                                            <option>Islam</option>
                                                            <option>Hiduism</option>
                                                            <option>Buddho</option>
                                                            <option>Christian</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <br>
                                             <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">Maritial Status <span>*</span></label>
                                                <div class="form-box fix">
                                                        <select name="maritialStatus" required>
                                                            <option>Married</option>
                                                            <option>Unmarried</option>>
                                                        </select>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">gender<span>*</span></label>
                                                <div class="form-box fix">
                                                        <select name="gender" required="">
                                                            <option>Male</option>
                                                            <option>Female</option>>
                                                        </select>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="single-info">
                                                <label for="l_name" class="uppercase pull-left m-0">date of birth<span>*</span></label>
                                                <div class="form-box fix">

														<select name="birth_day" tabindex="-1" style="width:25%;height: 30px;" required="">
															<option style="color: #777;" value="">Day</option>
															<option value="01">01</option>
															<option value="02">02</option>
															<option value="03">03</option>
															<option value="04">04</option>
															<option value="06">06</option>
															<option value="07">07</option>
															<option value="09">09</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
															<option value="26">26</option>
															<option value="27">27</option>
															<option value="28">28</option>
															<option value="29">29</option>
															<option value="30">30</option>
															<option value="31">31</option>
														</select>
														<select name="birth_month" tabindex="-1" style="width:30%;height: 30px;" required="">
															<option value="">Month</option>
															<option value="01">January</option>
															<option value="02">February</option>
															<option value="03">March</option>
															<option value="04">April</option>
															<option value="05">May</option>
															<option value="06">June</option>
															<option value="07">July</option>
															<option value="08">August</option>
															<option value="09">September</option>
															<option value="10">October</option>
															<option value="11">Novermber</option>
															<option value="12">December</option>
														</select>
														<select name="birth_year" style="width:30%;height: 30px;" tabindex="-1" required="">
															<option value="" selected="selected">Year</option>
															<option value="2019">2019</option>
															<option value="2018">2018</option>
															<option value="2017">2017</option>
															<option value="2016">2016</option>
															<option value="2015">2015</option>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2012</option>
															<option value="2011">2011</option>
															<option value="2010">2010</option>
															<option value="2009">2009</option>
															<option value="2008">2008</option>
															<option value="2007">2007</option>
															<option value="2006">2006</option>
															<option value="2005">2005</option>
															<option value="2004">2004</option>
															<option value="2003">2003</option>
															<option value="2002">2002</option>
															<option value="2001">2001</option>
															<option value="2000">2000</option>
															<option value="1999">1999</option>
															<option value="1998">1998</option>
															<option value="1997">1997</option>
															<option value="1996">1996</option>
															<option value="1995">1995</option>
															<option value="1994">1994</option>
															<option value="1993">1993</option>
															<option value="1992">1992</option>
															<option value="1991">1991</option>
															<option value="1990">1990</option>
															<option value="1989">1989</option>
															<option value="1988">1988</option>
															<option value="1987">1987</option>
															<option value="1986">1986</option>
															<option value="1985">1985</option>
															<option value="1984">1984</option>
															<option value="1983">1983</option>
															<option value="1982">1982</option>
															<option value="1981">1981</option>
															<option value="1980">1980</option>
															<option value="1979">1979</option>
															<option value="1978">1978</option>
															<option value="1977">1977</option>
															<option value="1976">1976</option>
															<option value="1975">1975</option>
															<option value="1974">1974</option>
															<option value="1973">1973</option>
															<option value="1972">1972</option>
															<option value="1971">1971</option>
														</select>
												</div>
											</div>
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="medium">Contact Information</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14">
                                                <label for="city" class="uppercase pull-left m-0">city<span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="city" name="city" placeholder="Please enter your city name" required>
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="address" class="uppercase pull-left m-0">address<span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="address" name="address" placeholder="Please enter your address" required>
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="phone" class="uppercase pull-left m-0">phone<span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="phone" name="mobileNo" placeholder="Please enter your phone number" required>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="title uppercase mt-45 mb-38"><span class="lg">Biography</span></div>
                                        <div class="single-job-form">
                                            <div class="single-info mb-14 fix">
                                                <label class="uppercase pull-left m-0">description<span>*</span></label>
                                                <div class="text-style fix pt-5 pb-5 pl-15 fix">
                                                    <span class="mr-15"><i class="zmdi zmdi-format-bold"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-italic"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-underlined"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-list-numbered"></i></span>
                                                    <span class="mr-15"><i class="zmdi zmdi-format-line-spacing"></i></span>
                                                </div>
                                                <div class="desc fix">
                                                    <textarea name="bio" class="fix textarea" cols="30" rows="10" placeholder="Please enter description" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="title uppercase mt-45 mb-38"><span class="lg">Login Information</span></div>
                                        <div class="single-job-form">
                                       		<div class="single-info mb-14">
                                                <label for="email" class="uppercase pull-left m-0">email<span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="email" name="email" placeholder="Please enter your email" required>
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="date_from" class="uppercase pull-left m-0">user name <span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="date_from" name="userName" placeholder="Please enter user name" required>
                                                </div>
                                            </div>
                                            <div class="single-info mb-14">
                                                <label for="date_to" class="uppercase pull-left m-0">password <span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="date_to" name="password" placeholder="Please enter password" required>
                                                </div>
                                            </div>
                                             <div class="single-info mb-14">
                                                <label for="date_to" class="uppercase pull-left m-0">retype password<span>*</span></label>
                                                <div class="form-box fix">
                                                    <input type="text" id="date_to" name="conPassword" placeholder="Please retype password" required="">
                                                </div>
                                            </div>
                                            <div class="ml-160 mt-42">
                                                <button class="button button-medium-box">Signup</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Single Job Post Area-->

@stop