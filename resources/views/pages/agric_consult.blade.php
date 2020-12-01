<?php $agric ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Agric Consultancy</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Agric Consultancy</a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b>Agric Consultancy </b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/a.jpeg" width="100%" height="350px" style="border-radius:35px; border:5px solid #ccc;" /><br/><br/>
				<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
					Investment in agriculture has proven to be the safest ever; everyday
					 people must eat. This entails a guaranteed market for your agricultural 
					 products. The Agricultural Department of Solomon’s Ideas Ltd gives you a wide
					  range of services in the agricultural sector. We help you plan, budget, and 
					  even set up your farm. 
					<br/><br/>If you have been thinking of how to run a livestock farm, and or even 
					plant hybrid seedlings of crops and fruits, then you’ve just hit the right
					 channel. With our team of professional agriculturists, we guarantee a bountiful 
					 harvest on your investment.
					<br/><br/>Contact us today; yes, you can start today.
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<img src="img/aa.jpeg" width="100%" height="250px" style="border-radius:35px; border:5px solid #ccc;" />
				
				<h4 style="font-size:18px;">Do you wish to set up your agricultural farms?
				Hire a Consultant </h4>
				<form class='contact-form' method="POST">
					<div class="contact-form-left">
						<span><i class='fa fa-user'></i></span><input type="text" name='name' placeholder='Name' id='name'>
						<span><i class='fa fa-envelope-o'></i></span><input type="text" name='email' placeholder='e-mail' id='email'>
						<span><i class='fa fa-phone'></i></span><input type="text" name='phone' placeholder='Phone' id='phone'>
						<span><i class='fa fa-money'></i></span><input type="text" name='' placeholder='Project Budget' id='phone'>
						
					</div>
					<div class="contact-form-right">
						<textarea id="message" name='message' placeholder='Full Details of Site Location'></textarea>
						<textarea id="message" name='message' placeholder='Why do you need a Consultant?'></textarea>
					</div>
						<input type="submit" value='Hire a Consultant' id='submit-btn'>
					
				</form>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
