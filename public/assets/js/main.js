(function ($) {
	"use strict";
	////////////////////////////////////////////////////
	// 03. Search Js
	$(".search-open-btn").on("click", function () {
		$(".search__popup").addClass("search-opened");
	});

	
	$(".search-close-btn").on("click", function () {
		$(".search__popup").removeClass("search-opened");
	});
	
	$(".job-form-open-btn").on("click", function () {
		$(".job__form").slideToggle("job__form");
	});

	$('.it-service-2-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.it-service-2-item').removeClass('active');
	});

	// $('.it-blog-2-item').on('mouseenter', function () {
	// 	$(this).addClass('active').parent().siblings().find('.it-blog-2-item').removeClass('active');
	// });


	var windowOn = $(window)
	///////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load',function () {
		$('#loading').fadeOut(500);
	});

	// 08. Nice Select Js
	// $('select').niceSelect();

    ///////////////////////////////////////////////////
	// 03. scroll-to-target 
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 500) {
			$('.scroll-to-target').removeClass('open');

		} else {
			$('.scroll-to-target').addClass('open');
		}
	});

	if ($('.it-header-height').length > 0) {
		var headerHeight = document.querySelector(".it-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;
		$(".it-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});

		$(".it-header-height .header-sticky").each(function () {
			$(this).css({
				'height': inherit,
			});
		});
	}
	
	///////////////////////////////////////////////////
	// 04. Scroll Up Js
	if ($('.scroll-to-target').length) {
		$(".scroll-to-target").on('click', function () {
		var target = $(this).attr('data-target');
		// animate
		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 1000);
	
		});
	}

	// 04. Scroll Up Js
	if ($('.scroll-to-target-2').length) {
		$(".scroll-to-target-2").on('click', function () {
		var target = $(this).attr('data-target');
		// animate
		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 1000);
	
		});
	}
	function smoothSctollTop() {
		$('.smooth a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 150
				}, 1000);
			}
		});
	}
	smoothSctollTop();
	
    ///////////////////////////////////////////////////
	// 05. wow animation
	var wow = new WOW(
		{
		  mobile: true,
		}
	  );
	  wow.init();
	var windowOn = $(window);

	///////////////////////////////////////////////////
	// 06. PreLoader Js
	windowOn.on('load',function() {
		$("#loading").fadeOut(500);

	});

	///////////////////////////////////////////////////
	// 07. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	
	$(window).on('load', function () {

		$('#preloader').delay(350).fadeOut('slow');

		$('body').delay(350).css({ 'overflow': 'visible' });

	})

	////////////////////////////////////////////////////
	// 09. Sidebar Js
	$(".it-menu-bar").on("click", function () {
		$(".itoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});


	if($('.it-menu-content').length && $('.it-menu-mobile').length){
		let navContent = document.querySelector(".it-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".it-menu-mobile");
		mobileNavContainer.innerHTML = navContent;
	
		let arrow = $(".it-menu-mobile .has-dropdown > a");
	
		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";
			self.append(function () {
			  return arrowBtn;
			});
	
			self.find("button").on("click", function (e) {
			  e.preventDefault();
			  let self = $(this);
			  self.toggleClass("dropdown-opened");
			  self.parent().toggleClass("expanded");
			  self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
			  self.parent().parent().children(".it-submenu").slideToggle();
			});
	
		});
	}

	///////////////////////////////////////////////////
	// 10. Magnific Js
	$(".popup-video").magnificPopup({
		type: "iframe",
	});
	
	////////////////////////////////////////////////////
	// 14. magnificPopup Js
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	////////////////////////////////////////////////////
	// 11. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	////////////////////////////////////////////////////
	// 12. Counter Js
	if ($(".purecounter").length) {
		new PureCounter({
			filesizing: true,
			selector: ".filesizecount",
			pulse: 2,
		});
		new PureCounter();
	}

	function mediaSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(min-width: 768px)').matches) {
			const panels = document.querySelectorAll('.col-custom')
			panels.forEach(panel => {
				panel.addEventListener('mouseenter', () => {
					removeActiveClasses()
					panel.classList.add('active')
				})
			})
		
			function removeActiveClasses() {
				panels.forEach(panel => {
					panel.classList.remove('active')
				})
			}

		} else {
		/* Reset for CSS changes â€“ Still need a better way to do this! */
			$(".col-custom ").addClass("active");
		}
	};
	/* Call the function */
	mediaSize();
	/* Attach the function to the resize event listener */
	  window.addEventListener('resize', mediaSize, false); 



	////////////////////////////////////////////////////
	// 13. Swiper Js
	const postboxswiper = new Swiper('.postbox__thumb-slider-active', {
		// Optional parameters
		speed:500,
		loop: true,
		slidesPerView: 1,
        spaceBetween:0,
		autoplay: true,
		roundLengths: true,
		effect:'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.postbox-arrow-prev',
			nextEl: '.postbox-arrow-next',
		},
	  });
	////////////////////////////////////////////////////

	// 13. Swiper Js
	const brandswiper = new Swiper('.it-brand-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 4,
        spaceBetween: 30,
		autoplay: true,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	  });
	////////////////////////////////////////////////////
	// 13. Swiper Js
	const blog2sswiper = new Swiper('.it-blog-2-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 3,
        spaceBetween: 30,
		autoplay: false,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
				spaceBetween: 50,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
				spaceBetween: 50,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	  });
	////////////////////////////////////////////////////
	// 13. Swiper Js
	const team2sswiper = new Swiper('.it-team-2-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 3,
        spaceBetween: 30,
		autoplay: true,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-team-dots",
			clickable:true,
		  },
	  });
	////////////////////////////////////////////////////
	// 13. Swiper Js
	const testimonial2swiper = new Swiper('.it-testimonial-2-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 1,
        spaceBetween: 60,
		autoplay: true,
		centeredSlides: true,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-testimonial-2-dots",
			clickable:true,
		  },
	  });

	////////////////////////////////////////////////////
	// 13. Swiper Js
	const sliderswiper = new Swiper('.it-slider-active', {
		// Optional parameters
		speed:1000,
		loop: true,
		slidesPerView: 1,
		autoplay: true,
		roundLengths: true,
		effect:'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.classes-prev',
			nextEl: '.classes-next',
		},
		pagination: {
			el: ".it-classes-dots",
			clickable:true,
		  },
	  });
	////////////////////////////////////////////////////
	// 13. Swiper Js
	const classesswiper = new Swiper('.it-classes-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 3,
        spaceBetween: 30,
		autoplay: true,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.classes-prev',
			nextEl: '.classes-next',
		},
		pagination: {
			el: ".it-classes-dots",
			clickable:true,
		  },
	  });

	////////////////////////////////////////////////////
	// 13. Swiper Js
	const testiswiper = new Swiper('.it-testimonial-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 1,
        spaceBetween: 30,
		autoplay: true,
		centeredSlides: true,
		roundLengths: true,
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.testimonial-prev',
			nextEl: '.testimonial-next',
		},
	  });


	$('.it-funtact-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.it-funtact-item').removeClass('active');
	});

	$('.it-service-2-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.it-service-2-item').removeClass('active');
	});
	$('.it-funfact-3-item-box').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.it-funfact-3-item-box').removeClass('active');
	});

	////////////////////////////////////////////////////
	// 14. magnificPopup Js
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	// 20. Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	/*-------------------------

		showcoupon toggle function

	--------------------------*/

	$('#showcoupon').on('click', function () {

		$('#checkout_coupon').slideToggle(900);
	});


