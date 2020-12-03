<?php $menu_add ='tffgt';; ?>


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
            <h5 class="card-title">Add  Menu</h5>

             
		<form method="POST" action={{route('menu.store')}} enctype="multipart/form-data">
                        @csrf


            <div class="form-group">
                            <label > Name Of Menu  <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="name" />
                             
                        </div>

                        


                        <div class="form-group">
                            <label for="company-name">  Menu's Icon  <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="icon" />
                        </div>

                        <div class="form-group">
                            <label > Description  </label>
                            <textarea class="form-control"  style='height:130px' name="description" ></textarea >
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
