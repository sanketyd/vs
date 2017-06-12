<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Vivekananda samiti: Swamiji Gallery</title>
		
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
				var images = new Array('gallery-img12.jpg', 'swami_img1.jpg', 'swami_img2.jpg', 'swami_img3.jpg', 'swami_img4.jpg', 'swami_img5.jpg', 'swami_img6.jpg', 'swami_img7.jpg', 'swami_img8.jpg', 'swami_img9.jpg', 'swami_img10.jpg', 'swami_img11.jpg', 'sri_ramakrishna.jpg', 'sarada_devi.jpg', 'gallery-img1.jpg', 'gallery-img10.jpg', 'gallery-img11.jpg', 'gallery-img13.jpg', 'gallery-img14.jpg', 'gallery-img15.jpg', 'gallery-img16.jpg', 'gallery-img17.jpg', 'gallery-img18.jpg', 'gallery-img19.jpg', 'gallery-img2.jpg', 'gallery-img20.jpg', 'gallery-img21.jpg', 'gallery-img22.jpg', 'gallery-img23.jpg', 'gallery-img24.jpg', 'gallery-img25.jpg', 'gallery-img26.jpg', 'gallery-img27.jpg', 'gallery-img28.jpg', 'gallery-img29.jpg', 'gallery-img3.jpg', 'gallery-img30.jpg', 'gallery-img31.jpg', 'gallery-img32.jpg', 'gallery-img33.jpg', 'gallery-img34.jpg', 'gallery-img35.jpg', 'gallery-img36.jpg', 'gallery-img37.jpg', 'gallery-img38.jpg', 'gallery-img39.jpg', 'gallery-img4.jpg', 'gallery-img40.jpg', 'gallery-img41.jpg', 'gallery-img42.jpg', 'gallery-img43.jpg', 'gallery-img44.jpg', 'gallery-img45.jpg', 'gallery-img46.jpg', 'gallery-img5.jpg', 'gallery-img6.jpg', 'gallery-img7.jpg', 'gallery-img8.jpg', 'gallery-img9.jpg');
				var imagesFolderPath = "images/swamiji_gallery/swami_vivekananda/";
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
				var images = new Array('sri_ramakrishna_1.jpg', 'sri_ramakrishna_2.jpg', 'sri_ramakrishna_3.jpg', 'sri_ramakrishna_4.jpg', 'sri_ramakrishna_5.jpg', 'sri_ramakrishna_6.jpg', 'sri_ramakrishna_7.jpg', 'sri_ramakrishna_8.jpg', 'sri_ramakrishna_9.jpg', 'sri_ramakrishna_10.jpg', 'sri_ramakrishna_11.jpg', 'sri_ramakrishna_12.jpg');
				var imagesFolderPath = "images/swamiji_gallery/sri_ramakrishna/";
				marqueeId = "image_scroller2";
				gridViewId = "image_grid_view2";
				var sectionHeading = "Sri Ramakrishna pics";
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
				var images = new Array('sarada_devi_1.jpg', 'sarada_devi_2.jpg', 'sarada_devi_3.jpg', 'sarada_devi_4.jpg', 'sarada_devi_5.jpg', 'sarada_devi_6.jpg', 'sarada_devi_7.jpg', 'sarada_devi_8.jpg', 'sarada_devi_9.jpg', 'sarada_devi_10.jpg', 'sarada_devi_11.jpg', 'sarada_devi_12.jpg', 'sarada_devi_13.jpg', 'sarada_devi_14.jpg', 'sarada_devi_15.jpg', 'sarada_devi_16.jpg', 'sarada_devi_17.jpg', 'sarada_devi_18.jpg');
				var imagesFolderPath = "images/swamiji_gallery/sarada_devi/";
				marqueeId = "image_scroller3";
				gridViewId = "image_grid_view3";
				var sectionHeading = "Sarada Devi pics";
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
					highlightUrl("swamiji_gallery_url");
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
				
				
			</div>
			<div id="footer"><a href="http://www.bryantsmith.com/template">free css template</a> by <a href="http://www.bryantsmith.com">website design</a></div>
		</div>

		<div id='right_part'>
			<?php include("subpages/right_pane.php"); ?>
		</div>



	</body>
</html>
