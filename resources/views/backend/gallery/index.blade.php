
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
            <h5 class="card-title">List of All Galleries and Project Images</h5>

		@include('layouts.messages')



   <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image Name</th>
                                <th >Description</th>
                                <th >Image</th>
                                <th >Image Type </th>
                                <th style="width:90px;" >Action</th>
                             
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Accessments1 as $Accessment)
                        @if($Accessment->status ==1)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Accessment->name}}</td>
                                <td>{{$Accessment->description}}</td>
                                <td><a href="{{ asset('storage/gallery/'.$Accessment->image)}}">
                                  <img src="{{ asset('storage/gallery/'.$Accessment->image)}}" height='75px;'/> 
                                </a></td>
                                <td>
                                    @if($Accessment->image_type == 1)
                                      Gallery
                                    @elseif($Accessment->image_type == 2)
                                    Project
                                    @else
                                    Both
                                    @endif
                                  </td>
                                 <td> 
                              @if(CheckAccess::check(44))
                                 <a href="{{route('gallery.edit',$Accessment->id)}}" class="btn-primary btn-sm" title="Edit Gallery "><i class="fa fa-edit"></i></a>
                               @endif  

                               

                               @if(CheckAccess::check(45))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Image ' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Image {{$Accessment->name}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Accessment->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 <form id="del{{$Accessment->id}}" action="{{ route('gallery.destroy',$Accessment->id ) }}" method="POST" class="d-none">
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
