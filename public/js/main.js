(function ($) {
"use strict";



/* meanmenu */
$('#mobile-menu').meanmenu({
	 meanMenuContainer: '.mobile-menu',
	 meanScreenWidth: "991"
 });



// mainSlider
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: false,
		autoplaySpeed: 10000,
		dots: true,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: true, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}
mainSlider();




/* counter */
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

 /* nice-select */
    $(document).ready(function () {
        $('select').niceSelect();
   });


/* clients-active */
$('.clients-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
	autoplay:true,
	navText:['<i class="fas fa-long-arrow-alt-right"></i>','<i class="fas fa-long-arrow-alt-left"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* testimonial1-active */
$('.testimonial1-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
	autoplay:true,
	navText:['<i class="fas fa-long-arrow-alt-right"></i>','<i class="fas fa-long-arrow-alt-left"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

/* clienyts-say-active */
$('.clienyts-say-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
	autoplay:true,
	navText:['<i class="fas fa-long-arrow-alt-right"></i>','<i class="fas fa-long-arrow-alt-left"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


/* recent-project-active */
$('.recent-project-active').owlCarousel({
    loop:true,
    nav:false,
	dots:true,
	autoplay:true,
	navText:['<i class="fas fa-long-arrow-alt-right"></i>','<i class="fas fa-long-arrow-alt-left"></i>'],
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        }
    }
})


/* brand-active */
$('.brand-active').owlCarousel({
    loop:true,
    nav:false,
	autoplay:true,
    responsive:{
        0:{
            items:2
        },
        576:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:4
        },
        1200:{
            items:6
        }
    }
})

/* testimonia-item-active */
 $('.testimonia-item-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.testimonial-nav'
    });
    $('.testimonial-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonia-item-active',
        dots: false,
        prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        centerMode: true,
        responsive: [
            { breakpoint: 767, settings: { dots: true, arrows: false } }
        ],
        focusOnSelect: true,
        centerPadding:0
    });


/* image-link */
$('.image-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


// portfolio active
	$('.project-area').imagesLoaded( function() {
		var grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth:1
			}
		})

		$('.portfolio-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			grid.isotope({ filter: filterValue });
		});

		//for portfolio menu active class
		$('.portfolio-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});



// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fas fa-angle-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

/* WOW active */
new WOW().init();









/* Circular Progress */
	$('.circular-progress').waypoint(function(){

		$('.circular-progress').easyPieChart({
			lineWidth: 8,
			trackColor: false,
			scaleLength: 0,
			barColor: '#f7ca18'
		});

	}, {
		triggerOnce: true,
		offset: 'bottom-in-view'
    });




    function basicmap() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{ "featureType": "administrative", "elementType": "geometry", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative", "elementType": "labels.text", "stylers": [{ "visibility": "simplified" }, { "color": "#f0f2f5" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#7797a7" }] }, { "featureType": "landscape", "elementType": "labels.text", "stylers": [{ "visibility": "off" }, { "color": "#ff3030" }] }, { "featureType": "landscape", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }, { "color": "#df0000" }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#7797a7" }] }, { "featureType": "poi", "elementType": "labels.text", "stylers": [{ "visibility": "simplified" }, { "color": "#3c3d3f" }] }, { "featureType": "poi", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#4a6570" }] }, { "featureType": "road", "elementType": "labels.text", "stylers": [{ "visibility": "simplified" }, { "color": "#4a6570" }, { "lightness": "20" }, { "weight": "1.24" }] }, { "featureType": "road", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }, { "color": "#f0f2f5" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#4a6570" }] }, { "featureType": "transit", "elementType": "labels.text", "stylers": [{ "visibility": "simplified" }, { "color": "#4a6570" }] }, { "featureType": "transit", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "visibility": "simplified" }, { "color": "#3c3d3f" }] }, { "featureType": "water", "elementType": "labels", "stylers": [{ "visibility": "simplified" }, { "color": "#4a6570" }] }]
        };
        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Cryptox'
        });
    }
    if ($('#map').length != 0) {
        google.maps.event.addDomListener(window, 'load', basicmap);
    }









})(jQuery);