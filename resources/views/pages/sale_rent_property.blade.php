<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')










 


	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's Manage your  property and your tenants </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Let's Manage your  property and your tenants  </a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b> Let's Manage your  property and your tenants </b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/as.png" width="100%" height="350px"  /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
            You have worked so hard to build that wonderful Commercial, Industrial or Residential structure. 
            Do save yourself
             the big stress of dealing with renting, leasing, renovations, payments of tenants, maintenance,
              etc. Solomon's Ideas makes it easier for you. We take so much burdens off your shoulders while 
              you seat back and get your rent money so effortlessly.
              <br/><br/>
				
                     Simply fill our
                      <b>PROPERTY SALES FORM </b>
                      to put in your details, upload the documents, 
                      drop your bank account details, and wait for your alert within days. 
                      We've sold many properties already; your own can't be different. 
                      
 <br/><br/>
<a href="{{route('form.create')}}" class='btn btn-success btn-lg'>Get started fast! </a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
