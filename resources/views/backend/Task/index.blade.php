<?php $task_list ='tffgt';; ?>


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
            <h5 class="card-title">List of Tasks</h5>

		@include('layouts.messages')
		
		<table class=" table table-bordered table-striped table-sm" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>MENU</th>
                                <th >DESCRIPTION</th>
                                <th >ICON</th>
                                <th >TASK NO</th>
                                <th>ROUTE NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($tasks as $task)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$task->name}}</td>
                                <td>{{$task->menu->name}}</td>
                                 <td>{{$task->desc}}</td>
                                 <td><i class="fa fa-{{$task->icon}}"></i></td>
                                 <td>{{$task->task_no}}</td>
                                 <td>{{$task->url}}</td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$tasks->links()}}
					
					
					
			           
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
