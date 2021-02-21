
<?php $homepage ="";  ?>

@extends('layouts.app')

@section('content')





	<!-- Slider-Section -->
		<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/slide01.jpg" alt="WELCOME TO SOLOMON'S IDEAS PROPERTIES & REAL ESTATE" title="WELCOME TO SOLOMON'S IDEAS PROPERTIES & REAL ESTATE" id="wows1_0"/>A company you can always and firmly rely on any day, anytime when it comes to Real Estate matters</li>
		<li><img src="data1/images/slide02.jpg" alt="full screen slider" title="OUR SERVICES" id="wows1_1"/>We help you buy lands, buy buildings, rent, lease, manage  or build that super edifice your heart so desires!.</li>
		<li><img src="data1/images/slide03.jpg" alt="OUR ONLINE SHOP" title="OUR ONLINE SHOP" id="wows1_2"/>Our Online Shop is uniquely designed to give you a stress-free purchase of all kinds of building materials and homestead goods and gadgets. </li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="WELCOME TO SOLOMON'S IDEAS PROPERTIES & REAL ESTATE"><img src="data1/tooltips/slide01.jpg" alt="WELCOME TO SOLOMON'S IDEAS PROPERTIES & REAL ESTATE"/>1</a>
		<a href="#" title="OUR SERVICES"><img src="data1/tooltips/slide02.jpg" alt="OUR SERVICES"/>2</a>
		<a href="#" title="OUR ONLINE SHOP"><img src="data1/tooltips/slide03.jpg" alt="OUR ONLINE SHOP"/>3</a>
	</div></div><span class="wsl">
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	
@include('layouts.search')



<!-- Recent-Listings-Section -->
<div class="recent-listings">
	<div class="container">
		<div class="title-box">
			<h3>Featured Listings</h3>
			<div class="bordered">
			</div>
		</div>
		<div class="row listings-items-wrapper">
			
@foreach($properties as $property )

<div class="col-md-4 listing-single-item">
				<div class="item-inner">
					<div class="image-wrapper">
						<img src="storage/admin_property_images/{{ $property->cover_image }}" height="240px" alt="gallery">
						<a href="#" class='fa @if($property->property_type == 2 )  fa-home  @else fa-th  @endif property-type-icon'></a>
					@if($property->featured == 1 )
						<a href="#" class='featured'><i class='fa fa-star'></i>featured</a>
					@endif
					</div>
					<div class="desc-box">
						<h4><a href="#">{{ $property->sub_category_name }}
						@if( $property->sale_mode == 1)
							(for sale )
							@elseif( $property->sale_mode == 2)
							(for Rent )
							@elseif( $property->sale_mode == 3)
							(for sale landed property )
							@elseif( $property->sale_mode == 4)
							(for sale nonlanded property)						

							@endif
							 </a></h4>
							 <h4 style="color:green;font-size:17px;">
							 <span class="fa fa-map-marker"></span> {{ $property->lga->name }}
							 In {{ $property->state->name }}
							 </h4>
						<ul class="slide-item-features item-features">
							<li><span class="fa fa-arrows-alt"></span>{{ $property->land_size }} Sq Ft</li>
							@if($property->property_type == 2 ) 
								<li><span class="fa fa-male"></span>{{ $property->no_bathrooms }} bathrooms</li>
								<li><span class="fa fa-inbox"></span>{{ $property->no_bedrooms }} bedrooms</li>
							@endif
						</ul>
						<div class="buttons-wrapper">
							<a href="#!" class="btn btn-danger">N{{ $property->property_price }}</a>
							<a href="{{route('payment', $property->id)}}" class="btn btn-success">Pay</a>
							<a href="{{route('listing_details', $property->id)}}" class="btn btn-primary"><span class="fa fa-file-text-o"></span>Details</a>
						</div>
						<div class="clearfix">
						</div>
					</div>
				</div>
			</div>

@endforeach
			

		</div>

		
				<center>
			<a href="{{route('listing')}}" class="btn btn-success btn-lg">View All Our Properties</a>
			</center>
	</div>
</div>


<!-- Agents-Section -->
<div class="agents-section">
	<div class="container">
		<div class="title-box">
			<h3>our agents</h3>
			<div class="bordered">
			</div>
		</div>
		<p></p>
		<div class="owl-carousel agents-slider">


			@foreach($Accessments as $Accessment )
			<!-- single-agent -->
		<div class="single-agent">
			<div class="image-box">
				<img src="storage/agent/{{ $Accessment->slug }}" alt="agent" style="height:280px !important; width:330px !important;">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-pinterest"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-linkedin"></a></li>
					<li><a href="#" class="fa fa-facebook"></a></li>
				</ul>
			</div>
			<div class="desc-box">
				<h4>{{ $Accessment->topic }}</h4>
				<p class="person-number">
					<i class="fa fa-phone"></i> {{ $Accessment->keyword }}
				</p>
				<p class="person-email">
					<i class="fa fa-envelope"></i> {{ $Accessment->target_country }}
				</p>
				<p class="person-fax">
					<i class="fa fa-user"></i> {{ $Accessment->sub_heading }}
				</p>
				<a href="tel:{{$Accessment->keyword}}" class='gray-btn'>Call Agent</a>
			</div>
		</div>

		@endforeach
		

		</div>
			<center>
