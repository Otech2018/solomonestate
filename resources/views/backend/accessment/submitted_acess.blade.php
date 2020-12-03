
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
            <h5 class="card-title">List of All Submiited Assessments</h5>

		@include('layouts.messages')



     <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Topic</th>
                                <th >Keywords</th>
                                <th >Target Country</th>
                                <th >sub-heading </th>
                                <th >Action</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Accessments as $Accessment)
                           <tr>
                                <th>{{$no}}</th>
                                <td>{{$Accessment->topic}}</td>
                                <td>{{$Accessment->keyword}}</td>
                                <td>{{$Accessment->target_country}}</td>
                                <td>{{$Accessment->sub_heading}}</td>
                                 <td> 
                              @if(CheckAccess::check(30))
                                 <a href="{{route('UserAsessment.show',$Accessment->id)}}" class="btn-primary btn-sm" title="Review Accessment "><i class="fa fa-eye"></i></a>
                               @endif  

                               

                              

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                              

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Accessments->links()}}
  
  
 


           
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
