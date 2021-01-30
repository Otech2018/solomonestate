<?php $dd ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Save To Build/Buy Land or Some Stuff</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Save To Build/Buy Land or Some Stuff </a>
			</div>
		</div>
	</div>
</div>


@include('layouts.search')



<!-- content-Section -->
<div class="content-section">
	<div class="container">
			<h1 align="center" style="font-size:45px;"><b> Save To Build/Buy Land or Some Stuff</b></h1><br/>
			
		<div class="col-md-6 contact-info">
			<div class="">
				<img src="img/save_build.jpg" width="100%" height="350px"  /><br/><br/>
			
				<div class="clearfix">
				</div>
			</div>
		</div>
		<div class="col-md-6 contact-form-wrapper">
			<div class="">
			<p class='first-paragraph' style=" color:black; font-weight:bold; font-size:14px;">
            Our vision at Solomon's Ideas Ltd is to make you a Landlord or Landlady; and if you're
             one already, you can easily increase the number of landed properties by subscribing 
             to our Save To Buy Land service. 
             <br/><br/>
             You can save as low as N1,000 and above daily,
              weekly or monthly in your E-wallet and grab any land/property published in our
               site which your savings can afford. By so doing, and with great dedication to your 
               flexible deposits, you'll own as many lands as you wish to. Yes, don't wait for 
               bulk money to come, steady drops of palm wine fills the keg. There is no better 
               time to start than now! Register and make your first deposit now. 
                      
 <br/><br/>
<a href="{{ route('savingform.index') }}" class='btn btn-success btn-lg'>Get started </a>
				</p>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>

































@endsection
