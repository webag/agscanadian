/***********************
 Отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		const form = $(this);
		let send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		// empty file inputs fix for mac
		const fileInputs = $('input[type="file"]:not([disabled])', form);
		fileInputs.each(function (_, input) {
			if (input.files.length > 0) return;
			$(input).prop('disabled', true)
		});

		const form_data = new FormData(this);

		fileInputs.prop('disabled', false);

		$("[data-label]").each(function () {
			const input_name = $(this).attr('name');
			const input_label__name = input_name + '_label';
			const input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
		});

		if (send === true) {
			ym(55070932, 'reachGoal', 'order');
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					console.log(result);
					$.fancybox.close();
					if (result.indexOf("Mail FAIL") !== -1) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						gtag('event', 'order', { 'event_category': 'orders', 'event_label': 'Order' });
						setTimeout(function () {
							$.fancybox.open({src: '#modal-thanks'});
						}, 500);
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});
});
/***********************
 Отправка формы в php END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
$.fancybox.defaults.lang = 'ru';
$.fancybox.defaults.i18n =
	{
		'ru': {
			CLOSE: 'Закрыть',
			NEXT: 'Дальше',
			PREV: 'Назад',
			ERROR: 'Не удается загрузить. <br/> Попробуйте позднее.',
			PLAY_START: 'Начать слайдшоу',
			PLAY_STOP: 'Остановить слайдшоу',
			FULL_SCREEN: 'На весь экран',
			THUMBS: 'Превью'
		}
	};

function init_fancy() {
	$('.fancy').fancybox({
		buttons: ['close']
	});
	$('.fancy-modal').fancybox({
		selector: '',
		touch: false
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		defaultType: "iframe"
	});
}

function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		}
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		const headerHeight = $('.s-header ').outerHeight();
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top - headerHeight;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});

	$('.aside-anim').waypoint(function () {
		$(this.element).addClass('animated');
	}, {
		offset: '50%'
	});

	$('body').waypoint(function () {
		$('.to-top-btn').toggleClass('active');
	}, {
		offset: -300
	});
});
/***********************
 Waypoints END
 ***********************/


/***********************
 Lazy BEGIN
 ***********************/
function lazyLoad(){
	const lazyImgs = $('[data-lazy]');
	lazyImgs.each(function(){
		const lazyImage = $(this);
		const src = lazyImage.attr('data-lazy');
		lazyImage.attr('src',src);
	});
}

function lazyLoadBg(){
	const lazyImgs = $('[data-lazybg]');

	lazyImgs.each(function(){
		const lazyImage = $(this);
		const src = lazyImage.attr('data-lazybg');
		lazyImage.css('background-image','url('+src+')');
	});
}

$(function(){
	lazyLoad();
	lazyLoadBg();
});

$(window).on('load',function () {
	Waypoint.refreshAll();
});
/***********************
 Lazy END
 ***********************/


/**************************************************
 Custom File Input
 ***************************************************/
$(function($){
	$('.style-file').each( function(){
		const thisFileBlock = $(this);
		const input = thisFileBlock.find('input[type="file"]');
		const label = thisFileBlock.find('.style-file__text');
		const label_val = label.html();
		const deleteBtn = thisFileBlock.find('.style-file__delete');

		input.on('change', function(e){
			let fileName = '';

			if( this.files && this.files.length > 1 ) {
				fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
				thisFileBlock.addClass('style-file--selected');
			}
			else if( e.target.value ) {
				fileName = e.target.value.split('\\').pop();
				thisFileBlock.addClass('style-file--selected');
			} else {
				thisFileBlock.removeClass('style-file--selected');
			}

			if(fileName) {
				label.html(fileName);
			}
			else {
				label.html(label_val);
				thisFileBlock.removeClass('style-file--selected');
			}
		});

		// Firefox bug fix
		input
			.on( 'focus', function(){ input.addClass( 'has-focus' ); })
			.on( 'blur', function(){ input.removeClass( 'has-focus' ); });

		deleteBtn.on('click',function (e) {
			e.stopPropagation();
			const thisInput = $(this).siblings('[type="file"]');
			thisInput.val(null);
			label.html(label_val);
			thisFileBlock.removeClass('style-file--selected');
			return false;
		})
	});
});
/**************************************************
 End Custom File Input
 ***************************************************/


