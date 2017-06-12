var timer_id;

var sub_menu_active=false;

function clear_menu(){
	$('.sub_menu').each(function(){
		$(this).hide();
    $(this).unbind('hover');
		});
	sub_menu_active=false
}

$(".has_sub_menu").hover(function(){
		clearTimeout(timer_id);
		clear_menu();
		$("#"+$(this).attr("target"))
		    .css({'top':$(this).offset().top+$(this).height()+9, 'left':$(this).offset().left-1})
		    .show()
		    .hover(function(){
			      sub_menu_active=true;
				clearTimeout(timer_id);
				}, function(){
				    timer = setTimeout(clear_menu, 800);
				});
	}, function(){
		if (!sub_menu_active)
			timer_id = setTimeout(clear_menu, 800);
	});
