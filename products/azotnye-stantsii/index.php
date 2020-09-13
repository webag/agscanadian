<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Азотные станции");
?>


<section class="s-lp-header anim" >
	<div class="container lp-header">
		<div class="lp-header__content">
			<div class="lp-header__label anim anim--bottom">Адсорбционные</div>
			<h1 class="h1-promo anim anim--bottom">Азотные станции</h1>
			<div class="lead anim anim--bottom">Спроектируем и&nbsp;произведем станцию по&nbsp;индивидуальному техническому заданию заказчика от&nbsp;3-х недель “под&nbsp;ключ”</div>
			<div class="lp-header__triggers">
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-1.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Производительность:</p>
						<div class="lead">до 15 000 м<sup>3</sup></div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-2.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Гарантия:</p>
						<div class="lead">24 месяца</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-3.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Концентрация газа:</p>
						<div class="lead">до 99.9999%</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-4.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Срок службы:</p>
						<div class="lead">20 лет</div>
					</div>
				</div>
			</div>
			<div class="anim anim--bottom">
				<a href="https://youtu.be/ccKE1Ti8PS8" class="media-block fancy-video ">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp/header-video-azot.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">Обзор азотной станции АГС</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">Смотреть</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/head-img-station-azot.png" alt="1" class="lp-header__img lp-header__img--azotstation anim anim--bottom">
</section>


<section class="s-order s-order--generatorkp">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Оставьте заявку на коммерческое предложение</div>
			<div class="h1">Получите схему размещения станции на&nbsp;вашем предприятии бесплатно</div>
			<a href="/products/azotnye-stantsii/briefing.docx" class="doc-block" target="_blank" download="Опросный лист (азотная станция)">
				<div class="doc-block__content">
					<div class="text-small">Опросный лист</div>
					<div class="text-micro">(74 КБ, docx)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос КП (азотная станция)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Ваше имя</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Телефон*</span>
				</label>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
					<i></i>
					<span class="style-file__text">Прикрепить файл</span>
					<span class="style-file__delete" title="Очистить">&#10006;</span>
				</label>
				<button type="submit" class="btn">Запросить КП</button>
				<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/kp-station-azot.jpg" alt="1" class="s-order__img">
</section>


<section class="s-def-top">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Технологии получения азота </div>
		<div class="sec-descr lead anim anim--bottom">Для получения газообразного и жидкого азота мы производим следующее оборудование.</div>

		<div class="products-grid">
			<div class="anim anim--bottom">
				<a href="/products/generatory-azota/" class="product">
					<div class="lead product__num">01</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/generator-azot.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Адсорбционные генераторы азота</div>
						<ul class="product__params">
							<li>Производительность до 5 000 м<sup>3</sup>/ч</li>
							<li>Концентрация до 99,9999%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
			</div>
			<div class="anim anim--bottom">
				<a href="/products/azot-membrana/" class="product">
					<div class="lead product__num">02</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/generator-azot-membrana.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Мембранные генераторы азота</div>
						<ul class="product__params">
							<li>Производительность до 5 000 м<sup>3</sup>/ч</li>
							<li>Концентрация до 99,9%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
			</div>
			<div class="anim anim--bottom">
				<a href="/products/cryogen/" class="product">
					<div class="lead product__num">03</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/cryo.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Криогенные ВРУ</div>
						<ul class="product__params">
							<li>Производительность до 200 000 м<sup>3</sup>/ч</li>
							<li>Концентрация до 99,99995%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
			</div>
		</div>

	</div>
</section>


