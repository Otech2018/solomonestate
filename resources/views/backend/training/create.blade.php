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
            <h5 class="card-title">Create A New Course</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('train.store')}} enctype="multipart/form-data">
                        @csrf


            <div class="form-group">
                            <label > Name Of the Course  <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="name" />
                             
                        </div>

                         <div class="form-group">
                          <label>Cover Image<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                        </div>

                        

                        <div class="form-group">
                            <label > Description  </label>
                            <textarea class="form-control"  style='height:130px' name="desc" ></textarea >
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
