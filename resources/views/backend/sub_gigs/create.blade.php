<?php $menu_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-11">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Add A Property</h5><br/><br/>
		
		@include('layouts.messages')
					





<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link btn btn-outline-primary" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="font-weight:bold;font-size:25px; margin-right:40px;">LAND</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-outline-primary" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-weight:bold;font-size:25px;">BUILDING</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">

{{-- for land starts here --}}
  <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
           
   <form method="POST" action={{route('sub_gigs.store')}} enctype="multipart/form-data">
            @csrf
                                <input type='hidden' value='1' name="property_type">


            <br/><br/>

 <div class="row"  style="margin-left:45px;">
                           
                            <div class="col-md-4">
                                <input class="form-check-input" type="radio" value="1" name="sale_mode" id="remember2">

                                    <label class="form-check-label btn btn-danger" for="remember2" >
                                       For Sale  
                                    </label>
                           </div>





                           <div class="col-md-4">
                                <input class="form-check-input" type="radio" value="2" name="sale_mode" id="remember3">

                                    <label class="form-check-label btn btn-success" for="remember3" >
                                       For Rent   
                                    </label>
                           </div>
                        </div><br/><br/>


            <div class="form-row">
                <div class="form-group col-md-4">

                    <label>  Category <span style="color:red;">*</span></label>
                                <select class="form-control" name='cat_id' required>

                                    <option value='' hidden selected> Select  Category </option>
                                        @foreach($GigCategorys as $GigCategory)
                                        <option value='{{$GigCategory->id}}' 
                                            > 
                                            {{$GigCategory->category_name}} 
                                        </option>
                                    @endforeach
                                </select>
                
                </div>
                <div class="form-group col-md-8">
                    <label> TOPIC/TITLE  <span style="color:red;">*</span></label>
                        
                            <input type="text"  
                            class="form-control" 
                            required
                            name="name" />
                </div>
            </div>




            <div class="form-group">
                <label > Description  </label>
                <textarea class="form-control"  style='height:130px' name="gig_desc" ></textarea >
            </div>




            <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label> PRICE  <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>



                <div class="form-group col-md-8">
                    <label> LAND SIZE (Sq ft)  <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>


              
            </div>



        




        <h2 align="center" style="font-size:27px; font-weight:bold;">Images</h2><hr/>

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
            
      
            

        <div class="form-group">
                <label > Embed Video fron Youtube (optional) </label>
                <textarea class="form-control"  style='height:130px' name="gig_desc" ></textarea >
            </div>

            
            
                <center>
                    <button type="submit" class="btn btn-primary">
                    ADD  <i class="fa fa-plus"></i> 
                    </button>
            </center>
            
        </form>
  
  
  
  
  
  
  </div>
  
{{-- for land ends here --}}
  
  
  
{{-- for building starts here --}}
  
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
   <form method="POST" action={{route('sub_gigs.store')}} enctype="multipart/form-data">
            @csrf
            
            <br/><br/>
               <div class="row"  style="margin-left:45px;">
                           
                            <div class="col-md-4">
                                <input class="form-check-input" type="radio" value="3" name="sale_mode" id="remember11">

                                    <label class="form-check-label btn btn-danger" for="remember11" >
                                       For Sale   as  Landed Property
                                    </label>
                           </div>



                            <div class="col-md-4">
                                <input class="form-check-input" type="radio" value="4" name="sale_mode" id="remember21">

                                    <label class="form-check-label btn btn-primary" for="remember21" >
                                       For Sale  non  as  Landed Property
                                    </label>
                           </div>


                           <div class="col-md-4">
                                <input class="form-check-input" type="radio" name="remember" id="remember31">

                                    <label class="form-check-label btn btn-success" for="remember31" >
                                       For Rent   
                                    </label>
                           </div>
                        </div><br/><br/>


            <div class="form-row">
                <div class="form-group col-md-4">

                    <label>  Category <span style="color:red;">*</span></label>
                                <select class="form-control" name='cat_id' required>

                                    <option value='' hidden selected> Select  Category </option>
                                        @foreach($GigCategorys as $GigCategory)
                                        <option value='{{$GigCategory->id}}' 
                                            > 
                                            {{$GigCategory->category_name}} 
                                        </option>
                                    @endforeach
                                </select>
                
                </div>
                <div class="form-group col-md-8">
                    <label> TOPIC/TITLE  <span style="color:red;">*</span></label>
                        
                            <input type="text"  
                            class="form-control" 
                            required
                            name="name" />
                </div>
            </div>




            <div class="form-group">
                <label > Description  </label>
                <textarea class="form-control"  style='height:130px' name="gig_desc" ></textarea >
            </div>




            <div class="form-row">

             <div class="form-group col-md-3">
                    <label> PRICE  <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>
                
                <div class="form-group col-md-3">
                    <label> SIZE (Sq ft)  <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>


                 <div class="form-group col-md-3">
                    <label> No. of Bedrooms <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>


                 <div class="form-group col-md-3">
                    <label>No. of Bathrooms  <span style="color:red;">*</span></label>
                        
                            <input type="number"  
                            class="form-control" 
                            required
                            name="name" />
                </div>
            </div>




          
        
