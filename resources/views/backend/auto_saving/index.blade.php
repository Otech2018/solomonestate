

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
            <h5 class="card-title"> {{ $title }} Auto Savings  </h5>

    @include('layouts.messages')


                <h1><b> {{ $title }} Auto Savings </b></h1>
                <i style="color:red; font-size:14px;"><b>(Click on each of the box for Details)</b></i>
                
                <hr/>
               
@if( count($mysavings)  >=1 )

<div class="accordion" id="accordionExample" style="font-size:15px;">
<?php $no = 1; ?>
@foreach( $mysavings as $mysaving )

 <?php $num_of_transactions = count($mysaving->payments);  ?>
 
  <div class="card " style="margin-bottom:27px;">
    <div class="card-header " id="headingTwo" style="border:2px solid #ccc; padding:7px; ">
      <h3 class="mb-0">
       <span style="color:green; font-size:22px;"><b>{{ $no }}</b>   Fullname :
        <b> {{ $mysaving->fname }}  {{ $mysaving->mname }} {{ $mysaving->lname }} </b></span><br/>
   <span>    Saving Purspose: <b>@if( $mysaving->saving_purpose == 20 )  {{ $mysaving->saving_purpose1 }} @else   {{ $mysaving->saving_purpose }}  @endif </b> 
    @if( $mysaving->status == 1 ) <span style="color:red;"> (Paid)</span> @elseif( $num_of_transactions >= $mysaving->saving_interval_no  )  <span style="color:red;"> ( Saving Completed ) </span>  @endif </span> <br/>  <br/>
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
   <br/>
 <a href="#!" class="btn-success btn-sm" title="Set as Paid"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  Savings as Paid?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$mysaving->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a> 
@else
  <?php echo date('D jS F Y',strtotime($mysaving->saving_start_date. " + $num_of_transactions $mysaving->saving_interval s") );  

  ?>
   <br/>
  <a href="#!" class="btn-success btn-sm" title="Set as Paid"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  Savings as Paid?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$mysaving->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a> 
    @endif  
  <form id="act{{$mysaving->id}}" action="{{ route('autosave.update',$mysaving->id ) }}" method="POST" class="d-none">
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

<?php $no++; ?>
@endforeach


</div>

@else

<h1> No savings found!</h1>
@endif




                    {{$mysavings->links()}}


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









