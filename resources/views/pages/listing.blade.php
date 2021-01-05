
<?php $listing ="";  ?>

@extends('layouts.app')

@section('content')










	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>property listing</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">property listing</a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
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
							<a href="#" class="btn btn-danger">N{{ $property->property_price }}</a>
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


		   {{$properties->links()}}


		<div class="pagination-wrapper">
			<ul class="pagination">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>
	</div>
</div>











@endsection


