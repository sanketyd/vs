<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Vivekananda samiti: VYC 2011 Gallery</title>
		
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
				var images = new Array('DSC_0160.JPG', 'DSC_0161.JPG', 'DSC_0162.JPG', 'DSC_0163.JPG', 'DSC_0164.JPG', 'DSC_0165.JPG', 'DSC_0166.JPG', 'DSC_0167.JPG', 'DSC_0168.JPG', 'DSC_0169.JPG', 'DSC_0170.JPG', 'DSC_0171.JPG', 'DSC_0172.JPG', 'DSC_0173.JPG', 'DSC_0174.JPG', 'DSC_0175.JPG', 'DSC_0176.JPG', 'DSC_0177.JPG', 'DSC_0178.JPG', 'DSC_0179.JPG', 'DSC_0180.JPG', 'DSC_0181.JPG', 'DSC_0182.JPG', 'DSC_0183.JPG', 'DSC_0184.JPG', 'DSC_0185.JPG', 'DSC_0186.JPG', 'DSC_0187.JPG', 'DSC_0188.JPG', 'DSC_0189.JPG', 'DSC_0190.JPG', 'DSC_0191.JPG', 'DSC_0192.JPG', 'DSC_0193.JPG', 'DSC_0194.JPG', 'DSC_0195.JPG', 'DSC_0196.JPG', 'DSC_0197.JPG', 'DSC_0198.JPG', 'DSC_0199.JPG', 'DSC_0200.JPG', 'DSC_0201.JPG', 'DSC_0202.JPG', 'DSC_0203.JPG', 'DSC_0204.JPG', 'DSC_0205.JPG', 'DSC_0206.JPG', 'DSC_0207.JPG', 'DSC_0208.JPG', 'DSC_0209.JPG', 'DSC_0210.JPG', 'DSC_0211.JPG', 'DSC_0212.JPG', 'DSC_0213.JPG', 'DSC_0214.JPG', 'DSC_0215.JPG', 'DSC_0216.JPG', 'DSC_0217.JPG', 'DSC_0218.JPG', 'DSC_0219.JPG', 'DSC_0220.JPG', 'DSC_0221.JPG', 'DSC_0222.JPG', 'DSC_0223.JPG', 'DSC_0224.JPG', 'DSC_0225.JPG', 'DSC_0226.JPG', 'DSC_0227.JPG', 'DSC_0228.JPG', 'DSC_0229.JPG', 'DSC_0230.JPG', 'DSC_0231.JPG', 'DSC_0232.JPG', 'DSC_0233.JPG', 'DSC_0234.JPG', 'DSC_0235.JPG', 'DSC_0236.JPG', 'DSC_0237.JPG', 'DSC_0238.JPG', 'DSC_0239.JPG', 'DSC_0240.JPG', 'DSC_0241.JPG', 'DSC_0242.JPG', 'DSC_0243.JPG', 'DSC_0244.JPG', 'DSC_0245.JPG', 'DSC_0246.JPG', 'DSC_0247.JPG', 'DSC_0248.JPG', 'DSC_0249.JPG', 'DSC_0250.JPG', 'DSC_0251.JPG', 'DSC_0252.JPG', 'DSC_0253.JPG', 'DSC_0254.JPG', 'DSC_0255.JPG', 'DSC_0256.JPG', 'DSC_0257.JPG', 'DSC_0258.JPG', 'DSC_0259.JPG', 'DSC_0260.JPG', 'DSC_0261.JPG', 'DSC_0262.JPG', 'DSC_0263.JPG', 'DSC_0264.JPG', 'DSC_0265.JPG', 'DSC_0266.JPG', 'DSC_0267.JPG', 'DSC_0268.JPG', 'DSC_0269.JPG', 'DSC_0270.JPG', 'DSC_0271.JPG', 'DSC_0272.JPG', 'DSC_0273.JPG', 'DSC_0274.JPG', 'DSC_0275.JPG', 'DSC_0276.JPG', 'DSC_0277.JPG', 'DSC_0278.JPG', 'DSC_0279.JPG', 'DSC_0280.JPG', 'DSC_0281.JPG', 'DSC_0282.JPG', 'DSC_0283.JPG', 'DSC_0284.JPG', 'DSC_0285.JPG', 'DSC_0286.JPG', 'DSC_0287.JPG', 'DSC_0288.JPG', 'DSC_0289.JPG', 'DSC_0290.JPG', 'DSC_0291.JPG', 'DSC_0292.JPG', 'DSC_0293.JPG', 'DSC_0294.JPG', 'DSC_0295.JPG', 'DSC_0296.JPG', 'DSC_0297.JPG', 'DSC_0298.JPG', 'DSC_0299.JPG', 'DSC_0300.JPG', 'DSC_0301.JPG', 'DSC_0302.JPG', 'DSC_0303.JPG', 'DSC_0304.JPG', 'DSC_0305.JPG', 'DSC_0306.JPG', 'DSC_0307.JPG', 'DSC_0308.JPG', 'DSC_0309.JPG', 'DSC_0159.JPG', 'vyc-poster.jpg', 'schedule.jpg', 'vyc-competition.jpg');
				var imagesFolderPath = "vyc_2011/vyc_photos/";
				marqueeId = "image_scroller1";
				gridViewId = "image_grid_view1";
				var sectionHeading = "VYC 2011 pics";
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
