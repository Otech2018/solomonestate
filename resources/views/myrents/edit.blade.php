<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













  <div class="page-title-section">
    <div class="container">
      <div class="pull-left page-title">
        <a href="#">
        <h2> Edit Rent Savings </h2>
        </a>
      </div>
      <div class="pull-right breadcrumb">
        <a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Edit Rent Savings </a>
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
    
            <div class="col-md-11 contact-form-wrapper" style="padding:40px !important; ">
      <div class="inner-wrapper">
                @include('layouts.messages1')
                
        <h1><b>Edit Rent Savings</b></h1>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>



 <?php 
 $real_rent_interval_all   =   ($myrent->rent_interval * 12);
 $real_rent_interval   =   ($myrent->rent_interval * 12)  -   $myrent->rent_interval;
 $num_of_transactions = count($myrent->payments);
   ?>
 
      <h3 class="mb-0">
      <span style="color:green; font-size:22px;">    <b>My House Rent savings for Landlord ( {{ $myrent->landlord_name }}  ) </b> <br/>
       
       </span></h3>
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



        
</table>
<br/><br/>


        <form  method="POST" action="{{ route('myrents.update', $myrent->id ) }}" style="font-size:15px;"  enctype="multipart/form-data" >
          
                    @csrf

                                    <input type="hidden" name="_method" value="put">


                    

                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Phone Number <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Phone 1" name="phone1" required 
                                value='{{ $myrent->phone1  }}'  >
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Phone 2" name="phone2" value='{{ $myrent->phone2  }}' >
                            </div>


                        </div>

                     


                    <br/><h2 align="center" style="font-size:27px; font-weight:bold;">Residential Information </h2><hr/>


                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Residential Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="resident_address" required placeholder="Enter full Addres Including the State and Country" >{{ $myrent->resident_address  }}</textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Closeset LandMark <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" placeholder="e.g. Lagos toll gate"  style="font-weight:bold;" class="form-control" name="landmark" required value='{{ $myrent->landmark  }}'  >
                            </div>
                        </div>


                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Landlord Information </h2><hr/>



                              <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Landlord Full name </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="landlord_name"  required  value='{{ $myrent->landlord_name  }}'  >
                            </div>
                        </div>


                    <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Bank Account Detail: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="landlord_acc_num" required 
                                value='{{ $myrent->landlord_acc_num  }}' >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Bank Name" name="landlord_bank" required
                                value='{{ $myrent->landlord_bank  }}' >
                            </div>


                        </div>



                        <div class="form-group row">

                            <label class="col-md-3 col-form-label text-md-right">Landlord's Exact Bank Account Name </label>


                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="" name="landlord_acc_name" required value='{{ $myrent->landlord_acc_name  }}' >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Landlord's Phone" name="landlord_phone" required value='{{ $myrent->landlord_phone  }}' >
                            </div>







                            <br/><br/><br/>
                            <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" name="rtfvd" required id="remember11">

                                    <label class="form-check-label" for="remember11" >
                                       Accept Our   
                                    </label><a href="{{route('tos')}}" target="_blank" style="color:green;"> Terms and Conditions</a>
                                </div>
                            

                        
                       <button type="submit" class="btn btn-lg btn-success">
                                  Update
                                </button>

                             



              </form>
        <div class="clearfix">
        </div>
      </div>
    </div>



  </div>
</div>




@endsection
