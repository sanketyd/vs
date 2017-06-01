<style>
header{
  position: fixed;
}
</style>

<script>
scale = 145;
spacing = 10;
theme = 'theme_default';
$group.titles = ["Home","Events","Contact"];
$group.spacingFull = [5,5,5];
$group.inactive.opacity = "1";
$group.inactive.clickable = "1";
$group.showEffect = 0;
$group.direction = "horizontal";

mouseScroll = "1";

siteTitle = 'VYLC 2014';
siteTitleHome = 'Home';
showSpeed = 400;
hideSpeed = 300;
scrollSpeed = 550;

device = "desktop";
  scrollHeader = "1";
  disableGroupScrollingWhenVerticalScroll = "";

/*For background image*/
bgMaxScroll= "130";
bgScrollSpeed = "450";

/*For responsive */
autoRearrangeTiles = "1";
autoResizeTiles = "1";
rearrangeTreshhold = 3;

/*Locale */
lang = "en";
l_pageNotFound = "404 - Page not Found";
l_pageNotFoundDesc = "<h2 class='margin-t-0'>404 - Page not Found</h2>We're sorry, the page you're looking for is not found.";
l_menu = "Menu";
l_goToFullSiteRedirect = "You'll be redirected to the full site";
panelDim = '0.6';hidePanelOnClick = '1';panelGroupScrolling = '';pageTitles=new Array();pageTitles['typography.php'] = 'Typography';pageTitles['changelog.php'] = 'Changelog and Bugs';pageTitles['features.php'] = 'Features';pageTitles['about.php'] = 'About';pageTitles['tutorials.php'] = 'Docs and Tutorials';pageTitles['contact.php'] = 'Contact';pageTitles['download.php'] = 'Download';pageTitles['buytemplate.php'] = 'Buy Template';pageTitles['demo.php'] = 'Demo sites and examples';pageURL=new Array();pageURL['typography.php'] = 'Typography';pageURL['changelog.php'] = 'bugs';pageURL['features.php'] = 'Features';pageURL['about.php'] = 'about';pageURL['tutorials.php'] = 'tutorials';pageURL['contact.php'] = 'Contact';pageURL['download.php'] = 'Download';pageURL['buytemplate.php'] = 'buy';pageURL['demo.php'] = 'demo';</script><script type="text/javascript" src="plugins/accordion/plugin.js"></script><script type="text/javascript" src="plugins/autozoom/plugin.js"></script><script type="text/javascript" src="plugins/panels/desktop.js"></script><script type="text/javascript" src="plugins/plugintemplate/plugin.js"></script><script type="text/javascript" src="plugins/tileflip/plugin.js"></script><script type="text/javascript" src="plugins/tilefliptext/plugin.js"></script><script type="text/javascript" src="plugins/tilemedia/plugin.js"></script><script type="text/javascript" src="plugins/tilemosaic/plugin.js"></script><script type="text/javascript" src="plugins/tileslide/plugin.js"></script><script type="text/javascript" src="plugins/tileslidefx/plugin.js"></script><script type="text/javascript" src="plugins/tileslideshow/plugin.js"></script><script type="text/javascript" src="plugins/tiletemplate/plugin.js"></script><script type="text/javascript" src="plugins/tiletwitter/plugin.js"></script><script type="text/javascript" src="plugins/tileweather/plugin.js"></script><script type="text/javascript" src="js/functions.js"></script><script type="text/javascript" src="js/main.js"></script><script type="text/javascript" src="plugins/tilemedia/jquery.media.js"></script><script type="text/javascript" src="plugins/tilemedia/jquery.metadata.js"></script><script type="text/javascript" src="plugins/tileweather/jquery.simpleweather-2.1.2.min.js"></script><style>
    #catchScroll{
      background:rgb(30,30,30);
      -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=00)';
      filter: alpha(opacity=00);
      -moz-opacity: 0;
      -khtml-opacity: 0;
      opacity:0;
    }
</style>    <noscript><style>#tileContainer{display:block}</style></noscript>

<script type="text/javascript" src = "js/jquery.slimscroll.js"> </script>

