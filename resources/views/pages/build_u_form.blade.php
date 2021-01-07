<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Let's Build For you </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Let's Build For you</a>
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
				<h1><b>LETS BUILD FOR YOU FORM</b></h1>
                <a target="_blank"  href="{{route('our_team')}}" class="btn btn-success pull-right">Contact our Agent</a>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>
				<form  method="POST" action="{{ route('form.store') }}" style="font-size:15px;">


					
                    @csrf

                      

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Full Name <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="name" required >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address (optional)</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="example@gmail.com" name="email"  >
                            </div>
                        </div>




                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Budgeted Amount <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="kindred Village town" name="home_address" required >
                            </div>
                        </div>




                         <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Building Description </label>

                            <div class="col-md-7">
                                <textarea class="form-control"  style='height:130px' name="gig_desc" ></textarea>
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Office/Home Address</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="office_address"  >
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


                        <div style="background-color:#f3e5f5; padding:10px;">
                            <h3 style="font-size:23px; font-weight:bold;">Site/Location Details</h3>
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
                            <label class="col-md-3 col-form-label text-md-right">Location Address <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="home_address" required >
                            </div>
                        </div>

                            </div>

                            <br/><br/>
                           <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" name="saswddw" id="remember11">

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

































@endsection
