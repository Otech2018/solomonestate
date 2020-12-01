<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Register </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Register</a>
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
		
            <div class="col-md-8 contact-form-wrapper" style="padding:40px;">
			<div class="inner-wrapper">
				<h1><b>LAND/HOUSE SALES REGISTRATION FORM</b></h1><hr/>
				<form  method="POST" action="{{ route('form.store') }}" style="font-size:15px;">


					
                    @csrf

                      

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Full Name <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="name" required >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="example@gmail.com" name="email" required >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Date OF Birth <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" name="dob" required >

                            </div>

                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>


                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Home Address <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="kindred Village town" name="home_address" required >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Office Address</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="office_address" required >
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




                                <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Upload Passport <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                               <input  name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                            </div>
                        </div>




                        <div class=" row">
                            <label class="col-md-3 col-form-label text-md-right">Type Of Property <span style="color:red;">*</span></label>

                            <div class="col-md-7">



                           <ul class="nav  nav-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link "  style="color:green;"  id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                     LAND
                                
                                </a>
                            </li>






                            <li class="nav-item">
                                <a class="nav-link" style="color:green;" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                 BULIDING
                                
                                </a>
                            </li>
                            
                            </ul>
                            </div></div>
                            <div class="tab-content" id="pills-tabContent">

                                {{-- For land --}}
                                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        for land
                                </div>



                                    {{-- For BULIDING --}}
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                For BULIDING
                                </div>
                           </div>


                    

                            <br/><br/><br/>
                            <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember11">

                                    <label class="form-check-label" for="remember11" >
                                       Accept Our   
                                    </label><a href="#!" target="_blank" style="color:green;"> Terms and Conditions</a>
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

































@endsection
