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
            <h1 align='center' class="card-title"> Create Admin</h1><hr/>

         @include('layouts.messages')    
		        <form action="{{route('admin_admin.store')}}"  method="POST" enctype="multipart/form-data">    
              @csrf 
         <div class="row">                 
             <div class="col-lg-4"> 
             <div class="form-group">
                          <label>Upload Profile Picture </label>
                          <input  name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now"  class="dropify" data-max-file-size="1M"/>
                        </div>
             <br/>
             </div> 

             <div class="col-lg-7">
             
                               
             <table class="table table-sm table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Username :</b></td><td>  <input type="text"  class="form-control form-control-sm"  required  name="username" /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> First Name :</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="first_name" /></td></tr>
            <tr><td><b><i class="fa fa-user"></i>  Middle Name :</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="middle_name"   /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Last Name :</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="last_name"   /></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone :</b></td><td>  <input type="text"  class="form-control form-control-sm"  name="phone"  required /></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Gender :</b></td><td>  
            
            <select  class="form-control form-control-sm" required  name="gender"  >
            <option  value="" selected hidden >Select Gender</option>
            <option  value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
            </td></tr>



             <tr><td><b> <i class="fa fa-user"></i> User Group :</b></td><td>  
            
            <select  class="form-control form-control-sm" required  name="user_type"  >
            <option  value="" selected hidden >Select User Group </option>
            @foreach($User_groups as $User_group)
              <option value="{{$User_group->id}}">{{$User_group->name}}</option>
            
              @endforeach
            </select>
            </td></tr>


            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <input type="email"  name="email" class="form-control form-control-sm"  required /></td></tr>

            </table>
            
            </div>

           
        </div>
          <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-save"></i> Save </button>
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
