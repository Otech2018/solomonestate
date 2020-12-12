<?php $User_grp_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-5">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Change Password</h5>

         @include('layouts.messages')    
		<form method="POST" action="{{route('change_password',auth()->user()->id)}}" enctype="multipart/form-data">
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
