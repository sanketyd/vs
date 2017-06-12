/*****************************
* Initial layout setup
******************************/

var header_height;

var page_height;
var page_width;

var screen_width;
var screen_height;

var current_page="#home";
var target_page="#home";

//var events = ["workshop_on_soft_skills", "kbc", "leadership_summit", "stage_play", "creative_writing"];
var events = [];

function set_layout(){
	header_height = $("#header").height();

	page_height = window.innerHeight - header_height - 25;
	page_width = $("#content").width();

	screen_width = window.innerWidth;
	screen_height = window.innerHeight;

	if (screen_width > 1000){
		$('body').css('overflow-x', 'hidden');
		$('#gallery-slide').css('overflow', '');
	}
	else{
		$('body').css('overflow-x', 'scroll');
		$('#gallery-slide').css('overflow', 'hidden');
	}

	$("#home-gallery").css({'padding-top': header_height+5});
	$("#main_table").css({'height': page_height});

	/*$("#nav").css({ 'height': page_height });*/
	$("#content").css({ 'height': page_height });
	$(".page").css({ 'height': page_height });

	$(".page").each(function(){
		if ( ("#"+$(this).attr("id")) != current_page+"-page")
			$(this).css({'left': page_width});
		else
			$(this).css({'left': 0});
	});
}

set_layout();

$(window).resize(set_layout);

/*****************************
* Page Change
******************************/

var page_in_transit=false;

function set_page(animation_time){
	page_in_transit=true;
	page_width=$("#content").width();
	$(".page").each(function(){
		if ( ("#"+$(this).attr("id")) != current_page+"-page" && ("#"+$(this).attr("id")) != target_page+"-page"){
			$(this).css({'z-index': 0, 'left': page_width});
		}
		
		if ( ("#"+$(this).attr("id")) == target_page+"-page") {
			$(this).css({'z-index':1, 'left': page_width});
		}
	});

	$(".mCSB_draggerContainer").css({'opacity':0});

	$(current_page+"-page").animate({
						left: -page_width
					  }, animation_time, function (){
						  $(this).css({
							  'z-index':0,
							  'left': page_width
							  });
						});
	
	$(target_page+"-page").animate({
						left: 0
					  }, animation_time, function() {
						$(".mCSB_draggerContainer").css({'opacity':1});
							current_page=target_page;
							page_in_transit=false;
						  });
}

$(".nav").click(function(){
	return !page_in_transit;
})

set_page(0);

/*****************************
* Gallery
******************************/

//Front_Gallery.base_url;
var gallery_paused=false;
var galery_in_transit=false;

var Front_Gallery={};

var timer_handle;

var num_slides = 0;
var current_slide = 0;

function play_slide(){
	gallery_paused=false;
	$("#front-gallery-play-pause").removeClass('play').addClass('pause');
	timer_handle = window.setInterval(show_next_slide, 5000);
}

function pause_slide(){
	gallery_paused=true;
	$("#front-gallery-play-pause").removeClass('pause').addClass('play');
	clearInterval(timer_handle);
}

function show_next_slide(){
	galery_in_transit=true;
	next_slide=current_slide+1;
	if (next_slide >= num_slides){
		pause_slide();
		next_slide=0;
	}
	
	$("#gallery_set_"+current_slide+" .front-gallery-right-image").animate({'opacity': 0}, 200);
	$("#gallery_set_"+current_slide)
		.animate(
			{"left": "-1500px", "opacity": 0},
			600);
			
	$("#gallery_set_"+next_slide)
		.css({"left": "0", "display": "block"})
		.animate(
			{"left": "-500px", "opacity": 1},
			600,
			function(){
					$("#gallery_set_"+current_slide+" .front-gallery-right-image").css('opacity', 0.05);
					$("#gallery_set_"+current_slide).css('display', 'none');
					current_slide = next_slide;
					galery_in_transit=false;
			});
}

