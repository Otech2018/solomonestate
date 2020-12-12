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
            <h5 class="card-title">Create A New Assessment</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('accessment.store')}} enctype="multipart/form-data">
                        @csrf


            <div class="form-group">
                            <label > Topic <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="topic" />
                             
                        </div>


                        <div class="form-group">
                            <label > Keyword <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="keyword" />


                             <div class="form-group">
                            <label > Target Country <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="target_country" />


                             <div class="form-group">
                            <label > Sub-Heading (Optional)</label>
                            <input type="text"  
                            class="form-control" 
                            
                             name="sub_heading" />
                             
                        </div>
                             
                        </div>
                             
                        </div>


                        

            <br/>
            <button class="btn btn-success float-right" type="submit">Add</button>
          </div>
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
