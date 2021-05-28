/***********************
 Отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		const form = $(this);
		const submitBtn = form.find('.btn');
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
			/*if ($(this).is('input[type="tel"]')) {
				if ($(this).cleanVal().length < 11) {
					$(this).addClass('error');
					send = false;
				}
			}*/
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
			submitBtn.prop('disabled', true);
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
						setTimeout(function () {
							$.fancybox.open({src: '#modal-thanks'});
						}, 600);
						setTimeout(function () {
							$.fancybox.close();
						}, 6500);
						form[0].reset();
						form.find('.input-group').removeClass('not-empty');
					}
					submitBtn.prop('disabled', false);
				})
			});
			setTimeout(function () {
				submitBtn.prop('disabled', false);
			}, 4500);
		}
	});
});
/***********************
 Отправка формы в php END
 ***********************/


/**********************
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

function initFancy() {
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
	initFancy();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;
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
	let itemQueue = [];
	const delay = 150;
	let queueTimer;

	function processItemQueue() {
		if (queueTimer) return;
		queueTimer = window.setInterval(function () {
			if (itemQueue.length) {
				$(itemQueue.shift()).addClass('animated');
				processItemQueue()
			} else {
				window.clearInterval(queueTimer);
				queueTimer = null;
			}
		}, delay)
	}


	$('.anim-stagger').waypoint(function () {
		itemQueue.push(this.element);
		processItemQueue()
	}, {
		offset: '90%'
	});

	$('.anim').waypoint(function() {
		$(this.element).addClass('animated');
	}, {
		offset: '90%'
	});
});
/***********************
 Waypoints END
 ***********************/

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
Tabs BEGIN
***********************/
$(function($){
	const tabsLinks = $('.tabs__link');

	tabsLinks.on('click',function (e) {
		e.preventDefault();
		console.log(111);
		const thisTabs = $(this).parents('.tabs');
		const thisIndex = $(this).index();
		selectTab(thisTabs,thisIndex);
	});

	function selectTab(tabs,index) {
		const tabsItems = tabs.find('.tabs__item');
		const tabsLinks = tabs.find('.tabs__link');
		tabsItems.removeClass('active').eq(index).addClass('active');
		tabsLinks.removeClass('active').eq(index).addClass('active');
	}
});
/***********************
Tabs END
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


/***********************
 lp actions btns BEGIN
 ***********************/
$(function($){
	$('body').waypoint(function () {
		$('.lp-actions').toggleClass('active');
	}, {
		offset: -500
	});
});
/***********************
 lp actions btns END
 ***********************/


/***********************
Labels BEGIN
***********************/
$(function($){
	const inputs = $('.input-group .input-text');
	inputs.on('focus',function () {
		$(this).parent('.input-group').addClass('not-empty');
	});
	inputs.on('blur',function () {
		if ($(this).val().length === 0){
			$(this).parent('.input-group').removeClass('not-empty');
		}
	})
});
/***********************
Labels END
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
Calc BEGIN
***********************/
$(function($){
	const otherGasBlock = $('.input-group--other-gas');
	let otherGasInput = otherGasBlock.find('input');
	$('[name="gas[]"]').on('change',function () {
		let thisInput = $(this).get(0);
		if (thisInput.value === "Другой"){
			if (thisInput.checked){
				otherGasBlock.slideDown();
				otherGasInput.get(0).disabled = false;
			} else {
				otherGasBlock.slideUp();
				otherGasInput.get(0).disabled = true;
				console.log(otherGasInput);
			}
		}
	})
});
/***********************
Calc END
***********************/


/***********************
Params table BEGIN
***********************/
$(function($){
	$('.js-table-params-toggle').on('click',function (e) {
		e.preventDefault();
		const hiddenRows = $(this).parents('section').find('.table-params__hidden');
		hiddenRows.slideToggle(200);
		let text = $(this).text();
		$(this).text(text === "Expand the list" ? "Collapse the list" : "Expand the list");
	})
});
/***********************
Params table END
***********************/


/***********************
side-slider BEGIN
***********************/
$(function($){
	let sideSlider = $('.side-slider__slides').flickity({
		cellAlign: 'left',
		contain: true,
		pageDots: false,
		groupCells: true,
		imagesLoaded: true,
		lazyLoad: 1,
		arrowShape: 'M32.1125 50.5321L42.9528 38.8655L45.3947 41.1344L37.1571 50L70.0001 50L70.0001 53.3333L37.1571 53.3333L45.3947 62.1988L42.9528 64.4678L32.1125 52.8011C31.5182 52.1615 31.5182 51.1717 32.1125 50.5321Z',
	});

	sideSlider.on('change.flickity', function(event, index) {
		const thisInfoPanel = $(this).prev('.side-slider__info');
		if (index > 0){
			thisInfoPanel.addClass('is-hidden')
		} else {
			thisInfoPanel.removeClass('is-hidden')
		}
	});
});
/***********************
side-slider END
***********************/


