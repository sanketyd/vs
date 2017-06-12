<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Vivekananda samiti: Gallery</title>
		
		
		<link rel="stylesheet" type="text/css" href="styles/global_style.css" />
		<link rel="stylesheet" type="text/css" href="styles/common_style.css" />
		<link href="styles/lightbox.css" rel="stylesheet" type="text/css" media="screen" />

		<script type='text/javascript' src='http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js'></script>
		<script type='text/javascript' src='scripts/global_script.js'></script>
		<script type='text/javascript' src='scripts/gallery_script.js'></script>
		<!-- Start Lightbox library -->
			<script src="scripts/lightbox/prototype.js" type="text/javascript"></script>
			<script src="scripts/lightbox/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
			<script src="scripts/lightbox/lightbox.js" type="text/javascript"></script>
		<!-- End Lightbox library -->
	</head>

	<body>
		<div id="page">
			<div id="pagetop">
				<?php include("subpages/top_pane.php"); ?>
			</div>
			
			<div id="header"></div>
		</div>
		
		
		<div id='left_part'>
			<?php include("subpages/left_pane.php"); ?>
			
			<script type="text/javascript">
				highlightUrl("videos_url");
			</script>
		</div>

		<div id="main">
			<div class="content">
				<!-- Start of image section 1 -->
				<div style='margin-bottom:5px; font-size:1.5em; color:brown;' id='title1'></div>
				<div name='spacing' style='padding-top: 5px;'></div>

				<marquee id="image_scroller1" behavior="scroll" direction="left" scrollamount="5"></marquee>
				<div id="image_grid_view1" style="float:left;"></div>

				<div name='spacing' style='font-size:0.5em;'>&nbsp;</div>
				<hr width="100%"><br>
				<!-- End of image section 1 -->
				
				
				<!-- Start of image section 2 -->
				<div style='margin-bottom:5px; font-size:1.5em; color:brown;' id='title2'></div>
				<div name='spacing' style='padding-top: 5px;'></div>

				<marquee id="image_scroller2" behavior="scroll" direction="left" scrollamount="5"></marquee>
				<div id="image_grid_view2" style="float:left;"></div>
				
				<div name='spacing' style='font-size:0.5em;'>&nbsp;</div>
				<hr width="100%"><br>
				<!-- End of image section 2 -->
				
				
				<!-- Start of image section 3 -->
				<div style='margin-bottom:5px; font-size:1.5em; color:brown;' id='title3'></div>
				<div name='spacing' style='padding-top: 5px;'></div>

				<marquee id="image_scroller3" behavior="scroll" direction="left" scrollamount="5"></marquee>
				<div id="image_grid_view3" style="float:left;"></div>
				
				<div name='spacing' style='font-size:0.5em;'>&nbsp;</div>
				<hr width="100%"><br>
				<!-- End of image section 3 -->
				
				
				<!-- Start of image section 4 -->
				<div style='margin-bottom:5px; font-size:1.5em; color:brown;' id='title4'></div>
				<div name='spacing' style='padding-top: 5px;'></div>

				<marquee id="image_scroller4" behavior="scroll" direction="left" scrollamount="5"></marquee>
				<div id="image_grid_view4" style="float:left;"></div>
				
				<div name='spacing' style='font-size:0.5em;'>&nbsp;</div>
				<hr width="100%"><br>
				<!-- End of image section 4 -->
				
				
				<!-- Start of image section 5 -->
				<div style='margin-bottom:5px; font-size:1.5em; color:brown;' id='title5'></div>
				<div name='spacing' style='padding-top: 5px;'></div>

				<marquee id="image_scroller5" behavior="scroll" direction="left" scrollamount="5"></marquee>
				<div id="image_grid_view5" style="float:left;"></div>
				
				<div name='spacing' style='font-size:0.5em;'>&nbsp;</div>
				<hr width="100%"><br>
				<!-- End of image section 5 -->
			</div>
			<div id="footer"><a href="http://www.bryantsmith.com/template">free css template</a> by <a href="http://www.bryantsmith.com">website design</a></div>
		</div>

		<div id='right_part'>
			<?php include("subpages/right_pane.php"); ?>
		</div>



	</body>
</html>
