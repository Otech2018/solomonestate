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
            <h1 align='center' class="card-title">Request Details</h1><hr/>

         @include('layouts.messages')    
		         
         <div class="row">                 
            

             <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Name :</b></td><td>  <i>{{$agrics->name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone :</b></td><td>  <i>{{$agrics->phone}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <i>{{$agrics->email}}</i></td></tr>
            <tr><td><b> <i class="fa fa-money"></i> Budget Amt  :</b></td><td>  <i>{{$agrics->budget}}</i></td></tr>
            <tr><td><b> <i class="fa fa-map-marker"></i> Site Location  :</b></td><td>  <i>{{$agrics->site_location}}</i></td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Why do you need a Consultant?  :</b></td><td>  <i>{{$agrics->why_u_need_us}}</i></td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Status:</b></td><td>  

               @if($agrics->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($agrics->status==2) <span class="badge badge-danger">Pending</span>   
                                  @endif
            </td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Reg Date  :</b></td><td>  <i>{{$agrics->created_at}}</i></td></tr>

            </table>

           
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