/***********************
header panel BEGIN
***********************/
$(function($){
	const burger = $('.burger');
	const header = $('.s-header');
	let transparentFlag = false;
	if (header.hasClass('s-header--transparent')){
		transparentFlag = true;
	}
	$('body').waypoint(function (direction) {
		header.toggleClass('s-header--scrolled');
		if (direction === 'down'){
			header.removeClass('s-header--transparent');
		} else {
			if (transparentFlag){
				header.addClass('s-header--transparent');
			}
		}
		burger.toggleClass('burger--ontop');
		burger.toggleClass('burger--shadow');
	}, {
		offset: -10
	});
});
/***********************
header panel END
***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function () {
	$('.burger').on('click', function () {
		$(this).toggleClass('active burger--shadow');
		$('.mob-panel').toggleClass('active');
		$('body').toggleClass('stopped');
	});

	$(document).on('click touchstart', function (e) {
		const div = $(".burger,.mob-panel");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
			$('.burger').removeClass('active');
			$('.mob-panel').removeClass('active');
			$('body').removeClass('stopped');
		}
	});
});
/***********************
 Mob menu END
 ***********************/


/***********************
 parallax BEGIN
 ***********************/
function getCoords(elem) {
	const box = elem.getBoundingClientRect();
	return {
		top: box.top + pageYOffset,
		left: box.left + pageXOffset
	};
}

function scrollParallax(current) {
	let currentMultiplier = 0.1;
	let defaultOffset = 0;
	let windowHalf = window.innerHeight / 2;
	let elementHeight = current.offsetHeight;
	current.dataset.pos = '0';

	if (current.dataset.parallax) {
		currentMultiplier = parseFloat(current.dataset.parallax);
	}

	const make = function () {
		let normallevel = window.pageYOffset + windowHalf - elementHeight / 2;
		let currentDelta = current.dataset.pos;
		let newDelta;
		let tweenDelta;
		let posResult;

		defaultOffset = parseFloat(getCoords(current).top * currentMultiplier);
		newDelta = parseInt((normallevel * currentMultiplier));
		tweenDelta = (currentDelta - ((currentDelta - newDelta) * 0.05)).toFixed(1);
		posResult = tweenDelta - defaultOffset;

		current.style.transform = 'translate3d(0px, ' + posResult + 'px, 0px)';

		current.dataset.pos = tweenDelta;
		window.requestAnimationFrame(make);
	};

	if (window.requestAnimationFrame) {
		make();
	}
}

document.addEventListener('DOMContentLoaded', function () {
	if (device.desktop()) {
		const parallaxElements = document.querySelectorAll('.js-parallax');
		for (let i = 0; i < parallaxElements.length; i++) {
			scrollParallax(parallaxElements[i]);
		}
	}
});
/***********************
 parallax END
 ***********************/


/***********************
intro slider BEGIN
***********************/
$(function($){
	let introCounter = $('.intro-nav__counter');

	const introlider = $('.intro-slider').flickity({
		contain: true,
		imagesLoaded: true,
		prevNextButtons: false,
		pageDots: false,
		// wrapAround: true,
		selectedAttraction: 0.018,
		on: {
			change: function(index) {
				let counter = '0'+(index+1)+'.';
				introCounter.html(counter);
			}
		}
	});

	let flkty = introlider.data('flickity');

	if (device.desktop()){
		const $panels = $('.intro-slide__content');

		introlider.on('scroll.flickity', function() {
			flkty.slides.forEach( function( slide, i ) {
				const panel = $panels[i];
				const x2 = ( slide.target + flkty.x ) * -1/1.2;
				panel.style.transform = 'translate3d( ' + x2  + 'px,0,0)';
			});
		});
	}

	$('.intro-nav__arrow--prev').on('click',function (e) {
		e.preventDefault();
		introlider.flickity('previous');
	});

	$('.intro-nav__arrow--next').on('click',function (e) {
		e.preventDefault();
		introlider.flickity('next');
	});
});
/***********************
intro slider END
***********************/


