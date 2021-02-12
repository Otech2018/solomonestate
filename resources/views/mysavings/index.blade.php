<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                <h2>My Savings </h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> My Savings </a>
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

                <h1><b>My Savings</b></h1>
                <i style="color:red; font-size:14px;"><b>(Click on each of the box for Details)</b></i>
                
                <hr/>
               
@if( count($mysavings)  >=1 )

<div class="accordion" id="accordionExample" style="font-size:15px;">

@foreach( $mysavings as $mysaving )

 <?php $num_of_transactions = count($mysaving->payments);  ?>
 
  <div class="card " style="margin-bottom:27px;">
    <div class="card-header " id="headingTwo" style="border:2px solid #ccc; padding:7px; ">
      <h3 class="mb-0">
      <span style="color:green; font-size:22px;">  Saving Purspose: <b>@if( $mysaving->saving_purpose == 20 )  {{ $mysaving->saving_purpose1 }} @else   {{ $mysaving->saving_purpose }}  @endif </b> 
         @if( $mysaving->status == 1 ) <span style="color:red;"> (Paid)</span> @elseif( $num_of_transactions >= $mysaving->saving_interval_no  )  <span style="color:red;"> ( Saving Completed ) </span>  @endif </span> <br/>
<table class="table table-sm table-stripped table-bordered">
  <tr>
    <td> Budget :</td>
    <td>
        <b>&#8358; {{ number_format($mysaving->saving_budget) }} </b>
       
      
    </td>
  </tr>


    <tr>
    <td> Duration :</td>
    <td>
        <b>{{ $mysaving->saving_interval_no }}  {{ $mysaving->saving_interval }}(s)</b>
      
    </td>
  </tr>


     <tr>
    <td> Interval Amount:</td>
    <td style="color:green;">
    <b>  &#8358; {{ number_format($mysaving->saving_interval_amt) }}  For {{ $mysaving->saving_interval_no }}  {{ $mysaving->saving_interval }}(s)</b>
    </td>
  </tr>

  <tr>
    <td> Registration Date :</td>
    <td>
     <b> <?php echo  date('D jS F Y',strtotime($mysaving->created_at) ); ?> </b>
    </td>
  </tr>


     <tr>
    <td> Start Date :</td>
    <td style="color:blue;" >
     <b> <?php echo  date('D jS F Y',strtotime($mysaving->saving_start_date) ); ?> </b>
    </td>
  </tr>


  <tr>
    <td> End Date :</td>
    <td>
     <b> <?php echo date('D jS F Y',strtotime($mysaving->saving_start_date. " + $mysaving->saving_interval_no $mysaving->saving_interval s") ); ?> </b><br/>
    </td>
  </tr>



  <tr>
    <td> Deadline For Next Payment:</td>
    <td style="color:red;">
       <b> 

     <?php
     
 $pay_amt = $mysaving->saving_interval_amt ;
{{-- $pay_amt = 1.15  *  $mysaving->saving_interval_amt;   --}}
     ?>   
  @if( $mysaving->status == 1 ) <span style="color:red;"> (Paid)</span> 
  @elseif( $num_of_transactions >= $mysaving->saving_interval_no  ) 
   <span style="color:red;"> ( Saving Completed ) </span>

@else
  <?php echo date('D jS F Y',strtotime($mysaving->saving_start_date. " + $num_of_transactions $mysaving->saving_interval s") );  

