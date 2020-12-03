<?php $User_grp_add ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-10">
      <div class="card shadow-lg">
        <div class="card-body">
         <a class="btn btn-primary float-right" target="_blank" href="{{route('lesson_img')}}"><i class="fa fa-image"></i></a>
            <h5 class="card-title">Create A New Lesson</h5>

         @include('layouts.messages')    
		<form method="POST" action={{route('lesson.store')}} enctype="multipart/form-data">
                        @csrf


            <div class="form-group">
                            <label > Topic  <span style="color:red;">*</span></label>
                            <input type="text"  
                            class="form-control" 
                            required
                             name="name" />
                             
                        </div>

              <div class="form-group ">
                            
                            <label> Select A course <span style="color:red;">*</span></label>
                                <select class="form-control" name='course' required>

                                    <option value='' hidden selected> Select A course </option>
                                        @foreach($Trainings as $Training)
                                        <option value='{{$Training->id}}'> 
                                            {{$Training->name}} 
                                        </option>
                                    @endforeach
                                </select>
                            
                        </div>             
                        

                        <div class="form-group">
                            <label > Content  <span style="color:red;">*</span></label>
                            <textarea class="form-control"  name="content"  id="editor1"></textarea >
                        </div>
            <br/>
            <button class="btn btn-success float-right" type="submit">Save</button>
          </div>
        </form>

           
        </div>
        </div>
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
