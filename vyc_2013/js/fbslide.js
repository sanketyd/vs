
/*********************
 * Parameters
 *********************/
var DISPLAY_PHOTOS_PER_ALBUM=5; //Display this many photor per album
var INTERVAL_SECONDS=5;         //Interval between two photos in seconds

var MAX_NUM_ALBUMS=1000;        //Maximum number of albums to display
var MAX_PHOTOS_PER_ALBUMS=1000; //Maximum number of photos per albums to display


/*********************
 * Main Program
 *********************/
var album_details={};
var album_id_list=[];
var album_id_index=0;
var first_album=true;

album_details[10]={};

var album_slider_timer = null;
var page_slider_timer = null;
var target_div = null;

$.ajaxSetup({ cache: true });

function fbslider_album(fb_album_id){
        album_details[fb_album_id]["index"]=(album_details[fb_album_id]["index"]+1)%album_details[fb_album_id]["list"].length;
         target_div.next().text("");
				target_div.next().html("<a target='_blank' href='http://www.facebook.com/"+fb_album_id+"'>"+album_details[fb_album_id]["name"]+"</a>");
				target_div.next().dotdotdot();
        $("table", target_div).eq(0).animate({opacity: 0}, 500, function(){
                $(this).remove();
                $("table", target_div).eq(0).css('z-index', 1);
                target_div
                  .append($('<table/>', {style: "z-index: 0;"})
                    .append($('<tr/>')
                      .append($('<td/>')
                        .append($('<a/>', {target: '_blank', href: 'http://www.facebook.com/'+fb_album_id})
                          .append($('<img/>', {
                              class: 'FBSlide_image',
                              src: album_details[fb_album_id]["list"][album_details[fb_album_id]["index"]],
                              alt: album_details[fb_album_id]["name"],
                              title:  album_details[fb_album_id]["name"]
                          }))))));
            });
			
            console.log();
            console.log(album_details[fb_album_id]["name"]);
            
            /*$(target_div)
              .next()
                .append($("<a/>", {
			     target: '_blank',
			     href: 'http://www.facebook.com/'+fb_album_id})
			      .text(album_details[fb_album_id]["name"]));*/
}

function fbslider_page(){
	clearInterval(album_slider_timer);
	//fbslider_album(div, album_id_list[album_id_index]);
	album_slider_timer=setInterval(function(){
                        fbslider_album(album_id_list[album_id_index]);
                },
                INTERVAL_SECONDS*1000);
}


function display_album_list(album_id_list){
	for (var album_index=0; album_index<album_id_list.length; album_index++){
		$.getJSON("https://graph.facebook.com/"+album_id_list[album_index]+"?fields=name,photos.limit("+MAX_PHOTOS_PER_ALBUMS+").fields(picture)", 
			(function(my_album_id) {
				return function(data) {
					album_picture_list=[];
					for (var i=0; i<data.photos.data.length; i++){
						url=data.photos.data[i].picture;
						url=url.split('/');
						name_ids=url[4].split("_");
						new_url = url[0]+"//s"+url[2]+"/"+url[3]+"/s320x320/"+url[4].slice(0,-6)+"_n.jpg";
						album_picture_list.push(new_url);
					}
					album_picture_list.sort(function() {return 0.5 - Math.random()});
					album_details[my_album_id]={"name": data.name, "list": album_picture_list, "index":-1};
					
					if (album_id_list[album_id_index] == my_album_id && page_slider_timer == null){
						page_slider_timer=setInterval(function(){
											album_id_index=(album_id_index+1)%album_id_list.length;
								fbslider_page(this);
							},
							(DISPLAY_PHOTOS_PER_ALBUM+1)*INTERVAL_SECONDS*1000
						);

						album_details[album_id_list[album_id_index]]["index"]=(album_details[album_id_list[album_id_index]]["index"]+1)%album_details[album_id_list[album_id_index]]["list"].length;

						$("table", target_div).remove();

						target_div
						.append($('<table/>', {style: "z-index: 1;"})
						.append($('<tr/>')
						  .append($('<td/>')
						    .append($('<a/>', {target: '_blank', href: 'http://www.facebook.com/'+album_id_list[album_id_index]})
							.append($('<img/>', {
							    class: 'FBSlide_image',
							    src: album_details[album_id_list[album_id_index]]["list"][album_details[album_id_list[album_id_index]]["index"]],
							    alt: '',
							    title:  album_details[album_id_list[album_id_index]]["name"]
							}))))));

						 $(target_div)
						.next().text("")
						.append($("<a/>", {
							target: '_blank',
							href: 'http://www.facebook.com/'+album_id_list[album_id_index]})
							.text(album_details[album_id_list[album_id_index]]["name"]));
						(target_div).next().dotdotdot();


						album_details[album_id_list[album_id_index]]["index"]=(album_details[album_id_list[album_id_index]]["index"]+1)%album_details[album_id_list[album_id_index]]["list"].length;

						target_div
						.append($('<table/>', {style: "z-index: 0;"})
						.append($('<tr/>')
						  .append($('<td/>')
						    .append($('<a/>', {target: '_blank', href: 'http://www.facebook.com/'+album_id_list[album_id_index]})
							.append($('<img/>', {
							    class: 'FBSlide_image',
							    src: album_details[album_id_list[album_id_index]]["list"][album_details[album_id_list[album_id_index]]["index"]],
							    alt: album_details[album_id_list[album_id_index]]["name"],
							    title:  album_details[album_id_list[album_id_index]]["name"]
							}))))));
								  
						fbslider_page();
					}
				};
			}(album_id_list[album_index]))); // calling the function with the current value
	}
}

