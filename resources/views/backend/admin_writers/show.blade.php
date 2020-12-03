<?php $User_grp_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-10">
      <div class="card shadow-lg">
        <div class="card-body">
            <h1 align='center' class="card-title">Buyer Profile</h1><hr/>

         @include('layouts.messages')    
		         
         <div class="row">                 
             <div class="col-lg-4"> 
             <center>
             @if($User->profile_image ==null)
             <img src="{{ asset('css/img/writersgig-logo-icon.png')}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" />
             @else
             <img src="{{ asset('storage/'.$User->profile_image)}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" />
            @endif
             </center><br/>
             </div> 

             <div class="col-lg-7">
             <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Userame :</b></td><td>  <i>{{$User->username}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> First Name :</b></td><td>  <i>{{$User->first_name}}</i></td></tr>
            <tr><td><b><i class="fa fa-user"></i>  Middle Name :</b></td><td>  <i>{{$User->middle_name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Last Name :</b></td><td>  <i>{{$User->last_name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone :</b></td><td>  <i>{{$User->phone}}</i></td></tr>
            <tr><td><b> <i class="fa fa-user"></i> Gender :</b></td><td>  <i>{{$User->gender}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <i>{{$User->email}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Date Of Birth  :</b></td><td>  <i>{{$User->date_of_birth}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Reg Date  :</b></td><td>  <i>{{$User->created_at}}</i></td></tr>

            </table>
            <a href="{{route('admin_writers.index', 1)}}"  class="btn btn-sm btn-primary pull-left"><i class="fa fa-arrow-left"></i>Go Back </a>
            </div>

           
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
