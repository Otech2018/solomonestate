<?php $login ="";  ?>

@extends('layouts.app')

@section('content')



	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2><i class="fa fa-home"></i>Dashboard</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Dashboard</a>
			</div>
		</div>
	</div>
</div>




		<div class="col-md-1 contact-info">
			<div >
				<div class="clearfix">
				</div>
			</div>
		</div>
		
            <div class="col-md-10 contact-form-wrapper" style="padding:40px;">
			<div class="inner-wrapper">

				@guest @else	@if( auth()->user()->phone ==null )
				<a  class="blink_me btn btn-sm btn-danger" href="{{route('myprofile1.edit', 1)}}" >Please Set Your Profile </a>
				@elseif(auth()->user()->acc_number ==null || auth()->user()->acc_number =="" )
				<a  class="blink_me btn btn-sm btn-danger" href="{{route('myprofile1.edit', 1)}}" >Input you Account Details For payment </a>
				 @else 
				 @endif @endguest


				<h1 style="font-size:40px;"><b><i class="fa fa-home"></i> DASHBOARD</b></h1><hr/>
				

               <h3> Hello, <i class='fa fa-user'></i> {{auth()->user()->username}} You're Logged In!.  </h3>

               <h3>You Agent ID is <span style="color:green; font-weight: bold; font-size: 20px;">{{ auth()->user()->id * 9194 }}</span>  </h3>
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>




@endsection
