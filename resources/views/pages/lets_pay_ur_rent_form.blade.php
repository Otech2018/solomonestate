<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's pay your rent form </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#"> Let's pay your rent form </a>
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
                
				<h1><b>Let's Pay Your Rent Form</b></h1>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>
				<form  method="POST" action="{{ route('rent.store') }}" style="font-size:15px;"  enctype="multipart/form-data">
					
                    @csrf

@if( count($pay_rent) >=1 )


                        <div style="display: none;">

                             <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Tenant's Name: <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Fristname" name="fname" required 
                                @guest   @else
                        value="{{ auth()->user()->first_name }}"
                        @endguest >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Middlename" name="mname" required 
                                 @guest   @else
                        value="{{ auth()->user()->middle_name  }} "
                        @endguest >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Lastname" name="lname" required 
                                 @guest     @else
                        value=" {{ auth()->user()->last_name }}"
                        @endguest >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="example@gmail.com" name="email"  
                                @guest     @else
                        value=" {{ auth()->user()->email }}"
                        @endguest  >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Date OF Birth <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" name="dob" required >

                            </div>

                            <div class="col-md-4">
                                <select class="form-control" required name="gender" >
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
                                <input type="text" class="form-control" placeholder="Kindred" name="kindred" required >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Village" name="village" required >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Town" name="town" required >
                            </div>
                        </div>




                          <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flag'></i>  Country </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select  class="country form-control form-control-sm" name='country' required>

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
                                        <select id="state-list" style='display:none;' class="state form-control form-control-sm" name='state' required >
                                            <option value='' hidden selected> Select State *</option>
                                             @foreach($states as $state)
                                                <option value='{{$state->id}}'> {{$state->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="form-control form-control-sm" id="state" readonly placeholder='Select Country First'>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="state-text"  name="state1" placeholder='Enter Your State'>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flash'></i>  LGA </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select id="lga-list" style='display:none;' class="lgaa form-control form-control-sm" name='lga' required>
                                            <option value='' hidden selected> Select LGA *</option>
                                             @foreach($lgas as $lga)
                                                <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->id}}' style='display:none;' disabled> {{$lga->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="lga-text"  name="lga1" placeholder='Enter Your LGA'>
                                        <input type="text" class="form-control form-control-sm" id="lga" readonly placeholder='Select Country First'>
                                       
                                    </div>
                                </div>
                </div>






                    <br/>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Office Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="office_address" placeholder="Enter full Addres Including the State and Country" ></textarea>

                            </div>
                        </div>



                        

                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Phone Number <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Phone 1" name="phone1" required 
                                @guest     @else
                        value=" {{ auth()->user()->phone }}"
                        @endguest  >
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Phone 2" name="phone2"  >
                            </div>


                        </div>

                     





                                <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Upload Passport <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                               <input  name="passport" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                            </div>
                        </div>






                            <br/><br/><h2 align="center" style="font-size:27px; font-weight:bold;">Residential Information </h2><hr/>


                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Residential Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="resident_address" required placeholder="Enter full Addres Including the State and Country" ></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Closeset LandMark <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" placeholder="e.g. Lagos toll gate"  style="font-weight:bold;" class="form-control" name="landmark" required >
                            </div>
                        </div>


                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Landlord Information </h2><hr/>



                              <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Landlord Full name </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="landlord_name"  required >
                            </div>
                        </div>


                    <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Bank Account Detail: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="landlord_acc_num" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Bank Name" name="landlord_bank" required >
                            </div>


                        </div>



                        <div class="form-group row">

                            <label class="col-md-3 col-form-label text-md-right">Landlord's Exact Bank Account Name </label>


                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="" name="landlord_acc_name" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Landlord's Phone" name="landlord_phone" required >
                            </div>


                        </div>
</div>

