<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="w3ls-banner jarallax">
		<div class="w3lsbanner-info">
			<!-- header -->
			<div class="header">
				<div class="container">   
					<div class="agile_header_grid"> 
						<div class="header-mdl agileits-logo"><!-- header-two --> 
							<h1><a href="{{ url('/dashboard')}}">ANY's PET HOUSE ADMIN</a></h1> 
						</div>
						<div class="agileits_w3layouts_sign_in">
						<button type="button" class="btn btn-danger"
						  href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
											</button>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form></a>
					</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="header-nav"><!-- header-three --> 	
						<nav class="navbar navbar-default">
							<!-- <div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> 
							</div> -->
							<!-- top-nav -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav cl-effect-16">
									<li><a href="{{ url('/dashboard') }}"  class="active" data-hover="Home">Home</a></li>
									<li><a href="{{ url('/manageuser')}}"> Data User</a></li>
                                    <li><a href="{{ url('/product')}}">Produk</a></li>
                                    <li><a href="{{ url('/uploadberita')}}">Kelola Berita</a></li>
                                    <li><a href="{{ url('/transaksi')}}">Transaksi </a></li>
									<!-- <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="/icons" data-hover="Web Icons">Web Icons</a></li>
											<li><a href="/codes" data-hover="Short Codes">Short Codes</a></li>
										</ul>
									</li>  -->
									<li><a href="{{ url('/managehotel')}}" data-hover="Pet House">Pet House</a></li>
								</ul>  
								<div class="clearfix"> </div>	
							</div>
						</nav>    
					</div>	
				</div>	
			</div>	
            <!-- //header -->
            @yield('content')
		</div>	
	</div>	
    <!-- //banner -->
    @yield('content2')
	<!-- footer -->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 col-sm-6 footer-logo">
						<div class="agileits-logo"> 
							<h2><a href="/">ANY's PET HOUSE</a></h2> 
						</div>
						<h4><p>Spoiling your Pet's in here. Thanks For Your Visiting... </p></h4>
					</div>
					<div class="col-md-3 col-sm-6 footer-grid">
						<h3>Navigation</h3>
						<ul>
						<li><a href="{{ url('/dashboard') }}"  class="active" data-hover="Home">Home</a></li>
									<li><a href="{{ url('/manageuser')}}"> Data User</a></li>
                                    <li><a href="{{ url('/product')}}">Produk</a></li>
                                    <li><a href="{{ url('/uploadberita')}}">Kelola Berita</a></li>
                                    <li><a href="{{ url('/transaksi')}}">Transaksi </a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-list">
						<!-- <h3>Latest Posts</h3> -->
						<!-- <ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Vestibulum ante ipsum</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Phasellus at eros</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Aliquam vitae tristique</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Pellentesque lobortis</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Class aptent taciti</li>
						</ul> -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p>© 2019 ANY's PET HOUSE All rights reserved | Design by Alfi Yandi Nadia</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal sign in  -->
	<div class="modal bnr-modal about-modal w3-agileits fade" id="login" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->      
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item" aria-controls="tab_item-0"><span>Login</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1"><span>Register</span></li> 
							</ul>	 
							<div class="clearfix"> </div>	
							<div class="resp-tabs-container">
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="agileits-login">
										<form action="#" method="post">
											<input type="email" class="email" name="Email" placeholder="Email" required=""/>
											<input type="password" class="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Remember me ?</span> 
														</label> 
													</li>
													<li> <a href="#">Forgot password?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="LOGIN">  	
											</div>	
										</form>
									</div> 
								</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="login-top sign-top">
										<div class="agileits-login">
											<form action="#" method="post">
												<input type="text" name="Username" placeholder="Username" required="">
												<input type="email" class="email" name="Email" placeholder="Email" required=""/>
												<input type="password" class="password" name="Password" placeholder="Password" required=""/>
												<input type="password" class="password" name="Password" placeholder="Password" required=""/>
												<input type="password" class="password" name="Password" placeholder="Password" required=""/>	
												<label class="anim">
													<input type="checkbox" class="checkbox">
													<span> I accept the terms of use</span> 
												</label> 
												<div class="w3ls-submit"> 
													<input class="register" type="submit" value="REGISTER">  
												</div>
											</form> 
										</div>  
									</div>
								</div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>   
				</div> <!-- //login-page -->
			</div>
		</div>
	</div>
	<!-- //modal sign in -->  
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>  
	<!-- //js -->  
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax -->
	<!-- ResponsiveTabs js -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs js -->  
	<!-- banner-type-text -->
	<script src="js/typed.js" type="text/javascript"></script>
    <script>
		$(function(){

			$("#typed").typed({
				// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
				stringsElement: $('#typed-strings'),
				typeSpeed: 30,
				backDelay:700,
				loop: true,
				contentType: 'html', // or text
				// defaults to false for infinite loop
				loopCount: false,
				callback: function(){ foo(); },
				resetCallback: function() { newTyped(); }
			});

			$(".reset").click(function(){
				$("#typed").typed('reset');
			});

		}); 
		function newTyped(){ /* A new typed object */ }

		function foo(){ console.log("Callback"); }
    </script>
	<!-- //banner-type-text -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --> 
	<script type="text/javascript">var postcss = require("gulp-html-postcss");
		var unprefix = require("postcss-unprefix");
		var autoprefixer = require("autoprefixer");
		 
		gulp.task("clear-css", function () {
			var processors = [
				unprefix,
				autoprefixer,
			];
			return gulp.src("./src/**/*.css")
				.pipe(postcss(processors))
				.pipe(gulp.dest('./dest'));
		});</script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<script type="text/javascript">var postcss = require("gulp-html-postcss");
	var unprefix = require("postcss-unprefix");
	var autoprefixer = require("autoprefixer");
	 
	gulp.task("clear-css", function () {
		var processors = [
			unprefix,
			autoprefixer,
		];
		return gulp.src("./src/**/*.css")
			.pipe(postcss(processors))
			.pipe(gulp.dest('./dest'));
	});</script>
	
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>