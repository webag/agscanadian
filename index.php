<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("AGS - инжиниринговая компания полного цикла");
?>

<div class="s-intro">

	<div class="intro-slider">
		<div class="intro-slide">
			<div class="intro-slide__bg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/home/intro-bg.jpg')"></div>
			<div class="intro-slide__video">
				<video autoplay loop muted class="head_video">
					<source src="" type="video/mp4" class="source_mp4" data-videosrc="<?=SITE_TEMPLATE_PATH?>/img/home/bg_1.mp4">
				</video>
			</div>
			<div class="intro-slide__content">
				<div class="intro-slide__title">АГС ИНЖИНИРИНГ</div>
				<div class="intro-slide__subtitle">Эффективные решения в&nbsp;области воздухоразделения</div>
				<div class="intro-slide__text">Проектирование, производство, поставка и&nbsp;ввод в&nbsp;эксплуатацию сложного технического оборудования в&nbsp;сфере технических газов</div>
				<a href="#" class="btn btn--white intro-slide__btn fancy-modal" data-src="#modal-order">Заказать проект</a>
			</div>
		</div>
		<!--<div class="intro-slide">
			<div class="intro-slide__bg" style="background-image: url('<?/*=SITE_TEMPLATE_PATH*/?>/img/home/intro-bg-2.jpg')"></div>
			<div class="intro-slide__video">
				<video autoplay loop muted class="head_video">
					<source src="" type="video/mp4" class="source_mp4" data-videosrc="<?/*=SITE_TEMPLATE_PATH*/?>/img/home/bg_2.mp4">
				</video>
			</div>
			<div class="intro-slide__content">
				<div class="intro-slide__title">АГС ИНЖИНИРИНГ</div>
				<div class="intro-slide__subtitle">Эффективные решения в&nbsp;воздухоразделении</div>
				<div class="intro-slide__text">Проектирование, производсто, поставка и&nbsp;ввод в&nbsp;эксплуатацию сложного технического оборудования в&nbsp;сфере технических газов</div>
				<a href="#" class="btn btn--white intro-slide__btn fancy-modal" data-src="#modal-order">Заказать проект</a>
			</div>
		</div>-->
	</div>

	<div class="intro-left">
		<div class="intro-left__content">
			<div class="intro-left__descr">Инжиниринговая компания полного цикла</div>
			<div class="intro-left__title">Адсорбционные Газовые Системы</div>
		</div>
	</div>

	<!--<div class="intro-bottom">
		<span class="intro-bottom__text">Надежный подрядчик EPC контрактов.</span>
		<a href="#s-home-products" class="intro-bottom__scroll scrollto"><i class="i-down"></i></a>
	</div>-->

	<div class="intro-nav">
		<div class="intro-nav__arrow intro-nav__arrow--prev"><i class="i-prev"></i></div>
		<div class="intro-nav__arrow intro-nav__arrow--next"><i class="i-next"></i></div>
		<div class="intro-nav__counter">01.</div>
	</div>

</div>

<script>
	const aboutHeaderCheck = function() {
		const videos = document.querySelectorAll(".head_video");
		for (let i = 0; i < videos.length; i++) {
			const thisVideoSource = videos[i].querySelector(".source_mp4");
			const mp4Src = thisVideoSource.dataset.videosrc;
			if (window.matchMedia("(max-width: 1025px)").matches) {
				if (document.body.contains(videos[i])) {
					videos[i].parentNode.removeChild(videos[i]);
				}
			} else {
				if (document.body.contains(videos[i]) && thisVideoSource.getAttribute('src') === ""){
					thisVideoSource.setAttribute('src',mp4Src);
					videos[i].load();
					videos[i].play();
				}
			}
		}
	};
	aboutHeaderCheck();
	window.addEventListener('resize',aboutHeaderCheck);
</script>


<section class="s-home-products" id="s-home-products">
	<div class="container">
		<div class="section-title">
			<h2 class="h2">Оборудование, которое мы производим</h2>
		</div>


		<div class="product-grid">
			<a href="/products/azot-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-1.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные азотные станции</div>
			</a>
			<a href="/products/kislorod-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-2.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные кислородные станции</div>
			</a>
			<a href="/products/azot-membrana/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-33.jpg?v=1" alt="1">
				<div class="h4">Мембранные установки</div>
			</a>
			<a href="/products/osushiteli/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-4.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные осушители сжатого воздуха</div>
			</a>
			<a href="/products/azot-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-5.jpg?v=1" alt="1">
				<div class="h4">Блочно-модульные азотные станции</div>
			</a>
			<a href="/products/kislorod-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-6.jpg?v=1" alt="1">
				<div class="h4">Блочно-модульные кислородные станции</div>
			</a>
			<a href="/products/cryogen/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-7.jpg?v=2" alt="1">
				<div class="h4">Криогенные воздухоразделительные установки</div>
			</a>
			<a href="/products/vodorod/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-8.jpg?v=1" alt="1">
				<div class="h4">Электролизные генераторы водорода</div>
			</a>
			<a href="/news/sistemy-regazifikatsii-spg-spkhr/" class="product-grid__item product-grid__item--hidden">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-9.jpg?v=1" alt="1">
				<div class="h4">Системы регазификации СПГ&nbsp;(СПХР)</div>
			</a>
			<a href="/products/blocks/" class="product-grid__item product-grid__item--hidden">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-10.jpg?v=2" alt="1">
				<div class="h4">Блочно-модульные конструкции</div>
			</a>
		</div>

		<div class="product-grid__more">
			<div class="product-grid__more-link action-link"><span>Показать все</span> <i class="i-down-arr-bold"></i></div>
		</div>

	</div>

