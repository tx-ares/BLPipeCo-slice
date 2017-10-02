console.log("Mic check! - 3")
// console.log(templateUrl, " <<template url")

function showPage() {
	"use strict";
	
	(function defer() {
		if ($('body').hasClass('cssloaded')) {
			console.log("adding cssloaded class")		
			//make page visible
			$('html,body').animate({
				opacity: 1
			}, 500, function() {
				
				$('html,body').css({
					'overflow':'visible'
				});
				
				window.setTimeout(function() {
					loadElements();
				 }, 500);
			});
		}
		else {
			window.setTimeout(function() { defer(); }, 50);
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
			$(".social-media-icons").removeClass("active");

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
	console.log(".home-slider Slider init!")
	
	$(".home-slider").each(function() {
  //   	var parentWidth = $(this).parent().find(".slider-width-hack").width();
		
		// if(window.matchMedia("only screen and (max-width: 1024px)").matches) {
		// 	parentWidth = $("body").prop("clientWidth");
		// }
		
		$(this)
			.on("init", function() {
				// $(this).width(parentWidth);
			})
			.slick({
				lazyLoad: "ondemand",
				pauseOnHover: false,
				dots:true,
				autoplay: true,
				autoplaySpeed: 5000,
				mobileFirst: true,
				fade: true,
				infinite: true
				// responsive: [{
				//   breakpoint: 1024
				 //  settings: {
					// adaptiveHeight: true
				 //  }
				// }]
			});	
    });
	
	// $(".home-slider").slick();
	
	// $(window).trigger('resize');
	
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
            $(".logo > img").each(function(){
            	$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Horizontal.png")
            	$(this).removeClass("vertical-logo");

            });
        }
        else {
			$('body').removeClass("header-compressed");
			$(".logo > img").each(function() {
				$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Vertical.png");
				$(this).addClass("vertical-logo");

			});
        }
    });
}

function initToggleActiveClass() {
	"use strict";
	
	$('[toggle-active-opener]').each(function(){
		console.log($(this) , " << a toggler")

		$(this).click(function (e) {
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
		})
		
		// console.log('test 8');
	});
}

function initMorePhoneFullScreenDropDown() {
	$(".tcell.valign-mid.phone-opener").on("click", function(){
		$(".more-phone-full-scr").toggleClass("active");
	})
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
		$(".logo > img").each(function() {
				$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Horizontal.png")
				$(this).removeClass("vertical-logo");
			});
	} else {
		$('body').removeClass("header-compressed");
		$(".logo > img").each(function() {
				$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Vertical.png");
				$(this).addClass("vertical-logo");
			});
	}
	
	/* Check if body has scrollbar */
	if ($(document).height() === $(window).height()) {
        $('body').addClass('no-scrollbar');
    } else {
		$('body').removeClass('no-scrollbar');
	}
	
	// resizeSlider();
	initMatchHeight();
}

var resizeId;

$(window).resize(function() {
	"use strict";
	
	clearTimeout(resizeId);
    resizeId = setTimeout(doneResizing, 500);
	
	// resizeSlider();
	removeMatchHeight();
});

$(window).load(function () {
	"use strict";

});

function initPopUpIcons() {
    if ( $("body").hasClass("home") && $(this).scrollTop() == 0 ) {
    	console.log("HOME - Detected -initPopUpIcons .js")
		$(".social-media-icons").css("right" , -40);
    }

    else {
		$(".social-media-icons").css("right" , 0);
    }
}

function initMobileSocialMediaMenu() {

	// console.log("Checking Pos.")
	if ($(this).scrollTop() == 0 && window.matchMedia('only screen and (max-width: 575px)').matches) {
		$(".social-media-icons").addClass("active");
	}

	else {
		$(".social-media-icons").removeClass("active");
	}


}

function initHideFooterIfHomepage() { 
	$(this).scrollTop() == 0 ? $("footer").css("bottom", -55) : $("footer").css("bottom", 0);
}

