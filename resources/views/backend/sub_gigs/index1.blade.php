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
            <h5 class="card-title">List of All Sub GIgs Category for <big>{{$GigCategory->category_name}} </big></h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                @if(CheckAccess::check(6))
                                  <th>BUTTON</th>
                                @endif
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($GigSubCategories as $GigSubCategory)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$GigSubCategory->sub_category_name}}</td>
                                  @if(CheckAccess::check(6))
                                  <td>
                                     <a href="{{route('sub_gigs.edit',$GigSubCategory->id)}}" class='btn btn-sm btn-success'>Edit <i class='fa fa-edit '></i></a> 
                               
                                  </td>
                                @endif
                            </tr>
                            <?php $no++; ?>
                        @endforeach   
                        </tbody>
                    </table>
                    {{$GigSubCategories->links()}}

           
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