$(".FBPage").each(function(){	
      target_div = $(this);
      album_exception_list = target_div.attr('exception').split(',');
	$.getJSON("https://graph.facebook.com/"+$(this).attr('page')+"?fields=albums.limit("+MAX_NUM_ALBUMS+").fields(id,count)", function(data){
		for (var i=0; i<data.albums.data.length; i++)
			if (typeof data.albums.data[i].count != 'undefined' && album_exception_list.indexOf(data.albums.data[i].id)<0 && data.albums.data[i].count>=DISPLAY_PHOTOS_PER_ALBUM )
				album_id_list.push(data.albums.data[i].id);
					
		album_id_list.sort(function() {return 0.5 - Math.random()});
		display_album_list(album_id_list);

	}).error(function(){
		target_div
		  .append($('<table/>', {style: "z-index: 1;"})
		    .append($('<tr/>')
			.append($('<td/>')
			  .append("Unable to connect to facebook.com"))));
	});
});

$(".FBAlbum").each(function(){
	target_div = $(this);
	album_id_list = target_div.attr("albums").split(",");
	album_id_list.sort(function() {return 0.5 - Math.random()});
	display_album_list(album_id_list);
});


$(".FBAlbumList").each(function(){
		$(this).css({
			'height': 158*$(this).attr("rows"),
			'border-top': '1px solid #555',
			'border-bottom': '1px solid #555'
		});
		$(this).html('<div style="position: absolute; top: 50%; left: 200px; margin-top: -10px;"><img src="images/loading.gif"/></div>');
	});
	
$(".FBAlbumList").each(function(){
	var graph = "https://graph.facebook.com/" + $(this).attr("id") + "/photos?callback=?";
	FBAlbum=$(this);

	
	$.getJSON(graph,
		(function(FBAlbum) {
			return function(data) {
				var albumItem = [];
				for(var key in data){
					for(var key2 in data[key]){
						val2=data[key][key2];
						if(typeof(val2.source)!="undefined"){
							if (val2.height<val2.width){
								style_vert="top: 50%; margin-top:-"+((130/val2.width*val2.height)/2+2)+"px;";
								style_hori="";
							}
							else if (val2.height>val2.width){
								style_vert="";
								style_hori="left: 50%; margin-left:-"+((130/val2.height*val2.width)/2+2)+"px;";
							}
								
							albumItem.push(
								'<li><a href="' + val2.source + '"><img style="'+style_hori+'; '+style_vert+'" src="' + val2.picture + '" /></a></li>'
							);
						};
					}; 
				};

				FBAlbum.css({
					'border': '0px'
				});
				
				FBAlbum.html("");       
				$('<ul />', {
					height: 158*$(this).attr("rows"),
					html: albumItem.sort(function(){ 
							return Math.round(Math.random())-0.5
						}).slice(0,3*FBAlbum.attr("rows")).join('')
				}).appendTo(FBAlbum);
				$('<div />', {
					class: 'right',
					html: '<a href="https://www.facebook.com/media/set/?set=a.'+FBAlbum.attr("id")+'">more&raquo;</a>'
				}).insertAfter(FBAlbum);
			}
		})(FBAlbum)
	).error(function() { FBAlbum.html("Unable to connect with facebook.");});
});
//FaceBook album loader finishes

