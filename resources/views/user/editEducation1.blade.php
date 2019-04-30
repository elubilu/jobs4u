<?php $title="User"; ?>
@extends('include.userHeader')
@section('content') 
 	<div class="container-fluid ">
 		
 		<form action="/updateEducation" method="post" style="border-style: solid; border-width: 5px;  border-color:grey;">
 			@csrf
 			<div class="row text-center ">
 				<div class="col-md-12">
 					<h2 class="text-center" style="background: grey; border: 5px; padding: 15px; color: white;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education</h2>
 				</div>
 			</div>
			<div class="row p-3">
				<div class="col-md-6">
					<div  class="form-group">
						<label>Degree Name<span style="color: red;">*</span></label>
						<select name="degreeName"  class="form-control" required>
							<option value="{{$education->degreeName}}">{{$education->degreeName}}</option>
							<option value="A Level">A Level </option>
							<option value="O Level">O level</option>
							<option value="Master's">Master's</option>
							<option value="Bachelor">Bachelor</option>
							<option value="Diploma">Diploma</option>
							<option value="HSC">HSC</option>
							<option value="SSC">SSC</option>
							<option value="Below SSC">Below SSC</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div  class="form-group">
						<label>Degree Title<span style="color: red;">*</span></label>
						<input type="text" name="degreeTitle" required value="{{$education->degreeTitle}}"  class="form-control">
					</div>
				</div>
			</div>
			
			<div class="row p-3">
				<div class="col-md-6">
					<label>Major<span style="color: red;">*</span></label>
					<input type="text" name="major" value="{{$education->major}}" required class="form-control">
				</div>
				<div class="col-md-6">
					<label>Institution<span style="color: red;">*</span></label>
					<input type="text" name="institution" value="{{$education->institution}}" required class="form-control">
				</div>
			</div>
			
			<div class="row p-3">
				<div class="col-md-4">
					<label>GPA/CGPA<span style="color: red;">*</span></label>
					<input type="text" name="result" value="{{$education->result}}" required class="form-control">
				</div>
				<div class="col-md-4">
					<label>Grading<span style="color: red;">*</span></label>
					<select name="grading" class="form-control" required >
						<option value="5">5</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="col-md-4">
					<label>Passed<span style="color: red;">*</span></label>
					<select name="passingYear" class="form-control" >
						<option value="" selected="selected" required class="form-control">Passing Year</option>
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
					</select>
				</div>
			</div>
			<input type="hidden" name="id" class="form-control" value="<?php echo $education->id ?>">
			<div class="row p-3">
				<div class="col text-center">
					<button type="submit" class="btn btn-secondary mt-5 col-md-2">Update</button>
				</div>
			</div>

		</form>
	</div>
@stop