<?php $contact_us ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Contact us</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Contact us</a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
		<div class="col-md-12 map-wrapper">
			<div class="inner-wrapper">
				<div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15885.264642172522!2d7.0186804!3d5.520015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc469fd830b29d610!2sGOOD%20MORNING%20SCHOOLS!5e0!3m2!1sen!2sng!4v1605779046076!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="clearfix">
				</div> 
			</div>
		</div>
		<div class="col-md-6 contact-info">
			<div class="inner-wrapper">
				<h4 class="box-title"><b>Contact info</b></h4><hr/>
				<p class='first-paragraph' style="color:black; font-weight:normal; font-size:14px;">
				 SOLOMON'S IDEAS LTD (RC: 1718316) is just one company you can always and firmly
                  rely on any day, anytime when it comes to Real Estate matters. 
                  <br/><br/>
                  We takes direct responsibility for any Land sold to you. This means that your 
                  investment is safe as we directly give you a Power of Attorney posing as the
                   Seller. We make it look so easy, the Seller/Landlord must give Solomon’s Ideas 
                   Ltd a conditional Power of Attorney which gives the company the power and position 
                   of a Landlord to sell and issue Deed of Conveyance. So, we do not only act as middle 
                   man between the buyer and the seller,
                   we simply take responsibility for the safety of your investment.
                   <br/><br/>
                   Be assured that Solomon’s Ideas Team do conduct a detailed investigation/search on 
                   properties before handing over your money to the seller. We deal on only genuine 
                   lands and properties,
                    no more, no less. Your investment is 100% guaranteed.
                
                </p>
				<div class="info-wrapper" >
					<span style="color:black;"><i class="fa fa-home"></i>119 ORLU ROAD, OWERRI.</span>
					<br/><span style="color:black;"><i class="fa fa-phone"></i>+234 803 7735 915 </span>
					<span style="color:black;"><i class="fa fa-envelope"></i> support@solomonsidea.ltd </span>
				</div>
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="inner-wrapper">
				<h4 class="box-title"><b>Get in touch</b></h4>
				<form class='contact-form' method="POST">
					<div class="contact-form-left">
						<span><i class='fa fa-user'></i></span><input type="text" name='name' placeholder='Name' id='name'>
						<span><i class='fa fa-envelope-o'></i></span><input type="text" name='email' placeholder='e-mail' id='email'>
						<span><i class='fa fa-link'></i></span><input type="text" name='website' placeholder='website' id='website'>
					</div>
					<div class="contact-form-right">
						<textarea id="message" name='message' placeholder='Message'></textarea>
						<input type="submit" value='send message' id='submit-btn'>
					</div>
				</form>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
