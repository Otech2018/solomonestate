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
				<h1 style="font-size:40px;"><b><i class="fa fa-home"></i> DASHBOARD</b></h1><hr/>
				

                Hello, <i class='fa fa-user'></i> {{auth()->user()->name}} You're Logged In!.
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>




@endsection
