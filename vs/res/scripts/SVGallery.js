$.getJSON("?fetch=SVGallery", function(data){
	var Swami_Viveknanda_gallery=data;
	Swami_Viveknanda_gallery['pic_index']=-1;
	Swami_Viveknanda_gallery['quotation_index']=-1;

	Swami_Viveknanda_gallery['pics'].sort(function() {return 0.5 - Math.random()});
	Swami_Viveknanda_gallery['quotations'].sort(function() {return 0.5 - Math.random()});


	Swami_Viveknanda_gallery['pic_index']=(Swami_Viveknanda_gallery['pic_index']+1)%Swami_Viveknanda_gallery['pics'].length;
	$("#left_pane")
	  .append($("<div/>", {style:"z-index: 1"})
	    .append($("<img/>", {src: Swami_Viveknanda_gallery['root']+Swami_Viveknanda_gallery['pics'][Swami_Viveknanda_gallery['pic_index']]}))
	    .append($("<blockquote/>", {text: Swami_Viveknanda_gallery['quotations'][Swami_Viveknanda_gallery['pic_index']]})));
    
	Swami_Viveknanda_gallery['pic_index']=(Swami_Viveknanda_gallery['pic_index']+1)%Swami_Viveknanda_gallery['pics'].length;
	$("#left_pane")
	  .append($("<div/>", {style:"z-index: 0"})
	    .append($("<img/>", {src: Swami_Viveknanda_gallery['root']+Swami_Viveknanda_gallery['pics'][Swami_Viveknanda_gallery['pic_index']]}))
	    .append($("<blockquote/>", {text: Swami_Viveknanda_gallery['quotations'][Swami_Viveknanda_gallery['pic_index']]})));
	  
	setInterval(function(){
	$("#left_pane div").eq(0).animate({opacity: 0}, 500, function(){
		$(this).remove();
		$("#left_pane div").eq(0).css('z-index', 1);
		Swami_Viveknanda_gallery['pic_index']=(Swami_Viveknanda_gallery['pic_index']+1)%Swami_Viveknanda_gallery['pics'].length;
		$("#left_pane")
		  .append($("<div/>", {style:"z-index: 0"})
		    .append($("<img/>", {src: Swami_Viveknanda_gallery['root']+Swami_Viveknanda_gallery['pics'][Swami_Viveknanda_gallery['pic_index']]}))
		    .append($("<blockquote/>", {text: Swami_Viveknanda_gallery['quotations'][Swami_Viveknanda_gallery['pic_index']]})));
		  
		  });
	}, 8000);
});
