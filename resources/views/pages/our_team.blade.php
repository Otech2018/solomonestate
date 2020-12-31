
<?php $our_team ="";  ?>

@extends('layouts.app')

@section('content')












	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Our Agents</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">our agents</a>
			</div>
		</div>
	</div>
</div>




@include('layouts.search')





<!-- content-Section -->
<div class="content-section">
	<div class="container">
	<div class="row">
	
	
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
				<a href="{{ route('book_agent',$Accessment->id) }}" class='gray-btn'>Book Agent</a>
			</div>
		</div>

		@endforeach

		
	
	</div>
	</div>
</div>
 

















@endsection