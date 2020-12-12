<?php $User_grp_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-10">
      <div class="card shadow-lg">
        <div class="card-body">
            <h1 align='center' class="card-title">  Edit Profile</h1><hr/>

         @include('layouts.messages')    
		        <form action="{{route('myprofile.update', 1)}}"  method="POST" enctype="multipart/form-data">    
              @csrf <input type="hidden" name="_method" value="put">
 
         <div class="row">                 
             <div class="col-lg-4"> 
             <div class="form-group">
                          <label>Profile Picture Click to edit</label>
                          <input  data-default-file="{{ ( auth()->user()->pic != null) ? asset('storage/profile_img/'.auth()->user()->pic) : '' }}" name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now"  class="dropify" data-max-file-size="1M"/>
                        </div>
             <br/>
             </div> 

             <div class="col-lg-7">
             
   
             <table class="table table-sm table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Username :</b></td><td>  <input type="text"  class="form-control form-control-sm"   value="{{auth()->user()->username}}" readonly /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> First Name :</b></td><td>  <input type="text"  class="form-control form-control-sm" required name="first_name"  value="{{auth()->user()->first_name}}" /></td></tr>
            <tr><td><b><i class="fa fa-user"></i>  Middle Name :</b></td><td>  <input type="text"  class="form-control form-control-sm" required name="middle_name"  value="{{auth()->user()->middle_name}}" /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Last Name :</b></td><td>  <input type="text"  class="form-control form-control-sm" required name="last_name"  value="{{auth()->user()->last_name}}" /></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone :</b></td><td>  <input type="text"  class="form-control form-control-sm" required name="phone"  value="{{auth()->user()->phone}}" /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Gender :</b></td><td>  
            
            <select  class="form-control form-control-sm" required name="gender"  value="{{auth()->user()->gender}}">
            <option @if(auth()->user()->gender =='Male') selected @endif value="Male">Male</option>
            <option @if(auth()->user()->gender =='Female') selected @endif value="Female">Female</option>
            </select>
            </td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <input type="text"  class="form-control form-control-sm"   value="{{auth()->user()->email}}" readonly /></td></tr>

            </table>
            
            </div>

           
        </div>
        <a class="btn btn-sm btn-success pull-left" href="{{route('myprofile.index')}}" ><i class="fa fa-user"></i>My Profile</a>
            <button type="submit" class="btn btn-sm btn-primary pull-right" ><i class="fa fa-edit"></i>Update Profile</button>
        </form>

        
        </div>
        </div>
        </div>
      
      
      
      
      </div>
    </div>
    <!-- /#page-content-wrapper -->

    

  </div>
  <!-- /#wrapper -->




  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 

@endsection