<section class="s-def-top">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Наши клиенты</div>
		<div class="sec-descr lead anim anim--bottom">Работаем с&nbsp;крупнейшими компаниями промышленной отрасли России</div>
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
		<div class="h2-promo sec-title">Реализованные проекты</div>
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
			<div class="h2-promo">Технические характеристики азотной станции АГС</div>

			<div class="gen-params__list text-long">
				<div class="gen-params__item">
					<strong>Производительность:</strong>
					<span>до 15 000 м<sup>3</sup>/час</span>
				</div>
				<div class="gen-params__item">
					<strong>Концентрация:</strong>
					<span>до 99.9999%</span>
				</div>
				<div class="gen-params__item">
					<strong>Энергоэффективность:</strong>
					<span>0,25 — 0,4 кВт/м<sup>3</sup></span>
				</div>
				<div class="gen-params__item">
					<strong>Давление:</strong>
					<span>до 450 бар</span>
				</div>
				<div class="gen-params__item">
					<strong>Точка россы:</strong>
					<span>от +3 &deg;C до –70 &deg;C</span>
				</div>
				<div class="gen-params__item">
					<strong>Система осушения сжатого воздуха:</strong>
					<span>рефрежираторная,<br>адсорбционная</span>
				</div>
				<div class="gen-params__item">
					<strong>Гарантия:</strong>
					<span>24 месяца</span>
				</div>
				<div class="gen-params__item">
					<strong>Срок службы станции:</strong>
					<span>20 лет</span>
				</div>
				<div class="gen-params__item">
					<strong>Производство:</strong>
					<span>от 3 недель</span>
				</div>
			</div>

			<a class="doc-block">
				<div class="doc-block__content">
					<div class="text-small">Буклет серийных генераторов азота</div>
					<div class="text-micro">(9.1 МБ, pdf)</div>
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
		<div class="h2-promo sec-title anim anim--bottom">Преимущества генератора АГС</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Полная автоматизация генератора и&nbsp;всей станции</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-2-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Быстрое введение в&nbsp;эксплуатацию</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-3-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Полная заводская готовность</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-4-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Высокая степень надежности и&nbsp;качество сборки</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Низкое энергопотребление при&nbsp;большой производительности</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-6-s.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Качественные компоненты от&nbsp;мировых лидеров</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-station-komplect">
	<div class="container">
		<div class="h2-promo sec-title">Комплектация азотной станции</div>
		<div class="sec-descr lead">Поставляем генератор со&nbsp;всем необходимым сопутствующим оборудованием “под&nbsp;ключ”</div>

		<div class="tabs tabs--station">
			<div class="tabs__nav__wrapper">
				<div class="tabs__nav">
					<a href="#" class="tabs__link text-small active">Винтовой<br>компрессор</a>
					<a href="#" class="tabs__link text-small">Осушитель<br>сжатого воздуха</a>
					<a href="#" class="tabs__link text-small">Буферный<br>воздушный ресивер</a>
					<a href="#" class="tabs__link text-small">Система<br>фильтрации</a>
					<a href="#" class="tabs__link text-small">Адсорбционный<br>генератор азота</a>
					<a href="#" class="tabs__link text-small">Накопительный<br>ресивер для&nbsp;азота</a>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__item active">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-1.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Винтовой компрессор</div>
								<p class="text-long">Cжимает атмосферный воздух и&nbsp;подает в&nbsp;генератор азота. Чаще всего для&nbsp;азотных станций используют компрессор с&nbsp;максимальным давлением 10&nbsp;бар.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-2.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Осушитель сжатого воздуха</div>
								<p class="text-long">Необходим для&nbsp;удаления влаги из&nbsp;сжатого воздуха. В&nbsp;азотной станции в&nbsp;зависимости от&nbsp;требований к&nbsp;качеству продукционного азота может применяться либо рефрижераторный осушитель с&nbsp;точкой росы до +3 &deg;С, либо адсорбционный с&nbsp;точкой росы до -70 &deg;С.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-3.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Буферный воздушный ресивер</div>
								<p class="text-long">Необходим для&nbsp;выравнивания колебаний давления перед подачей воздуха в&nbsp;генератор азота.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-4.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info">
							<div class="station-komplect__content">
								<div class="h2">Система фильтрации</div>
								<p class="text-long">Необходима для&nbsp;удаления остатков влаги, масла и&nbsp;твердых частиц после компрессора.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-5.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info station-komplect__info--left">
							<div class="station-komplect__content">
								<div class="h2">Адсорбционный генератор азота</div>
								<p class="text-long">Воздухоразделительная установка, работающая по&nbsp;технологии короткоцикловой адсорбции. Генератор может производить азот с&nbsp;концентрацие от&nbsp;95% до&nbsp;99.9999%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__item">
					<div class="station-komplect">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp-station/azot-komp-6.jpg" alt="" class="station-komplect__img">
						<div class="station-komplect__info station-komplect__info--left">
							<div class="station-komplect__content">
								<div class="h2">Накопительный ресивер для&nbsp;азота</div>
								<p class="text-long">Необходим для выравнивания скачков давления после генератора, а&nbsp;также для&nbsp;создания запаса азота перед подачей газа потребителю.</p>
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
		<div class="h1 sec-title">Дополнительные опции</div>

		<div class="row station-dop-grid">
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-1.svg" alt="1">
					<div class="h3">Взрывозащищенное исполнение</div>
					<div class="text-long gray">Вариант исполнения, который позволяет использовать оборудование во взрывоопасных зонах</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-2.svg" alt="1">
					<div class="h3">Заправочная станция</div>
					<div class="text-long gray">Комплекс оборудования, позволяющий заполнять стандартные баллоны сжатым газом под давлением до 200 Бар</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-3.svg" alt="1">
					<div class="h3">Дожимной компрессор</div>
					<div class="text-long gray">Служит для поднятия давления продукционного газа до 450 Бар</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<div class="station-dop">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-station/dop-4.svg" alt="1">
					<div class="h3">Система доочистки</div>
					<div class="text-long gray">Позволяет получить продукционный азот более высокой концентрации</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section>
	<div class="container">
		<div class="h2-promo sec-title">Блочно-модульное исполнение</div>
	</div>

	<div class="side-slider side-slider--photos">
		<div class="side-slider__wrapper container">
			<div class="side-slider__info">
				<div class="side-slider__info__text">Станции АГС производятся в&nbsp;блочно-модульном исполнении под&nbsp;индивидуальные требования заказчика, а&nbsp;также на&nbsp;базе 20-и или 40-а футовых морских контейнеров.</div>
				<a href="/products/azot-module/" class="link">Подробнее</a>
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
		<div class="lead sec-title">Дополнительные материалы:</div>
		<div class="row media-blocks-grid">
			<div class="grid-4 grid-6_l grid-12_s">
				<a href="/info/razmeshchenie-oborudovaniya-v-blok-module-ili-pomeshchenii/" class="media-block">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp-station/article-block-link.jpg)">
					</div>
					<div class="media-block__content">
						<div class="text-small">О блочно-модульном размещении</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">Читать</div>
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
						<div class="text-small">Обзор модульной станции АГС</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">Смотреть</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Сервис</div>
		<div class="sec-descr lead anim anim--bottom">Осуществляем полный комплекс сервисного обслуживания для всего производимого оборудования</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Гарантия на&nbsp;генераторы азота 2&nbsp;года</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-2.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Сервисная поддержка в&nbsp;течении 24&nbsp;часов</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-3.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Обучение и&nbsp;консультация персонала заказчика</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Круглосуточная техническая поддержка</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Сервисная поддержка в&nbsp;любой точке мира</span>
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