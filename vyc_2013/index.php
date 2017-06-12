<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VYC-13</title>
	<link rel="stylesheet" type="text/css" href="css/vyc.css" />
	<script>
		var logged_in=false;
		var info = null;
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36231409-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body>
		<div id="popup_back"></div>
		<div id="popup"></div>
	
		<div id="header">
			<div id="header_center_block"  class="central">
				<table style="width: 100%;">
					<tr>
						<td style="width:  75px;">
							<img id="logo" src="images/SVEmblem_small.png">
						</td>
						<td>
							<span id="convention"><b>Vivekananda Youth Leadership Convention <span style="font-size: 0.8em">2013</span></b></span><br/>
							<span id="presents" style="font-size: 12pt; font-variant: normal; position: relative; left: 2px;"><b>IIT Kanpur</b></span>
							<span id="presents" style="font-size: 12pt; font-variant: normal; padding-left: 281px;"><b>10 - 16th January</b></span>
							<br/>
							
						</td>
						<td>
							<a target="_blank" href="http://www.iitk.ac.in"><img src = "images/brownlog.png" width="75" height="75"></a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="home-gallery" class="central">
			<div id="gallery-slide"></div>
		</div>
	</div>
	<div id="content_wrapper"  class="central">
		<div id="nav">
			<a href="#/home" class="selected nav">Home</a>
			<a href="#/about_us" class="nav">About Us</a>
			<a href="#/speakers" class="nav">Speakers</a>
			<a href="#/events" class="nav">Events</a>
			<a href="#/results" class="nav">Results</a>
			<a href="#/registration" class="nav">Registration</a>
			<a href="#/schedule" class="nav">Schedule</a>
			<a href="#/faq" class="nav">FAQ</a>
			<a href="#/contact_us" class="nav">Contact Us</a>

			<div id="follow_us">
				<br/>
				<div id="nav" style="width:135px;margin-bottom:10px;"><a target="_blank" href="http://www.iitk.ac.in/vs/" style="text-align:center;">Visit <b>Samiti's</b> Webpage</a></div><br/>
				<a style="margin-left: 25px;" target="_blank" href="https://www.facebook.com/VYC2013"><img  follow="follow_logo" src="images/Facebook-Logo.png"/></a>
				<a target="_blank" href="https://www.youtube.com/vsiitk"><img  class="follow_logo" src="images/Youtube-Logo.png"/></a>
			</div>
		</div>
		<div id="content" tabindex="-1">
			<div id="home-page" class="page">
				<?php include('pages/home.php'); ?>
			</div>
			
			<div id="about_us-page" class="page">
				<?php include('pages/about_us.php'); ?>
			</div>
			
			<div id="competitions-page" class="page">
				<?php include('pages/competitions.php'); ?>
			</div>
			
			<div id="events-page" class="page">
				<?php include('pages/events.php'); ?>
			</div>
			
			<div id="results-page" class="page">
				<?php include('pages/results.php'); ?>
			</div>
			
			<div id="speakers-page" class="page">
				<?php include('pages/speakers.php'); ?>
			</div>
			<div id="schedule-page" class="page">
				<?php include('pages/schedule.php'); ?>
			</div>

			<div id="contact_us-page" class="page">
				<?php include('pages/contact_us.php'); ?>
			</div>
			
			<div id="registration-page" class="page">
				<?php include('pages/registration.php'); ?>
			</div>
			
			<div id="faq-page" class="page">
				<?php include('pages/faq.php'); ?>
			</div>
		</div>
	</div>

	<script src="js/jquery/jquery.js"></script>
	<script src="js/jquery/jquery.mCustomScrollbar.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/jquery/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="js/jquery/jquery.kinetic.js" type="text/javascript"></script>
	
	
	<script async src="js/home.js"></script>
	<link rel="stylesheet" type="text/css" href="css/fbslide.css"/>
	<script src="js/jquery/jquery.dotdotdot-packed.js"></script>
	<script src="js/fbslide.js"></script>

	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	
	<script>
		(function($){
			$(window).load(function(){
				$(".page").mCustomScrollbar({
					scrollInertia:100
				});
				$(".mCSB_container.mCS_no_scrollbar").css({ 'height': page_height });
			});
		})(jQuery);
		
	</script>
	<script src="js/registration.js"></script>
	
	<!-- <script src="js/jquery/jquery.validate.js"></script>
	<script>
		jQuery.validator.setDefaults({
			debug: true,
			success: "valid"
		});;
		
		$(".required").rules("add", { 
		  required:true,  
		  minlength:3
		});
	</script> -->
	
	
<!--[if lt IE 9]>
<style>
	.front-gallery-image-info {
		background-image: url(../images/shadow_inset.png);
	}
	
	.no_box_shadow {
		background-image: url('') !important;
	}
</style>
<![endif]-->
</body>
</html>