<div id="wrapper">
  <div id="centerWrapper">
    <div id="tileContainer">
      <img id='arrowLeft' class="navArrows" src="themes/theme_default/img/primary/arrowleft.png" onClick="  javascript:$group.goLeft();" alt="left arrow"/>
      <img id='arrowRight' class="navArrows" src="themes/theme_default/img/primary/arrowright.png" onClick="javascript:$group.goRight();" alt="right arrow"/>
    	<a href="?/#&amp;home" id="groupTitle0" class="groupTitle" style="margin-left:0px; margin-top:0px" onclick="javascript:$group.goTo(0);">
        <h3>Home</h3>
      </a>
      <a href="?/#&amp;download" id="groupTitle1" class="groupTitle" style="margin-left:775px; margin-top:0px"onclick="javascript:$group.goTo(1);">
        <h3>Events</h3>
      </a>
      <a href="?/#&amp;support" id="groupTitle2" class="groupTitle" style="margin-left:1550px; margin-top:0px"onclick="javascript:$group.goTo(2);">
        <h3>Contact</h3>
      </a>
      <!-- <a  href="home.html" class="tile tileCenteredSlide left group0 " style="
          margin-top:200px; margin-left:0px;
          width:300px; height:145px;
          background:rgb(80, 150, 1);"  data-pos='45-0-300' 	> 
          <div class="container1">
            <h3>
              <img title='' alt='' style='margin-top:0px;margin-left:0px;' 
              src="img/icons/box_info.png" height="60" width="60"/>
              Home    
            </h3>
          </div>
          <div class="container2">
            <h5>Our Aims and Objectives </h5>
          </div>
        </a> -->
      <a  href="?/speakers" id="tileSlideshow0-2-0" class="tile tileSlideshow group0 " style="
        margin-top:45px; margin-left:310px;
	      width:219px; height:300px;
	      background:#6950ab;"  data-pos='45-310-300'  data-n=0> 
    
        <div class='imgWrapperBack' style="width: 219px; height:300px"></div>
        <div class='imgWrapper' style="width: 219px; height:300px"><img src="img\/features\/1.jpg"; style="height: 100%; width:100%" margin-left:2em; /></div>
   
        <div class='imgText'>PVC Bana Singh</div>   
        <script>slideshowTiles["tileSlideshow0-2-0"] = [["img\/features\/1.jpg","img\/features\/2.jpg","img\/features\/3.jpg","img\/features\/7.jpg","img\/features\/4.jpg","img\/features\/5.jpg","img\/features\/6.jpg","img\/features\/tabla.jpg",],["","","",""],["PVC Bana Singh","Rajendra Singh","Anshu Gupta ","Sobhit Mahur","Arunima Sinha","Bhakti Sharma","M.Pramod Kumar", "Rimpa Shiva"],"slide-right, slide-up, slide-down,slide-left",4000]</script>
    
        <div class='tileLabelWrapper top' style='border-top-color:#FF8000;'><div class='tileLabel top'>Speakers</div></div> 
      </a>

      <a href="https://vylc-2014.appspot.com/?/registration" class="tile tileFlipText vertical group0 " style="margin-top:200px; margin-left:0px; width:300px; height:145px;"  data-pos='200-310-300' > 
        <div class='flipContainer'>
  		    <div class='flipFront' style="background:#FF8000;">
  		    <h3>
  		   	  <img title='' alt='' style='margin-top:0px;margin-left:0px;' src="img/icons/pen.png" height="60" width="60"/>
      	    Registration
          </h3>
          </div>
  		    <div class='flipBack' style="background: #FF3C00;">
            <h5>
              <div style="font-weight: 300;font-size: 36px;padding:0 0 8px 0;color:#FFF;font-family: 'Just Another Hand', cursive;">
                <img title="" alt="" style="position: relative;vertical-align: middle;top:0px;margin-right:10px;" src="img/icons/pen2.png" height="50" width="50">
      	  	    Registration Open
              </div>
            </h5>
          </div>
        </div>
      </a>

      <a  href="?/about" id="tileScroll50_2-1" class="tile tileScroll group1 " style="margin-top:45px; margin-left:0px; width:145px; height:145px; background:#8b0305;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            About us
          </span>
        </div>
      </a>

      <a  href="?/vylc2014" id="tileScroll51_2-1" class="tile tileScroll group1 " style="margin-top:45px; margin-left:155px; width:145px; height:145px; background:#0078a0;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            About VYLC 2014
          </span>
        </div>
      </a>
        <!-- <a  href="?/school_events" class="tile tileCentered group1 " style="margin-top:45px; margin-left:1085px; width:145px; height:145px;background:#FFF;" data-pos='45-1085-145'>
          <div class="container" style="background:#FFF;"
    		    onMouseOver="javascript:$(this).css('background','#00BFFF')"
		        onMouseOut="javascript:$(this).css('background','#FFF')">
        <h2 style='color:#11528f;margin-top:25px;margin-left:-25px;'
      		onMouseOver="javascript:$(this).css('color','#FFF')"
          onMouseOut="javascript:$(this).css('color','#11528f')">
         <span style='font-size:24px;'>
          School Events
        </span>
        </h2>
    </div>
    </a>
