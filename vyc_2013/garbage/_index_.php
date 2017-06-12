<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VYC-13</title>
	<link rel="stylesheet" type="text/css" href="css/vyc.css" />
	<script>
		var logged_in=false;
	</script>
</head>

<body>
		<div id="popup_back"></div>
		<div id="popup"></div>
	
		<div id="header">
			<div id="header_center_block"  class="central">
				<table style="width: 100%;">
					<tr>
						<td>
							<span id="convention"><b>Vivekananda Youth Leadership Convention <span style="font-size: 0.8em">2013</span></b></span><br/>
							<span id="presents" style="font-size: 12pt; font-variant: normal;"><b>IIT Kanpur</b></span>
							<span id="presents" style="font-size: 12pt; font-variant: normal; padding-left: 281px;"><b>10 - 16th January</b></span>
							<br/>
							
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
			<a href="#/events" class="nav">Events</a>
			<a href="#/speakers" class="nav">Speakers</a>
			<a href="#/schedule" class="nav">Schedule</a>
			<a href="#/contact_us" class="nav">Contact Us</a>
			<a href="#/my_page" class="nav">Registration</a>
			<div id="follow_us">
				<a target="blank" href="https://www.facebook.com/VYC2013"><img  follow="follow_logo" src="images/Facebook-Logo.png"/></a>
				<a target="blank" href="https://www.youtube.com/vsiitk"><img  class="follow_logo" src="images/Youtube-Logo.png"/></a>
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
			
			<div id="speakers-page" class="page">
				<?php include('pages/speakers.php'); ?>
			</div>
			<div id="schedule-page" class="page">
				<?php include('pages/schedule.php'); ?>
			</div>

			<div id="contact_us-page" class="page">
				<?php include('pages/contact_us.php'); ?>
			</div>
			
			<div id="my_page-page" class="page">
				<?php include('pages/_my_page_.php'); ?>
			</div>
		</div>
	</div>

	<script src="js/jquery/jquery.js"></script>
	<script src="js/home.js"></script>

	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/jquery/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="js/jquery/jquery.kinetic.js" type="text/javascript"></script>
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".page").mCustomScrollbar({
					scrollInertia:500
				});
			});
		})(jQuery);
		
	</script>
	
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
	<script src="js/registration.js"></script>
	
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
