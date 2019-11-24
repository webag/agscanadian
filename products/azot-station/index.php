<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Азотные станции");
?>


<section class="s-lp-header">
	<div class="lp-header">
		<div class="lp-header__left">
			<div class="lp-header__content">
				<h1 class="lp-header__title">Азотные станции</h1>
				<div class="lp-header__descr">«АГС Инжиниринг» проектирует и производит адсорбционные азотные станции, работающие по технологии короткоцикловой адсорбции.</div>
				<div class="lp-header__params">
					<div class="lp-header__param">
						<span>Производительность до</span>
						<strong>15000 <small>нм<sup>3</sup>/час</small></strong>
					</div>
					<div class="lp-header__param">
						<span>Чистота до</span>
						<strong>99,9999 <small>%</small></strong>
					</div>
				</div>
				<div class="lp-header__actions">
					<a href="#" class="btn fancy-modal" data-src="#modal-order">Заказать проект</a>
					<!--<a href="#" class="lp-header__video fancy-video">
						<i class="i-play round-icon"></i>
						<span>Видео о продукте</span>
					</a>-->
				</div>
			</div>
		</div>
		<div class="lp-header__right">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/header-item.png" alt="1" class="lp-header__img">
		</div>
	</div>
</section>


<section class="s-lp-princip s-def">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/princip.png" alt="1" class="img-responsive">
			</div>
			<div class="grid-6 grid-12_m">
				<div class="user-content">
					<div class="h1">Принцип работы КЦА</div>
					<p>Короткоцикловая адсорбция — это технология разделения воздуха, основанная на применении углеродного молекулярного сита (УМС) или синтетического цеолита. Для получения азота применяется углеродное молекулярное сито, оно представляет собой гранулы с особой пористой структурой. При прохождении через УМС сжатого воздуха под определенным давлением за счет разницы в размере молекул кислорода и азота адсорбент удерживает на своей поверхности молекулы кислорода и водяного пара, позволяя азоту проходить дальше.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-lp-preims" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preims-bg.jpg?v=1">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m">
				<div class="h1">Преимущества адсорбционных азотных станций AGS</div>
				<div class="icon-left-blocks">
					<div class="icon-left-block">
						<div class="icon-left-block__img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preim-ic-1.svg" alt="1">
						</div>
						<div class="icon-left-block__content">
							Высокая чистота продукционного азота с наименьшими эксплуатационными затратами по сравнению с другими технологиями воздухоразделения.
						</div>
					</div>
					<div class="icon-left-block">
						<div class="icon-left-block__img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preim-ic-2.svg" alt="1">
						</div>
						<div class="icon-left-block__content">
							Надежность и долговечность – в адсорбционных установках АГС применяются комплектующие ведущих мировых производителей.
						</div>
					</div>
					<div class="icon-left-block">
						<div class="icon-left-block__img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preim-ic-3.svg" alt="1">
						</div>
						<div class="icon-left-block__content">
							Работа азотной станции без капитального ремонта более 20 лет.
						</div>
					</div>
					<div class="icon-left-block">
						<div class="icon-left-block__img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preim-ic-4.svg" alt="1">
						</div>
						<div class="icon-left-block__content">
							Полная автоматизация процесса производства азота. Система управления на основе ПЛК автоматически поддерживает все параметры в заданных пределах.
						</div>
					</div>
					<div class="icon-left-block">
						<div class="icon-left-block__img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preim-ic-5.svg" alt="1">
						</div>
						<div class="icon-left-block__content">
							Простота монтажа, малые габаритные размеры.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/preims-img.png" alt="" class="preims-img">
</section>


