// Setting some variables
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var windowHeight = jQuery(window).height();	
var windowWidth = jQuery(window).width();
var navHeight = jQuery('header.navbar').height();

/* Stellar.js - jQuery plugin that provides parallax scrolling effects to any scrolling element
http://markdalgleish.com/projects/stellar.js/docs/
-------------------------*/
function parallax() {
	// Check for mobile
	if( !isMobile ) {
		jQuery(window).stellar({
			horizontalScrolling: false
		});
	}
}

jQuery(document).ready(function() {
	
	jQuery('#home').css('height', windowHeight);
	jQuery('body').css('margin-bottom', jQuery('#footer').height());
	
	/* Loading Spinner
	http://fgnass.github.io/spin.js/
	-------------------------*/	
	// Settings for Page Loading Overlay
	var spinnerHomeOptions = {
	  lines: 11, // The number of lines to draw
	  length: 10, // The length of each line
	  width: 2, // The line thickness
	  radius: 10, // The radius of the inner circle
	  corners: 0, // Corner roundness (0..1)
	  rotate: 0, // The rotation offset
	  direction: 1, // 1: clockwise, -1: counterclockwise
	  color: '#000', // #rgb or #rrggbb or array of colors
	  speed: 1.5, // Rounds per second
	  trail: 60, // Afterglow percentage
	  shadow: false, // Whether to render a shadow
	  hwaccel: false, // Whether to use hardware acceleration
	  className: 'spinnerhome', // The CSS class to assign to the spinner
	  zIndex: 2e9, // The z-index (defaults to 2000000000)
	  top: 'auto', // Top position relative to parent in px
	  left: 'auto' // Left position relative to parent in px
	};
	
	// Settings for Project Loading Overlay
	var spinnerOptions = {
	  lines: 11, // The number of lines to draw
	  length: 20, // The length of each line
	  width: 2, // The line thickness
	  radius: 30, // The radius of the inner circle
	  corners: 0, // Corner roundness (0..1)
	  rotate: 0, // The rotation offset
	  direction: 1, // 1: clockwise, -1: counterclockwise
	  color: '#000', // #rgb or #rrggbb or array of colors
	  speed: 1.5, // Rounds per second
	  trail: 60, // Afterglow percentage
	  shadow: false, // Whether to render a shadow
	  hwaccel: false, // Whether to use hardware acceleration
	  className: 'spinner', // The CSS class to assign to the spinner
	  zIndex: 2e9, // The z-index (defaults to 2000000000)
	  top: 'auto', // Top position relative to parent in px
	  left: 'auto' // Left position relative to parent in px
	};
	
	//var target = document.getElementById('site-title');
	var spinner = new Spinner(spinnerOptions).spin();	
	var spinnerhome = new Spinner(spinnerHomeOptions).spin();	
	// Loading spinner for Homepage
	jQuery('#loadbox .inner').append(spinnerhome.el);
	// Loading Spinner for Projects
	jQuery('.project-content').after(spinner.el);
	
	/*	Navigation
	-------------------------*/	
	var windowOffsetHeight = windowHeight - 1;
	
	// If the menu has no class of "show", only display the header, once a visitor scrolls further down than the home page.
	if (!jQuery('header.navbar').hasClass('show')) {
		jQuery(window).scroll(function() {
			if ( jQuery(this).scrollTop() > windowOffsetHeight ) {
				jQuery('header.navbar').addClass('show');
			}
			else {
				jQuery('header.navbar').removeClass('show');
			}
		});
	};
	
	/* Slideshow: Clients
	-------------------------*/
	clientsContainer = jQuery('.slideshow-clients').closest('.container').width();
	
	// Number of clients to show at once (according to device width)
	if (windowWidth < 768) {
		var slidesAtOnce = 2; // Mobile devices
	}
	else if (windowWidth >= 768 && windowWidth < 1200) {
		var slidesAtOnce = 3; // Tablet and desktos with a screen smaller than 1200px
	}
	else if (windowWidth >= 1200) {
		var slidesAtOnce = 4; // Desktops with a width of 1200px and above
	}
	slideWidthCustom = Math.round(clientsContainer / slidesAtOnce);
	var clientSlider = jQuery('.slideshow-clients').bxSlider({
		infiniteLoop: false,
		hideControlOnEnd: true,
	  minSlides: 			slidesAtOnce,
	  maxSlides: 			slidesAtOnce,
	  slideWidth: 		slideWidthCustom,
	  slideMargin: 		10,
	  prevText: 			'<i class="fa fa-angle-left"></i>',
	  nextText: 			'<i class="fa fa-angle-right"></i>',
	  pager: 					false,
	  oneToOneTouch: false
	});

	/* Portfolio: Isotope Layout Plugin
	-------------------------*/
	
	// Cache portfolio container
	var container = jQuery('#portfolio-list');
	
	// Portfolio: Number of columns
	// 2 columns grid for mobile
	// 3 columns grid for tablet & desktop
	function portfolioColumnNumber() {
			if (windowWidth < 768) {
			var portfolioColumns = 2;
		}
		else if (windowWidth >= 768) {
			var portfolioColumns = 3;
		}
		return portfolioColumns;
	}
	
	// Initialize Isotope & Masonry Layout
	container.imagesLoaded( function() {
		container.isotope({
		  itemSelector: 'li',
		  resizable: false,  // disable normal resizing
		  masonry: { columnWidth: container.width() / portfolioColumnNumber }
		 });
	 });
	
	// Update portfolio layout when resizing the browser window
  jQuery(window).smartresize(function() {

	  container.isotope({
	    masonry: { columnWidth: container.width() / portfolioColumnNumber }
	  });
	});
    
	jQuery(window).smartresize();

	// Initialize Portfolio Filter (on click)
	jQuery('#portfolio-filter a').click(function(e) {		
		e.preventDefault();		
	  var selector = jQuery(this).attr('data-filter');
	  container.isotope({ filter: selector });		
		// Active Filter Class
		jQuery('#portfolio-filter').find('.active').removeClass('active');
		jQuery(this).parent().addClass('active');		
		return false;		
	});
	
	// Portfolio Filter Item Counter
	jQuery('#portfolio-filter a').each(function() {
		var projecttype = jQuery(this).attr('data-filter');
		if ( projecttype == "*" || "" ) {
			jQuery(this).append( '<span class="type-counter">'+jQuery("#portfolio-list > li").length+'</span>' ); // Count All Projects
		}
		else {
			jQuery(this).append( '<span class="type-counter">'+jQuery("#portfolio-list > li"+projecttype).length+'</span>' ); // Count The Specific Project Type
		}
	});	

	/* Portfolio
	-------------------------*/
	var portfolio = jQuery('#portfolio-list');
	var portfolioItem = portfolio.find('li');
	var projectLength = portfolioItem.length;
	var prevButton = jQuery('#project-container .prev');
	var nextButton = jQuery('#project-container .next');
	
	// Direction Aware Hover Effect
	portfolio.find('li').each(function() { 
		jQuery(this).hoverdir({
			speed : 			200,
			hoverDelay : 	100
		});
	});
	
	function projectFunctions() {
	
		jQuery('#project-container [class^="slideshow"]').bxSlider({
			mode: 					'fade',
			controls: 			true,
			pager: 					false,
			prevText: 			'<i class="fa fa-angle-left"></i>',
		  nextText: 			'<i class="fa fa-angle-right"></i>'
		});
		
		/* FitVids v1.0 - Fluid Width Video Embeds
		https://github.com/davatron5000/FitVids.js/
		-------------------------*/
		jQuery('.video-full-width').fitVids();
		jQuery('.fluid-width-video-wrapper').css('padding-top','56.25%'); // Always display videos 16:9 (100/16*9=56.25)
		
		jQuery('#project-container .spinner').fadeOut(1000);
			
	};
	
	// Opening a Project
	portfolioItem.find('a').click(function(e) {
		e.preventDefault();
		
		// Show Loading Spinner
		jQuery('#project-container .spinner').show(0);
		
		// Disable browser scrollbar
		jQuery('body').addClass('overflow-hidden');
		
		var projectLink = jQuery(this).attr('href');
		var projectOpen = portfolio.find(this).attr('href',projectLink).closest('li');
		
		// Add class "open" to opened project
		projectOpen.addClass('open');
		
		// Disable prev link, when first project is open
		if (projectOpen.index() == 0) {	prevButton.addClass('disabled'); }
		else { prevButton.attr('href', projectOpen.prev('li').find('.project-link').attr('href')); }
		
		// Disable next link, when last project is open
		if (projectOpen.index()+1 == projectLength) { nextButton.addClass('disabled'); }
		else { nextButton.attr('href', projectOpen.next('li').find('.project-link').attr('href')); }
		
		// Show project popup and load project content
		jQuery('#project-container').addClass('show');
		
		jQuery('.project-content').load(window.location.pathname+' '+projectLink, function() {				
			projectFunctions();
		});
		
	});
	
	// Button: Previous Project
	jQuery('.prev').click(function() {
	
		jQuery('#project-container .spinner').show(200);
	
		var currentProject = portfolio.find('.open');
		var currentIndex = currentProject.index()+1;
		
		// Enable next button when going to the previous project
		jQuery('.next').removeClass('disabled');
		
		// Disable prev button when reaching first project
		if (currentIndex <= 2) { jQuery('.prev').addClass('disabled'); }		
		var prevProjectLink = currentProject.prev('li').find('a').attr('href');
		
		currentProject.removeClass('open').prev('li').addClass('open');
		
		jQuery('.project-content').load(window.location.pathname+' '+prevProjectLink, function() {			
			projectFunctions();		
		});
		
	});
	
	// Button: Next Project
	jQuery('.next').click(function() {
	
		jQuery('#project-container .spinner').show(200);
		
		var currentProject = portfolio.find('.open');
		var currentIndex = currentProject.index()+1;
		
		// Enable prev button when going to the next project
		jQuery('.prev').removeClass('disabled'); 
		
		// Disable next button when reaching the last project
		if ( currentIndex+1 >= projectLength ) { jQuery('.next').addClass('disabled'); }		
		var nextProjectLink = currentProject.next('li').find('a').attr('href');		
		currentProject.removeClass('open').next('li').addClass('open');

		jQuery('.project-content').load(window.location.pathname+' '+nextProjectLink, function() {		
			projectFunctions();
		});
		
	});
	
	// Close button
	jQuery('.close').click(function() {
		// Enable browser scrollbar
		jQuery('body').removeClass('overflow-hidden');
		jQuery('#project-container').removeClass('show');
		portfolio.find('.open').removeClass('open');
		jQuery('.project-content').html('');
	});
	
	// Close using "ESC" key
	jQuery(document).keyup(function(e) {
    if (e.keyCode == 27) {
    	// Enable browser scrollbar
			jQuery('body').removeClass('overflow-hidden');
      jQuery('#project-container').removeClass('show');
      portfolio.find('.open').removeClass('open');
      jQuery('.project-content').html('');
    }
	});
		
	/* Load Tweets
	-------------------------*/
	// Does "tweet.php" exist? Yes -> Load it's Tweets
	/*
	jQuery.ajax({
    url:'tweet.php',
    success: function() { jQuery('#tweet').find('.container').load('tweet.php'); }
	});
	*/
	
	/* Full-Width
	-------------------------*/
	var fullWidthSpace = ( windowWidth - jQuery('.full-width').width() ) / 2;
	jQuery('.full-width').css({'width': windowWidth+'px', 'margin-left' : -fullWidthSpace+'px'});
	
	/* Fluid Width Video Embeds: FitVids v1.0
	https://github.com/davatron5000/FitVids.js/
	-------------------------*/
	jQuery('.video-full-width').fitVids();
	jQuery('.fluid-width-video-wrapper').css('padding-top','56.25%'); // Always display videos 16:9 (100/16*9=56.25)
	
	/* Bootstrap Plugins
	-------------------------*/
	
	// Navigation - Collapse (for mobile)
	jQuery('.navbar .collapse').collapse();
		
  jQuery(".navbar-nav li a").click(function() {
  	jQuery(".collapse").toggleClass("in");
  });
	
	// Tooltip
	jQuery('[data-toggle="tooltip"]').tooltip();
	
}); // END jQuery(document).ready()


