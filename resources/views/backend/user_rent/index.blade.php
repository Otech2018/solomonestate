<?php use App\Http\Controllers\Backend\Customs\CheckAccess; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     
     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-12">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title"> {{ $title }} House Rent Savings  </h5>

    @include('layouts.messages')

                <h1><b>My House Rent Savings</b></h1>
                <i style="color:red; font-size:14px;"><b>(Click on each of the box for Details)</b></i>
                
                <hr/>
               
@if( count($myrents)  >=1 )

<div class="accordion" id="accordionExample" style="font-size:15px;">
<?php $no =1; ?>
@foreach( $myrents as $myrent )

 <?php 
 $real_rent_interval_all   =   ($myrent->rent_interval * 12);
 $real_rent_interval   =   ($myrent->rent_interval * 12)  -   $myrent->rent_interval;
 $num_of_transactions = count($myrent->payments);
   ?>
 
  <div class="card " style="margin-bottom:27px;">
    <div class="card-header " id="headingTwo" style="border:2px solid #ccc; padding:7px; ">
      <h3 class="mb-0">
           <span style="color:green; font-size:22px;"><b>{{ $no }}</b>   Fullname :
        <b> {{ $myrent->fname }}  {{ $myrent->mname }} {{ $myrent->lname }} </b></span><br/>
      <span">    <b>My House Rent savings for Landlord ( {{ $myrent->landlord_name }}  ) </b> 
         @if( $myrent->status == 1 ) <span style="color:red;"> (Paid)</span> @elseif( $num_of_transactions >= $real_rent_interval  )  <span style="color:red;"> ( Rent Savings Completed ) </span>  @endif </span> <br/>
<table class="table table-sm table-stripped table-bordered">
  <tr>
    <td> House Rent Amount :</td>
    <td>
        <b>&#8358; {{ number_format($myrent->rent_amt) }} </b>
       
      
    </td>
  </tr>


    <tr>
    <td> Duration :</td>
    <td>
        <b>{{ $real_rent_interval }}  Months </b>
      
    </td>
  </tr>


     <tr>
    <td> Interval Amount:</td>
    <td style="color:green;">
    <b>  &#8358; {{ number_format($myrent->rent_interval_amt) }}  For {{ $real_rent_interval }}  Months  </b>
    </td>
  </tr>

  <tr>
    <td> Registration Date :</td>
    <td>
     <b> <?php echo  date('D jS F Y',strtotime($myrent->created_at) ); ?> </b>
    </td>
  </tr>


     <tr>
    <td> Start Date :</td>
    <td style="color:blue;" >
     <b> <?php echo  date('D jS F Y',strtotime($myrent->start_date) ); ?> </b>
    </td>
  </tr>


  <tr>
    <td> Your Rent Payments will end By:</td>
    <td>
     <b> <?php echo date('D jS F Y',strtotime($myrent->start_date. " + $real_rent_interval Months") ); ?> </b><br/>
    </td>
  </tr>


  <tr>
    <td> Your Landlord Will Be paid After :</td>
    <td>
     <b> <?php echo date('D jS F Y',strtotime($myrent->start_date. " + $real_rent_interval_all Months") ); ?> </b><br/>
    </td>
  </tr>



  <tr>
    <td> Deadline For Next Rent Payment:</td>
    <td style="color:red;">
       <b> 

     <?php
     
 $pay_amt = $myrent->rent_interval_amt ;
{{-- $pay_amt = 1.15  *  $myrent->rent_interval_amt;    --}}
     ?>   
  @if( $myrent->status == 1 ) <span style="color:red;"> (Paid)</span> 
  @elseif( $num_of_transactions >= $real_rent_interval  ) 
   <span style="color:red;"> ( Rent Payment Completed ) </span>

   <br/>
  <a href="#!" class="btn-success btn-sm" title="Set as Paid"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  House Rent as Paid?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$myrent->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>

@else
  <?php echo date('D jS F Y',strtotime($myrent->start_date. " + $num_of_transactions Months ") );  
 ?>
 
 <br/>
  <a href="#!" class="btn-success btn-sm" title="Set as Paid"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  House Rent as Paid?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$myrent->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
   
    @endif  


    <form id="act{{$myrent->id}}" action="{{ route('rent.update',$myrent->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

</b>
     
     
      
   



    </td>
  </tr>

        
