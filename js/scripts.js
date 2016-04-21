// DOM Ready
$(function() {

	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});

$(document).ready(function(){
  $(".form-activator").click(function(){
    $(".forminfo").slideToggle("slow", function(){
    	//Animation Complete.
    });
  });
});

$(document).ready(function(){
  $(".info-activator").click(function(){
    $(".info").slideToggle("slow", function(){
    	//Animation Complete.
    });
  });
});