<!doctype html>
<html lang="en-us">

<head>
<!--Page Title-->
<title>{{config('app.name', "solomons Idea")}}</title>
<!--Meta Tags-->
<meta charset="UTF-8">
<meta name="author" content="">
<meta name="keywords" content=""/>
<meta name="description" content="SOLOMON'S IDEAS LTD (RC: 1718316) is just one company you can always and firmly rely on any day, anytime when it comes to Real Estate matters"/>
<!-- Set Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}">
<link rel="stylesheet" href="{{ asset('css/select-theme-default.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css"/>
 <link rel="shortcut icon" href="img/logo1.png" />
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}"> 





<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ asset('engine1/style.css')}}" />
	<script type="text/javascript" src="{{ asset('engine1/jquery.js')}}"></script>
	<!-- End WOWSlider.com HEAD section -->


	@if(isset($gallery))
    <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css')}}" />


@endif
    

    <style>
    	.blink_me {
  animation: blinker 2s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

.tos_p{
	font-size: 16px;
	color:black;
}
    </style>

</head>
<body id='top'>




	@guest 

	@else

<?php if(auth()->user()->status ==6){
    die("<br/><br/><br/><h3 align='center' style='color:red;'>Dear User you Account is Suspended please Contact the  Admin</h3>");
}else if(auth()->user()->status ==0){
         die("<br/><br/><br/><h3 align='center' style='color:red;'>Dear User you Account is Deleted please Contact the  Admin</h3>");

}  ?>

	@endguest




<header >
<div id="top-strip" style="background-color:green;">
	<div class="container">
		<ul class="pull-left social-icons">
			<li><a href="#" class="fa fa-google-plus"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
			<li><a href="#" class="fa fa-pinterest"></a></li>
			<li><a href="#" class="fa fa-dribbble"></a></li>
			<li><a href="#" class="fa fa-linkedin"></a></li>
			<li><a href="#" class="fa fa-facebook"></a></li>
		</ul>
		<div id="login-box" class='pull-right'>
			<a href="#" class='btn btn-success'><span>Online Shop</span></a>
							
			@guest
				<a href="{{route('login')}}" class='fa fa-user'><span>Login</span></a>
				<a href="{{route('register')}}" class='fa fa-pencil'><span>Register</span></a>

			@else
				<a href="#!" class='fa fa-user'><span>{{auth()->user()->username}}</span></a>

					<a href="#!"
				onclick="
								if( confirm('Are you sure you want to Logout?')){
									event.preventDefault();
								document.getElementById('logout-form').submit();
								}
							"
				
				 class='fa fa-sign-out'><span>Log Out</span></a>

			@endguest
			
		</div>
	</div>
</div>
</header>
<!-- /Header -->
<div class="slider-section">
	<div id="premium-bar">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header" style="margin-top:-20px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{route('homepage')}}" style=" color:white !important; font-weight:bold;"><img src="{{ asset('img/logo1.png')}}" width="50px" height="50px" alt="logo">SOLOMON'S IDEAS LTD</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
					@guest
						<li class="@if(isset($homepage)) active @endif"><a href="{{route('homepage')}}">Home</a></li>

					@endguest
						<li class="@if(isset($listing)) active @endif" ><a href="{{route('listing')}}">Listings</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
						<ul class="dropdown-menu">
							{{-- <li><a href="#">About Us</a></li> --}}
							<li><a href="{{route('our_team')}}">Our Team</a></li>
							<li><a a href="{{route('contact_us')}}">contact			</a></li>
							<li><a  href="{{route('project')}}">Our Project</a></li>
							<li><a href="{{route('gallery')}}">Our Gallery</a></li>
						</ul>
						</li>


						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Real Estate<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{route('listing')}}"> Lands/Buildings For Sale/Lease </a></li>
							<li><a href="{{route('our_team')}}">Book Our Agent</a></li>
							<li><a href="{{route('build_u')}}">Let's Build for you</a></li>
							<li><a href="{{route('sale_rent_property')}}">Let's Sale/Rent Your Building For You  Within Days</a></li>
							<li><a href="{{route('sale_rent_land')}}">Let's Sale Your Land For You  Within Days</a></li>
							<li><a href="{{route('save_build')}}">Save To Build/Buy Land or Some Stuff </a></li>
							<li><a href="{{route('save_build')}}">Auto Mobile Savings</a></li>
							<li><a href="{{route('pay_rent')}}">Let's Pay your House Rent</a></li>
						</ul>
						</li>
						<li class="@if(isset($agric)) active @endif"><a href="{{route('agric_consult')}}">Agric Consultancy</a></li>
						@guest
						@else
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-user'></i> {{auth()->user()->username}}<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{route('myrents.index')}}"> <i class='fa fa-home'></i> My House Rent</a></li>
							<li><a href="{{route('mysavings.index')}}"> <i class='fa fa-money'></i> My Savings</a></li>
								<li><a href="{{route('myprofile1.index')}}"> <i class='fa fa-user'></i> My Profile</a></li>
                			<li><a href="{{route('change_password11')}}"><i class='fa fa-key'></i>  Change Password</a></li>
               
							<div class="dropdown-divider"></div>
								<li><a href="#"
								onclick="
								if( confirm('Are you sure you want to Logout?')){
									event.preventDefault();
								document.getElementById('logout-form').submit();
								}
							">
								<i class='fa fa-sign-out'></i> Logout
							</a></li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
						</ul>
						</li>

						@endguest
						
						<li class="active" ><a class="blink_me" href="{{route('pay_rent')}}" >Let's Pay Your Rent </a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
			</nav>
		</div>
	</div>


            @yield('content')
       