<section class="s-lp-komplect s-def" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/komplect-bg.jpg">
	<div class="container">
		<div class="section-title">
			<div class="h1">Комплект азотной станции</div>
		</div>

		<div class="komplect anim">
			<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/komplect-img.png" alt="" class="komplect__img komplect__img--as">

			<div class="komplect__item komplect__item--down komplect__item--as-1">
				<strong>Винтовой компрессор</strong>
				<span>сжимает атмосферный воздух и подает в генератор азота. Чаще всего для азотных станций используют компрессор с максимальным давлением 10 бар.</span>
				<figure><div></div></figure>
			</div>

			<div class="komplect__item komplect__item--down komplect__item--as-2">
				<strong>Буферный воздушный ресивер</strong>
				<span>необходим для выравнивания колебаний давления перед подачей воздуха в генератор азота.</span>
				<figure><div></div></figure>
			</div>

			<div class="komplect__item komplect__item--down komplect__item--as-3">
				<strong>Адсорбционный генератор азота </strong>
				<span>воздухоразделительная установка, работающая по технологии короткоцикловой адсорбции.</span>
				<figure><div></div></figure>
			</div>

			<div class="komplect__item komplect__item--up komplect__item--as-4">
				<strong>Осушитель сжатого воздуха</strong>
				<span>необходим для удаления влаги из сжатого воздуха. В азотной станции в зависимости от требований к качеству продукционного азота может применяться либо рефрижераторный осушитель с точкой росы +3 &deg;С, либо адсорбционный с точкой росы до -70 &deg;С.</span>
				<figure><div></div></figure>
			</div>

			<div class="komplect__item komplect__item--up komplect__item--as-5">
				<strong>Система фильтрации</strong>
				<span>необходима для удаления остатков влаги, масла и твердых частиц после компрессора.</span>
				<figure><div></div></figure>
			</div>

			<div class="komplect__item komplect__item--up komplect__item--as-6">
				<strong>Накопительный ресивер для азота</strong>
				<span>необходим для выравнивания скачков давления после генератора, а также для создания запаса азота.</span>
				<figure><div></div></figure>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-dop s-def-big">
	<div class="container">
		<div class="section-title">
			<div class="h1">Дополнительные опции, котрые мы предоставляем</div>
		</div>

		<div class="row">
			<div class="grid-4 grid-12_s">
				<div class="icon-vert-block">
					<div class="icon-vert-block__header">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/dop-ic-1.svg" alt="">
					</div>
					<div class="h4 icon-vert-block__title">Взрывозащищенное исполнение</div>
					<div class="icon-vert-block__descr">Вариант исполнения, который позволяет использовать оборудование во взрывоопасных зонах</div>
				</div>
			</div>
			<div class="grid-4 grid-12_s">
				<div class="icon-vert-block">
					<div class="icon-vert-block__header">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/dop-ic-2.svg" alt="">
					</div>
					<div class="h4 icon-vert-block__title">Заправочная станция</div>
					<div class="icon-vert-block__descr">Комплекс оборудования, позволяющий заполнять стандартные баллоны сжатым газом под давлением до 200 Бар</div>
				</div>
			</div>
			<div class="grid-4 grid-12_s">
				<div class="icon-vert-block">
					<div class="icon-vert-block__header">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/dop-ic-3.svg" alt="">
					</div>
					<div class="h4 icon-vert-block__title">Дожимной компрессор</div>
					<div class="icon-vert-block__descr">Служит для поднятия давления продукционного газа</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-sostav s-def">
	<div class="container">
		<div class="section-title">
			<div class="h1">Состав генератора азота AGS</div>
		</div>

		<div class="sostav">
			<div class="sostav__img sostav__img--as anim">
				<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-img.png" alt="">
				<div class="sostav__dots">
					<figure>1</figure>
					<figure>2</figure>
					<figure>3</figure>
					<figure>4</figure>
					<figure>5</figure>
					<figure>6 </figure>
				</div>
			</div>
			<div class="row">
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-1.png" alt="">
						<strong><mark>1.</mark> Система управления и автоматизации</strong>
						<span>построена на базе контроллеров Siemens с локальной панелью оператора Touch-screen.</span>
					</div>
				</div>
				<div class="grid-4 sostav-middle"></div>
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-3.png" alt="">
						<strong><mark>2.</mark> Клапанный блок с пневмоуправлением</strong>
						<span>с использованием пневмоуправляемых клапанов, рассчитанных на высокую циклическую нагрузку, более 2 млн. циклов срабатывания.</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-2.png" alt="">
						<strong><mark>3.</mark> Модуль набора концентрации</strong>
						<span>для предотвращения попадания некондиционного азота потребителю.</span>
					</div>
				</div>
				<div class="grid-4 sostav-middle"></div>
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-4.png" alt="">
						<strong><mark>4.</mark> Глушитель для сброса адсорбата</strong>
						<span>для снижения уровня шума.</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-5.png" alt="">
						<strong><mark>5.</mark> Адсорберы</strong>
						<span>изготовленные специально для работы под циклическими нагрузками. Внутреннее устройство адсорберов специально разработано для улучшения характеристик станции.</span>
					</div>
				</div>
				<div class="grid-4 sostav-middle"></div>
				<div class="grid-4 grid-6_l grid-12_s">
					<div class="sostav-item">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/sostav-6.png" alt="">
						<strong><mark>6.</mark> Система динамического поджима</strong>
						<span>для предотвращения стирания адсорбента и предотвращения появления адсорбционной пыли.</span>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-variants s-def">
	<div class="container">
		<div class="section-title">
			<div class="h1">Варианты размещения азотной станции</div>
		</div>


		<div class="lp-variant selected">
			<div class="row">
				<div class="grid-6 grid-12_m">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/variant-1.png" alt="" class="img-responsive">
				</div>
				<div class="grid-6 grid-12_m">
					<div class="user-content">
						<div class="h3">Стационарное исполнение</div>
						<p>Все модели генераторов могут быть смонтированы на одной раме для быстрого монтажа в любом отапливаемом помещении. В данном случае оборудование находится в полной технической готовности к запуску.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="lp-variant">
			<div class="row">
				<div class="grid-6 grid-12_m">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/variant-2.png" alt="" class="img-responsive">
				</div>
				<div class="grid-6 grid-12_m">
					<div class="user-content">
						<div class="h3">Блочно-модульное исполнение</div>
						<p>Мы производим генераторы кислорода и чистого азота в контейнерном исполнении на базе 20 или 40-футового морского контейнера, в любом климатическом исполнении: как для тропического климата, так и для крайнего севера.</p>
					</div>
				</div>
			</div>
		</div>


	</div>
