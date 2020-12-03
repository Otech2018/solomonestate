
<?php use App\Http\Controllers\Backend\Customs\CheckAccess; ?>


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
            <h5 class="card-title">Lessons On {{$Training->name}}</h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                               <th >Action</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Lessons as $Lesson)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Lesson->name}}</td>
                                 <td>
                                @if(CheckAccess::check(13))
                                 <a class="btn-primary btn-sm" title='View Content' href="{{route('lesson_content', $Lesson->id )}}" ><i class="fa fa-eye"></i>View&nbsp;Content</a>
                              @endif


                              @if(CheckAccess::check(14))
                                 <a class="btn-primary btn-sm" title='Edit Content' href="{{route('lesson.edit', $Lesson->id )}}" ><i class="fa fa-pencil"></i>Edit&nbsp;Content</a>
                              @endif
                                
                              @if(CheckAccess::check(15))
                              

                                     <a href="#!" class="btn-danger btn-sm" title='Delete Lesson ' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Course {{$Lesson->name}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Lesson->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i>&nbsp;Course</a>
                                 <form id="del{{$Lesson->id}}" action="{{ route('lesson_delete',$Lesson->id ) }}" method="POST" class="d-none">
                                    @csrf
                      
                                </form>
                              @endif
                                
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                   
           
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