jQuery(window).load(function() {

	/* Activate animate.css effects once page is loaded
	http://css-tricks.com/transitions-only-after-page-load/
  -------------------------*/
  jQuery("body").removeClass("loading");
  
  // Hide Site Load Overlay
	jQuery('#loadbox .spinnerhome').fadeOut(400);
	jQuery('#loadbox .wrapper').delay(600).addClass('animated bounceOut');
	jQuery('#loadbox').delay(800).fadeOut(400);
	
	/* Slideshow: BxSlider
	List with all slideshow options can be found here: http://bxslider.com/options
	-------------------------*/

	function overlayHeight() {
		jQuery('.parallax').each(function() {
			var parallaxHeight = jQuery(this).height();
			jQuery(this).find('.background-overlay').css('height', parallaxHeight);
		});
	};

	// Background Slideshow "Home"
	jQuery('.slideshow-home').bxSlider({
		mode: 'fade',
		pause: 4000,
		speed: 500,
		controls: true,
		pager: false,
		prevText: 			'<i class="fa fa-angle-left"></i>',
	  nextText: 			'<i class="fa fa-angle-right"></i>',
		oneToOneTouch: false,
		onSliderLoad: function() {
			parallax();
		}		
	});
	
	// Slideshow "horizontal"
	jQuery('.slideshow').bxSlider({
		mode: 'horizontal',
		adaptiveHeight: true,
		controls: false,
		oneToOneTouch: false,
		onSlideAfter: function() {
			overlayHeight();
		}
	});

	// Slideshow "vertical"
	jQuery('.slideshow-vertical').bxSlider({
		mode: 'vertical',
		adaptiveHeight: true,
		controls: false,
		oneToOneTouch: false,
		onSlideAfter: function() {
			overlayHeight();
		}
	});
	
	// Slideshow "fade"
	jQuery('.slideshow-fade').bxSlider({ 
		mode: 		'fade',
		adaptiveHeight: true,
		controls: false,
		oneToOneTouch: false,
		onSlideAfter: function() {
			overlayHeight();
		}
	});

	overlayHeight();
		
	jQuery(window).smartresize(function() { overlayHeight(); });	
	
	// Check if this page has a timeline
	if( jQuery('#timeline').length ) {	

		/* Timeline
		http://www.csslab.cl/2011/08/18/jquery-timelinr/#english
		-------------------------*/
		jQuery(function() {
			jQuery().timelinr({
				containerDiv: 					'#timeline',
				datesDiv: 							'#dates',
				issuesDiv: 							'#events',
				issuesSpeed: 						300,
				datesSpeed: 						300,
				startAt:								2, // Date that you want to select initially (default: 2, which stands for the second date)
				issuesTransparency: 		0
			})		
			var eventHeight = jQuery('#events li').eq(settings.startAt-1).height();
			jQuery('#events').css('height', eventHeight);			
		});
		
		jQuery('#dates a').click(function() {
			var dateId = jQuery(this).attr('href');
			var eventHeight = jQuery('#events li'+dateId).height();
			jQuery('#events').animate( { height: eventHeight }, 800, function() {
				// Refresh Parallax plugin to account for new window height
				if( !isMobile ) {
					jQuery(window).stellar('refresh');
				}
			});
		});
	
	}
	
	parallax();
	
	// Smooth scroll for menu links
	jQuery('header.navbar a[href^="#"], #home a[href^="#"], .modal a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top}, 800);
	});
	
	/*	Bootstrap Specific
	-------------------------*/	
	
	// Accordion & Toggle
	jQuery('.accordion').each(function() {
		var accordionId = jQuery(this).attr('id');
		jQuery(this).find('.accordion-toggle').attr('data-parent', "#"+accordionId);
	});
	
	jQuery('.accordion-toggle').click(function() {
		jQuery(this).closest('.accordion').find('i').removeClass('fa-minus-square').addClass('fa-plus-square');
		jQuery(this).find('i').toggleClass('fa-plus-square fa-minus-square');
	});
	
});