</table>
      </h3>
       <button class="btn btn-sm btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        More  Details
        </button>


   
      
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample"
     style="border:2px solid #c8e6c9; padding:14px;">
      <div class="card-body">
     
       
<table class="table table-sm table-stripped table-bordered">
  <tr>
    <td> Duration Paid:</td>
    <td>
        <b>  {{ $num_of_transactions }} Month(s) </b>
      
    </td>
  </tr>




     <tr>
    <td>  Total Amount Paid::</td>
    <td>
    <b>  &#8358; {{ number_format($myrent->rent_interval_amt) }}  For {{ $num_of_transactions}}  Month(s)
    <br/>
    <span style="color:red; font-size:18px;">  = &#8358; <?php echo number_format($num_of_transactions  *  $myrent->rent_interval_amt) ?></span>
    </b>

    </td>
  </tr>





        
</table>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Payments Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:17px;" ><b> Payment Details </b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<div class="table-responsive">
        <table class="table table-sm table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Transaction id</th>
    </tr>
  </thead>
  <tbody>
@foreach($myrent->payments  as  $myrent->payment)
    <tr>
      <th scope="row">1</th>
      <td>&#8358;{{ number_format($myrent->payment->amount) }}</td>
      <td>{{ $myrent->payment->created_at }}</td>
      <td>{{ $myrent->payment->transaction_id }}</td>
    </tr>

@endforeach

  </tbody>
</table>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




       <br/><br/>
       <h2>Personal Details</h2>
       <img src="{{ _('../storage/rent_images/'.$myrent->passport )}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" /><br/>

      
<table class="table table-sm table-stripped table-bordered ">
  <tr>
    <td> Fullname :</td>
    <td>
        <b> {{ $myrent->fname }}  {{ $myrent->mname }} {{ $myrent->lname }} </b>
      
    </td>
  </tr>


<tr>
    <td>  Phone:</td>
    <td>
    <b>  {{ $myrent->phone1 }} {{ $myrent->phone2 }}  </b>
    </td>
  </tr>

     <tr>
    <td>  Email:</td>
    <td>
    <b>  {{ $myrent->email }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Date Of Birth:</td>
    <td>
    <b>  {{ $myrent->dob }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Gender:</td>
    <td>
    <b>  {{ $myrent->gender }}  </b>
    </td>
  </tr>


    <tr>
    <td>  Home Address:</td>
    <td>
    <b>  {{ $myrent->kindred }} {{ $myrent->village }} {{ $myrent->town }} in 
      @if( $myrent->country ==162 ) {{$myrent->lga_det->name}} @else {{$myrent->lga1}}   @endif LGA ,
     @if( $myrent->country ==162 ) {{$myrent->state_det->name}} @else {{$myrent->state1}} State,   @endif 

      {{$myrent->country_det->name }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Office Address:</td>
    <td>
    <b>  {{ $myrent->office_address }}  </b>
    </td>
  </tr>



   <tr>
    <td>  Resident Address:</td>
    <td>
    <b>  {{ $myrent->resident_address }}  </b>
    </td>
  </tr>



    <tr>
    <td>  Closest Landmark:</td>
    <td>
    <b>  {{ $myrent->landmark }}  </b>
    </td>
  </tr>


</table>









<br/><br/>

       <h2>Landlord Details</h2>

     <table class="table table-sm table-stripped table-bordered ">
  <tr>
    <td> Fullname :</td>
    <td>
        <b> {{ $myrent->landlord_name }}  </b>
      
    </td>
  </tr>


     <tr>
    <td>  Phone:</td>
    <td>
    <b>  {{ $myrent->landlord_phone }}  </b>
    </td>
  </tr>


     <tr>
    <td>  Bank Account Number:</td>
    <td>
    <b>  {{ $myrent->landlord_acc_num }}  </b>
    </td>
  </tr>


    <tr>
    <td>  Bank Name:</td>
    <td>
    <b>  {{ $myrent->landlord_bank }}  </b>
    </td>
  </tr>


    <tr>
    <td>  Bank Account Name:</td>
    <td>
    <b>  {{ $myrent->landlord_acc_name }}  </b>
    </td>
  </tr>


  
</table>

      </div>
    </div>
  </div>
<?php $no++; ?>

@endforeach


</div>

@else

<h1>No rent Savings Found!</h1>
@endif





                    {{$myrents->links()}}


</div>



           
        </div>
        </div>
        </div>
        </div>











@endsection





