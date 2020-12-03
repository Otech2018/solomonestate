<?php $User_grp_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-11">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Image Lessons</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('lesson_img_store')}} enctype="multipart/form-data">
                        @csrf



                         <div class="form-group">
                          <input style='font-size:5px !important;' accept='.gif, .jpg,.png' name="cover_image"  type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                            <button class="btn btn-success btn-sm float-right" type="submit">Save</button>
                        </div>

                        <br/><br/>
                        <div style="height:500px; overflow:auto; margin:20px; padding:20px;" class="shadow">
                        <div class="row">
                         @foreach($all_les_imgs as $all_les_img)
                         <div class="col-md-3 shadow" style="margin:20px;">
                        <a target="_blank" href='{{ asset("storage/lesson_img/$all_les_img->img")}}' >
                         <img src='{{ asset("storage/lesson_img/$all_les_img->img")}}' width="200px" height="200px" />
                        </a>
                         <br/>{{ asset("storage/lesson_img/$all_les_img->img")}}
                        
                        </div>
                         @endforeach
                         </div>
                        </div>
                        
            <br/>
            
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