function initHideElementsIfHomePageTop() { //Adds transparency to header and hides social media icons on homepage

	if ($("body").hasClass("home") && $(this).scrollTop() == 0 && !window.matchMedia('only screen and (max-width: 1024px)').matches) {
		// console.log("HOME - Detected - initHideElementsIfHomePageTop - .js")
		// $("header").css("background", "rgba(0,38,60,0)");
		$(".social-media-icons").css("right" , -40);
		resetBodyScrollX();
	}
	else {
		// $("header").css("background", "rgba(0,38,60,1)");
		$(".social-media-icons").css("right" , 0);
	}
}

function resetPanels() { //Resets Blue and Red Panels to neutral state.
	

	if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
		$(".panel").each(function() {
			$(this).removeClass("active compressed");
		});
	}
	
	$(".panel-slider").each(function(){
		$(this).css("opacity",0);
		$(this).removeClass("loaded");
		$(this).hide();
	})
	$(".slick-track").each(function(){
		$(this).removeClass("no-transform");
	})
	$("h2.text-flip").removeClass("vertical-text");

	$(".fa-spin").css("opacity" , 0);

	hideSocialMediaIconsIfPanelActive();

}

function initSlidePanels() {
	// console.log("initSlidePanels Fired 5!")

	$(".panel").on("click"), function(e) {
		e.one("click", false);
	}

	$(".slide-over-left").on("click", function(e){
		e.stopPropagation();
		//Grab Carousel
		var activeCarousel = $(".panel.active").find(".panel-slider");

		//Show Carousel
		$(activeCarousel).show();
		$(activeCarousel).css("opacity" , 1);

		//Text Flipping Animation for Opposite Panel * Animation not on Mobile *
		if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
			$(this).hasClass("compressed") ? $(this).toggleClass("compressed") : "";
			$(this).hasClass("vertical-text") ? $(this).toggleClass("vertical-text") : "";
			$("h2.text-flip").addClass("vertical-text");
			setTimeout(function(){$(this).find(".txt-content").hide()}, 1000);
			$(".slide-over-right").addClass("compressed");
		}

		//Adding styles to Activated Panel ( Blue Side )
		$(this).addClass("active");
		var activePanel = $(this);

		//Removing Styles to De-activated Panel ( Red Side )
		$(".slide-over-right").removeClass("active");
		var deactivatedSlider = $(".panel:not(.active)").find(".panel-slider");
		$(deactivatedSlider).css("opacity" , 0).removeClass("loaded");

		

		//Simulate loading, to give carousel time to fix slide widths. * Animation not on Mobile *
		if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
			//Hide Icons while Panel is active
			$(".social-media-icons").addClass("hidden");
			console.log("Delayed Load -> Hiding Icons ")

			delayedLoad(activePanel);
		}
	});

	$(".slide-over-right").on("click", function(e){
		e.stopPropagation();
		//Grab Carousel
		var activeCarousel = $(".panel.active").find(".panel-slider");

		//Show Carousel
		$(activeCarousel).show();
		$(activeCarousel).css("opacity" , 1);

		//Text Flipping Animation for Opposite Panel * Animation not on Mobile *
		if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
			$(this).hasClass("compressed") ? $(this).toggleClass("compressed") : "";
			$(this).hasClass("vertical-text") ? $(this).toggleClass("vertical-text") : "";
			$("h2.text-flip").addClass("vertical-text");
			setTimeout(function(){$(this).find(".txt-content").hide()}, 1000);
			$(".slide-over-left").addClass("compressed");
		}

		//Adding styles to Activated Panel ( Red Side )
		$(this).addClass("active");
		var activePanel = $(this);

		//Removing Styles to De-activated Panel ( Blue Side )
		$(".slide-over-left").removeClass("active");
		var deactivatedSlider = $(".panel:not(.active)").find(".panel-slider");
		$(deactivatedSlider).css("opacity" , 0).removeClass("loaded");


		//Simulate loading to give carousel time to fix slide widths. * Animation not on Mobile *
		if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
			//Hide Icons while Panel is active
			$(".social-media-icons").addClass("hidden");
			console.log("Delayed Load -> Hiding Icons ")
			delayedLoad(activePanel);
		}
	});

	$(document).click(function() {
		if (!window.matchMedia('only screen and (max-width: 575px)').matches) {
			resetPanels();
		}   
	});
}

