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
            <h5 class="card-title">  {{$User_group1->name}} Tasks</h5>

		@include('layouts.messages')
    
		  <table class=" table table-bordered table-striped table-sm" id='example'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME </th>
                                <th>DESCRIPTION </th>
                                <th>ACTIONS </th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($Perform_Tasks as $Perform_Task)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$Perform_Task->task->name}}</td> 
                                <td>{{$Perform_Task->task->desc}}</td> 
                                <td>
                               
                                     <form class="form-inline" action={{route('task.update',$Perform_Task->id)}} method='post'>
                                     @csrf
                                     @method("PUT")
                               
                                  <div class="input-group" style='margin-bottom:-4px !important;'>
                                    <select id="inputState" class="form-control form-control-sm" name="admin_task">
                                      <option   @if( $Perform_Task->status==1) selected @endif value="1"> Active</option>
                                       <option   @if( $Perform_Task->status==0) selected @endif value="0">Not Active</option>
                                      
                                      
                                    </select>
                                      <div class="input-group-prepend">
                                        <button type="submit" class="btn @if( $Perform_Task->status==1) btn-success @else btn-danger @endif mb-2 btn-sm ">Set</button>
                                    
                                      </div>
                                     </div>
                                   
                                </form>
                                    
                                     <!-- 
                                     <button type="button" class="btn btn-success mb-2 btn-sm" data-toggle="modal" data-target="#exampleModal{{$Perform_Task->id}} ">
                                      Details
                                    </button>
                                    
                                   
                                    
                               
                          <div class="modal fade" id="exampleModal{{$Perform_Task->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">{{$Perform_Task->task->name}}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <h4 align='center'>DESCRIPTION</h4>
                                  <p style="padding:15px; align:justify;">
                                  {{$Perform_Task->task->desc}}
                                  </p>
                                </div>
                                
                                -->
                                
                              </div>
                            </div>
                          </div>
                           </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                           
                    {{$Perform_Tasks->links()}}

           
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