function show_prev_slide(){
	galery_in_transit=true;
	prev_slide=(current_slide-1+num_slides)%num_slides;
	pause_slide();

	$("#gallery_set_"+prev_slide+" .front-gallery-right-image").css('opacity', 0);
	$("#gallery_set_"+current_slide)
		.animate(
			{"left": "0px", "opacity": 0.05},
			600);
			
	$("#gallery_set_"+prev_slide)
		.css({"left": "-1500px", "display": "block"})
		.animate(
			{"left": "-500px", "opacity": 1},
			600,
			function(){
					$("#gallery_set_"+prev_slide+" .front-gallery-right-image").css('opacity', 0.05);
					$("#gallery_set_"+current_slide).css({'opacity': 0, 'display': 'none'});
					current_slide = prev_slide;
					galery_in_transit=false;
			});
}


function create_node(node_class, gallery, base_url) {
	if ('url' in gallery)
		return '<img class="' + node_class + '" src="' + base_url + "/" + gallery.url+'"/>';
	else if ('embed' in gallery)
		return '<div class="' + node_class + '" style="text-align: center;">'+gallery.embed+'</div>';
	return "";
}

$.getJSON('js/front_gallery_list.json', function(data) {
		Front_Gallery = data;
		var galleryList = Front_Gallery.pictures;
		num_slides = galleryList.length;


		$("#gallery_central").css({"width": 2000*num_slides});
		
		opacity=0;
		left=500;
		display="none";
		i=0;

		$('<div id="gallery_set_'+i+'" class="front-gallery-set" style="left:'+left+'; opacity:'+opacity+'; display:'+display+'"></div>')
			.append(create_node('front-gallery-left-image', galleryList[num_slides-1], Front_Gallery.base_url))
			.append('<div class="front-gallery-image-info no_box_shadow" style="background-color:'+galleryList[i].info_bg_color+'; width: 655px;">'+
			'<a>' + galleryList[i].info+'</a></div>')
			.append('<img class="front-gallery-central-image" src="' + Front_Gallery.base_url + "/" + galleryList[0].url +'" style="width: 345px;"/>')
			.append(create_node('front-gallery-right-image', galleryList[1], Front_Gallery.base_url))
			.appendTo("#gallery-slide");

		for (var i=1; i < num_slides; i++){
			
			opacity=0;
			left=500;
			display="none";

			if (galleryList[i].link==''){
				$('<div id="gallery_set_'+i+'" class="front-gallery-set" style="left:'+left+'; opacity:'+opacity+'; display:'+display+'"></div>')
					.append(create_node('front-gallery-left-image', galleryList[(i+num_slides-1)%num_slides], Front_Gallery.base_url))
					.append('<div class="front-gallery-image-info" style="background-color:'+galleryList[i].info_bg_color+';">'+
					'<a>' + galleryList[i].info+'</a></div>')
					.append(create_node('front-gallery-central-image', galleryList[i], Front_Gallery.base_url))
					.append(create_node('front-gallery-right-image', galleryList[(i+1)%num_slides], Front_Gallery.base_url))
					.appendTo("#gallery-slide");
			} else {
				$('<div id="gallery_set_'+i+'" class="front-gallery-set" style="left:'+left+'; opacity:'+opacity+'; display:'+display+'"></div>')
					.append(create_node('front-gallery-left-image', galleryList[(i+num_slides-1)%num_slides], Front_Gallery.base_url))
					.append('<div class="front-gallery-image-info" style="background-color:'+galleryList[i].info_bg_color+';">'+
					'<a target="_blank" href="'+galleryList[i].link+'">' + galleryList[i].info+'</a></div>')
					.append(create_node('front-gallery-central-image', galleryList[i], Front_Gallery.base_url))
					.append(create_node('front-gallery-right-image', galleryList[(i+1)%num_slides], Front_Gallery.base_url))
					.appendTo("#gallery-slide");
			}
		}

		$("#gallery_set_"+current_slide).css({"left": "-500px", "display": "block", "opacity": 1});
				
		$('<div id="front-gallery-control"></div>')
			.append('<div id="front-gallery-go-left"></div>')
			.append('<div id="front-gallery-play-pause" class="pause"></div>')
			.append('<div id="front-gallery-go-right"></div>')
			.appendTo("#gallery-slide");
			
		$("#front-gallery-go-right").click(function(){
			if (!galery_in_transit){
				pause_slide();
				show_next_slide();
			}
		});

		$("#front-gallery-play-pause").click(function(){
			if ($(this).hasClass('play'))
				play_slide();
			else if ($(this).hasClass('pause'))
				pause_slide();
		});

		$("#front-gallery-go-left").click(function(){
			if (!galery_in_transit){
				pause_slide();
				show_prev_slide();
			}
		});
		play_slide();
	})
	.error(function(){
		console.log("'js/front_gallery_list.json' not found or invalid JSON format. In the latter case please visit 'http://jsonlint.com/' to valivdate the json file.");
	});




