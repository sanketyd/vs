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
		
		<script type='text/javascript'>
			$j(document).ready(function() {
				var index;
				
				setTimeout("imageSlider1('images/swamiji_images/')", 1);
				setTimeout(quotationSlider, 1);
				
				index = 0;
				imageSection[index] = new ImageSection();
				var images = new Array('IMG_2367.JPG', 'IMG_2372.JPG', 'IMG_2375.JPG', 'IMG_2377.JPG', 'IMG_2380.JPG', 'IMG_6390.JPG', 'IMG_6393.JPG', 'IMG_6395.JPG', 'IMG_6397.JPG');
				var imagesFolderPath = "images/book_exhibition/";
				marqueeId = "image_scroller1";
				gridViewId = "image_grid_view1";
				var sectionHeading = "Book exhibition pics";
				sectionHeading += " <a href='#' id='" + marqueeId + "_url' onclick='imageSection[" + index + "].switchToListView()'>Switch to List view</a>" + " <a href='#' id='" + gridViewId + "_url' onclick='imageSection[" + index + "].switchToGridView()'>Switch to Grid view</a>";
				imageSection[index].setImages(images);
				imageSection[index].setImagesFolderPath(imagesFolderPath);
				imageSection[index].setScrollerIndex(index);
				imageSection[index].setMarqueeId(marqueeId);
				imageSection[index].setGridViewId(gridViewId);
				imageSection[index].insertImgInListView();
				imageSection[index].insertImgInGridView();
				$j("#title" + (index+1)).html(sectionHeading);
				imageSection[index].switchToListView();
				
				
				index++;
				imageSection[index] = new ImageSection();
				var images = new Array('IMG_2299.JPG', 'IMG_2303.JPG', 'IMG_2326.JPG', 'IMG_2328.JPG', 'IMG_2331.JPG', 'IMG_2332.JPG', 'IMG_2336.JPG', 'IMG_2347.JPG', 'IMG_2352.JPG', 'IMG_2354.JPG', 'IMG_2364.JPG', 'IMG_2365.JPG');
				var imagesFolderPath = "images/medical_camp_2011/";
				marqueeId = "image_scroller2";
				gridViewId = "image_grid_view2";
				var sectionHeading = "Medical camp pics";
				sectionHeading += " <a href='#' id='" + marqueeId + "_url' onclick='imageSection[" + index + "].switchToListView()'>Switch to List view</a>" + " <a href='#' id='" + gridViewId + "_url' onclick='imageSection[" + index + "].switchToGridView()'>Switch to Grid view</a>";
				imageSection[index].setImages(images);
				imageSection[index].setImagesFolderPath(imagesFolderPath);
				imageSection[index].setScrollerIndex(index);
				imageSection[index].setMarqueeId(marqueeId);
				imageSection[index].setGridViewId(gridViewId);
				imageSection[index].insertImgInListView();
				imageSection[index].insertImgInGridView();
				$j("#title" + (index+1)).html(sectionHeading);
				imageSection[index].switchToListView();
				
				
				index++;
				imageSection[index] = new ImageSection();
				var images = new Array('IMG_0099.JPG', 'IMG_0106.JPG', 'IMG_0109.JPG', 'IMG_0112.JPG', 'IMG_0117.JPG', 'IMG_0124.JPG', 'IMG_0129.JPG', 'IMG_0136.JPG', 'IMG_0142.JPG', 'IMG_0143.JPG', 'IMG_0144.JPG', 'IMG_0145.JPG', 'IMG_6300.JPG', 'IMG_6302.JPG');
				var imagesFolderPath = "images/temple_tour/";
				marqueeId = "image_scroller3";
				gridViewId = "image_grid_view3";
				var sectionHeading = "Temple tour pics";
				sectionHeading += " <a href='#' id='" + marqueeId + "_url' onclick='imageSection[" + index + "].switchToListView()'>Switch to List view</a>" + " <a href='#' id='" + gridViewId + "_url' onclick='imageSection[" + index + "].switchToGridView()'>Switch to Grid view</a>";
				imageSection[index].setImages(images);
				imageSection[index].setImagesFolderPath(imagesFolderPath);
				imageSection[index].setScrollerIndex(index);
				imageSection[index].setMarqueeId(marqueeId);
				imageSection[index].setGridViewId(gridViewId);
				imageSection[index].insertImgInListView();
				imageSection[index].insertImgInGridView();
				$j("#title" + (index+1)).html(sectionHeading);
				imageSection[index].switchToListView();
				
				
				index++;
				imageSection[index] = new ImageSection();
				var images = new Array('IMG_6407.JPG', 'IMG_6408.JPG', 'IMG_6412.JPG', 'IMG_6414.JPG', 'IMG_6416.JPG', 'IMG_6417.JPG', 'IMG_6420.JPG', 'IMG_6425.JPG', 'IMG_6438.JPG', 'IMG_6439.JPG', 'IMG_6461.JPG', 'IMG_6464.JPG');
				var imagesFolderPath = "images/pd_workshop/";
				marqueeId = "image_scroller4";
				gridViewId = "image_grid_view4";
				var sectionHeading = "Personality development workshop pics";
				sectionHeading += " <a href='#' id='" + marqueeId + "_url' onclick='imageSection[" + index + "].switchToListView()'>Switch to List view</a>" + " <a href='#' id='" + gridViewId + "_url' onclick='imageSection[" + index + "].switchToGridView()'>Switch to Grid view</a>";
				imageSection[index].setImages(images);
				imageSection[index].setImagesFolderPath(imagesFolderPath);
				imageSection[index].setScrollerIndex(index);
				imageSection[index].setMarqueeId(marqueeId);
				imageSection[index].setGridViewId(gridViewId);
				imageSection[index].insertImgInListView();
				imageSection[index].insertImgInGridView();
				$j("#title" + (index+1)).html(sectionHeading);
				imageSection[index].switchToListView();
			});
		</script>
	</head>

	<body>
		<div id="page">
			<div id="pagetop">
				<?php include("subpages/top_pane.php"); ?>
				
				<script type="text/javascript">
					highlightUrl("activities_gallery_url");
				</script>
			</div>
			
			<div id="header"></div>
		</div>
		
		
		<div id='left_part'>
			<?php include("subpages/left_pane.php"); ?>
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
				
				
			</div>
			<div id="footer"><a href="http://www.bryantsmith.com/template">free css template</a> by <a href="http://www.bryantsmith.com">website design</a></div>
		</div>

		<div id='right_part'>
			<?php include("subpages/right_pane.php"); ?>
		</div>
	</body>
</html>
