<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Medical Health camp 19th August 2012/title>
		
		<?php include("subpages/import_libraries.php"); ?>
		<script type='text/javascript' src='scripts/gallery_script.js'></script>
		<!-- Start Lightbox library -->
			<link href="styles/lightbox.css" rel="stylesheet" type="text/css" media="screen" />
			
			<script src="scripts/lightbox/prototype.js" type="text/javascript"></script>
			<script src="scripts/lightbox/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
			<script src="scripts/lightbox/lightbox.js" type="text/javascript"></script>
		<!-- End Lightbox library -->
		
		<script type='text/javascript'>
			$j(document).ready(function() {
				var index;

				
				index = 0;
				imageSection[index] = new ImageSection();
				var images = new Array('image00.JPG', 'image01.JPG', 'image02.JPG', 'image03.JPG', 'image04.JPG', 'image05.JPG','image06.JPG', 'image07.JPG', 'image08.JPG', 'image09.JPG', 'image10.JPG', 'image11.JPG','image12.JPG', 'image13.JPG', 'image14.JPG', 'image15.JPG', 'image16.JPG', 'image17.JPG', 'image18.JPG','image19.JPG', 'image20.JPG', 'image21.JPG', 'image22.JPG', 'image23.JPG', 'image24.JPG','image25.JPG', 'image26.JPG','image27.JPG', 'image28.JPG', 'image29.JPG', 'image30.JPG', 'image31.JPG', 'image32.JPG','image33.JPG', 'image34.JPG', 'image35.JPG', 'image36.JPG', 'image37.JPG', 'image38.JPG','image39.JPG', 'image40.JPG', 'image41.JPG');
				var imagesFolderPath = "images/health_camp_aug_2012/";
				marqueeId = "image_scroller1";
				gridViewId = "image_grid_view1";
				var sectionHeading = "August health camp pics";
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
					highlightUrl("vyc_2011gallery__url");
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
				
				
			</div>
			<div id="footer"><a href="http://www.bryantsmith.com/template">free css template</a> by <a href="http://www.bryantsmith.com">website design</a></div>
		</div>

		<div id='right_part'>
			<?php include("subpages/right_pane.php"); ?>
		</div>



	</body>
</html>
