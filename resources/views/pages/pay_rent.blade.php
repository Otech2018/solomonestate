<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's Pay Your Rent</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Let's Pay Your Rent </a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b> Let's Pay Your Rent </b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/pay_rent.jpg" width="100%" height="350px"  /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
            You usually get stranded once your rent expires; renewal is always an issue because
             the money involved is bulky; you keep receiving threat of ejection from your 
             Landlord's attorney or manager. Knocks on your door feels like is your Landlord
              knocking. <br/><i>WORRY NO MORE!!!</i><br/><br/>
               Paying your rent is now easier with the intervention
               of Solomon's Ideas Ltd. You pay so effortlessly. The interesting part is that
                Solomon's Ideas helps you pay one month out of every 12 months of your rent. 
                This offer is not found any other place in the world. Register with us now and 
                get started. 
                      

 <br/><br/>
<a href="{{ route('savingform.create') }}" class='btn btn-success btn-lg'>Let's Get started </a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
