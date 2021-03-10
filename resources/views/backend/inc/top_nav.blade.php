
<?php
if(auth()->user()->status ==2){
    die("<br/><br/><br/><h3 align='center' style='color:red;'>Dear Admin your Account is Suspended please Contact the Super Admin</h3>");
}else if(auth()->user()->status ==0){
         die("<br/><br/><br/><h3 align='center' style='color:red;'>Dear Admin your Account is Deleted please Contact the Super Admin</h3>");

}

?>



<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
<div class="container">
<button class="btn btn-outline-success my-2 my-sm-0" style='margin-right:20px;'  type="button" id="menu-toggle"  data-toggle="collapse" data-target="#menu-content">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/"><img src="{{ asset('img/logo1.png')}}" style="height:50px !important;"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      
    </ul>


    <!--right hand side starts here-->
    <div class="my-2 my-lg-0">

 
      
    <ul class="navbar-nav mr-auto">
       
        
          @guest 
          

        <li class="nav-item">
          <a  style="color:white;" href="/login" class="btn btn-outline-success my-2 my-sm-0" style='margin-right:10px;' >LogIn </a>
        </li>

        <li class="nav-item">
          <a style="color:white;" href="/register" class="btn btn-outline-primary my-2 my-sm-0" >Get Started </a>
        </li>

          @else
          <li class="nav-item">
           <li class="nav-item">
              <a style="color:white;" href="{{route('admin.dashboard')}}" class="nav-link sign-up"><i class="fa fa-home"></i>Dasboard</a>
            </li>
           <li class="nav-item dropdown">
              <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> {{auth()->user()->username}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('myprofile.index')}}"> <i class='fa fa-user'></i> My Profile</a>
                <a class="dropdown-item" href="{{route('change_password1')}}"><i class='fa fa-key'></i>  Change Password</a>
                <div class="dropdown-divider"></div>
                	<a style='color:red' href="#!" class="dropdown-item" 
                    onclick="
                    if( confirm('Are you sure you want to Logout?')){
                        event.preventDefault();
                      document.getElementById('logout-form').submit();
                    }
                  ">
                    <i class='fa fa-sign-out'></i> Logout
                  </a>
                  
              </div>
            </li>  
        	</li>
           
        <li class="nav-item ">
          <a  href="#!" class="btn btn-danger " 
                    onclick="
                    if( confirm('Are you sure you want to Logout?')){
                        event.preventDefault();
                      document.getElementById('logout-form').submit();
                    }
                  ">
                    <i class='fa fa-sign-out'></i> Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
        </li>
             

          @endguest
        
      </ul>
 

    
    </div>
<!--right hand side ends here-->

  </div>
  </div>
</nav>

 
