console.log("Mic check!, KOALA WORKS for JS")

function showPage() {
	"use strict";
	
	(function defer() {
		if ($('body').hasClass('cssloaded')) {
					
			//make page visible
			$('html,body').animate({
				opacity: 1
			}, 500, function() {
				
				$('html,body').css({
					'overflow':'visible'
				});
				
				setTimeout(function() {
					loadElements();
				 }, 500);
			});
		}
		else {
			setTimeout(function() { defer(); }, 50);
		}
	})();
	
}

function loadElements() {
	"use strict";
	
	$('footer').addClass('loaded');
}

function initAccordion() {
	"use strict";
	
    $('.accordion').slideAccordion({
        opener: '.opener',
        slider: '.slide',
        animSpeed: 300
    });
}

function initMobileMenu() {
	"use strict";
	
	//clone main menu
	var mobileMenu = $('.top-nav').clone();
	mobileMenu.find('li.has-sub').removeClass('has-sub');
	mobileMenu.find('.feature').remove();
	mobileMenu.find('.search').remove();
	mobileMenu.removeClass('top-nav');
	$('.menu-container').prepend(mobileMenu);
	
	$('.mobile-menu .menu-container>ul').addClass('collapsible');
	
	//init menu opener (burger)
	$('.menu-opener').click(function (e) {
		e.preventDefault();
		
		$('.menu-opener').toggleClass('active');
		$('.menu-wrapper').toggleClass('active');
		
		if(!$('.menu-opener').hasClass('active')) {
			collapseAll();
		}
		
		$('body').toggleClass('no-scroll');
		$('.mobile-menu').toggleClass('active');
		
		
	});

	//init collapsible menu
	$('.collapsible li').has('ul').addClass('has-sub');
	$('.collapsible li a').wrapInner('<span/>');
	$('.collapsible li.has-sub>a').append('<span class="holder"></span>');
	
    $('.collapsible li.has-sub>a>.holder').on('click', function (e) {
		e.preventDefault();
		
		$(this).removeAttr('href');
		var element = $(this).closest('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown('fast');
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});
	
	function collapseAll() {
		$('.collapsible li').each(function() {
            if ($(this).hasClass('open')) {
				$(this).removeClass('open');
				$(this).find('li').removeClass('open');
				$(this).find('ul').slideUp();
			}
        });
	}
}

function initDesktopMenu() {
	"use strict";
		
	$('header .top-nav li').has('ul').addClass('has-sub');
}

function initLazyLoadImage() {
	"use strict";
	
	$('img.lazy').unveil(200, function() {
		$(this).load(function() {
			$(this).addClass('loaded');
		});
	});
}

function initAccordion() {
	"use strict";
	
	$('.accordion').slideAccordion({
		opener: '.opener',
		slider: '.slide',
		animSpeed: 300
	});
}

function removeMatchHeight() {
	"use strict";
	
	$('[eq-height]>[eq-col]').matchHeight('remove');
}

function initMatchHeight() {
	"use strict";
	
	$('[eq-height]>[eq-col]').matchHeight();
}

function initcollapsibleContent() {
	"use strict";
	
	$('.collapsible-opener').click(function (e) {
		e.preventDefault();
		
		$(this).parent().toggleClass('active');
		
		if(window.matchMedia('only screen and (max-width: 768px)').matches && $(this).parent().hasClass('active')) {
			//console.log('log');
			
			var scroll_to = $(this).parent().offset().top + 
							$(this).parent().find('.collapsible-content').height();
			
			
			$('html,body').animate({
				scrollTop: scroll_to
			}, 300);
			
		}
	});
	
	$('#scrolldown').click(function (e) {
		
		$('html, body').animate({
			scrollTop: 0
		}, 500);
	});
}

function initOpenCloseSearch() {
	"use strict";
	
	$('.top-search-opener').click(function (e) {
		e.preventDefault();
		
		$('.search-box').toggleClass('active');
	});
	
	$('.search-close').click(function (e) {
		e.preventDefault();
		
		$('.search-box').toggleClass('active');
	});
	
}

function initdataImageBackground() {
	"use strict";
	
	if(window.matchMedia('only screen and (min-width: 769px)').matches) {
		$("*[data-img]").each(function() {
			var dataImg = $(this).attr('data-img');
			dataImg = dataImg.replace('?ext=.jpg','');
			dataImg = dataImg.replace('?ext=.png','');
				
			$(this).css('background','url('+ dataImg +') no-repeat center center');
			$(this).css('-webkit-background-size','cover');
			$(this).css('-moz-background-size','cover');
			$(this).css('-o-background-size','cover');
			$(this).css('background-size','cover');
		});
	}
}

function checkIfPageBottomEdge() {
	"use strict";
		
	//var footerHeight = $('footer').height();
	//$('#wrapper').css({'padding-bottom':footerHeight+'px'});
	
	$(window).scroll(function(){
	
		if ( $(window).scrollTop() === ($(document).height() - $(window).height())  ) {
			$('body').addClass('page-bottom-edge-hit');
		} else {
			$('body').removeClass('page-bottom-edge-hit');
		}
	});
}

function initClampText() {
	"use strict";
	
	$('[data-ellipsis]').each(function(index, element) {
		var lineCount = $(this).attr('data-ellipsis');
		if(lineCount === "") {
			lineCount = 1;
		}
		
		lineCount = parseInt(lineCount);
		
		//console.log(lineCount);
		
		$clamp(element, { clamp: lineCount});
	});
}

function initSlider() {
	"use strict";
	console.log("Slider init!")
	
	// $('.slider').each(function() {
 //    	var parentWidth = $(this).parent().find('.slider-width-hack').width();
		
	// 	if(window.matchMedia('only screen and (max-width: 1024px)').matches) {
	// 		parentWidth = $('body').prop('clientWidth');
	// 	}
		
	// 	$(this)
	// 		.on('init', function() {
	// 			$(this).width(parentWidth);
	// 		})
	// 		.slick({
	// 			lazyLoad: 'ondemand',
	// 			autoplaySpeed: 1000,
	// 			pauseOnHover: false,
	// 			dots:true,
	// 			responsive: [{
	// 			  breakpoint: 1024,
	// 			  settings: {
	// 				adaptiveHeight: true
	// 			  }
	// 			}]
	// 		});	
 //    });
	
	$(".slider").slick();
	
	$(window).trigger('resize');
	
}

function resizeSlider() {
	"use strict";
	
	
	$('.slider').each(function() {
    	var parentWidth = $(this).parent().find('.slider-width-hack').width();
		
		if(window.matchMedia('only screen and (max-width: 1024px)').matches) {
			parentWidth = $('body').prop('clientWidth');
		}
		
		$(this).width(parentWidth);
		$(this).slick('slickGoTo', 0, true);
    });
}

function initStickyHeader() {
    "use strict";
	
    $(window).scroll(function () {
        if ($(this).scrollTop() > 32 || window.matchMedia('only screen and (max-width: 1024px)').matches) {
            $('body').addClass("header-compressed");
        }
        else {
			$('body').removeClass("header-compressed");
        }
    });
}

function initToggleActiveClass() {
	"use strict";
	
	$('[toggle-active-opener]').click(function (e) {
		e.preventDefault();

		if($(this).closest('[toggle-active-parent]').hasClass('active')) {
			
			//remove opener active class
			$(this).closest('[toggle-active-parent]').removeClass('active');
			
			//remove content active class
			$('.'+$(this).closest('[toggle-active-parent]').attr('toggle-add-active-to-ref')).removeClass('active');
			
		} else {
			
			//remove all opener that has active class
			$(this).closest('[toggle-active-single]').find('[toggle-active-parent]').removeClass('active');
			
			//remove all content that has active class
			$(this).closest('[toggle-active-single]').find('[toggle-active-content]').removeClass('active');
			
			//make this opener active
			$(this).closest('[toggle-active-parent]').addClass('active');
			
			//make this content active
			$('.'+$(this).closest('[toggle-active-parent]').attr('toggle-add-active-to-ref')).addClass('active');
		}
		
		console.log('test 8');
	});
}

function doneResizing() {
	"use strict";
	
	/* reset mobile menu */
	if(window.matchMedia('only screen and (min-width: 768px)').matches) {
		if($('.menu-opener').hasClass('active')) {
			$('.menu-opener').click();
		}
	}
	
	if(window.matchMedia('only screen and (max-width: 1024px)').matches && $(document).scrollTop() < 1) {
		$('body').addClass("header-compressed");
	} else {
		$('body').removeClass("header-compressed");
	}
	
	/* Check if body has scrollbar */
	if ($(document).height() === $(window).height()) {
        $('body').addClass('no-scrollbar');
    } else {
		$('body').removeClass('no-scrollbar');
	}
	
	resizeSlider();
	initMatchHeight();
}

var resizeId;
$(window).resize(function() {
	"use strict";
	
	clearTimeout(resizeId);
    resizeId = setTimeout(doneResizing, 500);
	
	resizeSlider();
	// removeMatchHeight();
});

$(window).load(function () {
	"use strict";

});

function initPopUpIcons() {
    if ($(this).scrollTop() == 0 && window.matchMedia('only screen and (max-width: 575px)').matches) {
    	$(".social-media-icons").addClass("active");
    	 }
    else {
    	$(".social-media-icons").removeClass('active');
    }
}

function initHideFooterIfHomepage() {
	$(this).scrollTop() == 0 ? $("footer").css("bottom", -55) : $("footer").css("bottom", 0);
}

function initMakeHeaderOpaqueIfHomePage() {
	if ($("body").hasClass('homepage') && $(this).scrollTop() == 0 && !window.matchMedia('only screen and (max-width: 1024px)').matches) {
		$("header").css("background", "rgba(0,38,60,0)");
	}
	else {
		$("header").css("background", "rgba(0,38,60,1)");
	}
}

function resetPanels() {
	$(".panel").each(function(){
		$(this).removeClass("active compressed");
	})
	$(".panel-slider").each(function(){
		$(this).hide();
	})
	$("h3.text-flip").removeClass("vertical-text");
	$(".txt-content").each(function(){ 
		$(this).removeClass("fadeOut");
		$(this).show();
	});
}

function initSlidePanels() {
	console.log("initSlidePanels Fired!")
	$(".slide-over-left").on("click", function(e){
		e.stopPropagation();
		resetPanels();
		console.log("Left slide clicked!")
		$(this).hasClass("compressed") ? $(this).toggleClass("compressed") : ""
		$(this).hasClass("vertical-text") ? $(this).toggleClass("vertical-text") : ""
		$(".txt-content").each(function(){ $(this).removeClass("animated bounceOutDown")});
		$(this).find(".txt-content").show();

		$(this).addClass("active");
		$(".slide-over-right").addClass("compressed");
		$("h3.text-flip").addClass("vertical-text");
		$(this).find(".txt-content").addClass('animated fadeOut');
		// setTimeout(function(){$(this).find(".txt-content").hide()}, 1000);
		initPanelSlider();
		setTimeout(calculatePanelDimensions(),1000);

	});

	$(".slide-over-right").on("click", function(e){
		e.stopPropagation();
		resetPanels();
		$(this).hasClass("compressed") ? $(this).toggleClass("compressed") : ""
		$(this).hasClass("vertical-text") ? $(this).toggleClass("vertical-text") : ""
		$(".txt-content").each(function(){ $(this).removeClass("animated bounceOutDown")});
		$(this).find(".txt-content").show();

		$(this).addClass("active");
		$(".slide-over-left").addClass("compressed");
		$("h3.text-flip").addClass("vertical-text");
		$(this).find(".txt-content").addClass('animated fadeOut');
		// setTimeout(function(){$(this).find(".txt-content").hide()}, 1000);
		initPanelSlider();
	});

	$(document).click(function() {
	    resetPanels();
	});
}

function initPanelSlider(){
	console.log("initPanelCarousel")

	$(".panel-slider").slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  easing: 'linear',
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	$(".slick-slider").css("display" , "block"); 
	$(".slick-slider").addClass("animate fadeInDown");
    $(".slick-slider").get(0).slick.setPosition()
}

function calculatePanelDimensions() {
	var panelWidth = $(".panel .active").width();
	console.log(panelWidth, "<< Calc panelWidth")
	$(".panel-slider").css("width", panelWidth).css("display", "block");
}



// Contingencies 
	//on Scroll
$(window).scroll(function(){ 
	initHideFooterIfHomepage();
	initPopUpIcons();
	initMakeHeaderOpaqueIfHomePage();  
});

	//on Resize
$(window).resize(function(){
	initMakeHeaderOpaqueIfHomePage();
	resetPanels(); 
});
//

// JavaScript Document - Initial Fire
jQuery(document).ready(function() {
	"use strict";
	
	showPage();
	initDesktopMenu();
	initMobileMenu();
	initStickyHeader();
	checkIfPageBottomEdge();
	initToggleActiveClass();
	initLazyLoadImage();
	initAccordion();
	initMatchHeight();
	initcollapsibleContent();
	initOpenCloseSearch();
	initdataImageBackground();
	initSlider();
	initClampText();
	initAccordion();

	// initPanelSlider();
	initSlidePanels();
	initHideFooterIfHomepage();
	initMakeHeaderOpaqueIfHomePage();
 	initPopUpIcons();

	RESPONSIVEUI.responsiveTabs();
});



































