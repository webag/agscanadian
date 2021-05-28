<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Oxygen Adsorption Plants");
?>


<section class="s-lp-header anim" >
	<div class="container lp-header">
		<div class="lp-header__content">
			<div class="lp-header__label anim anim--bottom">Adsorption</div>
			<h1 class="h1-promo anim anim--bottom">Oxygen Adsorption Plants</h1>
			<div class="lead anim anim--bottom">We will design and produce the plant on a turnkey basis, according to the individual customer’s technical assignment, the terms starting from 3 weeks</div>
			<div class="lp-header__triggers">
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-1.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Capacity:</p>
						<div class="lead">up to 5 000 m<sup>3</sup></div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-2.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Warranty:</p>
						<div class="lead">24 months</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-o.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Gas concentration:</p>
						<div class="lead">up to 95.5%</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-4.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Service life:</p>
						<div class="lead">20 years old</div>
					</div>
				</div>
			</div>
			<div class="anim anim--bottom">
				<a href="https://youtu.be/Ap1B0wGoDL0" class="media-block fancy-video">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp/header-video-kislorod.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">AGS oxygen plant oveview</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">View</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/head-img-station-kislorod.png" alt="1" class="lp-header__img lp-header__img--azotstation anim anim--bottom">
</section>


<section class="s-order s-order--generatorkp">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Submit a request for a commercial offer</div>
			<div class="h1">Get the plant layout for your company for free</div>
			<a href="/products/kislorodnye-stantsii/briefing.docx" class="doc-block" target="_blank" download="Опросный лист (кислородная станция)">
				<div class="doc-block__content">
					<div class="text-small">Questionnaire</div>
					<div class="text-micro">(74 КB, docx)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос КП (кислородная станция)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Name</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Telephone*</span>
				</label>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} file(s)" multiple>
					<i></i>
					<span class="style-file__text">Attach a file</span>
					<span class="style-file__delete" title="Clear">&#10006;</span>
				</label>
				<button type="submit" class="btn">Request a quotation</button>
				<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/kp-station-azot.jpg" alt="1" class="s-order__img">
</section>


<section class="s-def-top">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Our customers</div>
		<div class="sec-descr lead anim anim--bottom">We work with the largest Russian industrial companies</div>
		<div class="logos-grid">
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/1.svg" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/2.svg" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/3.svg" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/4.svg" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/5.png" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/6.png" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/7.png" alt="1"></div>
			<div class="logo anim anim--bottom"><img src="<?=SITE_TEMPLATE_PATH?>/img/logos/8.png" alt="1"></div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title">Latest completed projects</div>
	</div>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"cases_slider",
		array(
			"ACTIVE_DATE_FORMAT" => "j F Y",
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
			"FIELD_CODE" => array(
				0 => "SHOW_COUNTER",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "site_info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "9",
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
			"PROPERTY_CODE" => array(
				0 => "MODEL",
				1 => "",
			),
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
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "cases_slider"
		),
		false
	);?>

</section>