/*****************************
* Popup
******************************/

var popup_paused_gallery=false;
var popup_visible=false;

function show_popup(url){
	var url_split=url.split(/\//);
	event_name = url_split[url_split.length-1].split(/\./)[0];
	var eid = events.indexOf(event_name);
		
	$('#popup_back').css ('visibility','visible');
	$('#popup').html("");
	$('#popup').css ('visibility','visible');
	$('#popup').load (url, function(){
		html='<div class="popoup_bar">\
			<div class="popup_button popup_close">Close</div>';
		if (eid>-1)
			if (!logged_in || !data["event_"+eid])
				html+='<div id="popup_register" class="popup_button popup_register">Register</div>';
			else
				html+='<div id="popup_registered" class="popup_button popup_register">Registered</div>';
		html+='</div>';
		$(this).append(html);
		if (eid>-1){
			if ( (typeof data !== "undefined") && !data["event_"+eid]){
				$('.popup_register').mouseup(function(){
					if (logged_in){
						if (!data["event_"+eid]){
							$("#popup_register").html("Processing ...");
							$.getScript("http://vyc2013.appspot.com/register?eid="+eid)
								.done(function(script, textStatus) {
									$("#popup_register").html("Registered");
									data["event_"+eid]=true;
									$("#registered_events_ul").append($('<li/>').text(event_names[eid]));
								})
								.fail(function(jqxhr, settings, exception) {
									$("#popup_register").html("Registeration failed");
								});
							}
						}
					else {
						alert("You must login in the Registration tab before registering in an event.")
					}  

					});
				}
			}
		if (eid==2 && logged_in){
			href = "https://docs.google.com/spreadsheet/embeddedform?formkey=dEdSSzVNM2ZsOXZUelV1S1ZnVDAtS2c6MQ";
		$("#YLC").attr('href', href+"&entry_0="+info["name"]+"&entry_2="+info["institute"]+"&entry_3="+info["email"]+"&entry_4="+info["mobileno"]+"&entry_23="+info["department"]);
		}
		$('.popup_close').mouseup(hide_popup);
		$(".scroll").css('height', $('#popup').height() - 100);
		$(".scroll").mCustomScrollbar({
					scrollInertia:100
				});
		});
		document.body.style.overflow = "hidden";
		if (!gallery_paused){
			pause_slide();
			popup_paused_gallery=true;
			popup_visible=true;
		}
}

function hide_popup(){
	hash=window.location.hash;
	hash=hash.split('/');
	if (hash.length == 3 && !(typeof hash[2] === 'undefined')){
		hash.pop();
		hash = hash.join('/');
		window.location.hash=hash;
	}
	
	document.body.style.overflow = "visible";
	$('#popup_back').css ('visibility','hidden');
	$('#popup').css ('visibility','hidden');
	
	if (popup_paused_gallery){
			play_slide();
			popup_paused_gallery=false;
			popup_visible=false;
		}
}

$(document).keyup(function(e) {
  if (e.keyCode == 27)   // esc
	  hide_popup();
});

$('#popup_back').click(hide_popup);



/*****************************
* Hash Change
******************************/

function hash_change(interval){
	new_hash=window.location.hash;
	hash_list=new_hash.split('/');
	
	popup_pages = ['events'];
	
	if (new_hash[1]=='/' && hash_list.length>=2){
		if (popup_visible)
			hide_popup();
		target_page="#"+hash_list[1];
		if (target_page!=current_page) {
			$('a[href$="#/'+current_page.substr(1)+'"]').removeClass("selected");
			$('a[href$="#/'+hash_list[1]+'"]').addClass("selected");
			set_page(interval);
		}
	}
	if (new_hash[1]=='/' && hash_list.length==3){
		if (jQuery.inArray(hash_list[1], popup_pages) > -1)
			show_popup('pages'+new_hash.substr(1)+'.php');
	}
}

if (window.location.hash != ""){
	hash_change(0);
}

$(window).bind('hashchange', function() {
	hash_change(500);
});
