<?php $listing ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>property listings</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">property listings</a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 page-content">
				<div class="inner-wrapper">
					<div class="property-images-slider">
						<div id="details-slider" class="flexslider">
							<a href="#" class='fa fa-home property-type-icon'></a>
							<a href="#" class="yellow-btn">N370,000</a>
							<a href="#" class='status'>for sale</a>
							<ul class="slides">
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="img/property/39_slide-n1.png" alt="gallery">
								</div>
								</li>
								
							</ul>
						</div>
						<div id="details-carousel" class="flexslider">
							<ul class="slides">
								<li>
								<img src="img/property/40_thumb-1.png"/>
								</li>
								<li>
								<img src="img/property/41_thumb-2.png"/>
								</li>
								<li>
								<img src="img/property/42_thumb-3.png"/>
								</li>
								<li>
								<img src="img/property/43_thumb-4.png"/>
								</li>
								<li>
								<img src="img/property/44_thumb-5.png"/>
								</li>
								<li>
								<img src="img/property/45_thumb-6.png"/>
								</li>
								<li>
								<img src="img/property/40_thumb-1.png"/>
								</li>
							</ul>
						</div>
					</div>
					<div class="property-desc">
						<h3>2211 Summer Ridge Dr</h3>
						<ul class="slide-item-features item-features">
							<li><span class="fa fa-arrows-alt"></span>5000 Sq Ft</li>
							<li><span class="fa fa-male"></span>2 bathrooms</li>
							<li><span class="fa fa-inbox"></span>3 bedrooms</li>
						</ul>
						<p class="first-paragraph" style="color:black;" >
							Property Info GOes here  Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
						<br/><br/>
						Property Info GOes here  Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
                            Property Info GOes here Property Info GOes here Property Info GOes here 
                        </p>
						<div class="additional-features">
							<h3>Additional Features</h3>
							<ul class="features">
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Ceiling Fan</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Curtains/Drapes</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Oven/Range</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Chandelier(s)</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Freezer</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Refrigerator</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Convection Oven</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Refrigerator</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Light Fixtures</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Screens</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Air Conditioning</a></li>
								<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Hotwater</a></li>
							</ul>
						</div>
						<div class="property-location">
							<h3>Property Location</h3>
							<div id="property-location-map">
                            Map will be here (Optional)
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-sidebar">
				<div class="sidebar-widget author-profile">
					<h4 class="widget-title">Listed by</h4>
					<div class="image-box">
						<img src="img/property/49_author-avatar.png" alt="agent">
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
						<h4>miller walk</h4>
						<p class="person-number">
							<i class="fa fa-phone"></i> 900 123 456 789
						</p>
						<p class="person-email">
							<i class="fa fa-envelope"></i> robbhatman@sweethome.com
						</p>
						<p class="person-fax">
							<i class="fa fa-print"></i> 900 123 456 789
						</p>
						<a href="#" class='gray-btn'>view full profile</a>
					</div>
				</div>
				<div class="sidebar-widget similar-listings-widget">
					<h4 class="widget-title">similar listings</h4>
					<ul class="similar-listings">
						<li class="tab-content-item">
						<div class="pull-left thumb">
							<img src="img/blog/25_blog-thumb_1.png" alt="thumbnail">
						</div>
						<h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - N7,000</a></h5>
						</li>
						<li class="tab-content-item">
						<div class="pull-left thumb">
							<img src="img/blog/26_blog-thumb_2.png" alt="thumbnail">
						</div>
						<h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - N7,000</a></h5>
						</li>
						<li class="tab-content-item">
						<div class="pull-left thumb">
							<img src="img/blog/27_blog-thumb_3.png" alt="thumbnail">
						</div>
						<h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - N7,000</a></h5>
						</li>
					</ul>
				</div>
				<div class="sidebar-widget text-widget">
					<h4 class="widget-title">Text Widget</h4>
					<p class='first-paragraph' style="color:black;">
                            Adverts for Online Shoping
                            and Savings goes here!
                    </p>
					
				</div>
			</div>
		</div>
	</div>
</div>

























@endsection

