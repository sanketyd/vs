/*
//Back to top
var back_to_top_visible=true;
var back_to_top_offset_top=50;

function place_back_to_top(){
	var scroll_top = $(window).scrollTop();
	console.log(scroll_top);
	if (scroll_top >= sticky_navigation_offset_top) {
		if (!back_to_top_visible){
			$("#back_to_top").css({'display': 'none'})
			back_to_top_visible=true;
		}
	} else {
		if (back_to_top_visible){
			$("#back_to_top").css({'display': 'block'});
			back_to_top_visible=false;
		}
	}
};

place_back_to_top();

$(window).scroll(function() {
		place_back_to_top();
	});
*/

/*
function blink(div){
	if (div.hasClass('hidden')){
		div.removeClass('hidden');
		window.setInterval(function() {
        blink(div);
    }, 2000);
	}
	else{
		div.addClass('hidden')
		window.setInterval(function() {
        blink(div);
    }, 500);
	}

	
}

$('.blink').each(function(){
	blink($(this));
});
*/

$(window).bind('hashchange', function(e) {
	console.log(window.location.hash);
});
