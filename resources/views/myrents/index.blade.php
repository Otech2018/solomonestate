<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                <h2>My House Rent Savings </h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> My House Rent Savings </a>
            </div>
        </div>
    </div>
</div>




        <div class="col-md-3 contact-info">
            <div >
                <div class="clearfix">
                </div>
            </div>
        </div>
        
            <div class="col-md-11 contact-form-wrapper" style="padding:40px;">
            <div class="inner-wrapper">

                @include('layouts.messages1')

                <h1><b>My House Rent Savings</b></h1>
                <i style="color:red; font-size:14px;"><b>(Click on each of the box for Details)</b></i>
                
                <hr/>
               
@if( count($myrents)  >=1 )

<div class="accordion" id="accordionExample" style="font-size:15px;">

@foreach( $myrents as $myrent )

 <?php 
 $real_rent_interval_all   =   ($myrent->rent_interval * 12);
 $real_rent_interval   =   ($myrent->rent_interval * 12)  -   $myrent->rent_interval;
 $num_of_transactions = count($myrent->payments);
   ?>
 
  <div class="card " style="margin-bottom:27px;">
    <div class="card-header " id="headingTwo" style="border:2px solid #ccc; padding:7px; ">
      <h3 class="mb-0">
      <span style="color:green; font-size:22px;">    <b>My House Rent savings for Landlord ( {{ $myrent->landlord_name }}  ) </b> 
         @if( $myrent->status == 0 ) <span style="color:red;"> (Paid)</span> @elseif( $num_of_transactions >= $real_rent_interval  )  <span style="color:red;"> ( Rent Savings Completed ) </span>  @endif </span> <br/>
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
  @if( $myrent->status == 0 ) <span style="color:red;"> (Paid)</span> 
  @elseif( $num_of_transactions >= $real_rent_interval  ) 
   <span style="color:red;"> ( Rent Payment Completed ) </span>

@else
  <?php echo date('D jS F Y',strtotime($myrent->start_date. " + $num_of_transactions Months ") );  

{{-- echo "<br/> Late Payment Attracts 15% of the supposed monthly amount so you are going pay  &#8358;". number_format($pay_amt); --}}
  ?>
 <form>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <button type="button" class="btn btn-sm btn-success" onClick="makePayment()">Make Payment</button>
</form>
   
    @endif  

</b>
     
     
      
   

<script>
  function makePayment() {
    FlutterwaveCheckout({
      //public_key: "FLWPUBK-254f7a40d0e8ee4374a1f25bac2484c2-X",

      public_key: "FLWPUBK-41dfff8fb4217ca88d19a5a052c039cd-X",  //your public key
      tx_ref: "{{ $myrent->id }}",  //txn created by you
      amount: {{ $pay_amt }},    //amt to be paid
      currency: "NGN",   //cureency accepting
      payment_options: "card",   
      customer: {
        email: "support@solomonsideas.ltd",   //cus email
        phonenumber: "{{ $myrent->phone1 }}",  //cus phone number
        name: "{{ $myrent->fname }}   {{ $myrent->mname }} {{ $myrent->lname }}",
      },
      callback: function (data) { // specified callback function
        var amount = data.amount;
        var currency = data.currency;

        var cus_name = data.customer.name;
        var cus_email = data.customer.email;
        var cus_phone_number = data.customer.phone_number;
        
        var flw_ref = data.flw_ref; //txn id from flw
        var status = data.status;  //status (successful)
        var tx_ref = data.tx_ref;  //txn id created by you
        var transaction_id = data.transaction_id;  //txn id created flw for verification
       var page_link = '/myrent_payments';  //enter the page link here
       if(status =='successful'){
            window.location.href=page_link+'?amount='+amount+'&currency='+currency+'&cus_name='+cus_name+'&cus_email='+cus_email+'&cus_phone_number='+cus_phone_number+'&flw_ref='+flw_ref+'&status='+status+'&tx_ref='+tx_ref+'&transaction_id='+transaction_id;

       }else{
            alert('There Was An Error, Tansaction Was Not Successful, Please Try Again!!');
            window.location.href='/myrents';
       }

      },
      customizations: {
        title: "Solomon's Ideas LTD",
        description: "Powered By Solomon's Ideas",
        logo: "https://www.solomonsideas.ltd/img/logo1.png",
      },
    });
  }


    // var amount = "data.amount";
    //     var currency = "data.currency";
    //     var cus_name = "data.customer.name";
    //     var cus_email = "data.customer.email";
    //     var cus_phone_number = "data.customer.phone_number";
    //     var flw_ref = "data.flw_ref"; //txn id from flw
    //     var status = "data.status";  //status (successful)
    //     var tx_ref = "data.tx_ref";  //txn id created by you
    //     var transaction_id = "data.transaction_id";  //txn id created flw for verification
    //    var page_link = '/myrent_payments';  //enter the page link here
    //         window.location.href=page_link+'?amount='+amount+'&currency='+currency+'&cus_name='+cus_name+'&cus_email='+cus_email+'&cus_phone_number='+cus_phone_number+'&flw_ref='+flw_ref+'&status='+status+'&tx_ref='+tx_ref+'&transaction_id='+transaction_id;
</script>







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

@endforeach


</div>

@else

<h1>You have no House rent Savings with Us!</h1>
@endif





                <div class="clearfix">
                </div>
            </div>
        </div>



    </div>
</div>

















@endsection





