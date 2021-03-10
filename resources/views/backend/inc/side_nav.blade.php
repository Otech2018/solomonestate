

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">





      <div class="nav-side-menu">
    
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
            <li>
                  <h5>
                   Welcome {{auth()->user()->username}}
                  </h5>
                </li>
                <li>
                  <a href="{{ route('admin.dashboard')}}">
                  <i class="fa fa-dashboard fa-lg" ></i> Dashboard
                  </a>
                </li>
@if(auth()->user()->user_type ==1)
                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Manage Menus <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="<?php if( isset($menu_list)){ echo "active";}?>"><a href="{{ route('menu.index')}}">List Menus </a></li>
                    <li class="<?php if( isset($menu_add)){ echo "active";}?>"><a href="{{ route('menu.create')}}">Add Menu</a></li>
                    
                </ul>



                 <li  data-toggle="collapse" data-target="#products1" class="collapsed ">
                  <a href="#"><i class="fa fa-cogs fa-lg"></i> Manage Tasks <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products1">
                    <li class="<?php if( isset($task_list)){ echo "active";}?>"><a href="{{ route('task.index')}}">List Tasks</a></li>
                    <li class="<?php if( isset($task_add)){ echo "active";}?>"><a href="{{ route('task.create')}}">Add A Task</a></li>
                    
                </ul>

@elseif(auth()->user()->user_type ==2)

<li  data-toggle="collapse" data-target="#products1" class="collapsed ">
                  <a href="#"><i class="fa fa-cogs fa-lg"></i> SuperAdmin <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products1">
                    <li class="<?php if( isset($User_grp_add)){ echo "active";}?>"><a href="{{route('user_group.create')}}">Create A User Group</a></li>
                    <li class="<?php if( isset($User_group_list)){ echo "active";}?>"><a href="{{route('user_group.index')}}">List All User Group</a></li>
                    <li class="<?php if( isset($addAdiminToUserGrp)){ echo "active";}?>"><a href="{{route('user_group.addAdiminToUserGrp')}}">Add Admin To User Group  </a></li>
                     
                </ul>

@endif

 @foreach($Perform_task_grps as $Perform_task_grp)

               <li  data-toggle="collapse" data-target="#menu{{$Perform_task_grp->id}}" class="collapsed">
                  <a href="#"><i class="fa fa-{{$Perform_task_grp->menu->icon}} fa-lg"></i> {{$Perform_task_grp->menu->name}} <span class="arrow"></span></a>
                </li> 

                <ul class="sub-menu collapse" id="menu{{$Perform_task_grp->id}}">
                  @foreach($Perform_task_alls as $Perform_task_all)
                      @if($Perform_task_all->menu_id == $Perform_task_grp->menu_id)

                        @php($res = Str::after($Perform_task_all->task->url, '.'))
                        @if($res == 'show')
                        <li class=""><a href="{{route($Perform_task_all->task->url, 1)}}"> <i class="fa fa-{{$Perform_task_all->task->icon}} "></i> {{$Perform_task_all->task->name}}</a></li>
                        @else
                        <li class=""><a href="{{route($Perform_task_all->task->url)}}"> <i class="fa fa-{{$Perform_task_all->task->icon}} "></i> {{$Perform_task_all->task->name}}</a></li>
                        @endif


                         
                   
                      @endif

                  @endforeach


                    
                </ul>       
      
        @endforeach
              
            </ul>
     </div>
</div>




      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->