<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Change Password </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Change Password</a>
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
				<h1><b><i class="fa fa-edit"></i> Change Password</b></h1>
                
                <hr/>

                  @include('layouts.messages1')    
		         
         <div class="row">                 
             
		     <form method="POST" action="{{route('change_password2',auth()->user()->id)}}" enctype="multipart/form-data">
                        @csrf


            <div class="form-group">
                <label > Old Password <span style="color:red;">*</span></label>
                <input type="password"  
                class="form-control" 
                required
                  name="old_password"
                  />
                  
            </div>


            <div class="form-group">
                <label > New Password <span style="color:red;">*</span></label>
                <input type="password"  
                class="form-control" 
                required
                  name="new_password"
                  />
                  
            </div>


            <div class="form-group">
                <label > Confirm Password <span style="color:red;">*</span></label>
                <input type="password"  
                class="form-control" 
                required
                  name="confirm_password"
                  />
                  
            </div>

            <button class="btn btn-success float-right" type="submit">Save</button>
         

            </form>     

            
              </div>
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>





@endsection