<div style="padding-left:40px;">
							<h3 style="font-size:27px; font-weight:bold;">Additional Features</h3>
							<ul class="features">
								<li><input  value="Ceiling Fan" class="form-check-input" type="checkbox" id="feature1"   name="feature[]"> <label class="form-check-label" for="feature1" >Ceiling Fan</label></li>
								<li><input  value="Curtains/Drapes" class="form-check-input" type="checkbox" id="feature2"   name="feature[]"> <label class="form-check-label" for="feature2" >Curtains/Drapes</label></li>
								<li><input  value="Oven/Range" class="form-check-input" type="checkbox" id="feature3"   name="feature[]"> <label class="form-check-label" for="feature3" >Oven/Range</label></li>
								<li><input  value="Chandelier(s)" class="form-check-input" type="checkbox" id="feature4"   name="feature[]"> <label class="form-check-label" for="feature4" >Chandelier(s)</label></li>
								<li><input  value="Freezer" class="form-check-input" type="checkbox" id="feature5"   name="feature[]"> <label class="form-check-label" for="feature5" >Freezer</label></li>
								<li><input  value="Refrigerator" class="form-check-input" type="checkbox" id="feature6"   name="feature[]"> <label class="form-check-label" for="feature6" >Refrigerator</label></li>
								<li><input  value="Convection Oven" class="form-check-input" type="checkbox" id="feature7"   name="feature[]"> <label class="form-check-label" for="feature7" >Convection Oven</label></li>
								<li><input  value="Hotwater" class="form-check-input" type="checkbox" id="feature8"   name="feature[]"> <label class="form-check-label" for="feature8" >Hotwater</label></li>
								<li><input  value="Light Fixtures" class="form-check-input" type="checkbox" id="feature9"   name="feature[]"> <label class="form-check-label" for="feature9" >Light Fixtures</label></li>
								<li><input  value="Screens" class="form-check-input" type="checkbox" id="feature10"   name="feature[]"> <label class="form-check-label" for="feature10" >Screens</label></li>
								<li><input  value="Air Conditioning" class="form-check-input" type="checkbox" id="feature11"   name="feature[]"> <label class="form-check-label" for="feature11" >Air Conditioning</label></li>
							</ul>
						</div>





        <h2 align="center" style="font-size:27px; font-weight:bold;">Images</h2><hr/>

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
            
      
            


        <div class="form-group">
                <label > Embed Video fron Youtube (optional) </label>
                <textarea class="form-control"  style='height:130px' name="gig_desc" ></textarea >
            </div>

            
            
                <center>
                    <button type="submit" class="btn btn-primary">
                    ADD  <i class="fa fa-plus"></i> 
                    </button>
            </center>
            
        </form>
  
  
  
  
  
  
  </div>
{{-- for building ends here --}}


</div>












                   
               
		
					
	    </div>
        </div>
        <br/><br/><br/>
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
