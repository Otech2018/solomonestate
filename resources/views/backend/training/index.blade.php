
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
            <h5 class="card-title">List of All Courses</h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th >Description</th>
                                <th >Cover Image</th>
                                <th >Action</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Trainings as $Training)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Training->name}}</td>
                                 <td>{{$Training->description}}</td>
                                 <td><img src="/storage/training_img/{{$Training->img}}" height="70px" width="70px"/></td>
                                 <td> 
                              @if(CheckAccess::check(9))
                                 <a href="{{route('train.edit',$Training->id)}}" class="btn-primary btn-sm" title="Edit Course "><i class="fa fa-edit"></i>&nbsp;Course</a>
                               @endif  

                               

                               @if(CheckAccess::check(10))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Course ' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Course {{$Training->name}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Training->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i>&nbsp;Course</a>
                                 <form id="del{{$Training->id}}" action="{{ route('train.destroy',$Training->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>
                               @endif 

                              @if(CheckAccess::check(12))
                                 <a class="btn-primary btn-sm" title='View Lesson' href="{{route('lesson_index1', $Training->id )}}" >View&nbsp;Lessons</a>
                              @endif

                                 @if(CheckAccess::check(11))
                                 
                                 <a class="btn-success btn-sm" title='Add Lesson' href="{{route('lesson.create', $Training->id )}}" >Add&nbsp;Lesson</a>
                              @endif 
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$Trainings->links()}}
              
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
