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
            <h5 class="card-title">List of All Property for <big>{{$GigCategory->category_name}} </big></h5>

		@include('layouts.messages')
		  <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                  <th>BUTTON</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($GigSubCategories as $GigSubCategory)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$GigSubCategory->sub_category_name}}</td>
                                <td>
                                  <a href="{{route('listing_details',$GigSubCategory->id)}}"  target="_blank" class='btn btn-sm btn-success' title="View Details"> <i class='fa fa-eye '></i></a> 

                                  @if(CheckAccess::check(6))
                                    
                                      <a href="#!"
                                      onclick="if( confirm('Are you sure you want to Delete This Property {{$GigSubCategory->sub_category_name}}?')){
                                        event.preventDefault();
                                      document.getElementById('del{{$GigSubCategory->id}}').submit();
                                    }"
                                     class='btn btn-sm btn-danger' title="Delete"> <i class='fa fa-trash'></i></a>  |



                                      @if($GigSubCategory->featured == 1)

                                        <a href="#!" onclick="if( confirm('Are you sure you want to Remove {{$GigSubCategory->sub_category_name}} as a featured property?')){
                                        event.preventDefault();
                                      document.getElementById('rsus{{$GigSubCategory->id}}').submit();
                                    }" class='btn btn-sm btn-success' title="Remove Featured"> <i class='fa fa-star '></i></a>

                                      @else

                                        <a href="#!" onclick="if( confirm('Are you sure you want to set {{$GigSubCategory->sub_category_name}} as a featured property?')){
                                        event.preventDefault();
                                      document.getElementById('sus{{$GigSubCategory->id}}').submit();
                                    }" class='btn btn-sm btn-danger' title="Featured"> <i class='fa fa-star '></i></a>


                                      @endif
                                    @endif

                              </td>

                                 <form id="del{{$GigSubCategory->id}}" action="{{ route('sub_gigs.destroy',$GigSubCategory->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">

                                </form>



                                <form id="sus{{$GigSubCategory->id}}" action="{{ route('sub_gigs.update',$GigSubCategory->id ) }}" method="POST" class="d-none">
                                    @csrf
                                <input type="hidden" name="_method" value="put">
                                </form>


                                 <form id="rsus{{$GigSubCategory->id}}" action="{{ route('fea.subgigs',$GigSubCategory->id ) }}" method="POST" class="d-none">
                                    @csrf
                                <input type="hidden" name="_method" value="put">

                                </form>
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
