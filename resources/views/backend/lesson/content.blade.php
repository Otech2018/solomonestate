
<?php use App\Http\Controllers\Backend\Customs\CheckAccess; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     
     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-12">
      <div class="card shadow-lg">
        <div class="card-body">
        <h2 class="card-title" align='center'>{{$content->training->name}}</h2>
        <hr/>

            <h3 class="card-title">{{$content->name}}</h3>

		@include('layouts.messages')
		 <div class="row">
          <div class="col-md-8">  
          
          {!! $content->content !!}
          </div> 
          <div class="col-md-4" style="padding-left:10px; border-left:2px solid black;">  
            @foreach($Lessons as $Lesson)
                <p><b><a  href="{{route('lesson_content', $Lesson->id )}}" > {{$Lesson->name}}</a></b></p>
                                
            @endforeach 
          
          </div>            
      </div>                  
                       
                   
           
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