<a href="{{route('our_team')}}" class="btn btn-success btn-lg">View All Our Agents</a>
</center>
	</div>
</div>





<!-- Agents-Section -->
<div class="agents-section">
	<div class="container">
		<div class="title-box">
			<h3>our Services</h3>
			<div class="bordered">
			</div>
		</div>
		<div class="owl-carousel agents-slider">


			<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/land_agent.jpg"  alt="agent">
					<a  href="{{route('register')}}"  class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Become Our Free Agent </h4>
					<p class="person-number">
						 "You can now make millions from the comfort of your home, office or workplace. <br/>

It's EASY & SIMPLE! Get someone to buy any of our lands posted here and get 50% of the Agency Fee accruing from your contacted client/Buyer. <br/>



					</p>
					
				</div>
			</div>


			<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/a12.jpg"  alt="agent">
					<a  href="{{route('listing')}}"  class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Real Estate</h4>
					<p class="person-number">
						 We help you buy lands, buy buildings, rent, lease,
						  manage and or build that super 
						  edifice your heart so desires
					</p>
					
				</div>
			</div>

			


			<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/agric.jpeg" alt="agent">
					<a class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Agric Consultancy</h4>
					<p href="{{route('agric_consult')}}"  class="person-number">
						If you have been thinking of how to run a livestock farm, and 
						or even plant hybrid seedlings of crops and fruits, then you’ve 
						just hit the right channel. With our team of professional agriculturists,
						 we guarantee a bountiful harvest on your investment.
					</p>
					
				</div>
			</div>



			<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/build.jpg" alt="agent">
					<a class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Let's Build For You</h4>
					<p href="{{route('build_u')}}"  class="person-number">
						It just doesn’t require your presence. With little or no supervision,
						 we have built hundreds of small, average and mighty structures. Our 
						 team of civil and building engineers has always done their jobs like 
						 they’re born to do it. 
					</p>
					
				</div>
			</div>



			<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/save.jpeg" alt="agent">
					<a class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Let's Save Money For You</h4>
					<p href="{{route('save_build')}}"  class="person-number">
						We can Help You Save money to 
						 Pay your House Rent, Buy A Land, Build Your Dream Home and 
						 Buy homestead/Workspace Appliances.
					</p>
					
				</div>
			</div>
			

<div class="single-agent">
				<div class="image-box">
					<img src="img/agents/shop.png" alt="agent">
					<a  href="#!" class="btn social-icons">
						Get Started
					</a>
				</div>
				<div class="desc-box">
					<h4>Online Shop</h4>
					<p class="person-number">
						 Our Online Shop is uniquely designed to give you a stress-free purchase of all kinds of 
						 building materials and homestead goods and gadgets. 
					</p>
					
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Services-Section -->
<div class="services-section" >
	<div class="container">
		<div class="title-box">
			<h3>Why Choose Us</h3>
			<div class="bordered">
			</div>
		</div>

		
		<div class="services-wrapper">
			<div class="col-md-3 single-service ot_ch">
				<div class="bordered top-bordered">
				</div>
				<h4>DDoS Protected System </h4>
				<p>We use the highest level of protection on Our Wedsite that is
				Capable of resisting attacks of any size. 
				</p>
				<div class="fa fa-lock  icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'></a>
			</div>
			<div class="col-md-3 single-service ot_ch">
				<div class="bordered top-bordered">
				</div>
				<h4>Registered With CAC</h4>
				<p>
					 We are legally registered with Coperate Affiars Commision
					  as "SOLOMON'S IDEAS LTD (RC: 1718316)"
				</p>
				<div class="fa fa-certificate icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'></a>
			</div>
			<div class="col-md-3 single-service ot_ch">
				<div class="bordered top-bordered">
				</div>
				<h4>EV SSL</h4>
				<p>
					Our website is secured with 256-bit encryption with Extended
					 Validation that verifies the authenticity of our company.
				</p>
				<div class="fa fa-shield icon-service ot_ch">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'></a>
			</div>
			<div class="col-md-3 single-service ot_ch">
				<div class="bordered top-bordered">
				</div>
				<h4>Dedicated Server</h4>
				<p>
					We use a dedicated server with the highest level of DDOS protection 
					to ensure that your funds are always safe with us. 
				</p>
				<div class="fa fa-globe icon-service ot_ch">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'></a>
			</div>
		</div>
	</div>
</div>





@endsection