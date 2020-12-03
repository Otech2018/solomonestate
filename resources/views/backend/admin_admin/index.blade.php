
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
            <h5 class="card-title">List of All Our Admins </h5>

		@include('layouts.messages')



    <ul class="nav nav-pills mb-3 nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Admins</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Active Admins</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Suspended Admins</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
{{-- Avaliable Assessments starts--}}
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
     <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Group </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Admins as $Admin)
                        @if($Admin->status !=0)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Admin->username}}</td>
                                <td>{{$Admin->email}}</td>
                                <td>
                                   <span class="badge badge-warning">{{$Admin->user_group->name}}</span> 
                                   
                                 </td>
                                <td>
                                  @if($Admin->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($Admin->status==2) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($Admin->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($Admin->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(37))
                                 <a href="#!" class="btn-success btn-sm" title="Activate Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(38))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(39))
                                 <a href="{{route('admin_admin.show',$Admin->id)}}" class="btn-info btn-sm" title="View Admin "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(40))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Admin' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Admin->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 @endif 
                                 <form id="del{{$Admin->id}}" action="{{ route('admin_admin.destroy',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$Admin->id}}" action="{{ route('admin_admin.update',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$Admin->id}}" action="{{ route('admin_admin.edit',$Admin->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                               

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Admins->links()}}
  
  </div>
    {{-- Avaliable Assessments ends--}}


  









{{-- Active Admnis --}}
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Group </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Admins as $Admin)
                        @if($Admin->status ==1)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Admin->username}}</td>
                                <td>{{$Admin->email}}</td>
                                <td>
                                   <span class="badge badge-warning">{{$Admin->user_group->name}}</span> 
                                   
                                 </td>
                                <td>
                                  @if($Admin->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($Admin->status==2) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($Admin->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($Admin->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(37))
                                 <a href="#!" class="btn-success btn-sm" title="Activate Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(38))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(39))
                                 <a href="{{route('admin_admin.show',$Admin->id)}}" class="btn-info btn-sm" title="View Admin "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(40))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Admin' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Admin->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 @endif 
                                 <form id="del{{$Admin->id}}" action="{{ route('admin_admin.destroy',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$Admin->id}}" action="{{ route('admin_admin.update',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$Admin->id}}" action="{{ route('admin_admin.edit',$Admin->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                               

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Admins->links()}}
  

   </div>
 {{-- Active Admins  On ends --}}
 
 
 
 



 {{-- Completed Assessments starts --}}
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Group </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Admins as $Admin)
                        @if($Admin->status ==2 )
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$Admin->username}}</td>
                                <td>{{$Admin->email}}</td>
                                <td>
                                   <span class="badge badge-warning">{{$Admin->user_group->name}}</span> 
                                   
                                 </td>
                                <td>
                                  @if($Admin->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($Admin->status==2) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($Admin->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($Admin->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(37))
                                 <a href="#!" class="btn-success btn-sm" title="Activate Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(38))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend Admin "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$Admin->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(39))
                                 <a href="{{route('admin_admin.show',$Admin->id)}}" class="btn-info btn-sm" title="View Admin "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(40))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete Admin' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This Admin {{$Admin->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$Admin->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 @endif 
                                 <form id="del{{$Admin->id}}" action="{{ route('admin_admin.destroy',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$Admin->id}}" action="{{ route('admin_admin.update',$Admin->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$Admin->id}}" action="{{ route('admin_admin.edit',$Admin->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                               

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Admins->links()}}
  

  
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
