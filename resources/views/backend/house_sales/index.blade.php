
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
            <h5 class="card-title">List of {{ $type }} House for Sale/ Rent Request  </h5>

    @include('layouts.messages')

 

     <table class=" table table-bordered table-striped table-sm" id='example' width='100%'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th >Phone</th>
                                <th > Mode </th>
                                <th > Amt </th>
                                <th >Status </th>
                               <th >Reg Date</th>
                                 <th >Action</th>
                             
                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no= 1; ?>
                        @foreach($SaleHouses as $SaleHouse)
                      
                        @if($SaleHouse->status !=0)
                            <tr>
                                <th>{{$no}}</th>
                                <td>{{$SaleHouse->fname}} {{$SaleHouse->mname}} {{$SaleHouse->lname}}</td>
                                <td>{{$SaleHouse->phone1}} {{$SaleHouse->phone2}}</td>
                                <td>
                                  @if($SaleHouse->property_mode == 1)
                                    For Sale -  Landed Property
                                  @elseif($SaleHouse->property_mode == 2)
                                    For Sale - Non Landed Property
                                  @elseif($SaleHouse->property_mode == 3)
                                    For Rent
                                  @endif
                                </td>

                                <td>
                                     @if($SaleHouse->property_mode == 1)
                                     {{$SaleHouse->full_sell_price}} 
                                  @elseif($SaleHouse->property_mode == 2)
                                  {{$SaleHouse->sell_price}} 
                                  @elseif($SaleHouse->property_mode == 3)
                                  {{$SaleHouse->rent_price}} 
                                  @endif
                                 </td>

                                <td>
                                  @if($SaleHouse->status==1) <span class="badge badge-success">Solved</span> 
                                  @elseif($SaleHouse->status==2) <span class="badge badge-danger">Pending</span>   
                                  @endif
                                </td>
                                
                                {{-- <td><?php echo date('D d-M-Y g:i:s A',strtotime($Admin->created_at)); ?> </td> --}}
                                <td><?php echo date('d-M-Y',strtotime($SaleHouse->created_at)); ?> </td>
                                 <td> 
                                  <a href="{{ route('salehouse.show', $SaleHouse->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i></a>
                                 <a href="#!" class="btn-success btn-sm" title="Set as Solved"
                                 onclick="
                                    if( confirm('Are you sure you want to set  This  resquest as solved?')){
                                        event.preventDefault();
                                      document.getElementById('act{{$SaleHouse->id}}').submit();
                                    }
                                  "><i class="fa fa-check"></i></a>
                            
                                <form id="act{{$SaleHouse->id}}" action="{{ route('salehouse.update',$SaleHouse->id ) }}" method="POST" class="d-none">
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
                    {{$SaleHouses->links()}}
  
 





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
