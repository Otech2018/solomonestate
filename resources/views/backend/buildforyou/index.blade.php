
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
            <h5 class="card-title">List of {{ $type }} Let's Build For You  Request  </h5>

    @include('layouts.messages')



     <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th >Phone</th>
                                <th >Budget Amt </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($BuildForYous as $BuildForYou)
                        @if($BuildForYou->status !=0)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$BuildForYou->name}}</td>
                                <td>{{$BuildForYou->phone1}}</td>
                                <td>
                                   <span class="badge badge-warning">{{$BuildForYou->budget_amount}}</span> 
                                   
                                 </td>
                                <td>
                                  @if($BuildForYou->status==1) <span class="badge badge-success">Active</span> 
                                  @elseif($BuildForYou->status==2) <span class="badge badge-danger">Pending</span>   
                                  @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($Admin->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($BuildForYou->created_at)); ?> </td>
                                 <td> 
                                  <a href="{{ route('buildyou.show', $BuildForYou->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i></a>
                                 <a href="#!" class="btn-success btn-sm" title="Set as Solved"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  resquest as solved?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$BuildForYou->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                            
                                <form id="act{{$BuildForYou->id}}" action="{{ route('buildyou.update',$BuildForYou->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">

                                </form>

                               
                               

                            
                                 </td>
                                
                            </tr>
                            <?php $no++; ?>
                            @endif
                        @endforeach   
                        </tbody>
                    </table>
                    {{$BuildForYous->links()}}
  
 





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
