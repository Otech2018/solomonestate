<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                <h2>Let's save for you form </h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Let's save for you form </a>
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
                <h1><b>Let's save for you Form</b></h1>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>
                <form  method="POST" action="{{ route('form.store') }}" style="font-size:15px;">
                    
                    @csrf

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">  Name: <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Fristname" name="name" required >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Middlename" name="name" required >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Lastname" name="name" required >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="example@gmail.com" name="email"  >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Date OF Birth <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" name="dob" required >

                            </div>

                            <div class="col-md-4">
                                <select class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>





                    <div style="background-color:#e0f2f1; padding:15px;">
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Home Address <span style="color:red;">*</span></label>

                             <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Kindred" name="name" required >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Village" name="name" required >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Town" name="name" required >
                            </div>
                        </div>




                          <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flag'></i>  Country </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select  class="country form-control form-control-sm" name='country_id' required>

                                            <option value='' hidden selected> Select country </option>
                                             @foreach($countries as $country)
                                                <option value='{{$country->id}}' 
                                                    > 
                                                    {{$country->name}} 
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-adjust'></i>  State </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select id="state-list" style='display:none;' class="state form-control form-control-sm" name='state_id' required >
                                            <option value='' hidden selected> Select State *</option>
                                             @foreach($states as $state)
                                                <option value='{{$state->id}}'> {{$state->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="form-control form-control-sm" id="state" readonly placeholder='Select Country First'>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="state-text"  name="state_f" placeholder='Enter Your State'>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flash'></i>  LGA </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select id="lga-list" style='display:none;' class="lgaa form-control form-control-sm" name='lga_id' required>
                                            <option value='' hidden selected> Select LGA *</option>
                                             @foreach($lgas as $lga)
                                                <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->id}}' style='display:none;' disabled> {{$lga->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="lga-text"  name="lga_f" placeholder='Enter Your LGA'>
                                        <input type="text" class="form-control form-control-sm" id="lga" readonly placeholder='Select Country First'>
                                       
                                    </div>
                                </div>
                </div>






                    <br/>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Office Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="gig_desc" placeholder="Enter full Addres Including the State and Country" ></textarea>

                            </div>
                        </div>



                        

                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Phone Number <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Phone 1" name="phone1" required >
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Phone 2" name="phone2"  >
                            </div>


                        </div>

                     





                                <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Upload Passport <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                               <input  name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                            </div>
                        </div>




                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Bank Account Information </h2><hr/>





     <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Bank Account Detail: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="name" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Bank Name" name="name" required >
                            </div>


                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Exact Bank Account Name </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="email"  >
                            </div>
                        </div>



  <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Next of kin Information </h2><hr/>
        



  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Next of kin FullName: <span style="color:red;">*</span></label>

                              <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="name" required >
                            </div>

                        


                        </div> 


  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Next of kin relationship?: <span style="color:red;">*</span></label>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="e.g. Brother" name="name" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Next of kin Phone Number" name="name" required >
                            </div>

                        

                            


                        </div> <br/>



                            <br/><br/><h2 align="center" style="font-size:27px; font-weight:bold;">Savings Information </h2><hr/>


  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Why do you want to Save?: <span style="color:red;">*</span></label>

                              <div class="col-md-4">
                                <select class="form-control" required onchange="optionw('id_date', this)">
                                    <option hidden value="">Select Purpose</option>
                                    <option value="Male">To Buy A Land</option>
                                    <option value="Male">To Buy A House</option>
                                    <option value="Male">To Build a House</option>
                                    <option value="20">Others</option>
                                </select>
                            </div>

                              <div class="col-md-4" style="display:none;" id="id_date" >
                                <input type="text" class="form-control" placeholder="Please Specify" name="name" required >
                            </div>
</div>


  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> What is the Budget Amount?: <span style="color:red;">*</span></label>

                        

                              <div class="col-md-4">
                                <input type="text" class="form-control"  onkeyup="rent_amt_f()"  id="budget" placeholder="Total Budget Amount" name="name" required >
                            </div>
</div>

                        
  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> On what Interval can you easily save?: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <select class="form-control" id="interval" required>
                                  <option hidden value="sss">Select Interval</option>
                                    <option value="day">daily</option>
                                    <option value="week">Weekly</option>
                                    <option value="month">Monthly</option>
                                    <option value="year">Yearly</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <input type="number" id="interval_no" onkeyup="rent_amt_f()" class="form-control" placeholder="Interval Number?" name="name" required >
                            </div>

                            

                              


</div>
 





                      
                        
            <h4 align="center" id="rent_display" style="background-color: red; color:white; padding:10px; font-weight:bold; font-size:17px;"> Savings Information  is needed </h4>
      

                            <br/><br/><br/>
                            <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" name="rtfvd" required id="remember11">

                                    <label class="form-check-label" for="remember11" >
                                       Accept Our   
                                    </label><a href="{{route('tos')}}" target="_blank" style="color:green;"> Terms and Conditions</a>
                                </div>
                            

                        
                       <button type="submit" class="btn btn-lg btn-success">
                                  Send
                                </button>

                             



              </form>
                <div class="clearfix">
                </div>
            </div>
        </div>



    </div>
</div>


<script>
    function rent_amt_f(){
       var budget = document.getElementById('budget').value;
       var interval_no = document.getElementById('interval_no').value;
       var interval = document.getElementById('interval').value;

       if( 
        interval != 'sss'
         ){

          var month_rent1 = budget / interval_no ;
       var  month_rent = Math.round(month_rent1);

       document.getElementById('rent_display').innerHTML = "You will be paying  <i style='font-size:22px;'>N"+ month_rent + " </i> every "+ interval +" for " + interval_no + " " + interval+"s" ;


       }
     
       // alert('hello ' + interval );
    }



</script>






























@endsection