<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's Bulid For You</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Let's Bulid For You</a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b>Let's Bulid For You  </b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/a2.png" width="100%" height="350px"  /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
					It just doesn’t require your presence. With little or no supervision, we have 
                    built hundreds of small, average and mighty structures. Our team of civil and
                     building engineers has always done their jobs like they’re born to do it. Should
                      you see any exceptional structure with a spectacular design anywhere in Nigeria,
                       check it out – it was built by Solomon’s Ideas Ltd. <br/><br/>
We have a team of engineers that will start that your dream house right from the architectural design,
 from start to finish. We’ve always furnished most of the structures we built – giving every corner of
  the building an ecstatic beauty to behold. <br/><br/>
To prove the trust and reliance Nigerians at home and in diaspora have on our company, we have built
 hundreds of edifices for our citizens in diaspora who never visited for one day to supervise the 
 building, but had unquantifiable satisfaction once we handed over the keys to them. <br/>
<a href="{{route('form.edit',2)}}" class='btn btn-success btn-lg'>Let's Build For You</a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
