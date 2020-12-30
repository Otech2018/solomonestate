
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
            <h5 class="card-title">List of All Assessments</h5>

		@include('layouts.messages')



    <ul class="nav nav-pills mb-3 nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Avaliable Assessments</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Assessments Working On</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Completed Assessments</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
{{-- Avaliable Assessments starts--}}
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
     <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Topic</th>
                                <th >Keywords</th>
                                <th >Target Country</th>
                                <th >sub-heading </th>
                                <th style="width:90px;" >Action</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Accessments1 as $Accessment)
                        @if($Accessment->status ==1)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Accessment->topic}}</td>
                                <td>{{$Accessment->keyword}}</td>
                                <td>{{$Accessment->target_country}}</td>
                                <td>{{$Accessment->sub_heading}}</td>
                                 <td> 
                              @if(CheckAccess::check(18))
                                 <a href="{{route('accessment.edit',$Accessment->id)}}" class="btn-primary btn-sm" title="Edit Accessment "><i class="fa fa-edit"></i></a>
                               @endif  

                               

                               @if(CheckAccess::check(19))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Course ' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Assessment {{$Accessment->topic}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Accessment->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 <form id="del{{$Accessment->id}}" action="{{ route('accessment.destroy',$Accessment->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>
                               @endif 

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Accessments1->links()}}
  
  </div>
    {{-- Avaliable Assessments ends--}}




{{-- Assessments Working On starts --}}
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Topic</th>
                                <th >Keywords</th>
                                <th >Target Country</th>
                                <th >sub-heading </th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Accessments2 as $Accessment)
                        @if($Accessment->status ==2)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Accessment->topic}}</td>
                                <td>{{$Accessment->keyword}}</td>
                                <td>{{$Accessment->target_country}}</td>
                                <td>{{$Accessment->sub_heading}}</td>
                                
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Accessments2->links()}}
  
  
  </div>
 {{-- Assessments Working On ends --}}
 
 
 
 
 {{-- Completed Assessments starts --}}
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
       <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Topic</th>
                                <th >Keywords</th>
                                <th >Target Country</th>
                                <th >sub-heading </th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ; ?>
                        @foreach($Accessments4 as $Accessment)
                        @if($Accessment->status ==4)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Accessment->topic}}</td>
                                <td>{{$Accessment->keyword}}</td>
                                <td>{{$Accessment->target_country}}</td>
                                <td>{{$Accessment->sub_heading}}</td>
                               
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Accessments4->links()}}
  
  </div>
{{-- Completed Assessments ends --}}


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