function delayedLoad(activePanel) { //Creates simulated loading of carousel and fixes slider width bug.
	
	var activeCarousel = $(".panel.active").find(".panel-slider");
		slides = activeCarousel[0].childElementCount;

	$("body").addClass("no-scroll-x");  

	if(!$(activeCarousel).hasClass("loaded")) {	
		$(activePanel).find(".fa-spin").css("opacity" , 1);
		$(activeCarousel).css("opacity", 0);
		setTimeout(function(){
			$(activePanel).find(".fa-spin").css("opacity" , 0);
			$(activeCarousel).css("opacity", 1);
		} , 500);
		// $(activeCarousel).slick("slickNext"); // Selecting next slide fixes the width issue.
		
		$(activeCarousel).slick("slickGoTo" , 0);



		// setTimeout( function() { 
		// 	$(activeCarousel).slick("slickNext");
				
		// 	}, 500 );

		if(window.matchMedia('(max-width: 1440px)').matches && window.matchMedia('(min-width: 1024px)').matches) { // Reset it back to starting postion for desktop only bug. 
			setTimeout( function() { 
				$(activeCarousel).slick("slickNext"); // Selecting next slide fixes the width issue.
				// $(activeCarousel).slick("slickGoTo" , 0);
				console.log("Going to next slide.")
			}, 500 );
		}

		$(activeCarousel).addClass("loaded");

		if(slides < 3) { 
			//Centers the slide if there aren't enough to utilize a Carousel
			console.log("Not enough Slides, locking track!")
			var activeTrack = activeCarousel.find(".slick-track");
				activeTrack.addClass("no-transform");
		}


	}
}

function initPanelSlider(){
	"use strict";

	$(".panel-slider").each(function(){
		$(this).slick({
		  dots: false,
		  arrows: true,
		  prevArrow:"<img class='a-left control-c prev slick-prev' src=" + templateUrl + "/_assets/images/ui/chevron-bluegray-left.png>",
	      nextArrow:"<img class='a-right control-c next slick-next' src=" + templateUrl + "/_assets/images/ui/chevron-bluegray-right.png>",
	      infinite: false,
		  speed: 300,
		  waitForAnimate: true,
		  easing: 'linear',
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  respondTo: 'window',
		  // variableWidth: true,
		  mobileFirst: true,
	  
		  responsive: [
		  	{
		      breakpoint: 1960,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1

		      }
		    },
		    {
		      breakpoint: 1440,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px"
		      }
		    },
		    {
		      breakpoint: 575,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px"
		      }
		    },
		    {
		      breakpoint: 300,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px"
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		})
	});

	// Slider Width Fix Hack prevent body scrolling
	// setTimeout( function() {$(".slick-next").trigger("click") }, 300);		

	lockSlickTrackIfNotEnoughSlides();

}

