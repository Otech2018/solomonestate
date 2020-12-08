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
                    <label> TOPIC/TITLE  <span style="color:red;">*</span></label>
                        
                            <input type="text"  
                            class="form-control" 
                            required
                            name="name" />
                </div>
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
  
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
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
