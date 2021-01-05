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
            <h5 class="card-title" style="font-size:30px; font-weight:bold;">Add Gallery Image</h5>

         @include('layouts.messages')    
    <form method="POST" action={{route('gallery.update',$Accessment->id)}} enctype="multipart/form-data">
                        @csrf
<input type="hidden" name="_method" value="put">

                      <div class="form-group">
                          <label> Image<span class="text-danger">*</label>
                           <input data-default-file="{{ ($Accessment->image != null) ? "/storage/gallery/$Accessment->image" : '' }}" name="cover_image"  type="file" id="input-file-now" class="dropify" data-max-file-size="1M"/>
                        </div>

            <div class="form-group">
                            <label > Image Name <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                            value="{{$Accessment->name}}"
                             name="name" />
                             
                        </div>


                           <div class="form-group">
                            <label > Description  <span style="color:red;">*</span></label>
                            <textarea class="form-control"  style='height:130px' name="description" required>
                            {{$Accessment->description}} </textarea >
                        </div>


                             <div class="form-group">
                            <label > Image Type <span style="color:red;">*</span> </label>
                           


                             <select class="form-control" required name="image_type" >
                              <option value=''>Select Image Type</option>
                              <option value='2' @if($Accessment->image_type==2) selected @endif >Project </option>
                              <option value='1' @if($Accessment->image_type==1) selected @endif>Gallery </option>
                              <option value='3' @if($Accessment->image_type==3) selected @endif>Both (Project & Gellery) </option>

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