function initLogoSlider() {
	console.log("Logo Slider INIT")

	"use strict";

	$(".logo-slider").each(function(){
		$(this).slick({
		  dots: false,
		  arrows: true,
		   prevArrow:"<img class='a-left control-c prev slick-prev' src=" + templateUrl + "/_assets/images/ui/chevron-bluegray-left.png>",
	      nextArrow:"<img class='a-right control-c next slick-next' src=" + templateUrl + "/_assets/images/ui/chevron-bluegray-right.png>",
	      infinite: true,
		  speed: 300,
		  waitForAnimate: false,
		  autoplay: true,
		  easing: 'linear',
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  // variableWidth: true,
		  mobileFirst: true,
	  
		  responsive: [
		  	{
		      breakpoint: 1960,
		      settings: {
		        slidesToShow: 5,
		        slidesToScroll: 1,
		        infinite: true

		      }
		    },
		    {
		      breakpoint: 1440,
		      settings: {
		        slidesToShow: 5,
		        slidesToScroll: 1,
	      		infinite: true
		      }
		    },
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px",
	        	infinite: true
		      }
		    },
		    {
		      breakpoint: 575,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px",
	        	infinite: true
		      }
		    },
		    {
		      breakpoint: 300,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
	        	centerPadding: "20px",
	        	infinite: true
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		})
	});

}

function hideSocialMediaIconsIfPanelActive() {
	if ( $(".panel").hasClass("active") && !window.matchMedia('only screen and (max-width: 575px)').matches) {
		$(".social-media-icons").addClass("hidden") 
	}
	else {
		 $(".social-media-icons").removeClass("hidden");
	}
}

function resetBodyScrollX() {
	$("body").removeClass("no-scroll-x");
}

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function initAnimateWhenInView() { //Animations when a certain element is scrolled into view.

	var logoRow = $(".logo-row");
		staticSlideRow = $(".static-slides");
		locationMap = $(".map");			

	if($("body").hasClass("landing") && !$("body").hasClass("services") ) { //Pulsing animation for Logo row on landing pages.
		$(window).scroll(function(){

			if(isScrolledIntoView(logoRow) == true) {
				logoRow.find(".icon").each(
					function(){
						$(this).addClass("animated pulse")
					})
			}

			if(isScrolledIntoView(staticSlideRow) == true) { //Animations for Product Icons on landing pages.  Can use animate.css
				var delayedTimer = 0;

				staticSlideRow.find("div.slide-content").each(
					function(){
						delayedTimer += 30;
						var self = this;
						console.log(delayedTimer, " << timer !")
						setTimeout(
							function() { 
								$(self).addClass("active"); //add animate.css classes here
							}, delayedTimer);
					});
			}

		});
	}

	 //Moving Social media icons from blocking locations map.
	// if($("body").hasClass("location")) {
	// 	var socialMediaIcons = $(".social-media-icons");

	// 	socialMediaIcons.addClass("move-icons-from-blocking-map-controls");

	// 	console.log("LOCATIONS CLASS FOUND")
	// 	console.log(socialMediaIcons, " << socialMediaIcons")
	// }

}

function initLogo() {
	 if (window.matchMedia('only screen and (max-width: 1024px)').matches) {
            $('body').addClass("header-compressed");
            $(".logo > img").each(function(){
            	$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Horizontal.png")
            	$(this).removeClass("vertical-logo");
            });
        }
        else {
			$(".logo > img").each(function() {
				$(this).attr("src" , templateUrl + "/_assets/images/BLPipeco_Logo-Vertical.png");
				$(this).addClass("vertical-logo");
			});
        }
}

