<?php $title="User"; ?>
@extends('include.userHeader')
@section('content') 
 	<div class="container-fluid ">
 		
 		<form action="/storeExperience" method="post" style="border-style: solid; border-width: 5px;  border-color:grey;">
 			@csrf
 			<div class="row text-center ">
 				<div class="col-md-12">
 					<h2 class="text-center" style="background: grey; border: 5px; padding: 15px; color: white;"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience</h2>
 				</div>
 			</div>
			<div class="row p-3">
				<div class="col-md-6">
					<div  class="form-group">
						<label>Designation<span style="color: red;">*</span></label>
						<input type="text" name="designation"  class="form-control" required="">

					</div>
				</div>
				<div class="col-md-6">
					<div  class="form-group">
						<label>Company<span style="color: red;">*</span></label>
						<input type="text" name="companyName"  required class="form-control">
					</div>
				</div>
			</div>
			
			<div class="row p-3">
				<div class="col-md-5">
					<label for="l_name" class="uppercase pull-left m-0">Start Date<span style="color: red;">*</span></label>
                    <div class="form-box fix">
						<select name="startDay" tabindex="-1" style="width:30%; height: 35px; " required="">
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
						<select name="startMonth" tabindex="-1" style="width:30%;height: 35px;" required="">
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
						<select name="startYear" style="width:30%;height: 35px;" tabindex="-1" required="">
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
						</select>
					</div>
				</div>
				<div class="col-md-2">
					<label>Job Status<span style="color: red;">*</span></label>
					<select name="jobStatus" class="form-control" required>
						<option value="End">End</option>
						<option value="Continue">Continue</option>
					</select>
				</div>
				<div class="col-md-5">
					<label for="l_name" class="uppercase pull-left m-0">End Date</label>
                    <div class="form-box fix ">
						<select name="endDay" tabindex="-1" style="width:30%;height: 35px;" >
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
						<select name="endMonth" tabindex="-1" style="width:30%;height: 35px;" >
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
						<select  name="endYear"style="width:35%;height: 35px;" tabindex="-1" >
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
						</select>
					</div>
				</div>
			</div>
			
			<div class="row p-3">
				<div class="col-md-12">
					<div  class="form-group">
						<label>Responsibilities<span style="color: red;">*</span></label>
						<textarea name="description" rows="4" cols="12" style="width: 100%"required></textarea>
					</div>
				</div>
			</div>
			<input type="hidden" name="userName" class="form-control" value="<?php echo session()->get('userName'); ?>">
			<div class="row p-3">
				<div class="col text-center">
					<button type="submit" class="btn btn-secondary mt-5 col-md-2">Submit</button>
				</div>
			</div>

		</form>
	</div>
	<br><br>
	<div class="card mb-3 m-3">
        <div class="card-header text-center" style="background: grey; border: 5px; padding: 15px; color: white;">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            Work Experience</div>
        <div class="card-body" style="border-style: solid; border-width: 5px;  border-color:grey;">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Company Name</th>
                    <th>Designation</th>
                    <th>Job Starts</th>
                    <th>Job Ends</th>
                    <th>Job Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($experiences as $experience) { ?>
                  <tr>
                    <td>{{$experience->companyName}}</td>
                    <td>{{$experience->designation}}</td>
                    <td>{{$experience->jobStart}}</td>
                    <td>{{$experience->jobEnd}}</td>
                    <td>{{$experience->jobStatus}}</td>
                    <td><a href="/editEducation/{{$experience->id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/deleteExperience/{{$experience->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<br><br>
<br><br>
@stop