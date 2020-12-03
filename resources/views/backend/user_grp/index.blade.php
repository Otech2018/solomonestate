<?php $User_group_list ='tffgt';; ?>


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
            <h5 class="card-title">List of User Groups</h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th >DESCRIPTION</th>
                               <th >ACTION</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($User_groups as $User_group)  
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$User_group->name}}</td>
                                 <td>{{$User_group->desc}}</td>
                                <td>
                                  <a href="{{route('user_group.edit', $User_group->id)}}" class='btn btn-sm btn-success'>Edit <i class='fa fa-edit '></i></a> 
                                  <a href="{{route('user_group.setTask', $User_group->id)}}" class='btn btn-sm btn-danger'>Set Task <i class='fa fa-cog'></i></a>
                                  <a href="{{route('user_group.addAdiminToUserGrp1', $User_group->id)}}" class='btn btn-sm btn-primary'>Admins <i class='fa fa-user'></i></a>
                                 </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$User_groups->links()}}

           
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
