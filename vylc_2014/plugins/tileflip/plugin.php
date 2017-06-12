<?php
$tileTypes['flip'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	"width"=>1,
	"height"=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"direction"=>"horizontal", //vertical
	"title"=>"",
	"img"=>"",
	"imgSize"=>0.7,
	"text"=>"",
	"classes"=>""
);

function tile_flip($group,$x,$y,$width,$height,$background,$url,$direction,$title,$img,$imgSize,$text,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	?>

  	<a <?php echo makeLink($url);?> class="tile tileFlip <?php echo $direction?> group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;"
	<?php posVal($marginTop,$marginLeft,$tileWidth);?>>

        <div class="flipContainer">
          <div class="flipFront" style="background:<?php echo $background?>; background-position: initial initial; background-repeat: initial initial;">
            <div class="flipImgCenterer">
              <img src="<?php echo $img?>" style="width:<?php echo $scale*$imgSize;?>px"/>
            </div>
          </div>
	      <div class="flipBack" style="background:<?php echo $background?>;">
	      	<h5>
	      		<span style="font-size:22px;"><?php echo $text?></span>
	      	</h5>
          </div>
        </div>
      </a>
    <?php
}
?>