<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>My Profile </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">My Profile</a>
			</div>
		</div>
	</div>
</div>




		<div class="col-md-3 contact-info">
			<div >
				<div class="clearfix">
				</div>
			</div>
		</div>
		
            <div class="col-md-8 contact-form-wrapper" style="padding:40px;">
			<div class="inner-wrapper">
				<h1><b><i class="fa fa-user"></i> My Profile</b></h1>
                
                <hr/>

                     @include('layouts.messages1')   
		         
         <div class="row">                 
             <div class="col-lg-4"> 
             <center>
             @if(auth()->user()->pic ==null)
             <img src="{{ asset('img/logo1.png')}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" />
             @else
             <img src="{{ _('../storage/profile_img/'.auth()->user()->pic)}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" />
            @endif
             </center><br/>
             </div> 

             <div class="col-lg-7">
             <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Userame :</b></td><td>  <i>{{auth()->user()->username}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> First Name :</b></td><td>  <i>{{auth()->user()->first_name}}</i></td></tr>
            <tr><td><b><i class="fa fa-user"></i>  Middle Name :</b></td><td>  <i>{{auth()->user()->middle_name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Last Name :</b></td><td>  <i>{{auth()->user()->last_name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone :</b></td><td>  <i>{{auth()->user()->phone}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Gender :</b></td><td>  <i>{{auth()->user()->gender}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <i>{{auth()->user()->email}}</i></td></tr>

            </table>
            <a href="{{route('myprofile1.edit', 1)}}"  class="btn btn-sm btn-primary pull-right"><i class="fa fa-edit"></i>Edit Profile</a>
            </div>
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>





@endsection




