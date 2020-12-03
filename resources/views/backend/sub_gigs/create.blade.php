<?php $menu_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-7">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Add Gig Sub-Category</h5>
		
		@include('layouts.messages')
					
                    <form method="POST" action={{route('sub_gigs.store')}} enctype="multipart/form-data">
                        @csrf
						
                         <div class="form-group">
                             <label> Name Of Gig Sub-Category  <span style="color:red;">*</span></label>
                           
                             <input type="text"  
                            class="form-control" 
                            required
                             name="name" />
							
                             
                        </div>

                      

                        
                           
                         

                         <div class="form-group ">
                            
                            <label> Gig Category <span style="color:red;">*</span></label>
                                <select class="form-control" name='cat_id' required>

                                    <option value='' hidden selected> Select Gig Category </option>
                                        @foreach($GigCategorys as $GigCategory)
                                        <option value='{{$GigCategory->id}}' 
                                            > 
                                            {{$GigCategory->category_name}} 
                                        </option>
                                    @endforeach
                                </select>
                            
                        </div>

                     

                        
                        
                            <center>
                                <button type="submit" class="btn btn-primary">
                                   ADD  <i class="fa fa-plus"></i> 
                                </button>
                           </center>
                        
                    </form>
               
		
					
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