<a  href="?/college_events" class="tile tileCentered group1 " style="margin-top:45px; margin-left:1240px; width:145px; height:145px;background:#FFF;" data-pos='45-1085-145'>
    <div class="container" style="background:#FFF;"
    		onMouseOver="javascript:$(this).css('background','#00BFFF')"
		    onMouseOut="javascript:$(this).css('background','#FFF')">
        <h2 style='color:#11528f;margin-top:25px;margin-left:-25px;'
      		onMouseOver="javascript:$(this).css('color','#FFF')"
          onMouseOut="javascript:$(this).css('color','#11528f')">
         <span style='font-size:24px;'>
          College Events
         </span>
        </h2>
    </div>
</a>
<a  href="?/talks" class="tile tileScroll group1 " style="margin-top:45px; margin-left:775px; width:145px; height:145px; background:#FF0000;"  data-pos='200-1085-145'> 
    <div class='tileTitle' style='margin-left:10px;'>
        <span style='font-size:24px;'>
          Talks
        </span>
    </div>
</a>-->
      <a  href="?/talks" id="tileScroll1_2-4" class="tile tileScroll group1 " style="margin-top:45px; margin-left:775px; width:300px; height:145px; background:#8B008B;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:15px; margin-top: 14px;'>
          <span style='font-size:24px;'>
            Talks & Workshops
          </span>
        </div>
		    <div class='divScroll' style='margin-left:14px; margin-top: 8px;'>Talks on Leadership</div>
		    <script>scrollTile("1_2-4",["Talk on  Leadership","Workshop on Self Expression","Soft Skill Workshop","Youth Cafe"],4000,0)</script>
      </a> 

      <a  href="?/cultural_programs" id="tileScroll1_2-99" class="tile tileScroll group1 " style="margin-top:45px; margin-left:1086px; width:300px; height:145px; background:rgb(0, 120, 160);"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:15px; margin-top: 14px;'>
          <span style='font-size:24px;'>
            Cultural Programs
          </span>
        </div>
        <div class='divScroll' style='margin-left:20px; margin-top:2px;'>An Evening with the Princess of Tabla</div>
        <script>scrollTile("1_2-99",["An Evening with the Princess of Tabla","An Evening with the Princess of Tabla","An Evening with the Princess of Tabla","An Evening with the Princess of Tabla"],4000,0)</script>
      </a> 




      <a  href="?/school_events" class="tile tileScroll group1 " style="margin-top:200px; margin-left:1240px; width:145px; height:145px; background:#228B22;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            School Events
          </span>
        </div>
      </a>
      <!--<a  href="?/cultural_programs" class="tile tileScroll group1 " style="margin-top:45px; margin-left:1086px; width:298px; height:145px; background:#008B8B;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:40px; margin-top:35px;'>
          <span style='font-size:24px;'>
            Cultural Programs
          </span>
        </div>
      </a>-->

      
      <a  href="?/schedule" id="tileScroll1_2-1" class="tile tileScroll group1 " style="margin-top:200px; margin-left:775px; width:145px; height:145px; background:#FF00FF;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            Schedule
          </span>
        </div>
	     <!--<div class='divScroll' style='margin-left:12px;'>Task Schedule</div>
      <script>scrollTile("1_2-1",["Task Schedule","Date & Time","Venue"],2000,0)</script> -->
      </a>

      <a  id="tileScroll1_2-2" class="tile tileScroll group1 " style="margin-top:200px; margin-left:930px; width:145px; height:145px; background:#2F4F4F;"  data-pos='200-1085-145' > 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            Results
          </span>
        </div>
	       <!--<div class='divScroll' style='margin-left:12px;'>Task Schedule</div>
         <script>scrollTile("1_2-2",["Task Schedule","Date & Time","Venue"],3000,0)</script> -->
      </a>

      <a  href="?/college_events" id="tileScroll1_2-3" class="tile tileScroll group1 " style="margin-top:200px; margin-left:1085px; width:145px; height:145px; background:#FF4500;"  data-pos='200-1085-145'> 
        <div class='tileTitle' style='margin-left:10px;'>
          <span style='font-size:24px;'>
            College Events
          </span>
        </div>
		       <!-- <div class='divScroll' style='margin-left:12px;'>Task Schedule</div>
		            <script>scrollTile("1_2-3",["Task Schedule","Date & Time","Venue"],3500,0)</script> -->
      </a>
		  

