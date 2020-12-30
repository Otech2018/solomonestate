

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
        <div class="card-body">TOPIC:
            <h2 style="font-size:27px; align:center;"> {{$assessment->topic}} </h2>

         @include('layouts.messages')    
		                  
                       
                        

                          <div >
                          <img src="{{asset('storage/'.$UserAssessment->feature_image)}}"  />
                            {!! $UserAssessment->content !!}
                            </div >
                       

            <br/><hr/>
            <h3 style="font-weight:bold;font-size:25px;">Writers Basic Info</h3>
            <table class="table table-sm table-bordered table-striped">
                <tr><td><b>Username: </b></td>  <td>  {{ $UserAssessment->user->username }}</td></tr>
                 <tr> <td><b>Phone: </b></td>  <td>  {{ $UserAssessment->user->phone }}</td></tr>
                 <tr> <td><b>Email: </b></td>  <td>  {{ $UserAssessment->user->email }}</td></tr>
                 <tr> <td><b>Gender: </b></td>  <td>  {{ $UserAssessment->user->gender }}</td></tr>
            </table>



            <button class="btn btn-success btn-sm" onclick="
                                    if( confirm('Are you sure you want to Approve This Content??')){
                                        event.preventDefault();
                                      document.getElementById('act{{$UserAssessment->id}}').submit();
                                    }
                                  "> 
            <i class="fa fa-check"></i> Approve</button>




            
            
            <button class="btn btn-danger btn-sm" onclick="
                                    if( confirm('Are you sure you want to Reject This Content??')){
                                        event.preventDefault();
                                      document.getElementById('del{{$UserAssessment->id}}').submit();
                                    }
                                  ">
             <i class="fa fa-close"></i> Reject</button>





            {{-- <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-comment"></i> Comment</a> --}}
          </div>


            {{-- Reject Content --}}
          <form id="del{{$UserAssessment->id}}" action="{{ route('UserAsessment.destroy',$assessment->id ) }}" method="POST" class="d-none">
              @csrf
              <input type="hidden" name="_method" value="delete">

          </form>

          {{-- Approve Content --}}
          <form id="act{{$UserAssessment->id}}" action="{{ route('UserAsessment.edit',$assessment->id ) }}" method="POST" class="d-none">
              @csrf
              <input type="hidden" name="_method" value="GET">

          </form>





          <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
                                
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalCenterTitle">Comment </h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{ route('UserAsessment.update',$assessment->id ) }}"  method="POST">
         @csrf <input type="hidden" name="_method" value="put">

      <div class="modal-body">
            <div class="form-group">
                <textarea class="form-control"  name="note" required></textarea >
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Comment</button>
      </div>
      </form>
    </div>
    
  </div>
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
