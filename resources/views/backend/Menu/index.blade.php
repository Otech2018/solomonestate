<?php $menu_list ='tffgt';; ?>


@extends('layouts.admin')

@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


   @include('backend.inc.top_nav')
     

     

      <div class="container-fluid">
      <br/><br/><br/>
      <div class="row justify-content-center">
       <div class="col-md-8">
      <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">List of Menus</h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th >DESCRIPTION</th>
                                <th >ICON</th>
                                <!--th >ACTION</th-->
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($menus as $menu)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$menu->name}}</td>
                                 <td>{{$menu->desc}}</td>
                                 <td>  <i class='fa fa-{{$menu->icon}} '></i></i> </i></td>
                                 <!--td>Edit <i class='fa fa-edit '></i></td-->
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$menus->links()}}

           
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