<!-- 
      	<a  target='_blank' href="result.html" class="tile tileImg group1 bottom endGroup" style="
    margin-top:200px; margin-left:1240px;
	width:145px; height:145px;
	background:#509601;"   data-pos='200-1240-145' >
  <h5 style="margin-left:6px">Results</h5>
    </a>
      	<a  href="http://www.iitk.ac.in/vs/vyc_2013/" class="tile group2 align-center" style="
    margin-top:45px; margin-left:1550px;
	width:455px; height:145px;
	background:gray;"  data-pos='45-1550-455' > 
    <div style='line-height:20px;margin-top:40px;padding:5px;text-aling:center;'>
	<span style='font-size:20px;letter-spacing:0px;font-weight:300;'>Vivekananda Youth Leadership Convention 2013 IIT Kanpur</span> 
	<div style='font-size:15px;letter-spacing:2px;'>(10-16th January)</div> 
	</div>    <div class='tileLabelWrapper top' style='border-top-color:darkgray;'><div class='tileLabel top' >Stay Connected...</div></div>    </a>
   

  --> <a  href="?/faq" class="tile tileFlip horizontal group2 " style="margin-top:45px; margin-left:1550px;
      	width:150px; height:150px;"  data-pos='200-1550-145' > 

         <div class='flipContainer'>
          <div class='flipFront' style="background:#c82345;">
            <div class='flipImgCenterer'>
              <img src="img/forum.png" alt="" title="" style="width:103.5px;"/>
            </div>
          </div>
	        <div class='flipBack' style="background:#c82345;"><h5><span style='font-size:22px;'>FAQ</span></h5>
          </div>
        </div>
      </a>
     	<a  href="?/contact" class="tile tileFlip horizontal group2 " style="margin-top:45px; margin-left:1710px;
       	width:150px; height:150px;"  data-pos='200-1705-145' > 
    
        <div class='flipContainer'>
	        <div class='flipFront' style="background:#dea317;">
            <div class='flipImgCenterer'>
              <img src="img/icons/mail.png" alt="" title="" style="width:103.5px;"/>
            </div>
          </div>
	      	<div class='flipBack' style="background:#dea317;"><h5><span style='font-size:22px;'>Contact Us</span></h5>
          </div>
       	</div>
      </a>

      <a  href="http://www.iitk.ac.in/vs/vyc_2013/" id="tileSlideshow0-2-9" class="tile tileSlideshow group2 " style="
        margin-top:45px; margin-left:1870px;width:219px; height:300px;background: rgb(34, 139, 34);"  data-pos='45-310-300'  data-n=0> 
    
        <div class='imgWrapperBack' style="width: 219px; height:300px"></div>
        <div class='imgWrapper' style="width: 219px; height:300px"><img src="img\/features\/1.jpg"; style="height: 100%; width:100%" margin-left:2em; /></div>
        <!--<div class='imgText'>a</div> -->
        <script>slideshowTiles["tileSlideshow0-2-9"] = [["img\/features\/a.jpg","img\/features\/b.jpg","img\/features\/c.jpg","img\/features\/d.jpg","img\/features\/e.jpg","img\/features\/f.jpg","img\/features\/g.jpg","img\/features\/h.jpg","img\/features\/i.jpg","img\/features\/j.jpg","img\/features\/k.jpg","img\/features\/l.jpg","img\/features\/m.jpg","img\/features\/n.jpg","img\/features\/o.jpg","img\/features\/p.jpg","img\/features\/q.jpg","img\/features\/r.jpg","img\/features\/s.jpg","img\/features\/t.jpg","img\/features\/u.jpg"],["","","",""],["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u"],"slide-right, slide-up, slide-down,slide-left",4000]</script>
    
        <div class='tileLabelWrapper top' style='border-top-color:rgb(139, 3, 5);'><div class='tileLabel top'>VYLC 2013</div></div> 
      </a>


      <a href="?/#&amp;home" class="tile tileFlip horizontal group2 " style="margin-top:205px; margin-left:1550px;
        width:150px; height:140px;"  data-pos='200-1550-145' > 
    
        <div class='flipContainer'>
          <div class='flipFront' style="background:rgb(47, 79, 79);">
            <div class='flipImgCenterer'>
              <img src="img/right.png" alt="" title="" style="width:103.5px;"/>
            </div>
          </div>
          <div class='flipBack' style="background:rgb(47, 79, 79);"><h5><span style='font-size:22px;'>Stay Connected...</span></h5>
          </div>
        </div>
      </a>

      <a href="https://www.facebook.com/vylc2014" target="_blank" class="tile tileMosaic group2 noClick" style="
        margin-top:205px; margin-left:1710px;width:150px; height:65px;background:#90D444;"  data-pos='200-1860-146'> 
        <img src="img/facebook-logo.jpg" width="100%">
      </a>

      <a href="http://www.youtube.com/user/vsiitk" target="_blank"  class="tile tileMosaic group2 noClick" style="
        margin-top:280px; margin-left:1710px;width:150px; height:65px;background:#90D444;"  data-pos='200-1860-146' > 
        <img src="img/youtube-logo.jpg" width="100%">
      </a>
    </div> 
    <div id="subNavWrapper"></div>
    <div id="contentWrapper" >   		    
	    <div id="content">	        	
		  </div>
    </div>
  </div>
</div>