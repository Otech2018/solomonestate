
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
			<h4> PROPERTIES</h4>
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
		<div style="margin-top:-110px; margin-bottom:20px; ">
		<div class="carousel">
		
			<div class="carousel-item card" >
				<img src="{{ asset('mob/img/team1.jpg')}}">
			<center>
				<h4> <i class="fa fa-user"></i> Sam Paul</h4>
				<p> <b><i class="fa fa-info-circle"></i> Sales Agent </b></p>
			<a href="tel:07068085045"> <b><u><i class="fa fa-phone"></i> 07068085036 </u></b></a> <br/>
			<a href="mailto:werty@gmail.com"> <b> <i class="fa fa-envelope"></i> werty@gmail.com </b></a>

			</center>
		</div>



		<div class="carousel-item card" >
			<img src="{{ asset('mob/img/team2.jpg')}}">
		<center>
			<h4> <i class="fa fa-user"></i> Okoro Timothy</h4>
			<p> <b><i class="fa fa-info-circle"></i> Sales Agent </b></p>
		<a href="tel:07023085036"> <b><u><i class="fa fa-phone"></i> 07023085036 </u></b></a> <br/>
		<a href="mailto:werdfffty@gmail.com"> <b> <i class="fa fa-envelope"></i> werdfffty@gmail.com </b></a>

		</center>
	</div>





	<div class="carousel-item card" >
		<img src="{{ asset('mob/img/team3.jpg')}}">
	<center>
		<h4> <i class="fa fa-user"></i> Peter Raul</h4>
		<p> <b><i class="fa fa-info-circle"></i> Sales Agent </b></p>
	<a href="tel:07023085036"> <b><u><i class="fa fa-phone"></i> 07023085036 </u></b></a> <br/>
	<a href="mailto:werdfffty@gmail.com"> <b> <i class="fa fa-envelope"></i> werdfffty@gmail.com </b></a>

	</center>
</div>





<div class="carousel-item card" >
	<img src="{{ asset('mob/img/team4.jpg')}}">
<center>
	<h4> <i class="fa fa-user"></i> Okoro Timothy</h4>
	<p> <b><i class="fa fa-info-circle"></i> Sales Agent </b></p>
<a href="tel:07023085036"> <b><u><i class="fa fa-phone"></i> 07023085036 </u></b></a> <br/>
<a href="mailto:werdfffty@gmail.com"> <b> <i class="fa fa-envelope"></i> werdfffty@gmail.com </b></a>

</center>
</div>



<div class="carousel-item card">
	<img src="{{ asset('mob/img/team3.jpg')}}">
<center>
	<h4> <i class="fa fa-user"></i> Okoro Mark</h4>
	<p> <b><i class="fa fa-info-circle"></i> Sales Agent </b></p>
<a href="tel:07023085036"> <b><u><i class="fa fa-phone"></i> 07023085036 </u></b></a> <br/>
<a href="mailto:werdfffty@gmail.com"> <b> <i class="fa fa-envelope"></i> werdfffty@gmail.com </b></a>

</center>
</div>




			
			
		  </div>
		</div>
		<center>
		<a href="/mob/agents" class="btn green"><b> View All Agents </b> </a>
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




	
	<!-- team -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>OUR SERVICES</h3>
			</div>
			<div class="row">
				<div class="col m12">
					<div class="page-team">
					<img src="{{ asset('img/agents/land_agent.jpg')}}"  alt="agent">
						<div class="team-details">
					<h4>Become Our Free Agent </h4>
					<p>
						"You can now make millions from the comfort of your home, office or workplace. <br/>

It's EASY & SIMPLE! Get someone to buy any of our lands posted here and get 50% of the Agency Fee accruing from your contacted client/Buyer. <br/>
					</p>
						<a href="#!" class="btn green">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col m12">
					<div class="page-team">
						<img src="{{ asset('img/agents/a12.jpg')}}"  alt="agent">
							<div class="team-details">
					<h4>Real Estate</h4>
						<p>
							We help you buy lands, buy buildings, rent, lease,
							manage and or build that super 
							edifice your heart so desires
						</p>
							<a href="#!" class="btn green">Get Started</a>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col m12">
					<div class="page-team">
						<img src="{{ asset('img/agents/agric.jpeg')}}"  alt="">
						<div class="team-details">
					<h4>Agric Consultancy</h4>

							<p>
								If you have been thinking of how to run a livestock farm, and 
								or even plant hybrid seedlings of crops and fruits, then you’ve 
								just hit the right channel. With our team of professional agriculturists,
								 we guarantee a bountiful harvest on your investment.

							</p>
							<a href="#!" class="btn green">Get Started</a>
						
						</div>
					</div>
				</div>
				
				<div class="col m12">
					<div class="page-team">
						<img src="{{ asset('img/agents/build.jpg')}}"  alt="">
						<div class="team-details">
					<h4>Let's Build For You</h4>

							<p>
								It just doesn’t require your presence. With little or no supervision,
						 we have built hundreds of small, average and mighty structures. Our 
						 team of civil and building engineers has always done their jobs like 
						 they’re born to do it. 

							</p>
							<a href="#!" class="btn green">Get Started</a>
						
						</div>
					</div>
				</div>




				<div class="col m12">
					<div class="page-team">
						<img src="{{ asset('img/agents/build.jpg')}}"  alt="">
						<div class="team-details">
					<h4>Let's Save Money For You</h4>

							<p>
								We can Help You Save money to 
								Pay your House Rent, Buy A Land, Build Your Dream Home and 
								Buy homestead/Workspace Appliances.

							</p>
							<a href="#!" class="btn green">Get Started</a>
						
						</div>
					</div>
				</div>






			</div>
		</div>
	</div>
	<!-- end team -->

@endsection
