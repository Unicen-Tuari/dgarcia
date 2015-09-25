
$(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });

// You can also use "$(window).load(function() {"
$(function () {
	// Slideshow 4
	$("#slider2").responsiveSlides({
		auto: true,
		pager: true,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
			$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
		}
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
	setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); };



jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});