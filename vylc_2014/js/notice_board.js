(function($){
     $(".notice-board .tileDesc").mCustomScrollbar({
        scrollButtons:{
         enable:true
        },
        advanced:{
            updateOnContentResize: true
        }
    });

    $(".notice-board .tileDesc").hover(function(){
        $(document).data({"keyboard-input":"enabled"});
        $(this).addClass("keyboard-input");
    },function(){
        $(document).data({"keyboard-input":"disabled"});
        $(this).removeClass("keyboard-input");
    });
    $(document).keydown(function(e){
        if($(this).data("keyboard-input")==="enabled"){
            var activeElem=$(".keyboard-input"),
                activeElemPos=Math.abs($(".keyboard-input .mCSB_container").position().top),
                pixelsToScroll=60;
            if(e.which===38){ //scroll up
                e.preventDefault();
                if(pixelsToScroll>activeElemPos){
                    activeElem.mCustomScrollbar("scrollTo","top");
                }else{
                    activeElem.mCustomScrollbar("scrollTo",(activeElemPos-pixelsToScroll),{scrollInertia:400,scrollEasing:"easeOutCirc"});
                }
            }else if(e.which===40){ //scroll down
                e.preventDefault();
                activeElem.mCustomScrollbar("scrollTo",(activeElemPos+pixelsToScroll),{scrollInertia:400,scrollEasing:"easeOutCirc"});
            }
        }
    });
})(jQuery);