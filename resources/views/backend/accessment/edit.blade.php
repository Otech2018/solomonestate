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
            <h5 class="card-title">Edit Assessment</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('accessment.update', $Accessment->id)}} enctype="multipart/form-data">
                        @csrf
<input type="hidden" name="_method" value="put">


            <div class="form-group">
                            <label > Topic <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="topic"
                             value="{{$Accessment->topic}}" />
                             
                        </div>


                        <div class="form-group">
                            <label > Keyword <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="keyword" 
                             value="{{$Accessment->keyword}}"/>


                             <div class="form-group">
                            <label > Target Country <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="target_country" 
                              value="{{$Accessment->target_country}}"/>


                             <div class="form-group">
                            <label > Sub-Heading (Optional)</label>
                            <input type="text"  
                            class="form-control" 
                            value="{{$Accessment->sub_heading}}"
                             name="sub_heading" />
                             
                        </div>
                             
                        </div>
                             
                        </div>


                        

            <br/>
            <button class="btn btn-success float-right" type="submit">Update</button>
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
