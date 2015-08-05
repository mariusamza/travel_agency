<!DOCTYPE html>
<html>
	<head>
		<title>Travel-mate Bootstarp Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script src="js/modernizr.custom.js"></script>
		<!-- start-smoth-scrolling -->
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
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="head-bg">
				<!-- container -->
				<div class="container">
					<div class="head-logo">
						<a href="/"><img src="images/logo1.png" alt="" /></a>
					</div>
					<div class="top-nav">
						<span class="menu"><img src="images/menu.png" alt=""></span>
							<ul class="cl-effect-1">
								<li><a href="/">HOME</a></li>                                             
								<li><a href="/about">ABOUT</a></li>
								<li><a href="/booking">BOOKING</a></li>  								
                                <li><a href="/petru">Petru</a></li> 

							</ul>
							<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.cl-effect-1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<!-- container -->
			<div class="container">
				<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							@yield('slides')
						</ul>
					</div>

			</div>
			<!-- container -->
		</div>
		<!-- //header -->
		<!-- banner-grids -->
		<div class="banner-grids">
			<!-- container -->
			<div class="container">
				<div class="banner-grid-info">
					<h3>TOP DESTINATIONS</h3>
					<p>Pellentesque tempor sem in scelerisque mollis.</p>
				</div>
				<div class="top-grids">
					@yield('top_dest')
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-grids -->
		<!-- before -->
		<div class="before">
			<!-- container -->
			<div class="container">
				<h2>Before you leave</h2>
				<div class="before-grids">
					@yield('before_you_leave')
					<div class="clearfix"> </div>
					<div class="search">
						<p>get hottest deals to your inbox</p>
						<form>
							<input type="text" placeholder="Email address" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //before -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-left">
					<p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="footer-right">
					<div class="footer-nav">
						<ul>
								<li><a href="/">HOME</a></li>                                             
								<li><a href="/about">ABOUT</a></li>
								<li><a href="/booking">BOOKING</a></li> 
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
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
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>