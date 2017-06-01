/* METRO UI TEMPLATE
/* Copyright 2012 Thomas Verelst, http://metro-webdesign.info*/

/* MOUSEWHEEL Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 */(function(a,b){function e(d){var f=d||window.event,g=[].slice.call(arguments,1),h=0,i=0,j=0;return d=a.event.fix(f),d.type="mousewheel",f.wheelDelta&&(h=f.wheelDelta/120),f.detail&&(f.type==c[2]?(this.removeEventListener(c[0],e,!1),h=-f.detail/42):h=-f.detail/3),j=h,f.axis!==b&&f.axis===f.HORIZONTAL_AXIS&&(j=0,i=-1*h),f.wheelDeltaY!==b&&(j=f.wheelDeltaY/120),f.wheelDeltaX!==b&&(i=-1*f.wheelDeltaX/120),g.unshift(d,h,i,j),(a.event.dispatch||a.event.handle).apply(this,g)}var c=["DOMMouseScroll","mousewheel","MozMousePixelScroll"];if(a.event.fixHooks)for(var d=c.length;d;)a.event.fixHooks[c[--d]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=c.length;a;)this.addEventListener(c[--a],e,!1);else this.onmousewheel=e},teardown:function(){if(this.removeEventListener)for(var a=c.length;a;)this.removeEventListener(c[--a],e,!1);else this.onmousewheel=null}}})(jQuery);
 /* jQuery hashchange event - v1.3 - 7/21/2010
 * http://benalman.com/projects/jquery-hashchange-plugin/
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/ */
(function($,e,b){var c="hashchange",h=document,f,g=$.event.special,i=h.documentMode,d="on"+c in e&&(i===b||i>7);function a(j){j=j||location.href;return"#"+j.replace(/^[^#]*#?(.*)$/,"$1")}$.fn[c]=function(j){return j?this.bind(c,j):this.trigger(c)};$.fn[c].delay=50;g[c]=$.extend(g[c],{setup:function(){if(d){return false}$(f.start)},teardown:function(){if(d){return false}$(f.stop)}});f=(function(){var j={},p,m=a(),k=function(q){return q},l=k,o=k;j.start=function(){p||n()};j.stop=function(){p&&clearTimeout(p);p=b};function n(){var r=a(),q=o(m);if(r!==m){l(m=r,q);$(e).trigger(c)}else{if(q!==m){location.href=location.href.replace(/#.*/,"")+q}}p=setTimeout(n,$.fn[c].delay)}$.browser.msie&&!d&&(function(){var q,r;j.start=function(){if(!q){r=$.fn[c].src;r=r&&r+a();q=$('<iframe tabindex="-1" title="empty"/>').hide().one("load",function(){r||l(a());n()}).attr("src",r||"javascript:0").insertAfter("body")[0].contentWindow;h.onpropertychange=function(){try{if(event.propertyName==="title"){q.document.title=h.title}}catch(s){}}}};j.stop=k;o=function(){return a(q.location.href)};l=function(v,s){var u=q.document,t=$.fn[c].domain;if(v!==s){u.title=h.title;u.open();t&&u.write('<script>document.domain="'+t+'"<\/script>');u.close();q.location.hash=v}}})();return j})()})(jQuery,this);

/*Check for IE, if not IE, browser = 999, otherwise IE version number */
browser = 999; if (navigator.appVersion.indexOf("MSIE") != -1){browser = parseFloat(navigator.appVersion.split("MSIE")[1]);}
timers = []; // all timers for plugins, use unique id please!

$tile = {}
$group = {inactive:[]};
$content = {}
$arrows = {};
$page = {}
$hashed = {};
$subNav = {};
$mainNav = {};

/*The plugin system */
$.extend({ /* Check for duplicate plugins */
	plugin:function(events,newfunction){
		for(i in events){
			if(newfunction.hasOwnProperty(i)){
				 newfunction[i+"2"] = newfunction[i];
    			delete newfunction[i];
			}
		}
		$.extend(true,events,newfunction);
	}
});

$events = {
	run : function(w){for(i in w){w[i]();}},
	beforeSiteLoad:function(){
		$events.run($beforeSiteLoad);
	},
	afterTilesAppend:function(){
		$events.run($afterTilesAppend);
	},
	afterTilesShow:function(){
		$events.run($afterTilesShow);
	},
	afterSubPageLoad:function(){
		$events.run($afterSubPageLoad);
	},
	onHashChange:function(){
		$events.run($onHashChange); 
	},
	onWindowResize:function(){
		$events.run($onWindowResize); 
	},
	onSiteLoad:function(){
		$events.run($onSiteLoad);
	}
}

/*EVENT TRIGGERS */
$init = {} // used to init functions
$beforeSiteLoad ={}  // Will be called before anything is done
$afterTilesAppend ={} // Will be called after the tiles are injected into the #content div, you can add code here
$afterTilesShow = {}// Will be called after the tiles are shown, you can add code here
$afterSubPageLoad = {} // Will be called after a subpage is loaded, you can add code here
$onHashChange = {} // Will be called when the hash (so page, or tilegroup) changes 
$onWindowResize = {} // When the winow is resized
$onSiteLoad = {} // Will be called when the site is opened for the first time/ when the document is loaded (not when the page changes)

/* LIVETILES */
newLiveTile = function(id,group,texts,speed,slide){
	if($page.current=="home" && scrolling==false && (group==$group.current ||group == $group.current+1) ){//if we're home
		var $id = $("#"+id)	
		$id.stop().animate({opacity: 0,'margin-top': '+=15'},250,function(){
			$id
			.css("margin-top",-15).css("opacity",0)
			.html(texts[slide])
			.animate({opacity: 1,'margin-top': '+=15'},250,function(){
				$id.css("margin-top",0).css("opacity",1);
			})
		});	
		if(slide+2>texts.length){
			slide=0;
		}else{
			slide++;
		}
	}
	setTimeout(function(){newLiveTile(id,group,texts,speed,slide)},speed);	
}
