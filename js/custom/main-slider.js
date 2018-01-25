jQuery(document).ready(function( $ ) {
 "use strict";
		// Fading main slider
		var page_title = $('body');
		var intro = page_title.find('#slider');
		if( intro.length > 0 ) var intro_top = intro.offset().top;  
		$( window ).scroll(function() {
			var current_top = $(document).scrollTop(); 
			var intro_height = $('#slider').height();  
			intro.css('top', (current_top*0.50)); 
			intro.css('opacity', (1 - current_top/intro_height*1.2));
		});

		$("#slider").owlCarousel({
			transitionStyle: "fade",
			slideSpeed: '350',
			singleItem: true,
			autoHeight: true,
			pagination: true,
			autoPlay: slider.speed,
			navigation: false,
			afterMove: function(){
				$('[data-caption-animate]').each(function(){
					var $toAnimateElement = $(this);
					var toAnimateDelay = $(this).attr('data-caption-delay');
					var toAnimateDelayTime = 0;
					if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
					if( !$toAnimateElement.hasClass('animated') ) {
						$toAnimateElement.addClass('not-animated');
						var elementAnimation = $toAnimateElement.attr('data-caption-animate');
						setTimeout(function() {
							$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
						}, toAnimateDelayTime);
					}
				});
			}, 

			beforeMove: function(){
				$('[data-caption-animate]').each(function(){
					var $toAnimateElement = $(this);
					var elementAnimation = $toAnimateElement.attr('data-caption-animate');
					$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
				});
			},

			afterAction: function(){
				$('[data-caption-animate]').each(function(){
					var $toAnimateElement = $(this);
					var toAnimateDelay = $(this).attr('data-caption-delay');
					var toAnimateDelayTime = 0;
					if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
					if( !$toAnimateElement.hasClass('animated') ) {
						$toAnimateElement.addClass('not-animated');
						var elementAnimation = $toAnimateElement.attr('data-caption-animate');
						setTimeout(function() {
							$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
						}, toAnimateDelayTime);
					}
				});
			}
		});
});