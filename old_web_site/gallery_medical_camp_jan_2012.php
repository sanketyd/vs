<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Vivekananda samiti: Book Exhibition Gallery</title>
		
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
				var images = new Array('IMG_7098.JPG', 'IMG_7100.JPG', 'IMG_7101.JPG', 'IMG_7102.JPG', 'IMG_7103.JPG', 'IMG_7105.JPG', 'IMG_7106.JPG', 'IMG_7107.JPG', 'IMG_7108.JPG', 'IMG_7109.JPG', 'IMG_7110.JPG', 'IMG_7111.JPG', 'IMG_7112.JPG', 'IMG_7113.JPG', 'IMG_7114.JPG', 'IMG_7115.JPG', 'IMG_7116.JPG', 'IMG_7117.JPG', 'IMG_7118.JPG', 'IMG_7119.JPG', 'IMG_7120.JPG', 'IMG_7121.JPG', 'IMG_7122.JPG', 'IMG_7123.JPG', 'IMG_7124.JPG', 'IMG_7125.JPG', 'IMG_7128.JPG', 'IMG_7130.JPG', 'IMG_7131.JPG', 'IMG_7132.JPG', 'IMG_7133.JPG', 'IMG_7134.JPG', 'IMG_7135.JPG', 'IMG_7136.JPG', 'IMG_7137.JPG', 'IMG_7138.JPG', 'IMG_7139.JPG', 'IMG_7140.JPG', 'IMG_7141.JPG', 'IMG_7142.JPG', 'IMG_7143.JPG', 'IMG_7144.JPG', 'IMG_7145.JPG', 'IMG_7146.JPG', 'IMG_7148.JPG', 'IMG_7149.JPG', 'IMG_7155.JPG', 'IMG_7156.JPG', 'IMG_7157.JPG', 'IMG_7158.JPG', 'IMG_7159.JPG', 'IMG_7160.JPG', 'IMG_7161.JPG', 'IMG_7162.JPG', 'IMG_7163.JPG', 'IMG_7164.JPG', 'IMG_7165.JPG', 'IMG_7166.JPG', 'IMG_7168.JPG', 'IMG_7170.JPG', 'IMG_7171.JPG', 'IMG_7172.JPG', 'IMG_7178.JPG', 'IMG_7179.JPG', 'IMG_7184.JPG', 'IMG_7186.JPG', 'IMG_7187.JPG', 'IMG_7188.JPG', 'IMG_7189.JPG', 'IMG_7190.JPG', 'IMG_7191.JPG', 'IMG_7192.JPG', 'IMG_7193.JPG', 'IMG_7194.JPG', 'IMG_7195.JPG', 'IMG_7196.JPG', 'IMG_7197.JPG', 'IMG_7198.JPG', 'IMG_7199.JPG', 'IMG_7200.JPG', 'IMG_7201.JPG', 'IMG_7202.JPG', 'IMG_7203.JPG', 'IMG_7204.JPG', 'IMG_7205.JPG', 'IMG_7206.JPG', 'IMG_7208.JPG', 'IMG_7209.JPG', 'IMG_7210.JPG', 'IMG_7211.JPG', 'IMG_7212.JPG', 'IMG_7213.JPG', 'IMG_7215.JPG', 'IMG_7216.JPG', 'IMG_7217.JPG', 'IMG_7230.JPG', 'IMG_7231.JPG', 'IMG_7232.JPG', 'IMG_7233.JPG', 'IMG_7234.JPG', 'IMG_7235.JPG', 'IMG_7236.JPG', 'IMG_7238.JPG', 'IMG_7239.JPG', 'IMG_7240.JPG', 'IMG_7241.JPG', 'IMG_7242.JPG', 'IMG_7243.JPG', 'IMG_7244.JPG', 'IMG_7245.JPG', 'IMG_7246.JPG', 'IMG_7247.JPG', 'IMG_7248.JPG', 'IMG_7249.JPG', 'IMG_7250.JPG', 'IMG_7251.JPG', 'IMG_7252.JPG', 'IMG_7253.JPG', 'IMG_7254.JPG', 'IMG_7255.JPG', 'IMG_7257.JPG', 'IMG_7258.JPG', 'IMG_7259.JPG', 'IMG_7260.JPG', 'IMG_7261.JPG', 'IMG_7263.JPG', 'IMG_7264.JPG', 'IMG_7266.JPG', 'IMG_7267.JPG', 'IMG_7268.JPG', 'IMG_7269.JPG', 'IMG_7270.JPG', 'IMG_7271.JPG', 'IMG_7272.JPG', 'IMG_7273.JPG', 'IMG_7274.JPG', 'IMG_7275.JPG', 'IMG_7276.JPG', 'IMG_7278.JPG', 'IMG_7279.JPG', 'IMG_8769.JPG', 'IMG_8793.JPG', 'IMG_8794.JPG', 'IMG_8795.JPG', 'IMG_8798.JPG', 'IMG_8801.JPG', 'IMG_8802.JPG', 'IMG_8804.JPG', 'IMG_8806.JPG', 'IMG_8810.JPG', 'IMG_8813.JPG', 'IMG_8815.JPG', 'IMG_8824.JPG', 'IMG_8833.JPG', 'IMG_8837.JPG', 'IMG_8840.JPG', 'IMG_8842.JPG', 'IMG_8847.JPG', 'IMG_8848.JPG', 'IMG_8853.JPG');
				var imagesFolderPath = "images/medical_camp_jan_2012/";
				var marqueeId = "image_scroller1";
				var gridViewId = "image_grid_view1";
				var isThumbnailExists = true;
				var thumbnailPrefix = "tn_";
				var sectionHeading = "Medical camp (Jan 2012) pics";
				sectionHeading += " <a href='#' id='" + marqueeId + "_url' onclick='imageSection[" + index + "].switchToListView()'>Switch to List view</a>" + " <a href='#' id='" + gridViewId + "_url' onclick='imageSection[" + index + "].switchToGridView()'>Switch to Grid view</a>";
				
				imageSection[index].setImages(images);
				imageSection[index].setImagesFolderPath(imagesFolderPath);
				imageSection[index].setScrollerIndex(index);
				imageSection[index].setMarqueeId(marqueeId);
				imageSection[index].setGridViewId(gridViewId);
				imageSection[index].setIsThumbnailExists(isThumbnailExists);
				imageSection[index].setThumbnailPrefix(thumbnailPrefix);
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