</section>


<section class="s-home-about">
	<div class="container">
		<div class="about-main">
			<div class="h2">О компании</div>
			<p>Компания «АГС Инжиниринг» является российским производителем надежных газоразделительных систем. Основное направление деятельности нашей компании — это полный цикл проектирования и&nbsp;производства:</p>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Адсорбционных генераторов азота</div>
				<div class="about-list__item"><span>02.</span>Мембранных генераторов азота</div>
				<div class="about-list__item"><span>03.</span>Адсорбционных генераторов кислорода</div>
				<div class="about-list__item"><span>04.</span>Блочно-модульных станций</div>
				<div class="about-list__item"><span>05.</span>Адсорбционных осушителей</div>
				<div class="about-list__item"><span>06.</span>Электролизных генераторов водорода</div>
				<div class="about-list__item"><span>07.</span>Систем подготовки и поддержания модифицированной атмосферы</div>
				<div class="about-list__item"><span>08.</span>Систем фильтрации и осушения сжатого воздуха</div>
				<div class="about-list__hidden">
					<p>Производимое нами оборудование разработано инженерами нашей компании с учетом специфики российских и европейских стандартов, а также последних технологических инноваций, и может быть выполнено в различном исполнении в зависимости от требований заказчика.</p>
					<p>На данный момент оборудование компании «АГС Инжиниринг» эксплуатируется на многих предприятиях нефтегазового и оборонного сектора России.</p>
				</div>
				<div class="about-list__more action-link"><span>Развернуть</span> <i class="i-down-arr-bold"></i></div>
			</div>
		</div>
	</div>

	<aside class="about-aside">
		<div class="about-aside__stage aside-anim">
			<div class="about-aside__img" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/about-aside.jpg?v=2"></div>
		</div>
		<div class="about-aside__header">
			<span class="video-link">
				<i class="i-play"></i>
				<span>Видео о<br>компании</span>
			</span>
			<span class="youtube-link">
				<i class="i-youtube"></i>
				<span>Наш канал</span>
			</span>
		</div>
		<div class="about-aside__links">
			<a href="/presentation.pdf" target="_blank" download="Презентация о компании AGS" class="about-aside__doc">
				<i class="i-pdf"></i>
				<span>Презентация о&nbsp;компании</span>
			</a>
			<!--<span class="about-aside__doc">
				<i class="i-pdf"></i>
				<span>Референс - лист</span>
			</span>-->
			<a href="/AGS_requisites.pdf" class="about-aside__doc" target="_blank" download>
				<i class="i-pdf"></i>
				<span>Реквизиты компании</span>
			</a>
		</div>
	</aside>

</section>


<section class="s-home-services" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/dotted-map.png">
	<div class="container">
		<div class="home-services">
			<div class="h2">Мы реализуем EPC контракты в&nbsp;области воздухоразделения, включая следующие услуги:</div>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Разработку технико-экономического обоснования</div>
				<div class="about-list__item"><span>02.</span>Подбор оптимального технического решения</div>
				<div class="about-list__item"><span>03.</span>Разработку проектной документации</div>
				<div class="about-list__item"><span>04.</span>Монтажные, шефмонтажные и&nbsp;пусконаладочные работы</div>
				<div class="about-list__item"><span>05.</span>Ввод в&nbsp;эксплуатацию</div>
				<div class="about-list__item"><span>06.</span>Постгарантийное сервисное обслуживание оборудования</div>
			</div>
		</div>
	</div>

	<aside class="services-aside">
		<div class="services-aside__stage aside-anim">
			<div class="services-aside__img" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/services-aside.jpg"></div>
		</div>
	</aside>
</section>


<section class="s-home-triggers">
	<div class="container">
		<div class="row">
			<div class="grid-3 grid-6_l counter-trigger__wrap">
				<div class="counter-trigger">
					<strong>7</strong>
					<span>Патентов на изобретения и&nbsp;доработки</span>
				</div>
			</div>
			<div class="grid-3 grid-6_l counter-trigger__wrap">
				<div class="counter-trigger">
					<strong>2</strong>
					<span>Производственные площадки в&nbsp;Санкт-Петербурге и&nbsp;Новочеркасске</span>
				</div>
			</div>
			<div class="grid-3 grid-6_l counter-trigger__wrap">
				<div class="counter-trigger">
					<strong>160+</strong>
					<span>Реализованных<br>проектов</span>
				</div>
			</div>
			<div class="grid-3 grid-6_l counter-trigger__wrap">
				<div class="counter-trigger">
					<strong>68</strong>
					<span>Высококвалифицированных специалистов и&nbsp;инженеров</span>
				</div>
			</div>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/geo.php", Array(), Array("MODE" => "php"));?>


<?$APPLICATION->IncludeFile("/includes/sections/logo_slider.php", Array(), Array("MODE" => "php"));?>


<section class="s-home-news">
	<div class="container">
		<div class="section-title">
			<h2 class="h2">Новости компании</h2>
		</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"home_news",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("SHOW_COUNTER"),
				"FILTER_NAME" => "arrFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "3",
				"IBLOCK_TYPE" => "site_info",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "6",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("TYPE","VIDEO_LINK"),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N"
			)
		);?>

		<div class="center-btn">
			<a href="/news/" class="action-link">Все новости <i class="i-next"></i></a>
		</div>

	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>