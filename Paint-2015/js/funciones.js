


$(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });

$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});

addEventListener("load", function() {
	setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }

