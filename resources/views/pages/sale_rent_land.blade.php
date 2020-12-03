<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's Sale/Rent Your Land For You</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Let's Sale/Rent Your Land For You </a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b> Let's Sale/Rent Your Land For You Within Days</b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/land1.jpg" width="100%" height="350px"  style="border-radius:120px;" /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
					<br/><br/>
                    From the comfort of your home or place of work, you can post the property you 
                    desire to sell and have it sold within days. If you have scanned copies of your 
                    valid ID card, a passport photo, the relevant land/house documents, pictures
                     and short video clip of the property to be sold, then you're good to go. 
                     <br/><br/>
                     Simply fill our
                      <b>Land SALES FORM </b>
                      to put in your details, upload the documents, 
                      drop your bank account details, and wait for your alert within days. 
                      We've sold many Lands already; your own can't be different. 
                      
 <br/><br/>
<a href="{{route('form.show',0)}}" class='btn btn-success btn-lg'>Get started </a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>



















@endsection