<!-- footer-section -->
<footer>
<div class="container" >
	<div class="col-md-3 footer-about">
		<a class="logo" href="#"><img src="{{ asset('img/logo1.png')}}" style="height:80px;" alt="logo"></a>
		<p style="color:white !important; font-weight:normal;">
			<b>SOLOMON'S IDEAS LTD </b>(RC: 1718316) is just one company you can always and 
			firmly rely on any day,
			 anytime when it comes to Real Estate matters.
		</p>
	</div>
	<div class="col-md-3 footer-recent-posts" >
		<h3 class='footer-title'>Links</h3>
		<ul>
			<li><a  href="{{ route('tos') }}" style="font-weight:normal;"  ><i class="fa fa-arrow-circle-right"></i>  Terms And Conditions</a></li>
			<li><a href="{{ route('tos') }}" style="font-weight:normal;"  ><i class="fa fa-arrow-circle-right"></i>   Privacy Policy</a></li>
			<li><a href="{{route('homepage')}}" style="font-weight:normal;"  ><i class="fa fa-arrow-circle-right"></i>  HomePage</a></li>
			<li><a href="{{route('pay_rent')}}" class="btn btn-success" style="font-weight:normal;"  > Let's Pay Your Rent</a></li>
			<li> .</li>
			
			<li><a href="https://web.facebook.com/pg/Solomons-Ideas-Ltd-103408694762381/about/"  target="_blank" class="btn btn-primary" style="font-weight:normal;"  ><i class="fa fa-facebook"></i> We are on  FaceBook</a></li>
		</ul>
	</div>
	<div class="col-md-3 footer-contact-info">
		<h3 class='footer-title'>contact info</h3>
		<p class="website-number" style="font-weight:normal;"  >
			<i class="fa fa-phone"></i> +234 708 7197 054
		</p>
		<p class="website-email" style="font-weight:normal;"  >
			<i class="fa fa-envelope"></i> support@solomonsideas.ltd
		</p>
		<p class="website-fax" style="font-weight:normal;"  >
			<i class="fa fa-map-marker"></i> 119 ORLU ROAD, OWERRI.
		</p>
	</div>
	<div class="col-md-3 footer-newsletter">
		<h3 class='footer-title'>newsletter</h3>
		<p style="font-weight:normal;"  >
			 Let's Keep you Updated About Our Services and Other Information 
			 by Subscribing to Our NewsLetter
		</p>
		<form class='footer-search'>
			<input type="text" placeholder='e-mail'>
			<input type="submit" value="Subscribe">
		</form>
	</div>
</div>
</footer>
<div class="bottom-strip">
	<div class="container">
		<div class="col-md-4">
			<p class='pull-left'>
				<b> © <?php echo date('Y')?> -{{config('app.name', "solomons Ideas")}}
				</b>
			</p>
		</div>
		<div class="col-md-4 bottom-strip-middle">
			<a href="#top" class='fa fa-arrow-circle-up' id='backtop-btn'></a>
		</div>
		<div class="col-md-4">
			<ul class="social-icons">
				<li><a href="#" class="fa fa-google-plus"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="#" class="fa fa-pinterest"></a></li>
				<li><a href="#" class="fa fa-dribbble"></a></li>
				<li><a href="#" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-facebook"></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Javascript -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/select.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
 <script src="{{ asset('dropify/dist/js/dropify.min.js') }}"></script>
 
<script>


        $(document).ready(function(){
            $("select.country").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
               // alert("You have selected the country - " + selectedCountry);
               if(selectedCountry == 162 ){
                  $('#lga').hide(); $('#state').hide(); $('#state-list').show();$('#state-text').hide(); $('#lga-list').show();$('#lga-text').hide();
                    //
                     $('.state').attr('required','required'); 
                     $('.lgaa').attr('required','required');  
                    
               }else{
                 $('#lga').hide(); $('#state').hide(); $('#state-list').hide();$('#state-text').show(); $('#lga-list').hide();$('#lga-text').show();
                  //
                  $('.lgaa').removeAttr('required');
                 $('.state').removeAttr('required');
                }
            });
        });



        $(document).ready(function(){
            $("select.state").change(function(){
                $('.lgaa').prop('selectedIndex', 0);
                var selectedState = $(this).children("option:selected").val();

                if(selectedState =='all'){
                   $('.rankf').hide();   
                 }else{
                   $('.rankf').show();  
                 }
                $('.lga').attr('disabled','disabled');  $('.lga').hide();
                $('.lgaClass'+selectedState).removeAttr('disabled'); 
                 $('.lgaClass'+selectedState).show(); 
                 if(selectedState =='all'){
                   $('.rankf').hide();   
                 }
            });
        });

       

   // Basic
   // $('.dropify').dropify();
   $('.dropify').dropify({
   messages: {
       'default': 'Drag and drop or Click to upload',
       'replace': 'Drag and drop or click to replace',
       'remove':  'Remove',
       'error':   'Ooops, something wrong happended.'
   }
});





</script>

@if(isset($gallery))

 <script src="{{ asset('js/gallery.js') }}"></script>


  <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script>
@endif


<script>
   function optionw(id, elementValue) {
      document.getElementById(id).style.display = elementValue.value >= 10 ? 'block' : 'none';
   }



</script>

</body>

</html>