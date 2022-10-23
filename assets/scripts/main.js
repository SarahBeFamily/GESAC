import $ from 'jquery';
require('dragon-lightbox/dist/dragon-lightbox.min');
require('slick-carousel');
require('timepicker/jquery.timepicker.min');

$(function() {

	console.log('Hi!');
	const body = $('body');

	if ($(window).width() < 640) {
		$('.tabs-v2-content:not(.starter, .hidden)').addClass('hidden');
	}

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

	$('a.hamburger').on('click', function() {
		$('#menu-mobile').css('left', '0');
	});
	$('a.close-menu').on('click', function() {
		$('#menu-mobile').css('left', '100vw');
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
	});

	// Tabs v2 / v3 Desktop & Mobile
	$('.desk-tabs-title, ul.tabs').on('click', '> li', function() {
		let $this = $(this),
			tab = $this.attr('data-menu-tab'),
			tab_v2 = $this.parent().hasClass('v2'),
			tab_v3 = $this.parent().hasClass('v3');

		if ($this.parent('.tabs').length > 0 && $this.hasClass('active')) {
			$this.removeClass('active');
			$this.parents('ul').find(tab).addClass('hidden');
		} else if (! $this.hasClass('active')) {
			
			$this.addClass('active').siblings().removeClass('active');
			$this.parents('ul').find(tab).removeClass('hidden');

			if (tab_v2) {
				$this.parents('ul').find(`.tabs-v2-content:not(${tab})`).addClass('hidden');
				$this.parents('ul').find('.desk-tabs-title.v2').addClass('hidden');
				$('#show-all-services').removeClass('hidden open');
				$('.cta#vantaggi').addClass('hidden');
			} else if (tab_v3) {
				console.log($(this));
				$this.parents('ul').find(`.tabs-v3-content:not(${tab})`).addClass('hidden');
			}
		}
	});

	// Eshop #show-all-services action
	$('#show-all-services').on('click', function() {
		let open = $(this).hasClass('open');

		if (open) {
			$(this).removeClass('open');

			// Desktop
			$(this).parent().find('.tabs > .desk-tabs-title.v2').addClass('hidden');
		} else {
			$(this).addClass('open');

			// Desktop
			$(this).parent().find('.tabs > .desk-tabs-title.v2').removeClass('hidden');
		}
		
	});


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
		$('datalist#airports').attr('input-focus', $(this).attr('class'));
		$('datalist#airports').toggleClass('open');
	});

	$('#airports option').on('click', function() {
		let datalist = $(this).parents('datalist'),
			input = datalist.attr('input-focus');

		$('input.'+input).val($(this).val());
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
		datalist = document.querySelector("#airports");
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

});