/*-------------------------

	Create an account toggle function

--------------------------*/

$('#cbox').on('click', function () {

	$('#cbox_info').slideToggle(900);

});



/*-------------------------

	Create an account toggle function

--------------------------*/

$('#ship-box').on('click', function () {

	$('#ship-box-info').slideToggle(1000);

});


	////////////////////////////////////////////////////
	// 15. MagnificPopup video view Js
	$(".popup-video").magnificPopup({
	   type: "iframe",
    });

	////////////////////////////////////////////////////
	//26.isotope
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: '.grid-item',
			},
			
		});
		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ 
				filter: filterValue,
				animationOptions: {
					duration: 100,
					easing: "linear",
					queue: true
				}
			});
			
		});
		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});	
		
	// 05. Search Js
	$(".accordion-items").on("click", function () {
		$(".accordion-items").toggleClass("open");
	});
	$(".accordion-items").on("click", function () {
		$(".accordion-items").removeClass("open");
	});

	////////////////////////////////////////////////////
	// 16. Cart Quantity Js
	$('.it-cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.it-cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});

	


		if($('.it-main-menu-content').length && $('.it-main-menu-mobile').length){
		let navContent = document.querySelector(".it-main-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".it-main-menu-mobile");
		mobileNavContainer.innerHTML = navContent;


		let arrow = $(".it-main-menu-mobile .has-dropdown > a");

		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";

			self.append(function () {
				return arrowBtn;
			});

			self.find("button").on("click", function (e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("dropdown-opened");
				self.parent().toggleClass("expanded");
				self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
				self.parent().parent().children(".it-submenu").slideToggle();
			});

		});
	}
	// for header
	if ($("#it-header-top-lang").length > 0) {
		window.addEventListener('click', function (e) {

			if (document.getElementById('it-header-top-lang').contains(e.target)) {
				$(".it-header-top-lang").toggleClass("open");
			}
			else {
				$(".it-header-top-lang").removeClass("open");
			}
		});
	}	

	$('.it-class-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.it-class-item').removeClass('active');
	});


	//One Page Scroll Js
	function scrollNav() {
		$('.onepage-menu li').click(function () {
			$(".onepage-menu li.active").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 80
			}, 300);
			return false;
		});
	}
	scrollNav();


	if ($('[data-mask-src]').length > 0) {
		$('[data-mask-src]').each(function () {
		  var mask = $(this).attr('data-mask-src');
		  $(this).css({
			'mask-image': 'url(' + mask + ')',
			'-webkit-mask-image': 'url(' + mask + ')'
		  });
		  $(this).removeAttr('data-mask-src');
		});
	  };


})(jQuery);