@else


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Tenant's Name: <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Fristname" name="fname" required 
                                @guest   @else
                        value="{{ auth()->user()->first_name }}"
                        @endguest >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Middlename" name="mname" required 
                                 @guest   @else
                        value="{{ auth()->user()->middle_name  }} "
                        @endguest >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Lastname" name="lname" required 
                                 @guest     @else
                        value=" {{ auth()->user()->last_name }}"
                        @endguest >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="example@gmail.com" name="email"  
                                @guest     @else
                        value=" {{ auth()->user()->email }}"
                        @endguest  >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Date OF Birth <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" name="dob" required >

                            </div>

                            <div class="col-md-4">
                                <select class="form-control" required name="gender" >
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
                                <input type="text" class="form-control" placeholder="Kindred" name="kindred" required >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Village" name="village" required >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Town" name="town" required >
                            </div>
                        </div>




                          <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flag'></i>  Country </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select  class="country form-control form-control-sm" name='country' required>

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
                                        <select id="state-list" style='display:none;' class="state form-control form-control-sm" name='state' required >
                                            <option value='' hidden selected> Select State *</option>
                                             @foreach($states as $state)
                                                <option value='{{$state->id}}'> {{$state->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="form-control form-control-sm" id="state" readonly placeholder='Select Country First'>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="state-text"  name="state1" placeholder='Enter Your State'>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flash'></i>  LGA </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-7">
                                        <select id="lga-list" style='display:none;' class="lgaa form-control form-control-sm" name='lga' required>
                                            <option value='' hidden selected> Select LGA *</option>
                                             @foreach($lgas as $lga)
                                                <option class="{{'lgaClass'.$lga->state_id}} lga" value='{{$lga->id}}' style='display:none;' disabled> {{$lga->name}} </option>
                                            @endforeach
                                        </select>
                                        <input type="text" style='display:none;' class="form-control form-control-sm" id="lga-text"  name="lga1" placeholder='Enter Your LGA'>
                                        <input type="text" class="form-control form-control-sm" id="lga" readonly placeholder='Select Country First'>
                                       
                                    </div>
                                </div>
                </div>






                    <br/>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Office Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="office_address" placeholder="Enter full Addres Including the State and Country" ></textarea>

                            </div>
                        </div>



                        

                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Phone Number <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Phone 1" name="phone1" required 
                                @guest     @else
                        value=" {{ auth()->user()->phone }}"
                        @endguest  >
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Phone 2" name="phone2"  >
                            </div>


                        </div>

                     





                                <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Upload Passport <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                               <input  name="passport" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                            </div>
                        </div>






                            <br/><br/><h2 align="center" style="font-size:27px; font-weight:bold;">Residential Information </h2><hr/>


                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Residential Address</label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="resident_address" required placeholder="Enter full Addres Including the State and Country" ></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Closeset LandMark <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" placeholder="e.g. Lagos toll gate"  style="font-weight:bold;" class="form-control" name="landmark" required >
                            </div>
                        </div>


                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Landlord Information </h2><hr/>



                              <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Landlord Full name </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="landlord_name"  required >
                            </div>
                        </div>


     <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Bank Account Detail: <span style="color:red;">*</span></label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Account Number" name="landlord_acc_num" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Bank Name" name="landlord_bank" required >
                            </div>


                        </div>



                        <div class="form-group row">

                            <label class="col-md-3 col-form-label text-md-right">Landlord's Exact Bank Account Name </label>


                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="" name="landlord_acc_name" required >
                            </div>

                              <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Landlord's Phone" name="landlord_phone" required >
                            </div>


                        </div>







@endif


                        <br/><br/>    <h2 align="center" style="font-size:27px; font-weight:bold;">Rent Information </h2><hr/>
        



  <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right"> Which Date do you want to start?: <span style="color:red;">*</span></label>

                              <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Which Date do you want to start?" name="start_date" required >
                            </div>

                            <div class="col-md-3">
                                <input type="number" class="form-control" onkeyup="rent_amt_f();" placeholder="House Rent Amount" name="rent_amt" id='rent_amt' required >
                            </div>

                            <div class="col-md-3">
                                <select class="form-control" name="rent_interval" required id="rent_interval" onchange="rent_amt_f();">
                                    <option value="sss" selected >Select Rent paid Interval</option>
                                    <option value="1">Every Year </option>
                                    <option value="2">Every 2 years</option>
                                    <option value="3">Every 3 years</option>
                                    <option value="4">Every 4 years</option>
                                    <option value="5">Every 5 years</option>
                                    <option value="6">Every 6 years</option>
                                    <option value="7">Every 7 years</option>
                                    <option value="8">Every 8 years</option>
                                    <option value="9">Every 9 years</option>
                                    <option value="10">Every 10 years</option>
                                </select>
                            </div>

                            


                        </div> <br/>
                        
            <h4 align="center" id="rent_display" style="background-color: red; color:white; padding:10px; font-weight:bold; font-size:17px;"> Your house rent amount  is needed </h4>
      

                            <br/><br/><br/>
                            <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" name="rtfvd" required id="remember11">

                                    <label class="form-check-label" for="remember11" >
                                       Accept Our   
                                    </label><a href="{{route('tos')}}" target="_blank" style="color:green;"> Terms and Conditions</a>
                                </div>
                            

<i style="color:red">NOTE: Failure to pay as at when due will attract a penalty of 15% of  the supposed monthly payment</i><br/>
                        
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
       var amt = document.getElementById('rent_amt').value;
       var rent_interval = document.getElementById('rent_interval').value;
       var num_months = (12  * rent_interval ) - rent_interval;
       var num_months1 = (12  * rent_interval );
       var month_rent1 =   amt  / num_months1 ;
       var  month_rent = Math.round(month_rent1);

if(rent_interval !='sss'){
     document.getElementById('rent_display').innerHTML = "You will be paying  <i style='font-size:22px;'>N"+ month_rent + " </i> for " + num_months +" month(s) as your Monthly Rent, While we pay for the last " + rent_interval +" month(s) for you! ";
}else{
     document.getElementById('rent_display').innerHTML = "Select Rent Interval ";
}
      
    }



</script>






























@endsection
