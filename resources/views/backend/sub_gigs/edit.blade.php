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
            <h5 class="card-title">Edit Sub Gig Category</h5>

             	@include('layouts.messages')
		<form method="POST" action={{route('sub_gigs.update', $GigSubCategory->id)}} enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="_method" value="put">

            <div class="form-group">
                            <label > Name Of Gig Category <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="sub_gig_category_name" value="{{$GigSubCategory->sub_category_name}}" />
                             
                        </div>

                        

                        
            <br/>
            <button class="btn btn-success float-right btn-sm" type="submit"><i class='fa fa-save'></i> Save</button>
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
