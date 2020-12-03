
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
            <h5 class="card-title">List of All Our Users</h5>

		@include('layouts.messages')



    <ul class="nav nav-pills mb-3 nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Active Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Unverified Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Suspended Users</a>
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
                                <th >User Type </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Users as $User)
                        @if($User->status !=0)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$User->username}}</td>
                                <td>{{$User->email}}</td>
                                <td>
                                    @if($User->user_type==1) <span class="badge badge-primary">Writer</span> 
                                    @else<span class="badge badge-success">Buyer</span> @endif
                                 </td>
                                <td>
                                  @if($User->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($User->status==6) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($User->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($User->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(22))
                                 <a href="#!" class="btn-success btn-sm" title="Activate User "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(24))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend User "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(23))
                                 <a href="{{route('admin_users.show',$User->id)}}" class="btn-info btn-sm" title="View User "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(21))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete User' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$User->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                 
                               @endif 



                                 <form id="del{{$User->id}}" action="{{ route('admin_users.destroy',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$User->id}}" action="{{ route('admin_users.update',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$User->id}}" action="{{ route('admin_users.edit',$User->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Users->links()}}
  
  </div>
    {{-- Avaliable Assessments ends--}}


  









{{-- Assessments Working On starts --}}
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
       <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Type </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Users as $User)
                        @if($User->status ==1)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$User->username}}</td>
                                <td>{{$User->email}}</td>
                                <td>
                                    @if($User->user_type==1) <span class="badge badge-primary">Writer</span> 
                                    @else<span class="badge badge-success">Buyer</span> @endif
                                 </td>
                                <td>
                                  @if($User->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($User->status==6) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($User->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($User->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(22))
                                 <a href="#!" class="btn-success btn-sm" title="Activate User "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(24))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend User "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(23))
                                 <a href="{{route('admin_users.show',$User->id)}}" class="btn-info btn-sm" title="View User "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(21))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete User' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$User->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                  @endif 
                                 <form id="del{{$User->id}}" action="{{ route('admin_users.destroy',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$User->id}}" action="{{ route('admin_users.update',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$User->id}}" action="{{ route('admin_users.edit',$User->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                              

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Users->links()}}
  </div>
 {{-- Assessments Working On ends --}}
 
 
 
 



 {{-- Completed Assessments starts --}}
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
       <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Type </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Users as $User)
                        @if($User->status >=2 && $User->status!=6)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$User->username}}</td>
                                <td>{{$User->email}}</td>
                                <td>
                                    @if($User->user_type==1) <span class="badge badge-primary">Writer</span> 
                                    @else<span class="badge badge-success">Buyer</span> @endif
                                 </td>
                                <td>
                                  @if($User->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($User->status==6) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($User->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($User->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(22))
                                 <a href="#!" class="btn-success btn-sm" title="Activate User "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(24))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend User "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(23))
                                 <a href="{{route('admin_users.show',$User->id)}}" class="btn-info btn-sm" title="View User "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(21))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete User' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$User->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                  @endif 
                                 <form id="del{{$User->id}}" action="{{ route('admin_users.destroy',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$User->id}}" action="{{ route('admin_users.update',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$User->id}}" action="{{ route('admin_users.edit',$User->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                               

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Users->links()}}
  
  </div>
{{-- Completed Assessments ends --}}








 {{-- Completed Assessments starts --}}
  <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
       <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th >Email</th>
                                <th >User Type </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Users as $User)
                        @if($User->status ==6)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$User->username}}</td>
                                <td>{{$User->email}}</td>
                                <td>
                                    @if($User->user_type==1) <span class="badge badge-primary">Writer</span> 
                                    @else<span class="badge badge-success">Buyer</span> @endif
                                 </td>
                                <td>
                                  @if($User->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($User->status==6) <span class="badge badge-danger">Suspended</span>   
                                  @else <span class="badge badge-warning">Unverified</span> @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($User->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($User->created_at)); ?> </td>
                                 <td> 
                              @if(CheckAccess::check(22))
                                 <a href="#!" class="btn-success btn-sm" title="Activate User "
                                 onclick="
                                    if( confirm('Are you sure you want to Activate This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                               @endif  

                               @if(CheckAccess::check(24))
                                 <a href="#!" class="btn-warning btn-sm" title="Suspend User "
                                 onclick="
                                    if( confirm('Are you sure you want to Suspend This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$User->id}}').submit();
                                    }
                                  "><i class="fa fa-close"></i></a>
                               @endif

                              @if(CheckAccess::check(23))
                                 <a href="{{route('admin_users.show',$User->id)}}" class="btn-info btn-sm" title="View User "><i class="fa fa-eye"></i></a>
                               @endif 
                               

                               @if(CheckAccess::check(21))
                                 <a href="#!" class="btn-danger btn-sm" title='Delete User' 
                                  onclick="
                                    if( confirm('Are you sure you want to Delete This User {{$User->username}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$User->id}}').submit();
                                    }
                                  ">
                                 
                                 <i class="fa fa-trash"></i></a>
                                  @endif 

                                 <form id="del{{$User->id}}" action="{{ route('admin_users.destroy',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>


                                <form id="act{{$User->id}}" action="{{ route('admin_users.update',$User->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                                <form id="sus{{$User->id}}" action="{{ route('admin_users.edit',$User->id ) }}" method="GET" class="d-none">
                                    @csrf
                 
                                </form>
                              

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                               @endif 

                        @endforeach   
                        </tbody>
                    </table>
                    {{$Users->links()}}
  
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
