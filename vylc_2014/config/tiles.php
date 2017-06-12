<?php
/* All tiles on the homepage are configured here, be sure to check the tutorials/docs on http://metro-webdesign.info */

/* GROUP 0 */

//Recent Happenings
$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>0,'width'=>2,'height'=>2,"background"=>"#509601","url"=>"", "classes"=>"notice-board",
"title"=>"Recent Happenings","text"=>"
<ul>
	<li><span onclick='window.location.href=\"?/results#ser\";'>School Competitions results announced.</span></li>
	<li>Due to delay in flight, 'Workshop on Self Expression' has been postponned till furthur notice.</li>
	<li><span onclick='window.location.href=\"?/talks#day2\";'>Time of Day 2 Talk Changed.</span></li>
	<li><span onclick='window.location.href=\"?/college_events#ylc\";'>Reward for <b>Youth Leadership Challenge:</b> Internship in Youth For Seva, a leading national reforms organization.</span></li>
	<li><span onclick='window.location.href=\"?/results#ylcsl\";'>Shortlist from the first round of <b>Youth Leadership Challenge</b> has been declared.</br>Please see the Results page and your email for instructions.</br></span></li>
	<li><span onclick='window.location.href=\"?/results#itsesl\";'>Shortlist from the first round of <b>Innovation: The Social Entrepreneur</b> has been declared.</br>Please see the Results page. The shortlisted participants will have to prepare a case study. Please check your email for instructions.</br></span></li>
	<li><span onclick='window.location.href=\"?/school_events#essay_writing\";'>Time of <b>Essay Writing</b> and <b>Extempore</b> changed.</span></li>
	<li><span onclick='window.location.href=\"?/college_events#mm\";'>Sumbission for <b>Movie Making</b> has started. Last date: 11 Jan 2014.</span></li>
	<li><span onclick='window.location.href=\"?/college_events#tse\";'>Reward for winners of <b>Innovation: The Social Entrepreneur</b><br/><b><i>Internship and startup incubation opportunities in CIBA, Goa.</i></b><br/></span></li>
	<li><span onclick='window.location.href=\"?/college_events#tse\";'>Abstract Submission for <b>Innovation: The Social Entrepreneur</b> has started. Last date: 9th Jan 2014, 12:00 PM (Noon Time)</span></li>
	<li><span onclick='window.location.href=\"?/college_events#ylc\";'><b>Youth Leadership Challenge</b> first round sumbission over.</span></li>
</ul>
");



/* GROUP 1 */

//About Us
$tile[] = array("type"=>"img","group"=>1,"x"=>0,"y"=>0,'width'=>1,'height'=>1,"background"=>"#0F6D32","url"=>"?/about",
	"img"=>"img/vivekananda.jpg","desc"=>"",
	"showDescAlways"=>true,"imgWidth"=>1,"imgHeight"=>1,
	"labelText"=>"About","labelColor"=>"#777","labelPosition"=>"top");


//Campus Ambassador Program
$tile[] = array("type"=>"simple","group"=>1,"x"=>1,"y"=>0,'width'=>1,'height'=>1,"background"=>"rgb(0, 120, 160)","url"=>"?/campus",
"title"=>"Campus Ambassador Program","text"=>"", "classes"=>"cap");


//Speakers Slide show
$tile[] = array("type"=>"slideshow","group"=>1,"x"=>2,"y"=>0,"width"=>1.5,"height"=>2,"background"=>"#444","url"=>"?/speakers",
	"images"=>array("img/speakers/1.jpg","img/speakers/8.jpg","img/speakers/2.jpg","img/speakers/3.jpg","img/speakers/7.jpg","img/speakers/4.jpg","img/speakers/5.jpg","img/speakers/6.jpg","img/speakers/tabla.jpg"),
	"effect"=>"slide-right, slide-up, slide-down, slide-left",
	"speed"=>4000,
	"arrows"=>false,
	"texts"=>array("PVC Bana Singh","Jagdeep Chhokar","Rajendra Singh","Anshu Gupta ","Sobhit Mahur","Arunima Sinha","Bhakti Sharma","M.Pramod Kumar"),
	"labelText"=>"Speakers","labelColor"=>"#FF8000","labelPosition"=>"top",
	"classes"=>"");


//Registration
$tile[] = array("type"=>"flipText","group"=>1,"x"=>0,"y"=>1,'width'=>2,'height'=>1,"background"=>"#c82345",
	"url"=>"https://vylc-2014.appspot.com/?/registration",
	"background"=>"transparent",
	"direction"=>"vertical",
	"title"=>"Registration",
	"frontBg"=>"rgb(255, 128, 0)",
	"backBg"=>"#FF3C00",
	"img"=>"img/icons/pen.png",
	"imgAlt"=>"img/icons/pen2.png",
	"imgTitle"=>"",
	"imgSize"=>"50",
	"imgToTop"=>"0",
	"imgToLeft"=>"0",
	"text"=>"Registration Open",
	"labelText"=>"",
	"labelColor"=>"#333",
	"labelPosition"=>"top");


/*$tile[] = array("type"=>"custom","group"=>1,"x"=>2,"y"=>0,'width'=>1,'height'=>1,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; margin-top:5px;'>
<div style='color:#FFF;font-size:43px;line-heigt:70px;'><strong>CHECK</strong></div>
<span style='color:#FFF;font-size:32px;'><strong>OUT</strong></span><span style='color:#BBB;font-size:32px;'>THE</span>
<div style='font-size:57px;line-height:30px;'>TYPO</div>
<div style='font-size:37px;line-height:40px;'>GRAPHY</div>
</div>");*/


