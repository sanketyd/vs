<?php
session_start();
/* METRO UI TEMPLATE v4.a4
/*
/* Copyright 2013 Thomas Verelst, http://metro-webdesign.info
/* Do not redistribute or sell this template, nor claim this is your own work. 
/* Donation required when using this. */

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require_once(__DIR__.'/inc/defaults.php');
require_once(__DIR__.'/config/general.php');
require_once(__DIR__.'/config/layout.php');
require_once(__DIR__.'/config/pages.php');
require_once(__DIR__.'/config/mobile.php');

require_once(__DIR__.'/inc/detectdevice.php');

/* TILE INITS */
require_once(__DIR__.'/inc/init.php');
require_once(__DIR__.'/inc/tilefunctions.php');

/* FILES*/
$cssFiles = array( /* Add your css files to this array */
	'css/layout.css',
	'css/nav.css',
	'css/tiles.css',
	'themes/'.$theme.'/theme.css',	
);
$jsFiles = array( /* Add your js files to this array */
	'js/functions.js',
	'js/main.js',	
);

/* PLUGIN SYSTEM */
require_once("inc/plugins.php");
foreach(glob("plugins/" . "*") as $folder){
	if(is_dir($folder) && !in_array($folder, $disabledPluginsDesktop)){
		if(file_exists($folder."/plugin.js")){
			$jsPluginsArray[] = $folder."/plugin.js";		
		}
		if(file_exists($folder."/plugin.css")){
			$cssPluginsArray[] = $folder."/plugin.css";		
		}
		if(file_exists($folder."/desktop.js")){
			$jsPluginsArray[] = $folder."/desktop.js";		
		}
		if(file_exists($folder."/desktop.css")){
			$cssPluginsArray[] = $folder."/desktop.css";		
		}
		if(file_exists($folder."/plugin.php")){
			include($folder."/plugin.php");
		}
	}
}

triggerEvent("beforeDoctype");
?>
<!DOCTYPE html>
<?php
triggerEvent("afterDoctype");


if(file_exists('themes/'.$theme.'/theme.js')){
	$jsFiles[] = 'themes/'.$theme.'/theme.js';
}
if(file_exists('themes/'.$theme.'/theme.php')){
	require_once('themes/'.$theme.'/theme.php');
}

triggerEvent("fileInclude");

require_once("inc/compress.php");
require_once("inc/seo.php");
?>
<?php // if(strpos($_SERVER['HTTP_USER_AGENT'],"Version/4.0")!=false&&strpos($_SERVER['HTTP_USER_AGENT'],"Android")!=false&&strpos($_SERVER['HTTP_USER_AGENT'],"AppleWebKit/")!=false){}?>
<html>
<head>
	<?php triggerEvent("headStart");?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Description" content="<?php echo $siteMetaDesc;?>"/>
	<meta name="keywords" content="<?php echo $siteMetaKeywords;?>"/>
	<meta name="viewport" content="width=1024,initial-scale=1.00, minimum-scale=1.00">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $siteTitle;?></title> 
	
	<?php 
	if($bot && $nojsuser){
		echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
	}
	
	/*FONT*/
	if($googleFontURL != ""){?>
		<link href='<?php echo $googleFontURL?>' rel='stylesheet' type='text/css'>
		<?php
	}

	/*CSS*/
	echo $css;
	include_once("inc/css.php");
	
	/*GA*/
	if($googleAnalyticsCode != ""){
		?><script type='text/javascript'>var _gaq = _gaq || [];_gaq.push(['_setAccount', '<?php echo $googleAnalyticsCode?>']);_gaq.push(['_trackPageview']);(function(){var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script><?php
	}
	?> 
	<!--[if lt IE 9]>
	<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/html5.js">
	<![endif]-->
	<!--[if gte IE 9]>
	<script src="http://code.jquery.com/jquery-2.0.0b2.js"></script>
	<script src="js/html5.js">
	<![endif]-->
	<!--[if !IE]>
	<script src="http://code.jquery.com/jquery-2.0.0b2.js"></script>
	<![endif]-->

	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery191.js"><\/script>')</script> 
	<script type="text/javascript" language="javascript" src="js/plugins.js"></script>
	<?php
	/*JS */
	include("inc/phptojs.php");
	if(!$bot){
		echo $js;
	}

	triggerEvent("headEnd");
	?>
	<noscript><style>#tileContainer{display:block}</style></noscript>
</head>
<body class="full <?php echo $device?>">
<?php
triggerEvent("bodyBegin");

/*BG image*/
if($bgImage!=""){
	echo "<img src='".$bgImage."' id='bgImage'/>";
}
?>
<header>
	<div id="headerWrapper">
		<a href="?/">
			<div id="logo">
				<img src="img/header.png">
			</div>
		</a>
		<div id="headerCenter">
			<div id="headerTitles">
				<h1><a href="?/">Vivekananda Youth Leadership Convention 2014</a></h1>
				<h2>10th - 13th January 2014, IIT Kanpur</h2>
				<!--<marquee behavior="scroll" style=font-size: 15px; font-family: Arialdirection="left"><b>Announcements: Registration for VYLC 2014 has been Started!</b></marquee>-->
				<!--<hr>-->
			</div>
		</div>
	</div>
</header>
<div id="wrapper">
<?php
  $load="home";
  if (count($_GET) > 0){
    foreach (array_keys($_GET) as $k) {
      preg_match('/\/(\w+)/', $k, $matches);
      if (count($matches)>0){
      	$load=$matches[1];
      }

      if (!$load) {
        $load="home";
      }
      
      // if (preg_match('/^\/(\w+)/', $k, $matches)) {
      //     echo $matches[1];

      //     preg_match('/^\/\w+\/(\w+)/', $k, $event_name);
      //     echo "<br/>".$event_name[1];
      //     break;
      // }
    }
  }
  
  if (file_exists('pages/'.$load.'.php')) {
    include('pages/'.$load.'.php');
  }
  else {
    include('pages/home.php'); 
  }
?>
</div>
<?php triggerEvent("bodyEnd");?>
</body>
</html>