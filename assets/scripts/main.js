import $ from "jquery";
import { Fancybox } from "@fancyapps/ui";

require('slick-carousel');
require('timepicker/jquery.timepicker.min');

$(function() {

	let body = $('body'),
		ww = $(window).width();

	if ($(window).width() < 640) {
		$('.tabs-v2-content:not(.starter, .hidden)').addClass('hidden');
	}

	//Fancybox usage
	Fancybox.bind("[data-fancybox]", {
		Image: {
		  Panzoom: {
			zoomFriction: 0.7,
			maxScale: function () {
			  return 5;
			},
		  },
		},
	  });

	// Header sticky on mobile
	body.on('scroll', function() {
		let scrollTop = $(this).scrollTop();

		if (scrollTop > 57 && $(window).width() < 1024 )  {
			$('header > .row-main').addClass("sticky");
		} else {
			$('header > .row-main').removeClass("sticky");
		}
	});

	// Breaking news effect
	$('.row-news').on('click', function() {
		$(this).toggleClass('open');
	})

	// General button open to close et viceversa
	$('.btn-open-close').on('click', function() {
		if (! $(this).hasClass('open'))
			$(this).addClass('open').removeClass('close');
		else
			$(this).removeClass('open').addClass('close');

		// Button "servizi" in Eshop Parking Tab
		if ($(this).parent().hasClass('altri-servizi')) {
			if ($(this).hasClass('open')) {
				$(this).parent().addClass('open');
				$(this).parent().find('.service').addClass('open').removeClass('hidden');
			} else {
				$(this).parent().removeClass('open');
				$(this).parent().find('.service').removeClass('open').addClass('hidden');
			}
		}
	});

	// Menù tab
	$('#primary-menu-tab').on('click', '.menu-tabs li', function() {
		let tab = $(this).attr('data-menu-tab');
		$(this).addClass('active').siblings().removeClass('active');
		$(tab).removeClass('hidden').siblings('.menu-tab-content').addClass('hidden');
	});

	// Open Megamenu
	$('.menu-tab-content').on('click', '.have-megamenu > span', function() {
		let parent = $(this).parent();
		if (! parent.hasClass('open'))
			parent.addClass('open').siblings().removeClass('open');
		else
			parent.removeClass('open');
	});

	// Login panel
	$('.menu-icons a.user').on('click', function() {
		$('.login-header-panel').toggleClass('hidden');
	});

	// Menù mobile classes
	$('#menu-mobile li:has(> ul)').addClass('has-submenu close');
	$('#menu-mobile li:has(> ul) a').on('click', function() {
		let li = $(this).parent('li');

		if (li.hasClass('close')) {
			li.removeClass('close').addClass('open');
		} else {
			li.removeClass('open').addClass('close');
		}
	});

	let close_menu = '-35vw';
	if (ww > 640 && ww < 767) {
		close_menu = '-25vw';
	} else if (ww > 767 && ww < 1024) {
		close_menu = '-32vw';
	}

	$('a.hamburger').on('click', function() {
		$('#menu-mobile').css('left', close_menu);
		$('.row-news').removeClass('open');
	});

	$('a.close-menu').on('click', function() {
		$('#menu-mobile').css('left', '100vw');
	});

	// Show password in login password input
	$('.toggle-password').on('click', function() {
		let passInput = $(this).parent().find('input.password');
		const type = passInput.attr('type') === 'password' ? 'text' : 'password';
		passInput.attr('type', type);
	});

	// Manage date input with placeholder
	$('input.calendar').on('focus', function() {
		let input = $(this);

		input.removeAttr('readonly');
		input.attr('type', 'date');
		input.after().trigger('click touchstart');
	});

	$('input.calendar').on('change', function() {
		let input = $(this);

		if (input.val() == '') {
			input.attr('readonly', 'true');
			input.attr('type', 'text');
		}
	});

	// Hero tab Homepage
	$('#tab-voli').on('click', '.tabs div', function() {
		let $this = $(this);
		let tab = $this.attr('data-menu-tab');

		if (!$this.hasClass('active')) {
			$this.find('.icon').addClass('--active');
			$this.siblings().find('.icon').removeClass('--active');
		}
		
		$this.addClass('active').siblings().removeClass('active');
		$(tab).removeClass('hidden').siblings('.main-tabs-content div').addClass('hidden');

		// tab in Partenze / Arrivi template
		if(tab == '#departures') {
			$('#pt-partenze, #sec-partenze, #footer-items.partenze, .related-links.partenze').removeClass('hidden');
			$('#pt-arrivi, #sec-arrivi, #footer-items.arrivi, .related-links.arrivi').addClass('hidden');
		} else if (tab == '#arrivals') {
			$('#pt-partenze, #sec-partenze, #footer-items.partenze, .related-links.partenze').addClass('hidden');
			$('#pt-arrivi, #sec-arrivi, #footer-items.arrivi, .related-links.arrivi').removeClass('hidden');
		}
	});

	// Tabs v2 / v3 Desktop & Mobile
	$('.desk-tabs-title, ul.tabs, .ul-mobile div').on('click', '> li', function() {
		let $this = $(this),
			tab = $this.attr('data-menu-tab'),
			tab_v2 = $this.parent().hasClass('v2'),
			tab_fidelity = $this.parent().hasClass('v2-b'),
			tab_reserved = $this.parents('ul').hasClass('v2-c'),
			tab_v3 = $this.parent().hasClass('v3');

		if (!tab_reserved && $this.parent('.tabs').length > 0 && $this.hasClass('active')) {
			$this.removeClass('active');
			$this.parents('ul').find(tab).addClass('hidden');
		} else if (!tab_reserved && !$this.hasClass('active')) {
			
			if (! $this.hasClass('mobile-only')) {
				$this.addClass('active').siblings().removeClass('active');
			}
			
			$this.parents('ul').find(tab).removeClass('hidden');

			if (tab_v2) {
				let tabname = tab.replace("#", "");
				$this.parents('ul.v2').find(`.tabs-v2-content${tab}`).attr('current', tabname);
				$this.parents('ul.v2').find(`.tabs-v2-content:not(${tab})`).addClass('hidden');
				$this.parents('ul.v2:not(.fixed-titles)').find('.desk-tabs-title.v2').addClass('hidden');

				$(`.tabs-v2-content${tab}`).find('.tabs-v3-content#step1').removeClass('hidden');
				$('#edit-order').addClass('hidden');

				$("ul.v2 .slick-slider").slick("refresh");
				
				$this.parents('ul.v2').find('li.mobile-only').addClass('hidden');
				$('#show-all-services').removeClass('hidden open');
				$('.cta#vantaggi').addClass('hidden');

				if (tab == '#parcheggio') {
					$('#parking-help').removeClass('hidden');
				} else {
					$('#parking-help').addClass('hidden');
				}

			} else if (tab_fidelity) {
				$this.parents('ul.v2-b').find(`.tabs-v2-content:not(${tab})`).addClass('hidden');

			} else if (tab_v3) {
				$this.parents('ul.v3').find(`.tabs-v3-content:not(${tab})`).addClass('hidden');
			}
		}

		if (tab_reserved) {
			console.log('click');
			if (ww < 641) {
				console.log('mobile click');

				if ($this.hasClass('active')) {
					console.log($this);
					if ($this.hasClass('open')) {

						$this.parents('ul.v2-c').find(`.tabs-v2-content:not(${tab})`).addClass('hidden');
						$this.parents('ul.v2-c').find(`.tabs-v2-content${tab}`).removeClass('hidden');
						$this.parents('ul.v2-c').removeClass('open-menu');
						$this.siblings('li').removeClass('open-menu');
						$this.removeClass('open');
					} else {
						$this.addClass('open');
						$this.parents('ul.v2-c').addClass('open-menu');
						$this.siblings('li').addClass('open-menu');
					}
				} else {
					$this.addClass('active open').removeClass('open-menu');
					$this.siblings('li').removeClass('active open').addClass('open-menu');
				}
			} else {
				$this.parents('ul.v2-c').find(`.tabs-v2-content:not(${tab})`).addClass('hidden');
				$this.parents('ul.v2-c').find(`.tabs-v2-content${tab}`).removeClass('hidden');
				$this.addClass('active').siblings().removeClass('active');
			}
		}
	});

	// Eshop #show-all-services action
	$('#show-all-services').on('click', function() {
		let open = $(this).hasClass('open');

		if (open) {
			$(this).removeClass('open');

			// Desktop
			$(this).parent().find('.tabs.v2 > .desk-tabs-title.v2, .tabs.v2 > li').addClass('hidden');
			
			// Mobile
			$(this).parent().find('.tabs.v2 > li').addClass('hidden');
		} else {
			$(this).addClass('open');

			// Desktop
			$(this).parent().find('.tabs.v2 > .desk-tabs-title.v2, .tabs.v2 > li').removeClass('hidden');

			if ($(window).width() < 640) {
				$(this).parent().find('.tabs.v2 > .tabs-v2-content').addClass('hidden');
			}

			// Mobile
			$(this).parent().find('.tabs.v2 > li').removeClass('hidden');
		}
		
	});

	// Action on "Dettagli contenuto" button accordion on Eshop template in single product content
	$('.button-accordion').on('click', function() {
		$(this).toggleClass('open');
		$(this).siblings('.description').toggleClass('mobile-hidden open');
	})


	// Timepicker config
	$('input.time').timepicker({
		'timeFormat': 'H:i',
		'language' : 'it',
		'step': 5,
		'minTime': '04:00am',
		'maxTime': '11:00pm',
		'defaultTime': 'Ore',
		'startTime': '04:00am',
		'scrollDefault': 'now',
		'selectOnBlur': true,
		'dynamic': false,
		'dropdown': true,
		'scrollbar': true
	});

	// Change inputs button
	$('#change').on('click', function() {
		let form = $(this).parents('form'),
			departure = form.find('input.departure'),
			arrival = form.find('input.arrival');

		departure.attr('arrival-val', arrival.val()),
		arrival.attr('departure-val', departure.val());

		departure.val(departure.attr('arrival-val'));
		arrival.val(arrival.attr('departure-val'));
	});

	// Search on datalist on keyup
	$("input.departure, input.arrival").on('click', function() {
		$('datalist#airports, datalist#directs').attr('input-focus', $(this).attr('class'));
		$('datalist#airports, datalist#directs').toggleClass('open');
	});

	$('#airports option, #directs option').on('click', function() {
		let datalist = $(this).parents('datalist'),
			input = datalist.attr('input-focus');

		if (input == 'drop arrival') {
			$('input.arrival').val($(this).val());
		} else {
			$('input.'+input).val($(this).val());
		}
		$('datalist').toggleClass('open');
		// if ($(window).width() < 768) {
		// 	$('#change').removeClass('hidden');
		// }
	});

	$("input.departure, input.arrival").on("keyup focus blur change", function(){
		// if ($(window).width() < 768) {
		// 	$('#change').addClass('hidden');
		// }
		let filter, datalist, option, title, i, txtValue;
		filter = $(this).val().toUpperCase();
		datalist = document.querySelector("#airports, #directs");
		option = datalist.querySelectorAll('option');

		for (i = 0; i < option.length; i++) {
			title = option[i].querySelector(".titlelist");
			txtValue = title.textContent || title.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				option[i].style.display = "flex";
			} else {
				option[i].style.display = "none";
			}
		}
	})

	/**
	 * Slick sliders config
	 */

	// In tabs v2
	$('.slick-slider').slick({
		dots: true,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 3.5,
		slidesToScroll: 1,
		cssEase: 'linear',
		prevArrow: '<a class="prev"><img src="./assets/img/arrow-right2.svg" /></a>',
		nextArrow: '<a class="next"><img src="./assets/img/arrow-right2.svg" /></a>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2.5,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerMode: true,
				},
			},
		],
	})
	.on('setPosition', function (event, slick) {
		slick.$slides.css('height', slick.$slideTrack.height() + 'px');
	});

	// in section #services -> Homepage
	$('#services .wrap').slick({
		dots: true,
		arrows: false,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 5,
		slidesToScroll: 5,
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2.5,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1.5,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 430,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	// in section #icon-services -> Homepage
	$('.slick-slider-icon-services').slick({
		dots: true,
		arrows: false,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 5,
		slidesToScroll: 5,
		cssEase: 'linear',
		responsive: [{
				breakpoint: 1281,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1.5,
					slidesToScroll: 1,
				},
			},
		],
	});

	// in section #blog -> Homepage
	$('.slick-news').slick({
		dots: false,
		arrows: true,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 2.5,
		slidesToScroll: 1,
		cssEase: 'linear',
		appendArrows: $('#blog .arrows'),
		prevArrow: '<a class="prev -blue"><img src="./assets/img/arrow-right2.svg" /></a>',
		nextArrow: '<a class="next -blue"><img src="./assets/img/arrow-right2.svg" /></a>',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1.5,
					slidesToScroll: 1,
				},
			},
		],
	});

	// Global component "slider-cards"
	// -> Partenze / Arrivi
	// -> Voli Diretti
	// -> Info Parcheggi
	// -> Ristoranti / Negozi

	$('.slider-cards').slick({
		dots: true,
		arrows: false,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	// Slideshow gallery -> Negozi / Ristoranti, single shop view
	$('.slideshow').slick({
		dots: true,
		arrows: false,
		infinite: true,
		centerMode: true,
    	variableWidth: true,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		slidesToScroll: 1,
		cssEase: 'linear',
	});

	// in section #cards -> In Partenza
	$('.cards-content').slick({
		dots: true,
		arrows: false,
		infinite: false,
		centerMode: false,
    	variableWidth: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2.5,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1.5,
					slidesToScroll: 1,
				},
			}
		],
	});

	/**
	 * Show an hidden wrapper of fields on checking a checkbox field
	 * @param {jquery element} el
	 * @param {string} form_id 
	 * @param {string} field_class 
	 */
	function checkbox_show_content(el, form_id, field_class) {
		el.on('change', function() {
			let fields = $(this).parents('form#'+form_id).find('.'+field_class);
			if ($(this).is(':checked')) {
				fields.removeClass('hidden');
			} else {
				fields.addClass('hidden');
			}
		});
	}

	// Form eshop show login
	checkbox_show_content($('.already-member'), 'fidelity-login-eshop', 'already-member-fields');

	// Form eshop show request invoice
	checkbox_show_content($('.invoice'), 'insert-data', 'invoice-fields');

	// Form eshop show request shipping address fields
	checkbox_show_content($('.shipping'), 'insert-data', 'shipping-fields');

	// Eshop Template system
	// Parking 1st step
		$('#step1 #search-parking').on('submit', function(e) {
			e.preventDefault();
			$('#buy-parking').removeClass('hidden');
		});

	// General Add to cart
	$('.add-to-cart > .button').on('click', function() {
		let parent = $(this).parents('.buy-service');
		parent.find('.cart-wrap > .cart-empty').addClass('hidden');
		parent.find('.cart-wrap > .cart').removeClass('hidden');
	});

	// General Go to step 2
	$('.go-to-checkout').on('click', function() {
		let parent = $(this).parents('.buy-service');
		parent.addClass('hidden');

		$('li[data-menu-tab="#step1"]').removeClass('active');
		$('li[data-menu-tab="#step2"]').addClass('active');
		$('.tabs-v3-content#step1').addClass('hidden');
		$('.tabs-v3-content#step2').removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// General Back to step 1
	$('#step2 #insert-data #back-to-step1').on('click', function() {
		let current = $(this).parents('.tabs-v2-content').attr('current');

		$('li[data-menu-tab="#step2"]').removeClass('active');
		$('li[data-menu-tab="#step1"]').addClass('active');
		$('.tabs-v3-content#step2').addClass('hidden');
		$('.tabs-v3-content#step1').removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// General Go to step 3
	$('#step2 #insert-data').on('submit', function(e) {
		e.preventDefault();
		$('li[data-menu-tab="#step2"]').removeClass('active');
		$('li[data-menu-tab="#step3"]').addClass('active');
		$('.tabs-v3-content#step2').addClass('hidden');
		$('.tabs-v3-content#step3').removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// Edit data
	// General Go back to step 2
	$('#step3 .edit-data').on('click', function() {
		$('li[data-menu-tab="#step3"]').removeClass('active');
		$('li[data-menu-tab="#step2"]').addClass('active');
		$('.tabs-v3-content#step3').addClass('hidden');
		$('.tabs-v3-content#step2').removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// Edit product
	// General Go back to step 1
	$('#step3 .edit-product').on('click', function() {
		let current = $(this).parents('.tabs-v2-content').attr('current');
		
		$('li[data-menu-tab="#step3"]').removeClass('active');
		$('li[data-menu-tab="#step1"]').addClass('active');
		$('.tabs-v3-content#step3').addClass('hidden');
		$('.tabs-v3-content#step1').removeClass('hidden');
		$(`#buy-${current}`).removeClass('hidden');
		$(`#buy-${current} .cart-wrap > .cart-empty`).removeClass('hidden');
		$(`#buy-${current} .cart-wrap > .cart`).addClass('hidden');
	});

	// General Continue shopping
	$('.continue-shopping').on('click', function() {
		$(this).parents('.tabs-v2-content').attr('current', '');
		$('li[data-menu-tab="#step3"]').removeClass('active');
		$('li[data-menu-tab="#step1"]').addClass('active');
		$('.tabs-v2-content').addClass('hidden');
		$('.tabs-v3-content#step3').addClass('hidden');
		$('#show-all-services').trigger('click');
		$('#show-all-services, #parcheggio, #parking-help').addClass('hidden');
		$('.cta#vantaggi, #edit-order').removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// Other services
		// * 1st step
		$('#step1 #quantity').on('submit', function(e) {
			e.preventDefault();
			let current = $(this).parents('.tabs-v2-content').attr('current');
			console.log(current);
			$(`#buy-${current}`).removeClass('hidden');
		});

	// Slidee marquee vertical
	$('.slidee').each(function(i, el) {
		let slidee = $(el).find('.marqueeElement').length;
		if (slidee > 0) {
			$(el).find('.marqueeElement').css("animation", `vertical-slidee-${slidee} 8s infinite ease-in-out;`);
		}
	});
	
	
	// Single flight onclick action
	// Partenze / Arrivi template
	$('#sec-partenze .flights > .single-flight').attr('data-type', 'departure');
	$('#sec-arrivi .flights > .single-flight').attr('data-type', 'arrival');

	$('.flights .single-flight .icon-arrow-circle-sec').on('click', function() {
		let type = $(this).parent().attr('data-type');

		$('#pt-partenze, #sec-partenze, #pt-arrivi, #sec-arrivi, #info, .forms-tab').addClass('hidden');
		$(`#pt-single-flight, .single-flight-details.${type}`).removeClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

	// if ($(window).width() < 1023) {
	// 	// On mobile the flight details can only be visible by clicking the arrow button
	// 	$('.flights .single-flight').after().on('click', function() {
	// 		let type = $(this).attr('data-type');

	// 		$('#pt-partenze, #sec-partenze, #pt-arrivi, #sec-arrivi, #info, .forms-tab').addClass('hidden');
	// 		$(`#pt-single-flight, .single-flight-details.${type}`).removeClass('hidden');
	// 		document.querySelector('body').scroll(0,0);
	// 	});
	// } else {
	// 	// On desktop the entire .single-flight row can be clicked
	// 	$('.flights .single-flight').on('click', function() {
	// 		let type = $(this).attr('data-type');

	// 		$('#pt-partenze, #sec-partenze, #pt-arrivi, #sec-arrivi, .forms-tab').addClass('hidden');
	// 		$(`#pt-single-flight, .single-flight-details.${type}`).removeClass('hidden');
	// 		document.querySelector('body').scroll(0,0);
	// 	});
	// }

	// "Voli Diretti" template
	// Single flight action on click button
	if ($(window).width() < 641) {
		console.log('mobile');
		// mobile only
		$('.button-open-flight').on('click', function() {
			let parent = $(this).parents('.single-flight');
			console.log(parent.attr('class'));
			parent.removeClass('closed').addClass('opened');
		});

		$('.col.flight-info > .info > .name').before().on('click', function() {
			let parent = $(this).parents('.single-flight');
			console.log(parent.attr('class'));
			parent.removeClass('opened').addClass('closed');
		});
	}

	// Faq accordion effect
	// Info Parcheggi Template
	// Fatturazione / Telepass effect in Registrazione / Login Template
	$('.faq, .section-form').on('click', function() {
		$(this).toggleClass('closed');
	});

	// Single shop view effect
	// Negozi / Ristoranti Template
	const pt_title = $('#pagetitle h1').html(),
		bc_current = $('.breadcrumbs .current').html();

	$('.single-shop.list').on('click', function() {
		let nome = $(this).find('h2').html();

		if ($(this).hasClass('list')) {
			document.querySelector('body').scroll(0,0);
		}

		$(this).siblings().addClass('hidden');
		$(this).removeClass('list').addClass('single-view');
		$(this).find('.single').removeClass('hidden');
		$('#pagetitle h1, .breadcrumbs .current').html(nome);

		if ($(window).width() >= 640) {
			$(this).find('h2').addClass('hidden');
		}
	});

	$('.shop-filter select').on('change', function() {
		$('.single-shop').removeClass('single-view hidden').addClass('list');
		$('.single-shop .single').addClass('hidden');
		$('#pagetitle h1').html(pt_title);
		$('.breadcrumbs .current').html(bc_current);

		if ($(window).width() >= 640) {
			$('.single-shop h2').removeClass('hidden');
		}
	});

	// Registrazione / Login effect to show and hide sections
	$('a#login').on('click', function() {
		$('#form-register').addClass('hidden');
		$('section#login').removeClass('hidden');
		$('#pagetitle h1, .breadcrumbs .current').html('Login');
	});

	$('a#remember-password').on('click', function() {
		$('#form-register, section#login').addClass('hidden');
		$('section#recupera-password').removeClass('hidden');
		$('#pagetitle h1, .breadcrumbs .current').html('Recupera Password');
	});

	$('#register').on('submit', function(e) {
		e.preventDefault();
		$('#register-ok').removeClass('hidden');
		$('#form-register').addClass('hidden');
		$('section#login').removeClass('hidden');
		$('#pagetitle h1, .breadcrumbs .current').html('Login');
	});

	$('a#close-popup').on('click', function() {
		$(this).parents('.popup').addClass('hidden');
	});

	$('#go-register').on('click', function() {
		$('#form-register').removeClass('hidden');
		$('section#login').addClass('hidden');
		$('#pagetitle h1, .breadcrumbs .current').html('Registrazione');
	});

	// News effect on article link
	// (show single article and related links)
	$('#news .single-article .link').on('click', function() {
		$(this).parents('#articles').addClass('hidden');
		$('#single-article, #related-news').removeClass('hidden');
		$('#more-news').addClass('hidden');
		document.querySelector('body').scroll(0,0);
	});

});