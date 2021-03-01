
	<?php $homepage ="";  ?>

	@extends('layouts.mob')
	
	@section('content')
	
	
	
	
	<!-- slider -->
	<div class="slider">
		
		<ul class="slides">
			<li>
				<img src="img/slide1.jpg" alt="">
				<div class="caption slider-content center-align ">
					<div class="container">
						<h2>SOLOMON'S IDEAS PROPERTIES & REAL ESTATE</h2>
						<h4> A company you can always and firmly rely on any day, anytime when it comes to Real Estate matters </h4>
						<a href="#" class="button-default">Get Now</a>
					</div>
				</div>
			</li>
			<li>
				<img src="img/slide2.jpg" alt="">
				<div class="caption slider-content center-align">
					<div class="container">
						<h2>OUR SERVICES</h2>
						<h4> We help you buy lands, buy buildings, rent, lease, manage  or build that super edifice your heart so desires!.</h4>
						<a href="#" class="button-default">Get Now</a>
					</div>
				</div>
			</li>
			<li>
				<img src="img/slide3.jpg" alt="">
				<div class="caption slider-content center-align">
					<div class="container">
						<h2>AGRIC CONSULTANCY</h2>
						<h4> Do you wish to set up your agricultural farms? </h4>
						<a href="#" class="button-default"> Hire a Consultant </a>
					</div>
				</div>
			</li>
		</ul>

	</div>
	<!-- end slider -->


	@include('layouts.mob_search')


<!-- new properties -->
<div class="section real-estate bg-second">
	<div class="container">
		<div class="section-head">
			<h4>NEW PROPERTIES</h4>
			<div class="underline"></div>
			<div class="underline2"></div>
		</div>
		<div class="row">
			<div class="col s6">
				<div class="content">
					<span class="price">$1700</span>
					<img src="img/real-estate1.jpg" alt="">
					<div class="offer-type">
						<span>For Sale</span>
					</div>
					<div class="sub-content">
						<a href="#"><h5>Minimalist Home Luxury</h5></a>
						<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
					</div>
				</div>
			</div>
			<div class="col s6">
				<div class="content">
					<span class="price">$500</span>
					<img src="img/real-estate2.jpg" alt="">
					<div class="offer-type">
						<span>For Rent</span>
					</div>
					<div class="sub-content">
						<a href="#"><h5>Minimalist Home Luxury</h5></a>
						<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s6">
				<div class="content">
					<span class="price">$400</span>
					<img src="img/real-estate3.jpg" alt="">
					<div class="offer-type">
						<span>For Rent</span>
					</div>
					<div class="sub-content">
						<a href="#"><h5>Minimalist Home Luxury</h5></a>
						<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
					</div>
				</div>
			</div>
			<div class="col s6">
				<div class="content">
					<span class="price">$1500</span>
					<img src="img/real-estate4.jpg" alt="">
					<div class="offer-type">
						<span>For Sale</span>
					</div>
					<div class="sub-content">
						<a href="#"><h5>Minimalist Home Luxury</h5></a>
						<span><i class="fa fa-map-marker"></i> 574 Green Park, New York</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end new properties -->






<!-- most view -->
<div class="section real-estate bg-second">
	<div class="container">
		<div class="section-head">
			<h4>OUR AGENT</h4>
			<div class="underline"></div>
			<div class="underline2"></div>
		</div>
		<div style="margin:-150px;">
		<div class="carousel">
			<a class="carousel-item" href="#one!"><img src="{{ asset('mob/img/team1.jpg')}}"></a>
			<a class="carousel-item" href="#two!"><img src="{{ asset('mob/img/team2.jpg')}}"></a>
			<a class="carousel-item" href="#three!"><img src="{{ asset('mob/img/team1.jpg')}}"></a>
			<a class="carousel-item" href="#four!"><img src="{{ asset('mob/img/team2.jpg')}}"></a>
			<a class="carousel-item" href="#five!"><img src="{{ asset('mob/img/team3.jpg')}}"></a>
		  </div>
		</div>
		<center>
		<a href="/mob/agents" class="btn green"> View All</a>
		</center>

	</div>
</div>
<!-- end moss views -->










<!-- whY CHOOSE US -->
<div class="section who-we-are">
	<div class="container">
		<div class="head">
			<h4>WHY CHOOSE <span>US</span></h4>
<P></P>
		</div>
		<div class="row">
			<div class="col s6">
				<div class="content">
					<i class="fa fa-lock"></i>
				<h4>DDoS Protected System </h4>
				<p>We use the highest level of protection on Our Wedsite that is
					Capable of resisting attacks of any size. 
					</p>
				</div>
			</div>
			<div class="col s6">
				<div class="content">
					<i class="fa fa-certificate"></i>
					<h4>Registered With CAC</h4>
				<p>
					 We are legally registered with Coperate Affiars Commision
					  as "SOLOMON'S IDEAS LTD (RC: 1718316)"
				</p>
				</div>
			</div>
		</div>
		<div class="row mb">
			<div class="col s6">
				<div class="content">
					<i class="fa fa-shield"></i>
					<h4>EV SSL</h4>
				<p>
					Our website is secured with 256-bit encryption with Extended
					 Validation that verifies the authenticity of our company.
				</p>
				</div>
			</div>
			<div class="col s6">

				<div class="content">
					<i class="fa fa-globe"></i>
					<h4>Dedicated Server</h4>
				<p>
					We use a dedicated server with the highest level of DDOS protection 
					to ensure that your funds are always safe with us. 
				</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end wHY CHOOSE US -->

@endsection
