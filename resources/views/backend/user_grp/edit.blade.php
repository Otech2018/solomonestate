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
            <h5 class="card-title">Edit  User Group</h5>

             
		<form method="POST" action={{route('user_group.update',$User_group->id)}} enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="_method" value="put">

            <div class="form-group">
                            <label > Name Of User Group  <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="name" value="{{$User_group->name}}" />
                             
                        </div>

                        

                        <div class="form-group">
                            <label > Description  </label>
                            <textarea class="form-control"  style='height:130px' name="description" >{{$User_group->desc}}</textarea >
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