/***********************
about list BEGIN
***********************/
$(function($){
	const moreLink = $('.about-list__more');

	moreLink.on('click',function (e) {
		e.preventDefault();
		const thisList = $(this).parents('.about-list');
		const hiddenItems = thisList.find('.about-list__hidden');
		hiddenItems.slideToggle();
		$(this).toggleClass('opened');

		let text = $(this).find('span').text();
		$(this).find('span').text(
			text === "Show more" ? "Roll up" : "Show more");
	})
});
/***********************
about list END
***********************/

/***********************
toggler BEGIN
 ***********************/
$(function($){
	const link = $('.toggler__link');

	link.on('click',function (e) {
		e.preventDefault();
		const hiddenItems = $(this).prev('.toggler__hidden');
		hiddenItems.slideToggle();
		$(this).toggleClass('opened');

		let text = $(this).find('span').text();
		$(this).find('span').text(
			text === "Read more" ? "Roll up" : "Read more");
	})
});
/***********************
toggler END
 ***********************/


/***********************
Product grid more BEGIN
 ***********************/
$(function($){
	const link = $('.product-grid__more-link');

	link.on('click',function (e) {
		e.preventDefault();
		const hiddenItems = $('.product-grid__item--hidden');
		hiddenItems.slideToggle();
		$(this).toggleClass('opened');

		let text = $(this).find('span').text();
		$(this).find('span').text(
			text === "Show all" ? "Roll up" : "Show all");
	})
});
/***********************
 Product grid more END
 ***********************/



/***********************
Logos slider BEGIN
***********************/
$(function($){
	const logosSlider = $('.s-logos-slider').flickity({
		cellAlign: 'left',
		contain: true,
		imagesLoaded: true,
		prevNextButtons: false,
		pageDots: false,
		wrapAround: true,
		selectedAttraction: 0.018,
		lazyLoad: 7,
		autoPlay: 1000
	});
});
/***********************
Logos slider END
***********************/


/***********************
 Geo BEGIN
 ***********************/
function initGeo() {
	const locations = locations_from_admin;
	const geo_items = $('.geo-item');
	let markers = [];
	const normalIcon = {
		url: '/local/templates/ags/img/pin.svg',
		scaledSize: new google.maps.Size(39, 46)
	};
	const activeIcon = {
		url: '/local/templates/ags/img/pin-selected.svg',
		scaledSize: new google.maps.Size(39, 46)
	};
	const mapOptions = {
		center: new google.maps.LatLng(locations[0][1], locations[0][2]),
		zoom: 4,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		scrollwheel: false,
		styles: [{"featureType": "administrative", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "administrative", "elementType": "labels.text", "stylers": [{"lightness": "49"}, {"weight": "1"}, {"gamma": "1"}]}, {"featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{"gamma": "1"}, {"lightness": "67"}, {"saturation": "0"}, {"visibility": "on"}]}, {"featureType": "administrative.province", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": "50"}, {"visibility": "simplified"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {
			"featureType": "road.arterial",
			"elementType": "all",
			"stylers": [{"lightness": "30"}]
		}, {"featureType": "road.local", "elementType": "all", "stylers": [{"lightness": "40"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}, {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"lightness": "-7"}, {"gamma": "1.26"}, {"saturation": "-53"}, {"color": "#e0e0e0"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"lightness": -25}, {"saturation": -100}]}]
	};
	const geomap = new google.maps.Map(document.getElementById("geomap"), mapOptions);

	for (let i = 0; i < locations.length; i++) {
		const marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: geomap,
			icon: normalIcon,
			optimized: false,
			title: locations[i][0],
			zIndex: 1,
			activeState: false
		});
		markers.push(marker);
	}

	for (let i = 0; i < markers.length; i++) {
		google.maps.event.addListener(markers[i], 'click', function () {
			for (let j = 0; j < markers.length; j++) {
				markers[j].setIcon(normalIcon);
				markers[j].setZIndex(1);
				markers[j].activeState = false;
			}
			this.setIcon(activeIcon);
			this.setZIndex(2);
			this.activeState = true;
			geo_items.removeClass('active').eq(i).addClass('active');
			const thisImg = geo_items.eq(i).find('.geo-item__img');
			const thisImgSrc = thisImg.attr('data-img');
			thisImg.attr('src', thisImgSrc);
			geomap.panTo(this.getPosition());
			myPanBy();
		});
		google.maps.event.addListener(markers[i], 'mouseover', function() {
			this.setIcon(activeIcon);
		});
		google.maps.event.addListener(markers[i], 'mouseout', function() {
			if (!this.activeState){
				this.setIcon(normalIcon);
			}
		});
	}

	$(window).on('resize', function () {
		const currCenter = geomap.getCenter();
		google.maps.event.trigger(geomap, 'resize');
		geomap.setCenter(currCenter);
	});

	markers[0].setIcon(activeIcon);
	markers[0].activeState = true;
	geo_items.eq(0).addClass('active');
	myPanBy();

	function myPanBy() {
		if (window.matchMedia("(max-width: 768px)").matches) {
			geomap.panBy(0,0);
		} else {
			geomap.panBy(150,0);
		}
	}
}

