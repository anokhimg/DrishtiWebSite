/*
* Theme Name: Kulebe
* File name: custom.js
* Theme URL: http://klbtheme.com/kulebe
* Description: Kulebe - Multipurpose Nonprofit Theme
* Author: KlbTheme
* Author URL: http://themeforest.net/user/klbtheme
* Support: https://sinanisik.ticksy.com/
* Version: 1.0
*/

jQuery.noConflict();
(function ($) {
  "use strict";
  
  
	//Run function when document ready
	$(document).ready(function () {
		init_sliderfullheight();    
		init_foundation();
		init_shrinkheader();
		init_animated();
		init_navigation();
		init_client();
		init_testimonialslider();
		init_portfoliocarousel();
		init_bloggallery();
		init_galleryblog();
		init_blogcarousel();
		init_cacheselector();
	});

	//Start window load function strict mode
	$(window).on("load", function () {

		/* preloader */
		$("#loader").delay(500).fadeOut(); 
		$(".mask").delay(1000).fadeOut("slow");

		/* parallax */
		$(window).stellar({
			responsive: true,
			horizontalScrolling:false,
			parallaxBackgrounds: true
		});
		
		var urlHash = window.location.href.split("#")[1];
		if (urlHash &&  $('#' + urlHash).length )
			$('html,body').animate({
				scrollTop: $('#' + urlHash).offset().top
			}, 900);
	});
	
    //Run function when window resize
	$(window).resize(function() {
		var windowHeight = $(window).height();
		$('#slider .slider-cont').height( windowHeight );
		$('#slider .slider-cont.mvisible').height( windowHeight - 80 ); // add blog class to hero in order to show menu
		if( !device.tablet() && !device.mobile() ) {
			$('#slider .slider-cont-single').height( windowHeight / 2 );
		}

		else {
			$('#slider .slider-cont-single').height( windowHeight );
		}
	});


    // Cache selectors
	function init_cacheselector() {
		var lastId,
			topMenu = $(".menu-list, .slider-caption"),
			topMenuHeight = topMenu.outerHeight()+15,
			// All list items
			menuItems = topMenu.find("a.internal"),
			// Anchors corresponding to menu items
			scrollItems = menuItems.map(function(){
			  var item = $($(this).attr("href"));
			  if (item.length) { return item; }
			});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.click(function(e){
		  var href = $(this).attr("href"),
			  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
		  $('html, body').stop().animate({ 
			  scrollTop: offsetTop
		  }, 900);
		  e.preventDefault();
		});

		// Bind to scroll
		$(window).scroll(function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;
		   
		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
			 if ($(this).offset().top < fromTop)
			   return this;
		   });
		   // Get the id of the current element
		   cur = cur[cur.length-1];
		   var id = cur && cur.length ? cur[0].id : "";
		   
		   if (lastId !== id) {
			   lastId = id;
			   // Set/remove active class
			   menuItems
				 .parent().removeClass("active")
				 .end().filter("[href=\\#"+id+"]").parent().addClass("active");
		   }                   
		});
	}


    // Main Slider Full Height
	function init_sliderfullheight() {
		var windowHeight = $(window).height();
		$('#slider .slider-cont').height( windowHeight );
		$('#slider .slider-cont.mvisible').height( windowHeight - 80 ); // add blog class to hero in order to show menu
		if( !device.tablet() && !device.mobile() ) {
			$('#slider .slider-cont-single').height( windowHeight / 2 );
		} 
		else {
			$('#slider .slider-cont-single').height( windowHeight );
		}
	}
	
	//Foundation
    function init_foundation() {
	  $(document).foundation();
	}
	
	
	//shrinkheader
	function init_shrinkheader() {
		$(function(){
			var shrinkHeader = 100;
			$(window).scroll(function() {
				var scroll = getCurrentScroll();
				if ( scroll >= shrinkHeader ) {
					$('header').addClass('shrink');
				}
				else {
					$('header').removeClass('shrink');
				}
			});
			function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
			}
		});
	}
	function init_animated() {
		$('.animated').appear(function() {
			var elem = $(this);
			var animate = elem.data('animate');
			if ( !elem.hasClass('visible') ) {
				var animateDelay = elem.data('animate-delay');
				if ( animateDelay ) {
					setTimeout(function(){
						elem.addClass( animate + " visible" );
					}, animateDelay);
				} else {
					elem.addClass( animate + " visible" );
				}
			}
		});
	}
	
	// Navigation
	function init_navigation() {
		$.daisyNav();
		$('.menu-list li').click(function(){	
          if ( $( this ).hasClass( "has-submenu" ) ) {

          } else {
			$('ul#navigation').removeClass( 'show-for-devices' );
			$('.menu-toggle-button').removeClass( 'active' )
          }
		});	

		$('.menu-list a[href^="#"]').on('click',function (e) {
			e.preventDefault();
			var target = this.hash,
			$target = $(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 900, 'swing', function () {
				window.location.hash = target;
			});
		});
    }
	
	/* Clients Carousel */
	function init_client() {
		$("#clients-slider").owlCarousel({
			navigation : false,
			slideSpeed : 300,
			pagination: true,
			paginationSpeed : 400,
			autoPlay: 4000,
			responsive:true,
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1000,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,4], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : 1// itemsMobile disabled - inherit from itemsTablet option
		}); 
	}


	/* Testimonial Carousel */
	function init_testimonialslider() {
		$("#testimonial-slider").owlCarousel({
			navigation : false,
			slideSpeed : 300,
			pagination: false,
			paginationSpeed : 400,
			autoHeight: true,
			autoPlay: true,
			transitionStyle : "backSlide",
			singleItem : true,
		});
	}


	/*Portfolio Carousel */
	function init_portfoliocarousel() {
		$("#portfolio-carousel").owlCarousel({
			navigation : false,
			slideSpeed : 300,
			pagination: true,
			paginationSpeed : 400,
			autoPlay: false,
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1000,5], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [600,1], //2 items between 600 and 0
			itemsMobile : 2 // itemsMobile disabled - inherit from itemsTablet option
		});	    
	}
	
	/* Gallery on blog shortcode */
	
	function init_bloggallery() {
		$(".project-gallery").owlCarousel({
			autoPlay : false,
			singleItem : true,
			pagination: false,
			navigation: true,
			navigationText: ["<i class='fa fa-chevron-left '></i>", "<i class='fa fa-chevron-right '></i>"]
		});
	}
	/* Gallery on blog */
	function init_galleryblog() {
		$("#blog-gallery").owlCarousel({
			navigation : true,
			navigationText: ["<i class='fa fa-chevron-left '></i>", "<i class='fa fa-chevron-right '></i>"],
			slideSpeed : 300,
			pagination: false,
			paginationSpeed : 400,
			autoPlay: false,
			singleItem : true,
		});
	}
	
	/* Cube Portfolio Carousel */
	function init_blogcarousel() {
		var owl1 = $(".blog-carousel");
		owl1.owlCarousel({
		  items : 3,
		  itemsDesktop : [1400,3],
		  itemsDesktopSmall : [1100,2],
		  itemsTablet: [600,2],
		  itemsMobile : [400,1],
		  pagination : true,
		  navigation : false
		});
	}
})(jQuery);


