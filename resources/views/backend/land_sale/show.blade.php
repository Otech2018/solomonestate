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
		         
         <div class="row" style="padding:20px;">                 
         <div>   
            <br/><br/>
          <center>
            <img src="{{ asset('storage/sale_land_images/'.$LandSales->passport)}}"  width="250px" height="250px"/>
          </center>
       
<br/><br/>
        </div>
             <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-user"></i> Fullname :</b></td><td>  <i>{{$LandSales->fname}} {{$LandSales->mname}} {{$LandSales->lname}}</i></td></tr>
            <tr><td><b> <i class="fa fa-phone"></i> Phone:</b></td><td>  <i>{{$LandSales->phone1}} {{$LandSales->phone2}}</i></td></tr>
            <tr><td><b> <i class="fa fa-envelope"></i> Email  :</b></td><td>  <i>{{$LandSales->email}}</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> Dob  :</b></td><td>  <i>{{$LandSales->dob}}   </i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> Gender  :</b></td><td>  <i>{{$LandSales->gender}}</i></td></tr>

            <tr><td><b> <i class="fa fa-map-marker"></i> Home Address   :</b></td><td>  
              <i><b style="color:green;">Kindred: </b> {{$LandSales->kindred}} <br/></i>
              <i><b style="color:green;">Village: </b> {{$LandSales->village}} <br/></i>
              <i><b style="color:green;">Town: </b>{{$LandSales->town}} <br/></i>
              <i><b style="color:green;">LGA: </b>@if( $LandSales->country ==162 ) {{$LandSales->lga_det->name}} @else {{$LandSales->lga1}}   @endif  <br/></i>
              <i><b style="color:green;">STATE:</b> @if( $LandSales->country ==162 ) {{$LandSales->state_det->name}} @else {{$LandSales->state1}}   @endif  <br/></i>
              <i><b style="color:green;">COUNTRY: </b>{{$LandSales->country_det->name }} <br/></i>
            </td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Office Address:</b></td><td>  <i>{{$LandSales->office_address}}</i></td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Status:</b></td><td>  

               @if($LandSales->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($LandSales->status==2) <span class="badge badge-danger">Pending</span>   
                                  @endif
            </td></tr>
            <tr><td><b> <i class="fa fa-info-circle"></i> Reg Date  :</b></td><td>  <i>{{$LandSales->created_at}}</i></td></tr>

            </table>

<br/><br/>


<h1 align="center" style="font-size: 22px; font-weight:bold;"> <br/><br/> ID CARD</h1><hr/>

                <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-cogs"></i> ID CARD:</b></td><td>  <i>@if( $LandSales->id_card == 30) International Passport @elseif( $LandSales->id_card == 20) Driver's License @else {{$LandSales->id_card}} @endif</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> ID NUMBER  :</b></td><td>  <i>{{$LandSales->id_card_no}}</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> Date Issued  :</b></td><td>  <i>{{$LandSales->id_card_issued_date}}   </i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> Expiry Date  :</b></td><td>  <i>{{$LandSales->id_card_exp_date}}</i></td></tr>

          
           
            </table>


            <h1 align="center" style="font-size: 22px; font-weight:bold;"><br/><br/> LAND DETAILS</h1><hr/>

                <table class="table table-sm table-bordered table-striped text-primary"> 
            <tr><td><b> <i class="fa fa-cogs"></i> LAND MODE  :</b></td><td>  <i>{{$LandSales->property_mode}}</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> ACQUIRED BY: </b></td><td>  <i>@if( $LandSales->land_acquired_by == '12') {{$LandSales->land_acquired_by_2}}   @else {{$LandSales->land_acquired_by}} @endif</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> @if( $LandSales->property_mode == 'RENT') RENTING PRICE  @else SELLING PRICE @endif </b></td><td>  <i>@if( $LandSales->property_mode == 'RENT') {{$LandSales->rent_price}}   @else {{$LandSales->sell_price}} @endif</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> LAND LOCATION  :</b></td><td>  <i>{{$LandSales->land_location}}</i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> NUMBER OF PLOTS  :</b></td><td>  <i>{{$LandSales->id_card_issued_date}}   </i></td></tr>
            <tr><td><b> <i class="fa fa-cogs"></i> Expiry Date  :</b></td><td>  <i>{{$LandSales->id_card_exp_date}}</i></td></tr>

          
           
            </table>





           
        </div>
<br/><br/>
<h1 align="center" style="font-size: 22px; font-weight:bold;">Land Images</h1><hr/>
          <div class="row justify-content-center">
              <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->cover_image)}}"  width="100%" />
         <h2>Cover Image </h2><br/><br/>
       </div>
       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image1)}}"  width="100%" />
         <h2>Image 1</h2><br/><br/>
       </div>

       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image2)}}"  width="100%" />
         <h2>Image 2</h2><br/><br/>
       </div>


       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image3)}}"  width="100%" />
         <h2>Image 3</h2><br/><br/>
       </div>


       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image4)}}"  width="100%" />
         <h2>Image 4</h2><br/><br/>
       </div>


       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image5)}}"  width="100%" />
         <h2>Image 5</h2><br/><br/>
       </div>


       <div class="col-md-4">
         <img src="{{ asset('storage/sale_land_images/'.$LandSales->image6)}}"  width="100%" />
         <h2>Image 6</h2><br/><br/>
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