</section>


<section class="s-lp-triggers" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/triggers-bg.jpg">
	<div class="container">
		<div class="h1">Мы предоставляем</div>
		<div class="icon-left-blocks">
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/trigger-ic-1.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Гарантию на генераторы азота 2 года
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/trigger-ic-2.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Оперативную сервисную поддержку в течение 24 часов
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/trigger-ic-3.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Круглосуточную техническую поддержку
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/trigger-ic-4.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Обучение и консультацию персонала заказчика
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-lp-steps s-def">
	<div class="container">
		<div class="section-title">
			<div class="h1">Процесс взаимодействия</div>
		</div>

		<div class="lp-steps">
			<div class="lp-step selected">
				<div class="lp-step__title">шаг 1</div>
				<ul class="lp-step__list">
					<li>Запрос заказчика</li>
					<li>Техническое задание на создание пневмосистемы</li>
				</ul>
			</div>
			<div class="lp-step">
				<div class="lp-step__title">шаг 2</div>
				<ul class="lp-step__list">
					<li>Анализ технического задания</li>
					<li>Выезд инженера</li>
					<li>Пневмоаудит</li>
					<li>Инженерно-технический анализ</li>
					<li>Обмен информацией с заказчиком, уточнение информации</li>
				</ul>
			</div>
			<div class="lp-step">
				<div class="lp-step__title">шаг 3</div>
				<ul class="lp-step__list">
					<li>Проектирование</li>
					<li>Подбор оборудования</li>
					<li>Инжиниринг систем</li>
					<li>Модернизация</li>
					<li>Комплект проектно-конструкторской документации</li>
					<li>Прохождение экспертизы</li>
					<li>Инженерно-техническое заключение и обоснование</li>
					<li>Поставка оборудования</li>
					<li>Строительно-монтажные работы</li>
					<li>Пусконаладочные работы</li>
				</ul>
			</div>
			<div class="lp-step">
				<div class="lp-step__title">шаг 4</div>
				<ul class="lp-step__list">
					<li>Сдача-приемка заказчиком</li>
				</ul>
			</div>
			<div class="lp-step">
				<div class="lp-step__title">шаг 5</div>
				<ul class="lp-step__list">
					<li>Удаленный контроль и мониторинг</li>
					<li>Техническое обслуживание</li>
					<li>Инженерная поддержка</li>
					<li>Гарантии</li>
				</ul>
			</div>
		</div>

	</div>
</section>


<?
global $arrFilter;
$arrFilter = Array(
	"PROPERTY_GENERATOR_TYPE_VALUE" => 'Адсорбционные азотные'
);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"lp_cases",
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
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
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
		"PROPERTY_CODE" => array("GENERATOR_TYPE"),
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


<?$APPLICATION->IncludeFile("/includes/sections/geo.php", Array(), Array("MODE" => "php"));?>


<?$APPLICATION->IncludeFile("/includes/sections/logo_slider.php", Array(), Array("MODE" => "php"));?>


<!--
<section class="s-lp-video-reviews s-def">
	<div class="container">
		<div class="section-title">
			<div class="h1">Видеоотзывы</div>
		</div>

		<div class="video-reviews-list">

			<a href="#" class="video-review fancy-video" data-lazybg="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-1-bg.jpg">
				<img data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-1.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв Александры Сергеевной об установке AGS</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-2-bg.jpg">
				<img data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-2.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв Дмитрия Николаевича об установке AGS</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-3-bg.jpg">
				<img data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-3.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв Александры Сергеевной об установке AGS</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

			<a href="#" class="video-review fancy-video" data-lazybg="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-4-bg.jpg">
				<img data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp/azot-station/video-review-4.png" class="video-review__photo">
				<div class="video-review__content">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
					<div class="video-review__title">Отзыв Александры Сергеевной об установке AGS</div>
					<div class="video-review__position">Технический специалист</div>
					<div class="video-review__company">Росатом</div>
				</div>
			</a>

		</div>

	</div>
</section>
-->

<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>



<div class="lp-actions compensate-for-scrollbar">
	<a href="#" class="lp-action fancy-modal" data-src="#modal-call">
		<div class="round-icon">
			<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/call.svg" alt="">
		</div>
		<span>Заказать звонок</span>
	</a>
	<a href="#" class="fancy-modal lp-action" data-src="#modal-order">
		<div class="round-icon">
			<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/azot-station/file.svg" alt="">
		</div>
		<span>Заказать КП</span>
	</a>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>