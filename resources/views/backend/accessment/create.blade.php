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
            <h5 class="card-title" style="font-size:30px; font-weight:bold;">Create  New Agent</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('accessment.store')}} enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                          <label>Agent's Image<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                        </div>

            <div class="form-group">
                            <label > Full Name <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="topic" />
                             
                        </div>


                        <div class="form-group">
                            <label > Phone Number <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="keyword" />

                             </div>
                             <div class="form-group">
                            <label > Email <span style="color:red;">*</span></label>
                            <input type="email"  
                            class="form-control" 
                            required
                             name="target_country" />

                             </div>
                             <div class="form-group">
                            <label > Agent Type <span style="color:red;">*</span> </label>
                           


                             <select class="form-control" required name="sub_heading" >
                              <option value=''>Select Agent Type</option>
                              <option value='Sales Agent'>Sales Agent </option>
                              <option value='Rental Agent'>Rental Agent </option>

                             </select>
                             
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
