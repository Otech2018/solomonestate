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
            <h2 align='center' class="card-title">Let's Build for you Request Details</h2><hr/>

         @include('layouts.messages')    
		         
         <div class="row">                 
            

             <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Name :</b></td><td>  <i>{{$agrics->name}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone 1:</b></td><td>  <i>{{$agrics->phone1}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone 2 :</b></td><td>  <i>{{$agrics->phone2}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <i>{{$agrics->email}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i>  Address  :</b></td><td>  <i>{{$agrics->address}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i>  Country  :</b></td><td>  <i>{{$agrics->country_det->name}}</i></td></tr>


            <tr><td><b> <i class="fa fa-money"></i> Budget Amt  :</b></td><td>  <i>{{$agrics->budget_amount}}</i></td></tr>
            <tr><td><b> <i class="fa fa-map-marker"></i> Site Location  :</b></td><td>  <i>{{$agrics->location_address}}</i></td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Description  :</b></td><td>  <i>{{$agrics->description}}</i></td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Status:</b></td><td>  

               @if($agrics->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($agrics->status==2) <span class="badge badge-danger">Pending</span>   
                                  @endif
            </td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Reg Date  :</b></td><td>  <i>{{$agrics->created_at}}</i></td></tr>

            </table>
            <a href="{{route('buildyou.index')}}"  class="btn btn-sm btn-primary pull-left"><i class="fa fa-arrow-left"></i>Go Back </a>

           
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