$(function($){
	function addScript( src ) {
		let s = document.createElement('script');
		s.setAttribute('src', src);
		document.body.appendChild(s);
	}

	const geoSection = $('.s-geo');
	if (geoSection.length){
		geoSection.waypoint(function () {
			addScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48&callback=initGeo');
			this.destroy();
		}, {
			offset: '100%'
		});
	}
});
/***********************
 Geo END
 ***********************/


/***********************
Contacts map BEGIN
***********************/
function initGeoContacts() {
	const locations = contacts_from_admin;
	const contact_items = $('.contact-item');
	const contact_btns = $('.contacts-map-btn');
	let markers = [];
	const normalIcon = {
		url: '/local/templates/ags/img/pin.svg',
		scaledSize: new google.maps.Size(39, 46)
	};
	const activeIcon = {
		url: '/local/templates/ags/img/pin-selected.svg',
		scaledSize: new google.maps.Size(39, 46)
	};
	const mapOptions = {
		center: new google.maps.LatLng(locations[0][1], locations[0][2]),
		zoom: 17,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		scrollwheel: false,
		styles: [{"featureType": "administrative", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "administrative", "elementType": "labels.text", "stylers": [{"lightness": "49"}, {"weight": "1"}, {"gamma": "1"}]}, {"featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{"gamma": "1"}, {"lightness": "67"}, {"saturation": "0"}, {"visibility": "on"}]}, {"featureType": "administrative.province", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": "50"}, {"visibility": "simplified"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": "-100"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {
			"featureType": "road.arterial",
			"elementType": "all",
			"stylers": [{"lightness": "30"}]
		}, {"featureType": "road.local", "elementType": "all", "stylers": [{"lightness": "40"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}, {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"lightness": "-7"}, {"gamma": "1.26"}, {"saturation": "-53"}, {"color": "#e0e0e0"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"lightness": -25}, {"saturation": -100}]}]
	};
	const geomap = new google.maps.Map(document.getElementById("geomap_cont"), mapOptions);

	for (let i = 0; i < locations.length; i++) {
		const marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: geomap,
			icon: normalIcon,
			optimized: false,
			title: locations[i][0],
			zIndex: 1,
			activeState: false
		});
		markers.push(marker);
	}

	for (let i = 0; i < markers.length; i++) {
		google.maps.event.addListener(markers[i], 'click', function () {
			selectLocation(i);
		});
		google.maps.event.addListener(markers[i], 'mouseover', function() {
			this.setIcon(activeIcon);
		});
		google.maps.event.addListener(markers[i], 'mouseout', function() {
			if (!this.activeState){
				this.setIcon(normalIcon);
			}
		});
	}

	contact_btns.on('click',function (e) {
		e.preventDefault();
		const index = $(this).index();
		selectLocation(index);
	});

	function selectLocation(index){
		for (let j = 0; j < markers.length; j++) {
			markers[j].setIcon(normalIcon);
			markers[j].setZIndex(1);
			markers[j].activeState = false;
		}
		markers[index].setIcon(activeIcon);
		markers[index].setZIndex(2);
		markers[index].activeState = true;
		contact_items.removeClass('active').eq(index).addClass('active');
		contact_btns.removeClass('active').eq(index).addClass('active');
		const thisImg = contact_items.eq(index).find('.geo-item__img');
		const thisImgSrc = thisImg.attr('data-img');
		thisImg.attr('src', thisImgSrc);
		geomap.panTo(markers[index].getPosition());
		myPanBy();
	}

	$(window).on('resize', function () {
		const currCenter = geomap.getCenter();
		google.maps.event.trigger(geomap, 'resize');
		geomap.setCenter(currCenter);
	});

	markers[0].setIcon(activeIcon);
	markers[0].activeState = true;
	contact_items.eq(0).addClass('active');
	contact_btns.eq(0).addClass('active');
	myPanBy();

	function myPanBy() {
		if (window.matchMedia("(max-width: 768px)").matches) {
			geomap.panBy(0,0);
		} else {
			geomap.panBy(150,0);
		}
	}
}