<section class="s-station-params s-def--small">
	<div class="container">

		<div class="station-params">
			<div class="h2-promo">Technical characteristics of the AGS oxygen plant</div>

			<div class="gen-params__list text-long">
				<div class="gen-params__item">
					<strong>Capacity:</strong>
					<span>up to 5 000 m<sup>3</sup>/h</span>
				</div>
				<div class="gen-params__item">
					<strong>Concentration:</strong>
					<span>up to 95.5%</span>
				</div>
				<div class="gen-params__item">
					<strong>Energy efficiency:</strong>
					<span>0,25 — 0,4 kW/m<sup>3</sup></span>
				</div>
				<div class="gen-params__item">
					<strong>Pressure:</strong>
					<span>up to 450 bar</span>
				</div>
				<div class="gen-params__item">
					<strong>Dew Point:</strong>
					<span>from +3 &deg;C to –70 &deg;C</span>
				</div>
				<div class="gen-params__item">
					<strong>Compressed air dehumidification system:</strong>
					<span>refrigeration, adsorption</span>
				</div>
				<div class="gen-params__item">
					<strong>Warranty:</strong>
					<span>24 months</span>
				</div>
				<div class="gen-params__item">
					<strong>Plant Service life:</strong>
					<span>20 years</span>
				</div>
				<div class="gen-params__item">
					<strong>Production:</strong>
					<span>from 3 weeks</span>
				</div>
			</div>

			<a class="doc-block">
				<div class="doc-block__content">
					<div class="text-small">Serial oxygen generators booklet</div>
					<div class="text-micro">(9.1 МB, pdf)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>

	</div>

	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/params-azot.png" alt="1" class="station-params__img">
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">AGS generator benefits</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>The generator and the entire plant are fully automated</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-2-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Quick commissioning</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-3-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Full operational compatibility</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-4-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>High degree of reliability and build quality</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Low power consumption with high performance</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-6-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>High-quality components from world industry leaders</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-station-komplect">
	<div class="container">
		<div class="h2-promo sec-title">Complete oxygen plant set</div>
		<div class="sec-descr lead">We supply the generator with all the necessary related equipment on a turnkey basis</div>

		<div class="tabs tabs--station">
			<div class="tabs__nav__wrapper">
				<div class="tabs__nav">
					<a href="#" class="tabs__link text-small active">Screw Compressor</a>
					<a href="#" class="tabs__link text-small">Compressed Air dehumidifier</a>
					<a href="#" class="tabs__link text-small">Buffer air receiver</a>
					<a href="#" class="tabs__link text-small">Filtration system</a>
					<a href="#" class="tabs__link text-small">Oxygen Adsorption Generator</a>
					<a href="#" class="tabs__link text-small">Storing receiver for oxygen</a>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__item active">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-1.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Screw Compressor</div>
								<p class="text-long">Compresses atmospheric air and supplies oxygen to the generator. A compressor with a maximum pressure of 10 bar is mostly used for oxygen stations.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-2.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Compressed Air Dehumidifier</div>
								<p class="text-long">It is necessary to remove moisture from the compressed air. Depending on the production oxygen quality requirements, either a refrigerated dehumidifier with a dew point of up to 3 °C or an adsorption dehumidifier with a dew point of up to -70 °C can be used in a sour-water station.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-3.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Buffer air receiver</div>
								<p class="text-long">Necessary for equalizing pressure fluctuations before supplying air to the oxygen generator.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-4.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Filtration system</div>
								<p class="text-long">Necessary for removing the remaining moisture, oil and solid particles after the compressor.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-5.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info station-komplect__info--left">
							<div class="station-komplect__content">
								<div class="h2">Oxygen adsorption generator</div>
								<p class="text-long">Air separation plant, operating in accordance with the short-cycle adsorption technology. The generator can produce oxygen with a concentration of up to 95.5%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/kislorod-komp-6.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info station-komplect__info--left">
							<div class="station-komplect__content">
								<div class="h2">Storing receiver for oxygen</div>
								<p class="text-long">Necessary for equalizing pressure fluctuations after the generator, as well as creating a reserve of oxygen before supplying gas to the consumer.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h1 sec-title">Additional options</div>

		<div class="row station-dop-grid">
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-1.svg" alt="1">
					<div class="h3">Explosion-proof design</div>
					<div class="text-long gray">Version that allows the equipment to be used in hazardous areas</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-2.svg" alt="1">
					<div class="h3">Filling station</div>
					<div class="text-long gray">A set of equipment that allows to fill standard cylinders with compressed gas at a pressure of up to 200 Bar</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-3.svg" alt="1">
					<div class="h3">Booster compressor</div>
					<div class="text-long gray">It is used to boost the pressure of the production gas to 450 Bar</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-4.svg" alt="1">
					<div class="h3">Advanced treatment system</div>
					<div class="text-long gray">Allows you to get production oxygen of a higher concentration</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section>
	<div class="container">
		<div class="h2-promo sec-title">Block modular design</div>
	</div>

	<div class="side-slider side-slider--photos">
		<div class="side-slider__wrapper container">
			<div class="side-slider__info">
				<div class="side-slider__info__text">AGS plants are produced in a block modular design in accordance with the individual customer requirements, as well as on the basis of 20-or 40-foot sea containers.</div>
				<a href="/products/kislorod-module/" class="link">More details</a>
			</div>
			<div class="side-slider__slides">
				<div class="side-slider__slide">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-thumb.png" data-flickity-lazyload="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-img-1.jpg?v=2" alt="1">
				</div>
				<div class="side-slider__slide">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-thumb.png" data-flickity-lazyload="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-img-2.jpg" alt="1">
				</div>
				<div class="side-slider__slide">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-thumb.png" data-flickity-lazyload="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-img-3.jpg" alt="1">
				</div>
				<div class="side-slider__slide">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-thumb.png" data-flickity-lazyload="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-img-4.jpg" alt="1">
				</div>
				<div class="side-slider__slide">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-thumb.png" data-flickity-lazyload="<?=SITE_TEMPLATE_PATH?>/img/lp-station/slider-img-5.jpg" alt="1">
				</div>
			</div>
		</div>
	</div>

</section>


<section class="s-def-top">
	<div class="container">
		<div class="lead sec-title">Additional materials:</div>
		<div class="row media-blocks-grid">
			<div class="grid-4 grid-6_l grid-12_s">
				<a href="/info/razmeshchenie-oborudovaniya-v-blok-module-ili-pomeshchenii/" class="media-block">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp-station/article-block-link.jpg)">
					</div>
					<div class="media-block__content">
						<div class="text-small">About block modular placement</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">Read</div>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-4 grid-6_l grid-12_s">
				<a href="https://www.youtube.com/watch?v=hJD6HoB5P4I" class="media-block fancy-video ">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp-station/obzor-station.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">Modular AGS station overview</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">View</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Service</div>
		<div class="sec-descr lead anim anim--bottom">We provide a full range of services for all produced equipment</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Nitrogen generators have a warranty for 2 years</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-2.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Service support within 24 hours</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-3.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Training and consultation of the customer's personnel</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>24/7 technical support</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Worldwide service support</span>
				</div>
			</div>
		</div>
	</div>
</section>


<!--
<section class="s-def-bottom">
	<div class="container">
		<div class="h2-promo sec-title">Полезные статьи</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"articles_list",
			array(
				"ACTIVE_DATE_FORMAT" => "j F Y",
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
				"FIELD_CODE" => array(
					0 => "SHOW_COUNTER",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "2",
				"IBLOCK_TYPE" => "site_info",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "3",
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
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
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
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "articles_list"
			),
			false
		);?>

	</div>
</section>
-->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>