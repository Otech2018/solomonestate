  <?php $register ="";  ?>

@extends('layouts.app')

@section('content')













	<div class="page-title-section">
		<div class="container">
			<div class="pull-left page-title">
				<a href="#">
				<h2>Property Management Form </h2>
				</a>
			</div>
			<div class="pull-right breadcrumb">
				<a href="#">home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Property Manaement Form</a>
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
		
            <div class="col-md-12 contact-form-wrapper" style="padding:40px;">
			<div class="inner-wrapper">
                @include('layouts.messages1')

				<h1><b> Property Management Form </b></h1>
                <a target="_blank"  href="{{route('our_team')}}" class="btn btn-success pull-right">Contact our Agent</a>

                <i style="color:red; font-size:14px;"><b>(Fill this Form carefully)</b></i>
                <hr/>
                
				<form  method="POST" action="{{ route('salehouse.store') }}" style="font-size:15px;" enctype="multipart/form-data">


					
                    @csrf

                      

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Full Name <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="First Name" name="fname" required 
                                @guest   @else
                        value="{{ auth()->user()->first_name }}"
                        @endguest >
                            </div>

                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Middle name" name="mname" required 
                                  @guest   @else
                        value="{{ auth()->user()->middle_name  }} "
                        @endguest >
                            </div>


                              <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Last name" name="lname" required 
                                @guest     @else
                        value=" {{ auth()->user()->last_name }}"
                        @endguest >
                            </div>

                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Email Address </label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" placeholder="example@gmail.com" name="email"  
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
                                <select class="form-control" required name="gender">
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
                                        <select id="state-list" style='display:none;' class="state form-control form-control-sm" name='state'  >
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
                                        <select id="lga-list" style='display:none;' class="lgaa form-control form-control-sm" name='lga' >
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
                                <textarea class="form-control"  style='height:130px' name="office_address" placeholder="Enter full Address Including the State and Country" ></textarea>

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


                       

                        

                        <div class=" row">
                            <label class="col-md-3 col-form-label text-md-right">Property Mode:<span style="color:red;">*</span></label>

                          <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="property_mode" value="1" required id="remember21">

                                    <label class="form-check-label btn btn-success" for="remember21" onclick="$('#rent').fadeOut();$('#noland').fadeOut();$('#land').fadeIn();" >
                                      <b> FOR SALE <br/> LANDED PROPERTY  <br/>(Selling both Land & Structure(s))</b></i>
                                    </label>
                           </div>
                          
                          
                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="property_mode" value="2" required id="remember12" onclick="$('#rent').fadeOut();$('#land').fadeOut();$('#noland').fadeIn();" >

                                    <label class="form-check-label btn btn-primary" for="remember12" >
                                      <b> FOR SALE <br/>  NON LANDED PROPERTY  <br/>(Selling only Structure(s))</b></i>
                                       
                                    </label>
                           </div>


                    <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="property_mode" value="3" required id="remember121" onclick="$('#noland').fadeOut();$('#land').fadeOut();$('#rent').fadeIn();" >

                                    <label class="form-check-label btn btn-danger" for="remember121" >
                                      <b> FOR RENT </b></i>
                                       
                                    </label>
                           </div>

                        </div><br/><br/>


{{-- for not full selling  --}}
<div id="noland" style="display:none;padding:20px; background-color: #e1f5fe;">


  <div class="form-row">
                
                <div class="form-group col-md-6" >
                      <label>Purchase Reciept  <span class="text-danger">*</span>(image)</label>
                          <input style='font-size:5px !important;' name="purchase_recipt"  accept='.gif, .jpg,.png'   type="file" id="input-file-now"  class="dropify" data-max-file-size="1M"/>
                      
                </div>

              


                <div class="form-group col-md-6">
                      <label> Allocation Papers(optional) (image)</label>
                          <input style='font-size:5px !important;' name="allocation_paper"   accept='.gif, .jpg,.png'  type="file" id="input-file-now"  class="dropify" data-max-file-size="1M"/>
                      
                </div>





            </div>



              <br/><br/><div class="form-group row">
                            <label class="col-md-5 col-form-label text-md-right">Price (<i>How Much do you want to sell this Property?</i>) <span style="color:red;">*</span></label>

                            <div class="col-md-6">
                                <input type="text"  style="background-color:#fccfcf; font-weight:bold;" class="form-control" name="sell_price"  >
                            </div>
                        </div>




</div>
{{-- for not full selling  --}}


