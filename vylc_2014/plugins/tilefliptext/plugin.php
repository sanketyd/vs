<?php
$tileTypes['flipText'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	"width"=>1,
	"height"=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"direction"=>"horizontal", //vertical
	"title"=>"",
	"frontBg"=>"",
	"backBg"=>"",
	"img"=>"",
	"imgAlt"=>"",
	"imgTitle"=>"",
	"imgSize"=>"50",
	"imgToTop"=>"0",
	"imgToLeft"=>"0",
	"text"=>"text on the backside",
	"labelText"=>"",
	"labelColor"=>"#333",
	"labelPosition"=>"top",
	"classes"=>""
);



function tile_fliptext($group,$x,$y,$width,$height,$background,$url,$direction,$title,$frontBg,$backBg,$img,$imgAlt,$imgTitle,$imgSize,$imgToTop,$imgToLeft,$text,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	?>

  	<a <?php echo makeLink($url);?> class="tile tileFlipText <?php echo $direction?> group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>>
		<div class="flipContainer">
  		    <div class="flipFront" style="background-color:<?php echo $frontBg?>; background-position: initial initial; background-repeat: initial initial;">
  		    <h3>
  		   	  <img title="" alt="" style="margin-top:-40px;margin-left:0px;" src="<?php echo $img?>" height="60" width="60">
      	    <?php echo $title?>
          </h3>
          </div>
  		    <div class="flipBack" style="background-color:<?php echo $backBg?>; ">
            <h5>
              <div style="font-weight: 300;font-size: 36px;padding:0 0 8px 0;color:#FFF;font-family: 'Just Another Hand', cursive;">
                <img title="" alt="" style="position: relative;vertical-align: middle;top:0px;margin-right:10px;" src="<?php echo $imgAlt?>" height="50" width="50">
      	  	    <?php echo $text?>
              </div>
            </h5>
          </div>
        </div>
    </a>
    <?php
}
?>