$(function($){
	function addScript( src ) {
		let s = document.createElement('script');
		s.setAttribute('src', src);
		document.body.appendChild(s);
	}

	const geoSection = $('.s-geo-contacts');
	if (geoSection.length){
		geoSection.waypoint(function () {
			addScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48&callback=initGeoContacts');
			this.destroy();
		}, {
			offset: '100%'
		});
	}
});
/***********************
Contacts map END
***********************/


/***********************
 Table wrapper BEGIN
 ***********************/
$(document).ready(function () {
	$('.user-content table').wrap('<div class="table-wrapper"></div>');
});
/***********************
 Table wrapper END
 ***********************/


/***********************
Filter mob open BEGIN
***********************/
$(function($){
	$('.filter-show-btn').on('click',function (e) {
		e.preventDefault();
		$('.filters').slideToggle();
	})
});
/***********************
Filter mob open END
***********************/


/***********************
Case slider BEGIN
***********************/
$(function($){
	const caseSlider = $('.case-slider').flickity({
		cellAlign: 'left',
		contain: true,
		imagesLoaded: true,
		prevNextButtons: true,
		pageDots: false,
		selectedAttraction: 0.018,
		lazyLoad: true,
		arrowShape: {
		x0: 10,
			x1: 60, y1: 50,
			x2: 65, y2: 45,
			x3: 20
		}
	});

	const caseSliderThumbs = $('.case-slider-thumbs').flickity({
		asNavFor: '.case-slider',
		cellAlign: 'center',
		contain: true,
		imagesLoaded: true,
		prevNextButtons: false,
		pageDots: false,
		selectedAttraction: 0.018,
		lazyLoad: 5
	});
});
/***********************
Case slider END
***********************/


/***********************
lp actiosn btns BEGIN
***********************/
$(function($){
	$('body').waypoint(function (direction) {
		$('.lp-actions').toggleClass('active');
	}, {
		offset: -500
	});
});
/***********************
lp actiosn btns END
***********************/


/***********************
blue selected BEGIN
***********************/
$(function($){
	$('.lp-variant').on('mouseenter',function (e) {
		$('.lp-variant').removeClass('selected');
		$(this).addClass('selected');
	});
	$('.lp-step').on('mouseenter',function (e) {
		$('.lp-step').removeClass('selected');
		$(this).addClass('selected');
	})
});
/***********************
blue selected END
***********************/


/***********************
 Wiki BEGIN
 ***********************/
$(function($){
	$('.wiki-menu-has-sub .i-next').on('click',function (e) {
		e.preventDefault();
		$(this).siblings('ul').slideToggle(200);
		$(this).toggleClass('hid');
	})
});
/***********************
 Wiki END
 ***********************/