function initBioBoxes() {
	console.log("fixing BIOBOXES php")

	if ($("body").hasClass("bio")) {
		console.log(bioArray, " << did we pass php data from functions.php?")

		var $photoItems = $(".photo-item");

		$photoItems.each(function(index){
			var $photoItem = $(this);
				// $photoItemId = index;
			    $bioExpander = $photoItem.find(".info-wrapper");

			    console.log(index, " << index");

			// console.log($photoItem)
			$bioExpander.on("click" , function(e) {
				e.stopPropagation();
				$photoItems.removeClass("active no-hover");

				var $parentContainerHeight = $photoItem.height();
					$responsiveHeight = 360; // default height

				// console.log($photoItem.hasClass("active"), " << isActive?")

				if(window.matchMedia('(max-width: 1360px)').matches) {
					$responsiveHeight = 400;
					console.log($responsiveHeight)
				}

				if (window.matchMedia('(max-width:992px)').matches) {
					$responsiveHeight = 360;
					console.log($responsiveHeight)
				}				

				if (window.matchMedia('(max-width: 575px)').matches) {
					$responsiveHeight = 500;
					console.log($responsiveHeight)
				}

				if (window.matchMedia('(max-width: 400px)').matches) {
					$responsiveHeight = 600;
					console.log($responsiveHeight)
				}


				if ($photoItem.find(".bioBox").length == 0) {
					// if (typeof($responsiveHeight) === "string") {}

					$parentContainerHeight = $parentContainerHeight + $responsiveHeight;
					console.log($parentContainerHeight, " << $parentContainerHeight")
					!$photoItem.hasClass("active") ? $photoItem.animate({height : $parentContainerHeight - 8} ,300, "swing") : "";

					$photoItem.addClass("active no-hover");

					$("<div/>", 
						{
							class: "bioBox",
						    id: index,					    
						    //html to be filled dynamically by CMS.
						    html: bioArray[index]

						}).on("click", function(e) {
							e.stopPropagation();
						}).appendTo($photoItem).animate({
							height: $responsiveHeight
						}, 300, "swing");

				}

				var boxId = "#" + index;

				$('html, body').animate({
			        scrollTop: $(boxId).offset().top - 360
			    }, 500);

			    return $responsiveHeight;
			});

		})

		$(document).click(function(){
			resetBios($responsiveHeight);
		});

		$(window).resize(function(){
			resetBios($responsiveHeight);
		});
	}
}

function resetBios($responsiveHeight){
		console.log($responsiveHeight , " << responsive height")
	// console.log("<< Resetting bioBox v6 - Comparing JS .animate() >>")
		var $bioBox = $(".photo-item").find(".bioBox");
			$bioBoxParent = $bioBox.parent();
			$parentAndSiblings = $bioBoxParent.siblings().andSelf();
			$initialParentContainerHeight = $bioBoxParent.height() - $responsiveHeight;

		$parentAndSiblings.removeClass("active no-hover");

		$bioBoxParent.animate(
		{
			height: $initialParentContainerHeight
		},300, "swing");

		$bioBox.animate(
		{
			height: 0,
			paddingTop: 0,
			paddingBottom: 0

		},300, "swing");
		
		setTimeout(function() {
			$bioBox.remove();
			$bioBoxParent.css({
				height: "unset"
			})
		}, 800);

}

function lockSlickTrackIfNotEnoughSlides() {
	$(".slick-track").each( function() {
		var $slickTrack = $(this);

		if( $slickTrack.find(".slick-slide").length < 3 ) {
			$slickTrack.addClass("no-transform");
		}

		else {
			$slickTrack.removeClass("no-transform");
		}

	});
}

// Contingencies 
	//on Scroll
$(window).scroll(function(){ 
	initHideFooterIfHomepage();
	initPopUpIcons();
	initHideElementsIfHomePageTop();
	hideSocialMediaIconsIfPanelActive();
	initMobileSocialMediaMenu();
});

	//on Resize
$(window).resize(function(){
	initHideElementsIfHomePageTop();
	resetPanels(); 
	doneResizing();
	lockSlickTrackIfNotEnoughSlides();
	// removeMatchHeight();
});
//

// JavaScript Document - Initial Fire
jQuery(document).ready(function() {
	"use strict";
	initLogo();
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
	initClampText();
	initAccordion();

	initPanelSlider();
	initSlidePanels();
	initLogoSlider();

	initHideFooterIfHomepage();
	initHideElementsIfHomePageTop();
 	initPopUpIcons();
 	initMobileSocialMediaMenu();
 	hideSocialMediaIconsIfPanelActive();
 	initAnimateWhenInView();
 	initMorePhoneFullScreenDropDown();
 	initBioBoxes();

 	initSlider();

	RESPONSIVEUI.responsiveTabs();
});