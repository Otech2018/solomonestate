<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Edit Profile</h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Edit Profile</a>
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
			<div class="inner-wrapper" style="font-size:15px !important;">
				<h1><b><i class="fa fa-edit"></i> Edit Profile</b></h1>
                
                <hr/>

                  @include('layouts.messages1')    
		         
         <div class="row">                 
             
		        <form action="{{route('myprofile1.update', 1)}}"  method="POST" enctype="multipart/form-data">    
              @csrf <input type="hidden" name="_method" value="put">
 
         <div class="row">                 
             <div class="col-lg-4"> 
             <div class="form-group">
                          <label>Profile Picture Click to edit</label>
                          <input  data-default-file="{{ ( auth()->user()->pic != null) ? _('../../../storage/profile_img/'.auth()->user()->pic) : '' }}" name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now"  class="dropify" data-max-file-size="1M"/>
                        </div>
             <br/>
             </div> 

             <div class="col-lg-7">
             
   
             <table class="table table-sm table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Username :</b></td><td>  <input type="text"  class="form-control form-control-sm"   value="{{auth()->user()->username}}" readonly /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> First Name: <span style="color:red;">*</span></b></td><td>  <input type="text"  class="form-control form-control-sm" required name="first_name"  value="{{auth()->user()->first_name}}" /></td></tr>
            <tr><td><b><i class="fa fa-user"></i>  Middle Name: <span style="color:red;">*</span></b></td><td>  <input type="text"  class="form-control form-control-sm" required name="middle_name"  value="{{auth()->user()->middle_name}}" /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Last Name:  <span style="color:red;">*</span></b></td><td>  <input type="text"  class="form-control form-control-sm" required name="last_name"  value="{{auth()->user()->last_name}}" /></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone: <span style="color:red;">*</span></b></td><td>  <input type="text"  class="form-control form-control-sm" required name="phone"  value="{{auth()->user()->phone}}" /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Gender:<span style="color:red;">*</span></b></td><td>  
            
            <select  class="form-control form-control-sm" required name="gender"  value="{{auth()->user()->gender}}">
            <option @if(auth()->user()->gender =='Male') selected @endif value="Male">Male</option>
            <option @if(auth()->user()->gender =='Female') selected @endif value="Female">Female</option>
            </select>
            </td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <input type="text"  class="form-control form-control-sm"   value="{{auth()->user()->email}}" readonly /></td></tr>
        </table>

        <hr/>
        <span style="color:red;">Would you like to benefit from our <b>referral</b> Packages?, Enter your Account Details Below</span>
        
            @if(auth()->user()->acc_number ==null || auth()->user()->acc_number =="" ) 
             <table class="table table-sm table-striped text-primary"> 
             @else
             <table class="table table-sm table-striped text-primary" style="display:none" >
           @endif  
            <tr><td><b> <i class="fa fa-user"></i> Account Name  (Optional):</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="acc_name"  value="{{auth()->user()->acc_name}}" /></td></tr>
            <tr><td><b><i class="fa fa-lock"></i>  Account Number  (Optional):</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="acc_number"  value="{{auth()->user()->acc_number}}" /></td></tr>
            <tr><td><b> <i class="fa fa-bank"></i> Bank Name  (Optional):</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="acc_bank"  value="{{auth()->user()->acc_bank}}" /></td></tr>
            </table>
            
            </div>

           
        </div>
        <a class="btn btn-sm btn-success pull-left" href="{{route('myprofile1.index')}}" ><i class="fa fa-user"></i>My Profile</a>
            <button type="submit" class="btn btn-sm btn-primary pull-right" ><i class="fa fa-edit"></i>Update Profile</button>
        </form>

            
              </div>
				<div class="clearfix">
				</div>
			</div>
		</div>



	</div>
</div>





@endsection



