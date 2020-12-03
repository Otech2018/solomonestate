<?php $addAdiminToUserGrp ='tffgt';; ?>


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
            <h5 class="card-title">  {{$User_group1->name}} Admins</h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>USERNAME </th>
                                <th>EMAIL </th>
                                <th >FULLNAME</th>
                               <th >USER GROUP</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($admins as $admin)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$admin->username}}</td>
                                <td>{{$admin->email}}</td>
                                 <td> <b>{{$admin->first_name}}</b>,  {{$admin->middle_name}} {{$admin->last_name}}</td>
                                
                               <td>
                                <form class="form-inline" action={{route('updateAddAdiminToUserGrp',$admin->id)}} method='post'>
                                     @csrf
                                     @method("PUT")
                               
                                  <div class="input-group" style='margin-bottom:-4px !important;'>
                                    <select id="inputState" class="form-control form-control-sm" name="user_type">
                                      <option selected value="{{$admin->user_group->id}}"> {{$admin->user_group->name}}</option>
                                       @foreach($User_groups as $User_group)
                                       @if( $User_group->id != $admin->user_group->id)
                                            <option value="{{$User_group->id}}">{{$User_group->name}}</option>
                                      @endif
                                        @endforeach
                                      
                                    </select>
                                      <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-primary mb-2 btn-sm ">Set</button>
                                    
                                      </div>
                                     </div>
                                   
                                </form>
                           </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$admins->links()}}

           
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
