<!DOCTYPE html>

<html lang="en">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Description" content="Vivekananda Samiti, is a student body in IIT Kanpur, that has been motivating the youth community toward the path of human excellence"/>
    <meta name="keywords" content="template, windows 8, website, design, download, metro ui, metro template"/>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.00, minimum-scale=1.00">
    <title>VYLC 2014</title> 
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <link href="css/Just_Another_Hand.css" rel='stylesheet' type='text/css'>
    <link href="css/Open_Sans.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/new.css" />
		<link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/tiles.css" />
    <link rel="stylesheet" type="text/css" href="themes/theme_default/theme.css" />
    <link rel="stylesheet" type="text/css" href="plugins/accordion/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/autozoom/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/custom/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/panels/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/plugintemplate/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tileflip/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tilefliptext/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tilemosaic/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tileslide/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tileslidefx/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tileslideshow/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tiletemplate/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tiletwitter/plugin.css" />
        <link rel="stylesheet" type="text/css" href="plugins/tileweather/plugin.css" />
      <style>
      </style>
<script type='text/javascript'>var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-30159978-1']);_gaq.push(['_trackPageview']);(function(){var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script> 
	
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/html5.js"></script>
	

    <script type="text/javascript">window.jQuery || document.write('<\/script><script type="text/javascript" src="js/jquery1102.js"><\/script>')</script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src = "js/my.js"> </script>
      
</head>

<body class="">
  <img src="img/bg/metro_green.jpg" alt='background-image' id='bgImage'/>
  <header>
    <div id="headerWrapper">
      <div id="logo">
         <img src="img/header.png"/>
      </div>
      <!--<div id="iit_logo">
            <img src="img/iit.png" style = "height: 100%; width:100% ;" />
      </div>-->
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
  
<?php
  $load="home";
  if (count($_GET) > 0){
    foreach (array_keys($_GET) as $k) {
      preg_match('/\/(\w+)/', $k, $matches);
      $load=$matches[1];
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
  <div id="catchScroll"></div>
  <style>
		#content{margin-left:0px;}.sidebar-left{margin-left:0px;}
  </style>
  <noscript>
    <style>
      .sidebar>*{position:relative;top:0;margin:5px !important;display:inline-block;}
    </style>
  </noscript>
</body>
</html>
