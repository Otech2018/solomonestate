<?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Sale Land </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Sale Land</a>
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
				<h1><b>LANDS SALES/RENT REGISTRATION FORM</b></h1>
                <a target="_blank"  href="{{route('our_team')}}" class="btn btn-success pull-right">Contact our Agent</a>
                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                
                <hr/>
				<form  method="POST" action="{{ route('form.store') }}" style="font-size:15px;">


					
                    @csrf

                      

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Full Name <span style="color:red;">*</span></label>

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




                                  <div class="form-group row">
                                    <label  onclick="$('#speci').fadeIn();" for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flag'></i>  Land Acquired By: </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-3">
                                        <select  class="country form-control form-control-sm" name='land_acq' onchange="optionw('speci', this)" >

                                            <option value='' hidden selected> Select Item </option>
                                               <option value="Inheritance">Inheritance</option>
                                               <option value="Purchase">Purchase</option>
                                               <option value="Donation/Gift">Donation/Gift</option>
                                               <option value="Govt. Allocation">Govt. Allocation</option>
                                               <option value="Govt/Public Property">Govt/Public Property</option>
                                               <option value="Communal Land">Communal Land</option>
                                               <option value="12" >Others  </option>
                                       </select>
                                    </div>


                                    <div class="col-sm-4" style="display:none;" id="speci">
                                        <input type="text" class="form-control" placeholder=" Please Specify" name="home_address"  >

                                    </div>
                                </div>



                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Land Location</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="office_address" required >
                            </div>
                        </div>


                        <div class=" row">
                            <label class="col-md-3 col-form-label text-md-right">Is the Land Surveyed?:<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="remember" id="remember2">

                                    <label class="form-check-label btn btn-success" for="remember2" onclick="$('#suv').fadeIn();" >
                                       Yes  
                                    </label>
                           </div>


                           <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="remember" id="remember3">

                                    <label class="form-check-label btn btn-danger" for="remember3" onclick="$('#suv').fadeOut();" >
                                       No   
                                    </label>
                           </div>
                        </div>

                    <div style="padding:15px; background-color:#fce4ec; display:none;" id="suv">
                         <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Plan Number <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Plan No" name="phone1"  >
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Beacon No" name="phone2"  >
                            </div>


                        </div>
                        
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Surveyor <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="home_address"  >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Surveyor's Address</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="office_address"  >
                            </div>
                        </div>

  

                     </div>

                        <br/><br/>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Number of Plots <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="No of Plots" name="phone1" required >
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Size In Sq. Meters" name="phone2"  >
                            </div>


                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Land Shape <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="land Shape" required >
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">List Land Document Available <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>



                          <div class=" row">
                            <label class="col-md-3 col-form-label text-md-right">Property Mode:<span style="color:red;">*</span></label>

                          

                    <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="remember" required id="remember21" onclick="$('#rent').fadeOut();$('#sale').fadeIn();" >

                                    <label class="form-check-label btn btn-danger" for="remember21" >
                                      <b> FOR SALE </b></i>
                                       
                                    </label>
                           </div>

                    <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="remember" required id="remember121" onclick="$('#sale').fadeOut();$('#rent').fadeIn();" >

                                    <label class="form-check-label btn btn-danger" for="remember121" >
                                      <b> FOR RENT </b></i>
                                       
                                    </label>
                           </div>

                        </div><br/><br/>

                        <div class="form-group row" style="display:none;" id='sale'>
                            <label class="col-md-5 col-form-label text-md-right">Price (<i>How Much do you want to sell your Land?</i>) <span style="color:red;">*</span></label>

                            <div class="col-md-6">
                                <input type="text"  style="background-color:#fccfcf; font-weight:bold;" class="form-control" name="name" required >
                            </div>
                        </div>



                        <div class="form-group row" style="display:none;" id='rent'>
                            <label class="col-md-5 col-form-label text-md-right">Price (<i>How Much do you want to rent your Land Per Year?</i>) <span style="color:red;">*</span></label>

                            <div class="col-md-6">
                                <input type="text"  style="background-color:#fccfcf; font-weight:bold;" class="form-control" name="name" required >
                            </div>
                        </div>

                    <div style="padding:15px; background-color:#e3f2fd;">
                        

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Valid ID Card<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                               <select  class="country form-control form-control-sm" required name='land_acq' 
                               onchange="optionw('id_date', this)" >

                                            <option value='' hidden selected> Select Item </option>
                                               <option value="National ID">National ID</option>
                                               <option value="20">Driver's License</option>
                                               <option value="Voter's Card">Voter's Card</option>
                                               <option value="30">International Passport</option>
                                       </select>
                            </div>
                            <label class="col-md-2 col-form-label text-md-right">ID Number<span style="color:red;">*</span></label>
                            
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="ID Number" name="phone2" required >
                            </div>


                        </div>

                <div style="display:none;" id="id_date">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Date Issued<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Date Issued" name="phone1" required >
                            </div>
                            <label class="col-md-2 col-form-label text-md-right">Expiry Date<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Expiry Date" name="phone2"  >
                            </div>


                        </div>
                </div>

                        </div>


                            <h2 align="center" style="font-size:27px; font-weight:bold;">Upload Pictures of the Land</h2><hr/>

     <div class="form-row">
                
                <div class="form-group col-md-6">
                      <label>Cover Image <span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>

              


                <div class="form-group col-md-3">
                      <label> Image 1<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 2<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



            </div>



            <div class="form-row">
                
               

                <div class="form-group col-md-3">
                      <label> Image 3<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>


                <div class="form-group col-md-3">
                      <label> Image 4<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 5<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 6<span class="text-danger">*</label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



            </div>




                        
            
      

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

































@endsection
