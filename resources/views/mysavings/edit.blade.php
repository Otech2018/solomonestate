<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                <h2>Edit My Savings  </h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Edit My Savings  </a>
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

                <h1><b>Edit My Savings </b></h1>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>

                    <h3 class="mb-0">
      <span style="color:green; font-size:22px;"> Saving Purspose: <b>@if( $mysaving->saving_purpose == 20 )  {{ $mysaving->saving_purpose1 }} @else   {{ $mysaving->saving_purpose }}  @endif </b>  <br/>
       </span>

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



        
</table>




                <form  method="POST" action="{{ route('mysavings.update', $mysaving->id ) }}" style="font-size:15px;" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="put">

                    
                    @csrf


                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Phone Number <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Phone 1" name="phone1" required 
                                value="{{ $mysaving->phone1 }}" >
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Phone 2" name="phone2" value="{{ $mysaving->phone2 }}" >
                            </div>


                        </div>

                     






                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Bank Account Information </h2><hr/>





     <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Bank Account Detail: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="acc_num" required value="{{ $mysaving->acc_num }}"  >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Bank Name" name="acc_bank_name" required  value="{{ $mysaving->acc_bank_name }}" >
                            </div>


                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Exact Bank Account Name </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="acc_name" required value="{{ $mysaving->acc_name }}"  >
                            </div>
                        </div>



  <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Next of kin Information </h2><hr/>
        



  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Next of kin FullName: <span style="color:red;">*</span></label>

                              <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="next_of_kin_name" required  value="{{ $mysaving->next_of_kin_name }}" >
                            </div>

                        


                        </div> 


  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Next of kin relationship?: <span style="color:red;">*</span></label>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="e.g. Brother" name="next_of_kin_reln" required  value="{{ $mysaving->next_of_kin_reln }}" >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Next of kin Phone Number" name="next_of_kin_phone" required  value="{{ $mysaving->next_of_kin_phone }}" >
                            </div>

                        

                            


                        </div> 




      

                            <br/>
                            <div class="col-md-12">
                                After Saving, do you want us to buy the stuff for you? 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <input class="form-check-input" type="radio" @if( $mysaving->buy_for_u == 'yes' ) checked  @endif name="buy_for_u" value="yes" required id="wer">

                                    <label class="form-check-label" for="wer" >
                                        Yes  
                                    </label>

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                      <input class="form-check-input" type="radio" name="buy_for_u" value="no" @if( $mysaving->buy_for_u == 'no' ) checked  @endif required id="remember1e1">

                                    <label class="form-check-label" for="remember1e1" >
                                        No  
                                    </label>

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