/***********************
generator princip BEGIN
***********************/
$(function($){
	const genPrincipTexts = $('.gen-princip__info__step');
	const genPrincipImages = $('.gen-princip__sheme__step');
	const genPrincipStepsNum = genPrincipTexts.length;

	function selectGenPrincipStep(index) {
		genPrincipTexts.removeClass('active');
		genPrincipImages.removeClass('active');
		genPrincipTexts.eq(index).addClass('active');
		genPrincipImages.eq(index).addClass('active');
	}

	$('.js-genprincip-prev').on('click',function (e) {
		e.preventDefault();
		const currentIndex = genPrincipTexts.filter('.active').index();
		let needIndex = currentIndex - 1;
		selectGenPrincipStep(needIndex);
	});

	$('.js-genprincip-next').on('click',function (e) {
		e.preventDefault();
		const currentIndex = genPrincipTexts.filter('.active').index();
		let needIndex = currentIndex + 1;
		if (needIndex >= genPrincipStepsNum ) {
			needIndex = 0;
		}
		selectGenPrincipStep(needIndex);
	})
});
/***********************
generator princip END
***********************/


/***********************
side tabs BEGIN
***********************/
$(function($){
	$('.side-tabs__nav__item').on('click',function (e) {
		e.preventDefault();
		const thisSideTabs = $(this).parents('.side-tabs');
		const sideTabsNavLinks = thisSideTabs.find('.side-tabs__nav__item');
		const sideTabsContentItems = thisSideTabs.find('.side-tabs__content__item');
		const thisIndex = $(this).index();
		sideTabsNavLinks.removeClass('active');
		$(this).addClass('active');
		sideTabsContentItems.removeClass('active');
		sideTabsContentItems.eq(thisIndex).addClass('active');
	})
});
/***********************
side tabs END
***********************/


/***********************
generator sostav BEGIN
***********************/
$(function($){
	const navItems = $('.gen-sostav__nav__item');
	const dots = $('.gen-sostav__dot');

	function setHighlightedItem(index) {
		navItems.removeClass('hovered');
		dots.removeClass('hovered');
		navItems.eq(index).addClass('hovered');
		dots.eq(index).addClass('hovered');
	}

	function resetHighlightedItem() {
		navItems.removeClass('hovered');
		dots.removeClass('hovered');
	}

	function selectGenSostavItems(index) {
		navItems.removeClass('active');
		dots.removeClass('active');
		navItems.eq(index).addClass('active');
		dots.eq(index).addClass('active');

		const needHiddenBlock = navItems.eq(index).find('.gen-sostav__nav__item__hidden');
		$('.gen-sostav__nav__item__hidden').not(needHiddenBlock).slideUp(300);
		needHiddenBlock.slideDown(300);
	}

	navItems.hover(
		function() {
			setHighlightedItem($(this).index())
		}, function() {
			resetHighlightedItem()
		}
	);

	dots.hover(
		function() {
			setHighlightedItem($(this).index())
		}, function() {
			resetHighlightedItem()
		}
	);

	navItems.on('click',function (e) {
		e.preventDefault();
		const thisIndex = $(this).index();
		selectGenSostavItems(thisIndex)
	});

	dots.on('click',function (e) {
		e.preventDefault();
		const thisIndex = $(this).index();
		selectGenSostavItems(thisIndex)
	});

	selectGenSostavItems(0);


	$('.gen-sostav').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '55%'
	});
});
/***********************
generator sostav END
***********************/


/***********************
Letter form BEGIN
***********************/
$(function($){
	const letterStepFirst = $('.letter-form__first');
	const letterStepSecond = $('.letter-form__second');
	$('[data-letter]').on('click',function (e) {
		e.preventDefault();
		const needStep = $(this).data('letter');
		if (needStep === 1){
			letterStepFirst.addClass('active');
			letterStepSecond.removeClass('active');
		} else {
			letterStepSecond.addClass('active');
			letterStepFirst.removeClass('active');
		}
	})
});
/***********************
Letter form END
***********************/