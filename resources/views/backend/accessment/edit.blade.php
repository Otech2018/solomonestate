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
             <h5 class="card-title" style="font-size:30px; font-weight:bold;">Edit   Agent</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('accessment.update', $Accessment->id)}} enctype="multipart/form-data">
                        @csrf
<input type="hidden" name="_method" value="put">


<div class="form-group">
                          <label>Agent's Image<span class="text-danger">*</label>
                           <input data-default-file="{{ ($Accessment->slug != null) ? "/storage/agent/$Accessment->slug" : '' }}" name="cover_image"  type="file" id="input-file-now" class="dropify" data-max-file-size="1M"/>
                        </div>


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
                               </div>

                             <div class="form-group">
                            <label > Target Country <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="target_country" 
                              value="{{$Accessment->target_country}}"/>
                                </div>

                             <div class="form-group">
                            <label > Sub-Heading (Optional)</label>
                            


                        <select class="form-control" required name="sub_heading" >
                              <option value='{{$Accessment->sub_heading}}'>{{$Accessment->sub_heading}}</option>
                              <option value='Sales Agent'>Sales Agent </option>
                              <option value='Rental Agent'>Rental Agent </option>

                             </select>
                             
                             
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