{{-- echo "<br/> Late Payment Attracts 20% of the supposed amount you will pay  &#8358;". number_format($pay_amt); --}}
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
      tx_ref: "{{ $mysaving->id }}",  //txn created by you
      amount: {{ $pay_amt }},    //amt to be paid
      currency: "NGN",   //cureency accepting
      payment_options: "card",   
      customer: {
        email: "support@solomonsideas.ltd",   //cus email
        phonenumber: "{{ $mysaving->phone1 }}",  //cus phone number
        name: "{{ $mysaving->fname }}   {{ $mysaving->mname }} {{ $mysaving->lname }}",
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
       var page_link = '/mysaving_payments';  //enter the page link here
       if(status =='successful'){
            window.location.href=page_link+'?amount='+amount+'&currency='+currency+'&cus_name='+cus_name+'&cus_email='+cus_email+'&cus_phone_number='+cus_phone_number+'&flw_ref='+flw_ref+'&status='+status+'&tx_ref='+tx_ref+'&transaction_id='+transaction_id;

       }else{
            alert('There Was An Error, Tansaction Was Not Successful, Please Try Again!!');
            window.location.href='/mysavings';
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
    //    var page_link = '/mysaving_payments';  //enter the page link here
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
        <b>  {{ $num_of_transactions }} {{ $mysaving->saving_interval }}(s) </b>
      
    </td>
  </tr>




     <tr>
    <td>  Total Amount Paid::</td>
    <td>
    <b>  &#8358; {{ number_format($mysaving->saving_interval_amt) }}  For {{ $num_of_transactions}}  {{ $mysaving->saving_interval }}(s)
    <br/>
    <span style="color:red; font-size:18px;">  = &#8358; <?php echo number_format($num_of_transactions  *  $mysaving->saving_interval_amt) ?></span>
    </b>

    </td>
  </tr>


     <tr>
    <td>   Do we buy the stuff for you after payment completion? :</td>
    <td>
     <b> Your answer is <b> {{ $mysaving->buy_for_u }}  </b>
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
@foreach($mysaving->payments  as  $mysaving->payment)
    <tr>
      <th scope="row">1</th>
      <td>&#8358;{{ number_format($mysaving->payment->amount) }}</td>
      <td>{{ $mysaving->payment->created_at }}</td>
      <td>{{ $mysaving->payment->transaction_id }}</td>
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
       <img src="{{ _('../storage/autosave_images/'.$mysaving->passport )}}" height='220px' width="220" style="border-radius:250px; border:5px solid blue;" /><br/>

      
<table class="table table-sm table-stripped table-bordered ">
  <tr>
    <td> Fullname :</td>
    <td>
        <b> {{ $mysaving->fname }}  {{ $mysaving->mname }} {{ $mysaving->lname }} </b>
      
    </td>
  </tr>


<tr>
    <td>  Phone:</td>
    <td>
    <b>  {{ $mysaving->phone1 }} {{ $mysaving->phone2 }}  </b>
    </td>
  </tr>

     <tr>
    <td>  Email:</td>
    <td>
    <b>  {{ $mysaving->email }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Date Of Birth:</td>
    <td>
    <b>  {{ $mysaving->dob }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Gender:</td>
    <td>
    <b>  {{ $mysaving->gender }}  </b>
    </td>
  </tr>


    <tr>
    <td>  Home Address:</td>
    <td>
    <b>  {{ $mysaving->kindred }} {{ $mysaving->village }} {{ $mysaving->town }} in 
      @if( $mysaving->country ==162 ) {{$mysaving->lga_det->name}} @else {{$mysaving->lga1}}   @endif LGA ,
     @if( $mysaving->country ==162 ) {{$mysaving->state_det->name}} @else {{$mysaving->state1}} State,   @endif 

      {{$mysaving->country_det->name }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Account Name:</td>
    <td>
    <b>  {{ $mysaving->acc_name }}  </b>
    </td>
  </tr>


     <tr>
    <td>  Account Number:</td>
    <td>
    <b>  {{ $mysaving->acc_num }}  </b>
    </td>
  </tr>



     <tr>
    <td>  Bank:</td>
    <td>
    <b>  {{ $mysaving->acc_bank_name }}  </b>
    </td>
  </tr>

</table>









<br/><br/>

       <h2>Next Of Kin</h2>

     <table class="table table-sm table-stripped table-bordered ">
  <tr>
    <td> Fullname :</td>
    <td>
        <b> {{ $mysaving->next_of_kin_name }}  </b>
      
    </td>
  </tr>




     <tr>
    <td>  Relationship:</td>
    <td>
    <b>  {{ $mysaving->next_of_kin_reln }}  </b>
    </td>
  </tr>


     <tr>
    <td>  Phone:</td>
    <td>
    <b>  {{ $mysaving->next_of_kin_phone }}  </b>
    </td>
  </tr>
</table>

      </div>
    </div>
  </div>

@endforeach


</div>

@else

<h1>You have no savings with Us!</h1>
@endif





                <div class="clearfix">
                </div>
            </div>
        </div>



    </div>
</div>

















@endsection





