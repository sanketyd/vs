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
				var images = new Array('gallery-img12.jpg', 'swami_img1.jpg', 'swami_img2.jpg', 'swami_img3.jpg', 'swami_img4.jpg', 'swami_img5.jpg', 'swami_img6.jpg', 'swami_img7.jpg', 'swami_img8.jpg', 'swami_img9.jpg', 'swami_img10.jpg', 'swami_img11.jpg', 'sri_ramakrishna.jpg', 'sarada_devi.jpg', 'gallery-img1.jpg', 'gallery-img10.jpg', 'gallery-img11.jpg', 'gallery-img13.jpg', 'gallery-img14.jpg', 'gallery-img15.jpg', 'gallery-img16.jpg', 'gallery-img17.jpg', 'gallery-img18.jpg', 'gallery-img19.jpg', 'gallery-img2.jpg', 'gallery-img20.jpg', 'gallery-img21.jpg', 'gallery-img22.jpg', 'gallery-img23.jpg', 'gallery-img24.jpg', 'gallery-img25.jpg', 'gallery-img26.jpg', 'gallery-img27.jpg', 'gallery-img28.jpg', 'gallery-img29.jpg', 'gallery-img3.jpg', 'gallery-img30.jpg', 'gallery-img31.jpg', 'gallery-img32.jpg', 'gallery-img33.jpg', 'gallery-img34.jpg', 'gallery-img35.jpg', 'gallery-img36.jpg', 'gallery-img37.jpg', 'gallery-img38.jpg', 'gallery-img39.jpg', 'gallery-img4.jpg', 'gallery-img40.jpg', 'gallery-img41.jpg', 'gallery-img42.jpg', 'gallery-img43.jpg', 'gallery-img44.jpg', 'gallery-img45.jpg', 'gallery-img46.jpg', 'gallery-img5.jpg', 'gallery-img6.jpg', 'gallery-img7.jpg', 'gallery-img8.jpg', 'gallery-img9.jpg');
				var imagesFolderPath = "images/swamiji_images/";
				var marqueeId = "image_scroller1";
				var gridViewId = "image_grid_view1";
				var sectionHeading = "Swami Vivekananda pics";
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
				var images = new Array('IMG_0071.JPG', 'IMG_0072.JPG', 'IMG_0077.JPG', 'IMG_0078.JPG', 'IMG_0080.JPG', 'IMG_0081.JPG', 'IMG_6486.JPG', 'IMG_6487.JPG', 'IMG_6495.JPG', 'IMG_6496.JPG', 'IMG_6498.JPG', 'IMG_6499.JPG');
				var imagesFolderPath = "images/samiti_class/";
				marqueeId = "image_scroller2";
				gridViewId = "image_grid_view2";
				var sectionHeading = "Samiti class pics";
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
					highlightUrl("samiti_gallery_url");
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
				
				
			</div>
			<div id="footer"><a href="http://www.bryantsmith.com/template">free css template</a> by <a href="http://www.bryantsmith.com">website design</a></div>
		</div>

		<div id='right_part'>
			<?php include("subpages/right_pane.php"); ?>
		</div>



	</body>
</html>
