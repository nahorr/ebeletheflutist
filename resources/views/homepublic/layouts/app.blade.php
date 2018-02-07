<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home - Nahorr Analytics</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Ebele The Flutist">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{asset('brave/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="{{asset('brave/css/font-awesome.min.css')}}" rel="stylesheet">
		<!-- Magnific Popup -->
		<link href="{{asset('brave/css/magnific-popup.css')}}" rel="stylesheet">
		<!-- Owl carousel -->
		<link href="{{asset('brave/css/owl.carousel.css')}}" rel="stylesheet">
		
		<!-- CSS for this page -->
		<!-- Revolution Slider -->
		<link href="{{asset('brave/css/settings.css')}}" rel="stylesheet">
		
		<!-- Base style -->
		<link href="{{asset('brave/css/styles/style.css')}}" rel="stylesheet">
		<!-- Skin CSS -->
		<link href="{{asset('brave/css/styles/skin-black.css')}}" rel="stylesheet" id="color_theme">
		
		<!-- Custom CSS. Type your CSS code in custom.css file -->
		<link href="{{asset('brave/css/custom.css')}}" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<!-- Add class "boxed" along with body for boxed layout. -->
	<!-- Add "pattern-x" (1 to 5) for background patterns. -->
	<!-- Add "img-x" (1 to 5) for background images. -->
	<body>
	
		@yield('content')
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{asset('brave/js/jquery.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('brave/js/bootstrap.min.js')}}"></script>
		<!-- Placeholders JS -->
		<script src="{{asset('brave/js/placeholders.js')}}"></script>
		<!-- Magnific Popup -->
		<script src="{{asset('brave/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Owl carousel -->
		<script src="{{asset('brave/js/owl.carousel.min.js')}}"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{asset('brave/js/respond.min.js')}}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{asset('brave/js/html5shiv.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('brave/js/main.js')}}"></script>
		
		<!-- Javascript for this page -->
		<!-- Revolution slider -->
		<script src="{{asset('brave/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('brave/js/jquery.themepunch.revolution.min.js')}}"></script>		
		<!-- Waypoints -->
		<script src="{{asset('brave/js/waypoints.min.js')}}"></script>
		<!-- jQuery CountTo -->
		<script src="{{asset('brave/js/jquery.countTo.js')}}"></script>
		
		<script type="text/javascript">
			<!-- Counting code -->
			$(document).ready(function(){
				// Way Points With Count To()
				$('.number-count').waypoint(function(down){
					if(!$(this).hasClass('stop-counter'))
					{
						$(this).countTo();
						$(this).addClass('stop-counter');
					}
				}, { 
					offset: '90%' 
				});
			});		
		</script>
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('.r-slider .banner').revolution({
					delay:7000,
					startheight:400,
					startwidth:1000,
					startWithSlide:0,
		 
					fullScreenAlignForce:"off",
					autoHeight:"off",
		 
					shuffle:"off",
		 
					onHoverStop:"on",
		 
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:3,
		 
					hideThumbsOnMobile:"on",
					hideNavDelayOnMobile:1500,
					hideBulletsOnMobile:"off",
					hideArrowsOnMobile:"off",
					hideThumbsUnderResoluition:0,
		 
					hideThumbs:10,
					hideTimerBar:"on",
		 
					keyboardNavigation:"on",
		 
					navigationType:"bullet",
					navigationArrows:"solo",
					navigationStyle:"round",
		 
					navigationHAlign:"center",
					navigationVAlign:"bottom",
		 
					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,
		 
					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,
		 
		 
					touchenabled:"on",
					swipe_velocity:"0.7",
					swipe_max_touches:"1",
					swipe_min_touches:"1",
					drag_block_vertical:"false",
		 
					stopAtSlide:-1,
					stopAfterLoops:-1,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					hideSliderAtLimit:0,
		 
					dottedOverlay:"none",
		 
					spinned:"spinner4",
		 
					fullWidth:"off",
					forceFullWidth:"off",
					fullScreen:"off",
					fullScreenOffsetContainer:"#topheader-to-offset",
		 
				});
			});
		</script>
		
		<!-- Custom JS. Type your JS code in custom.js file -->
		<script src="{{asset('brave/js/custom.js')}}"></script>
		
		<!-- 
		Style switcher. This is just for demo purpose only. 
		If you don't want remove the below line.
		Some of the features of style switcher won't work on offline. THey only work when you upload it to server 
		-->
		<!-- <script src="style-switcher/style-switcher.js"></script> -->
		
	</body>	
</html>