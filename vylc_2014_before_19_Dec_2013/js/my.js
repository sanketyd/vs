$('document').ready(function() {
	$('#slimscroll').slimscroll({
		height: '100%'
	});


 $('.content').animate({right:'80%'},"slow");

$( '.hover-link' ).mouseover(function(event) {
	$(this).css("background-color", "green");
	});
$( '.hover-link' ).mouseout(function(event) {
	$(this).css("background-color", "white");
	});

$("#group0").hover(
		function(){$("#sub0").slideToggle(400);},
		function(){$("#sub0").hide();}
	);
$("#group1").hover(
		function(){$("#sub1").slideToggle(400);},
		function(){$("#sub1").hide();}
	);
$("#group2").hover(
		function(){$("#sub2").slideToggle(400);},
		function(){$("#sub2").hide();}
	);

	
});
