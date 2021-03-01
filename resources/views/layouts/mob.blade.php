<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
<title>{{config('app.name', "solomons Idea")}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">
    <meta name="description" content="SOLOMON'S IDEAS LTD (RC: 1718316) is just one company you can always and firmly rely on any day, anytime when it comes to Real Estate matters"/>

	<link rel="stylesheet" href="{{ asset('mob/css/materialize.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/fakeLoader.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('mob/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/logo1.png')}}" />

</head>
<body>

	<!-- navbar top -->
	<div class="navbar-top">
		<div class="side-nav-panel-left">
			<!-- site brand	 -->
			<div class="site-brand">
                <a href="index-2.html"><h1><span> <img src="{{ asset('img/logo1.png')}}" width="50px" height="50px" /></span></h1></a>
			</div>
			<!-- end site brand	 -->
		</div>
		<div class="triangle-border"></div>
		<div class="side-nav-panel-right">
			<a href="#" data-activates="slide-out-left" class="side-nav-right"><i class="fa fa-bars"></i></a>
		</div>
	</div>
	<!-- end navbar top -->

	<!-- side nav left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
			<li class="profil">
				<img src="img/profile.jpg" alt="">
				<h2>John Doe</h2>
				<h6>Mobile Developer</h6>
			</li>
			<li class="li-top">
				<div class="collapsible-header"><i class="fa fa-home"></i>Home <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="index-2.html">Home v1</a></li>
						<li><a href="index2.html">Home v2</a></li>
						<li><a href="index3.html">Home v3</a></li>
						<li><a href="index4.html">Home v4</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-th-list"></i>Properties List <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="list-grid.html">List Grid</a></li>
						<li><a href="list-list.html">List List</a></li>
						<li><a href="list-full.html">List Full</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-th-large"></i>Properties Details <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="single.html">Details v1</a></li>
						<li><a href="single2.html">Details v2</a></li>
						<li><a href="single3.html">Details v3</a></li>
						<li><a href="single4.html">Details v4</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-file-o"></i>Pages <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="agent.html">Agent</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="error404.html">404</a></li>
						<li><a href="testimonial.html">Testimonial</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-bold"></i>Blog <span><i class="fa fa-caret-down"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</li>
			<li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
			<li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href="register.html"><i class="fa fa-user-plus"></i>Register</a></li>
		</ul>
	</div>
	<!-- end side nav left-->
	



    @yield('content')



	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="about-us-foot">
				<h6>BAITUN</h6>
				<p>is a lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
			</div>
			<div class="social-media">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>
			<div class="copyright">
				<span>© All Right Reserved</span>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- scripts -->
	<script src="{{ asset('mob/js/jquery.min.js')}}"></script>
	<script src="{{ asset('mob/js/materialize.min.js')}}"></script>
	<script src="{{ asset('mob/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('mob/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('mob/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('mob/js/fakeLoader.min.js')}}"></script>
	<script src="{{ asset('mob/js/main.js')}}"></script>
<script>
     $(document).ready(function(){
      $('.carousel').carousel();
      
    });
</script>
</body>

</html>