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
            <h5 class="card-title">Add  A Task</h5>
		
		
					
                    <form method="POST" action={{route('task.store')}} enctype="multipart/form-data">
                        @csrf
						
                         <div class="form-group">
                             <label> Name Of Task  <span style="color:red;">*</span></label>
                           
                             <input type="text"  
                            class="form-control" 
                            required
                             name="name" />
							
                             
                        </div>

                        <div class="form-group">
                            
                           	 <label >Task's Route <span style="color:red;">*</span></label>
                            <input type="text" 
                             class="form-control"  
                           required
                             name="url" />
						
                            
                        </div>

                        
                        <div class="form-group ">
                            <label> Task's No <span style="color:red;">*</span></label>
                            
                             <input type="text"  
                            class="form-control" 
                            required
                             name="taskNo" />
                            
                        </div>
                           
                         
                                  


                        
                        <div class="form-group ">
                            <label> Task's Icon <span style="color:red;">*</span></label>
                          
                                <input type="text"  
                                 class="form-control"  
                                required
                                name="icon" />
                           
                        </div>

                         <div class="form-group ">
                            
                            <label> Menu <span style="color:red;">*</span></label>
                                <select class="form-control" name='menu_id' required>

                                    <option value='' hidden selected> Select Menu </option>
                                        @foreach($menus as $menu)
                                        <option value='{{$menu->id}}' 
                                            > 
                                            {{$menu->name}} 
                                        </option>
                                    @endforeach
                                </select>
                            
                        </div>

                        <div class="form-group">
                            <label > <b>Description </b> <span style="color:red;">*</span> </label>
                            <textarea required  class="form-control" style='height:130px' name="descritpion" ></textarea >
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
