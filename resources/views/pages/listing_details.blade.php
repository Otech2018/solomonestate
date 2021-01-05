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
							<a href="#" class="yellow-btn">N{{ $property->property_price }}</a>

							@if( $property->sale_mode == 1)
							<a href="#" class='status'>for sale </a>
							@elseif( $property->sale_mode == 2)
							<a href="#" class='status'>for Rent </a>
							@elseif( $property->sale_mode == 3)
							<a href="#" class='status'>for sale landed property </a>
							@elseif( $property->sale_mode == 4)
							<a href="#" class='status'>for sale nonlanded property</a>						

							@endif
							<ul class="slides">
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image }}"  height='400px' alt="gallery">
								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image1 }}"  height='400px' alt="gallery">

								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image2 }}"  height='400px' alt="gallery">

								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image3 }}"  height='400px' alt="gallery">

								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image4 }}"  height='400px' alt="gallery">

								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image5 }}"  height='400px' alt="gallery">

								</div>
								</li>
								<li>
								<div class="image-wrapper">
									<img src="../storage/admin_property_images/{{ $property->cover_image6 }}"  height='400px' alt="gallery">

								</div>
								</li>
								
							</ul>
						</div>
						<div id="details-carousel" class="flexslider">
							<ul class="slides">
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image1 }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image2 }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image3 }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image4 }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image5 }}"  height='140px'>

								</li>
								<li>
									<img src="../storage/admin_property_images/{{ $property->cover_image6 }}"  height='140px'>

								</li>
							</ul>
						</div>
					</div>
					<div class="property-desc">
						<h3> {{ $property->sub_category_name }} </h3>
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
						<p class="first-paragraph" style="color:black;" >
							{{ $property->property_desc }}
                        </p>


                        @if($property->property_type == 2 and $property->feature !="" ) 
						<div class="additional-features">
							<h3>Additional Features</h3>
							<ul class="features">
							<?php $features = explode("*",$property->feature); ?>

							@foreach($features as $feature)

						<li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>{{ $feature }}</a></li>
								
							@endforeach

								
							</ul>
						</div>
							@endif



						
						<div class="property-location">
							<h3>Video</h3>
							<div id="property-location-map">
                            {{ $property->youtube_video }}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-sidebar">
				


				<div class="sidebar-widget similar-listings-widget">
					<h4 class="widget-title">Featured listings</h4>
					<ul class="similar-listings">
						@foreach($properties as $property)

						<li class="tab-content-item">
						<div class="pull-left thumb">
							<img src="../storage/admin_property_images/{{ $property->cover_image }}" width='70px' height='50px' alt="thumbnail">
						</div>
						<h5><a style='color:black;' href="{{route('listing_details', $property->id)}}">{{ $property->sub_category_name }} - N{{ $property->property_price }}</a></h5>
						</li>
						
						@endforeach

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