/* GROUP 2*/
//Talks and Workshops
$tile[] = array("type"=>"scrollText","group"=>2,"x"=>0,"y"=>0,'width'=>2,'height'=>1,"background"=>"rgb(139, 0, 139)","url"=>"?/talks", "title"=>"Talks and Workshops","text"=>array("Talks on Leadership and Human Excellence","Workshop on Self Expression","Citizen Cafe (Youth Cafe)"),"scrollSpeed"=>5000,"img"=>"","imgSize"=>"50","imgToTop"=>"5","imgToLeft"=>"5", "labelText"=>"","labelColor"=>"#AAA","labelPosition"=>"bottom","classes"=>"tnw");


//Cultural Programs
$tile[] = array("type"=>"scrollText","group"=>2,"x"=>2,"y"=>0,'width'=>2,'height'=>1,"background"=>"rgb(0, 120, 160)","url"=>"?/cultural_programs", "title"=>"Cultural Programs","text"=>array("An Evening with the Princess of Tabla","United India","An Evening with the Princess of Tabla","United India"),"scrollSpeed"=>5000,"img"=>"","imgSize"=>"50","imgToTop"=>"5","imgToLeft"=>"5", "labelText"=>"","labelColor"=>"#AAA","labelPosition"=>"bottom","classes"=>"cp");


//School Events
$tile[] = array("type"=>"simple","group"=>2,"x"=>0,"y"=>1,'width'=>1,'height'=>1,"background"=>"rgb(34, 139, 34)","url"=>"?/school_events",
"title"=>"School Events","text"=>"");

//College Events
$tile[] = array("type"=>"simple","group"=>2,"x"=>1,"y"=>1,'width'=>1,'height'=>1,"background"=>"rgb(255, 69, 0)","url"=>"?/college_events",
"title"=>"College Events","text"=>"");

//Schedule
$tile[] = array("type"=>"simple","group"=>2,"x"=>2,"y"=>1,'width'=>1,'height'=>1,"background"=>"rgb(255, 0, 255)","url"=>"?/schedule",
"title"=>"Schedule","text"=>"");

//Results
$tile[] = array("type"=>"simple","group"=>2,"x"=>3,"y"=>1,'width'=>1,'height'=>1,"background"=>"rgb(47, 79, 79)","url"=>"?/results",
"title"=>"Results","text"=>"");




/* GROUP 3 */
//FAQ
$tile[] = array("type"=>"flip","group"=>3,"x"=>0,"y"=>0,"width"=>1,"height"=>1,	"background"=>"rgb(200, 35, 69)", "url"=>"?/faq", "direction"=>"horizontal", "img"=>"img/forum.png", "imgSize"=>0.7, "text"=>"FAQ");

//Contact Us
$tile[] = array("type"=>"flip","group"=>3,"x"=>1,"y"=>0,"width"=>1,"height"=>1,	"background"=>"rgb(222, 163, 23)", "url"=>"?/contact", "direction"=>"horizontal", "img"=>"img/icons/mail.png", "imgSize"=>0.7, "text"=>"Contat Us");

//Stay Connected
$tile[] = array("type"=>"flip","group"=>3,"x"=>0,"y"=>1,"width"=>1,"height"=>1,	"background"=>"rgb(47, 79, 79)", "url"=>"", "direction"=>"horizontal", "img"=>"img/right.png", "imgSize"=>0.7, "text"=>"Stay Connected");

//Facebook
$tile[] = array("type"=>"img","group"=>3,"x"=>1,"y"=>1,'width'=>1,'height'=>0.5,"background"=>"","url"=>"https://www.facebook.com/vylc2014",
	"img"=>"img/facebook-logo.jpg","desc"=>"",
	"showDescAlways"=>false,"imgWidth"=>1,"imgHeight"=>0.5,
	"labelText"=>"","labelColor"=>"","labelPosition"=>"");


//Youtube
$tile[] = array("type"=>"img","group"=>3,"x"=>1,"y"=>1.5,'width'=>1,'height'=>0.5,"background"=>"","url"=>"http://www.youtube.com/user/vsiitk",
	"img"=>"img/youtube-logo.jpg","desc"=>"",
	"showDescAlways"=>false,"imgWidth"=>1,"imgHeight"=>0.5,
	"labelText"=>"","labelColor"=>"","labelPosition"=>"");

//VYLC-2013
$tile[] = array("type"=>"slideshow","group"=>3,"x"=>2,"y"=>0,"width"=>1.5,"height"=>2,"background"=>"#444","url"=>"http://www.iitk.ac.in/vs/vyc_2013/",
	"images"=>array("img/features/a.jpg","img/features/b.jpg","img/features/c.jpg","img/features/d.jpg","img/features/e.jpg","img/features/f.jpg","img/features/g.jpg","img/features/h.jpg","img/features/i.jpg","img/features/j.jpg","img/features/k.jpg","img/features/ll.jpg","img/features/m.jpg","img/features/n.jpg","img/features/o.jpg","img/features/p.jpg","img/features/q.jpg","img/features/r.jpg","img/features/s.jpg","img/features/t.jpg","img/features/u.jpg"),
	"effect"=>"slide-right, slide-up, slide-down, slide-left",
	"speed"=>4000,
	"arrows"=>false,
	"texts"=>array(),
	"labelText"=>"VYLC-2013","labelColor"=>"rgb(139, 3, 5)","labelPosition"=>"top",
	"classes"=>"");
?> 
