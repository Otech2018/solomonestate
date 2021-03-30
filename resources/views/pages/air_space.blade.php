<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2> Air Space Purchase </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Air Space Purchase </a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b> Air Space Purchase </b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="airspace/airspace.jpg" width="100%" height="350px"  /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
            
				AIR SPACE: "You have a property in a super location that so many buyers would love to
				 buy, but you don't want to sell it, because, you don't want to lose the land/property 
				 at all.
				 <br><br> You also do not have the money to build 2, 3, 4 storey building or skyscraper 
				 thereat and or even develop the land into a modern commercial or residential building; 
				 you at the same time need money to improve yourself, family or your business. <br><br>
				  Then, 
				 all you need to do is sell your AIR SPACE to someone who has the funds to develop the 
				 property and co-own both the land and the new building however built or styled by the 
				 new developer. It's simple! We also call it SELL THE ROOF. 
				 <br><br>
				 Contact SOLOMON'S IDEAS LTD 
				 now for details on how to sell your land/property and still co-own it. Call us now on 
				 07087197054 or email us now at solomonsideasltd@gmail.com . With this SELL THE ROOF 
				 services and packages, you simply have nothing to lose, but must surely smile to the 
				 bank.
                      
 <br/><br/>
<a href="{{ route('form.index') }}" class='btn btn-success btn-lg'>Get started </a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
