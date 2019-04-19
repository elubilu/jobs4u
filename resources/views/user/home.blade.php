<?php $title="User"; ?>
@extends('include.userHeader')
@section('content') 

 	<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
              <!-- /.container-fluid -->
    </div>
 	<div class="container-fluid" id="cv">
 		<div class="row" style="display: grid; grid-template-columns: auto auto auto auto auto auto;grid-gap: 10px; padding: 10px;">
			<div  style="margin-bottom: 16px; grid-column: 1 / 4;">
			  <img style="background-repeat: no-repeat;width: 140px;height: 140px;float: left;border:1px solid #DDD;padding: 4px;border-radius:4px;"src="http://www.journeymakerjobs.com/images/jobseeker/jobseekeroldimage/Rasel_Ahmed.jpg" alt="7274" />
			</div>
			<div  style="margin-bottom: 16px; grid-column:  6/ 7;">
				<h1 style="font-size: 30px;margin-bottom: 3px;clear: both;">{{$details->fullName}}<br />
				  <!--span>Interactive Designer</span--></h1>
				<span><i class="fa fa-home"></i> {{$details->address}}</span>
				<br>
				<span><i class="fa fa-envelope"></i> {{$details->email}}</span>
				<br>
				<i class="fa fa-mobile" aria-hidden="true"></i>  {{$details->mobileNo}}</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label for="inputEmail3" class="col-md-12" style="border-bottom: 1px solid black;font-size: 16px;text-align:left; font-weight: bold;">OBJECTIVE</label>
			</div>
			<div class="col-md-12" style="margin-bottom: 16px;">
				<p style="margin-left: 16px;"><p>{{$details->bio}}</p></p>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label for="inputEmail3" class="col-md-12" style="border-bottom: 1px solid black;font-size: 16px;text-align:left; font-weight: bold;">WORK EXPERIENCE</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h6 style="font-size: 16px;">February 2019 - Still Continuing <span > :</span></h6>
			</div>
			<div class="col-sm-9" style="margin-bottom: 16px;">
				<p style="font-size: 18px;font-weight: 500;">  Staff Asia</p>
				<p style="font-size: 14px;font-weight: 600;text-indent: 10px;"><em>Software Developer</em></p>
				<p  style="font-size: 14px;font-weight: 400;margin-left: 10px;text-align:left;">Work collaboratively with clients and in-house agency teams to provide rapid, robust and clientacclaimed front- and back-end web development optimizing user experience, search engine ranking,sales, brand positioning and related metrics. </p>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-3">
				<h6 style="font-size: 16px;">May 2017 - July 2018 <span > :</span></h6>
			</div>
			<div class="col-md-9" style="margin-bottom: 16px;">
				<p style="font-size: 18px;font-weight: 500;">  StarLab IT</p>
				<p style="font-size: 14px;font-weight: 600;text-indent: 10px;"><em>Intern</em></p>
				<p  style="font-size: 14px;font-weight: 400;margin-left: 10px;text-align:left;">Work collaboratively with clients and in-house agency teams to provide rapid, robust and clientacclaimed front- and back-end web development optimizing user experience, search engine ranking,sales, brand positioning and related metrics. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label for="inputEmail3" class="col-md-12" style="border-bottom: 1px solid black;font-size: 16px;text-align:left; font-weight: bold;">Education</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h6 style="font-size: 16px;">Jan 2015 - Dec 2018 <span > :</span></h6>
			</div>
			<div class="col-md-9" style="margin-bottom: 16px;">
				<p style="font-size: 16px;font-weight: 600;">BSc</p>
				<p style="font-size: 14px;font-weight: 400;text-indent: 10px;">Leading University,Sylhet.</p>
				<p style="font-size: 14px;font-weight: 600;text-indent: 10px;">3.50 out of 4 ( Computer Science & Engineering )</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h6 style="font-size: 16px;">Apr 2011 - Apr 2013 <span > :</span></h6>
			</div>
			<div class="col-md-9" style="margin-bottom: 16px;">
				<p style="font-size: 16px;font-weight: 600;">HSC</p>
				<p style="font-size: 14px;font-weight: 400;text-indent: 10px;">Westpoint College,Sylhet.</p>
				<p style="font-size: 14px;font-weight: 600;text-indent: 10px;">3.50 out of 4 ( Science )</p>
			</div>
		</div>
 	</div>
	<div class="content-footer container">
	    <button class="btn btn-primary" id="btn-export" onclick="exportHTML();">Export to word doc</button>
	</div>
	<br><br>
 	<script>
    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("cv").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'myProfile.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>



@stop