<div id="centerWrapper">
	<?php
	if(!$bot || ($bot && $reqUrl == "")){
	?>
	<div id="tileContainer" 
		<?php if($bot && $reqUrl==""){
			 echo "style='display:block;'";
		}?>>
		<?php if($groupDirection == "horizontal"){?>
			<img id='arrowLeft' class="navArrows" src='themes/<?php echo $theme?>/img/primary/arrowLeft.png' onClick="javascript:$group.goLeft();" alt="left arrow"/>
			<img id='arrowRight' class="navArrows" src='themes/<?php echo $theme?>/img/primary/arrowRight.png' onClick="javascript:$group.goRight();" alt="right arrow"/>
		<?php 
		}
		include("inc/tilegen.php");
		triggerEvent("tileContainerEnd");
		?>
	</div> 
	<?php
	}
	?>
	<div id="subNavWrapper"></div>
	<div id="contentWrapper" <?php if($bot && $reqUrl != ""){ echo "style='display:block;'";}?>>   		    
		<?php triggerEvent("contentWrapperBegin");?>
		<div id="content">	        	
			<?php
			if($bot){	
				if($page == "" || $page == "home"){					
				}else{
					if(file_exists("pages/".$reqUrl)){	
						include("pages/".$reqUrl);
					}else{		
						echo "<h2 style='margin-top:0px;'>We're sorry :(</h2>the page you're looking for is not found.";
					}
				}		
			}
			?>
		</div>
		<?php triggerEvent("contentWrapperEnd");?>
	</div>
	<?php triggerEvent("centerWrapperEnd");?>
</div>
<?php triggerEvent("wrapperEnd");?>

<div id="catchScroll"></div>

<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css"/>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/notice_board.js"></script>