{{-- for full selling land detail --}}
<div id="land" style="display:none; background-color:#c8e6c9; padding:20px;">
                            <div class="form-group row">
                                    <label  onclick="$('#speci').fadeIn();" for="inputPassword3" class="col-sm-3 col-form-label"><b>  <i class='fa fa-flag'></i>  Land Acquired By: </b> <span style="color:red;">*</span></label>
                                    <div class="col-sm-3">
                                        <select  class="country form-control form-control-sm" name='land_acquired_by' onchange="optionw('speci', this)" >

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
                                        <input type="text" class="form-control" placeholder=" Please Specify" name="land_acquired_by_2"  >

                                    </div>
                                </div>





                        <div class="row">
                            <label class="col-md-3 col-form-label text-md-right">Is the Land Surveyed?:<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="land_surveyed" value="YES" id="remember2">

                                    <label class="form-check-label btn btn-success" for="remember2" onclick="$('#suv').fadeIn();" >
                                       Yes  
                                    </label>
                           </div>


                           <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="land_surveyed" value="NO" id="remember3">

                                    <label class="form-check-label btn btn-danger" for="remember3" onclick="$('#suv').fadeOut();" >
                                       No   
                                    </label>
                           </div>
                        </div>

                    <div style="padding:15px; background-color:#fce4ec; display:none;" id="suv">
                         <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Plan Number <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Plan No" name="plan_number"  >
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Beacon No" name="beacon_number"  >
                            </div>


                        </div>
                        
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Surveyor <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="surveyor"  >
                            </div>
                        </div>



                          <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Surveyor's Address</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="surveyor_address"  >
                            </div>
                        </div>

  

                     </div>

                        <br/><br/>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Number of Plots <span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="No of Plots" name="no_of_plots"  >
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Size In Sq. Meters" name="size_in_sq_meters"  >
                            </div>


                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">Land Shape <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="" name="land_Shape"  >
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">List Land Document Available <span style="color:red;">*</span></label>

                            <div class="col-md-7">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" name="land_doc_avaliable" rows="3"></textarea>
                            </div>
                        </div>


                          <br/><br/><div class="form-group row">
                            <label class="col-md-5 col-form-label text-md-right">Price (<i>How Much do you want to sell this Property?</i>) <span style="color:red;">*</span></label>

                            <div class="col-md-6">
                                <input type="text"  style="background-color:#fccfcf; font-weight:bold;" class="form-control" name="full_sell_price" >
                            </div>
                        </div>
            </div>
            {{-- for full selling land details --}}



            {{-- for renting land details --}}


                             <br/><br/><div id="rent" style="display:none; background-color:#ffccbc; padding:20px;">
                          <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right">Price (<i>How Much do you want to Rent this Property Per Year?</i>) <span style="color:red;">*</span></label>

                            <div class="col-md-6">
                                <input type="text"  style="background-color:#fbe9e7; font-weight:bold;" class="form-control" name="rent_price" >
                            </div>
                            </div>


                            <br/>
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">House Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control"  style='height:130px' name="house_description" placeholder="Please Describe what the building has, eg number of shops, rooms and flats, including toilet and kitchen if any" ></textarea>

                            </div>
                        </div>
                        </div>

            {{-- for renting --}}
                 


                          <br/><br/><div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Property Location <span style="color:red;">*</span></label>

                            <div class="col-md-8">
                                <input type="text" placeholder="House Location"  style="font-weight:bold;" class="form-control" name='land_location' required >
                            </div>
                        </div>


 <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Land Closeset Land Mark <span style="color:red;">*</span></label>

                            <div class="col-md-8">
                                <input type="text" placeholder="e.g. Lagos toll gate"  style="font-weight:bold;" class="form-control" name="landmark" required >
                            </div>
                        </div>
                    <div style="padding:15px; background-color:#e3f2fd;">
                        

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Valid ID Card<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                               <select  class="country form-control form-control-sm" required name='id_card' 
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
                                <input type="text" class="form-control" placeholder="ID Number" name="id_card_no" required >
                            </div>


                        </div>

                <div style="display:none;" id="id_date">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Date Issued<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Date Issued" name="id_card_issued_date"  >
                            </div>
                            <label class="col-md-2 col-form-label text-md-right">Expiry Date<span style="color:red;">*</span></label>

                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Expiry Date" name="id_card_exp_date"  >
                            </div>


                        </div>
                </div>

                        </div>


                            <h2 align="center" style="font-size:27px; font-weight:bold;">Upload Pictures of the Building</h2><hr/>

     <div class="form-row">
                
                <div class="form-group col-md-6">
                      <label>Cover Image <span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="cover_image" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>

              


                <div class="form-group col-md-3">
                      <label> Image 1<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image1" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 2<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image2" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



            </div>



            <div class="form-row">
                
               

                <div class="form-group col-md-3">
                      <label> Image 3<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image3" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>


                <div class="form-group col-md-3">
                      <label> Image 4<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image4" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 5<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image5" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



                <div class="form-group col-md-3">
                      <label> Image 6<span class="text-danger">*</span></label>
                          <input style='font-size:5px !important;' name="image6" accept='.gif, .jpg,.png' type="file" id="input-file-now" required class="dropify" data-max-file-size="1M"/>
                      
                </div>



            </div>





                    

                            <br/><br/><br/>
                            <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" required name="remertember" id="remember11">

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
