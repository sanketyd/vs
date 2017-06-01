<?php
$tileTypes['slideshow'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	"width"=>2,
	"height"=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"images"=>array(""),
	"effect"=>"slide-right, slide-up, slide-down, slide-left",
	"speed"=>4000,
	"arrows"=>false,
	"texts"=>array(""),
	"labelText"=>"",
	"labelColor"=>"",
	"labelPosition"=>"top",
	"classe"=>0
);


function tile_slideshow($group,$x,$y,$width,$height,$background,$url,$images,$effect,$speed,$arrows,$texts,$labelText,$labelColor, $labelPosition, $classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);

	static $id_seq = 0;
	?>
  	<a <?php echo makeLink($url);?> id="tileSlideshow<?php echo $id_seq?>" class="tile tileSlideshow group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?> data-n="0"> 

	    <div class="imgWrapperBack" style="width:<?php echo $tileWidth;?>; height:<?php echo $tileHeight;?>px;"></div>
		<div class="imgWrapper" style="width:<?php echo $tileWidth;?>px; height:<?php echo $tileHeight;?>px;">
			<img src="<?php echo $images[0];?>" style="height: 100%; width:100%"/>
		</div>

		<?php if (count($texts)>0) {?>
			<div class="imgText" style="display: block;"><?php echo $texts[0];?></div>
		<?php } ?>

		<script>slideshowTiles["tileSlideshow<?php echo $id_seq?>"] = [<?php echo json_encode($images);?>,["","",""],<?php echo json_encode($texts);?>,"slide-right, slide-up, slide-down,slide-left",4000]</script>

		<div class="tileLabelWrapper top" style="border-top-color:<?php echo $labelColor?>;"><div class="tileLabel <?php echo $labelPosition?>"><?php echo $labelText?></div></div> 
   
    </a>
    <?php

	$id_seq++;
}
?>
