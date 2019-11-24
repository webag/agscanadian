<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<script>
	document.body.classList.add('transparent-header');
	document.querySelector('.s-header').classList.add('s-header--transparent');
</script>

<div class="s-intro s-intro--case">

	<div class="intro-slide">
		<?
		$resize_bg = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 1920, "height" => 895), BX_RESIZE_IMAGE_EXACT, true, array());
		?>
		<div class="intro-slide__bg" style="background-image: url(<?=$resize_bg['src']?>)"></div>
		<div class="intro-slide__content">
			<h1 class="intro-slide__title"><?=$arResult['~NAME']?></h1>
			<div class="intro-slide__subtitle"><?=$arResult['PROPERTIES']['CITY']['VALUE']?></div>
			<div class="intro-slide__text"><?=$arResult['~PREVIEW_TEXT']?></div>
		</div>
	</div>

	<div class="intro-left">
		<div class="intro-left__content">
			<div class="intro-left__title">Выполненные проекты</div>
		</div>
	</div>

	<div class="intro-nav">
		<a href="/cases/" class="intro-back-link"><i class="i-prev"></i>все проекты</a>
	</div>

</div>


<section class="s-case-details">
	<div class="container">
		<div class="case-details">

			<div class="case-details__left">
				<div class="h1 section-title-left">Поставленная задача</div>
				<div class="case-problem">
					<div class="user-content">
						<?=$arResult['PROPERTIES']['PROBLEM']['VALUE']['TEXT']?>
					</div>
				</div>
				<div class="case-answer">
					<div class="h1">Решение</div>
					<div class="user-content">
						<?=$arResult['PROPERTIES']['SOLUTION']['VALUE']['TEXT']?>
					</div>
				</div>
			</div>

			<div class="case-details__right">
				<div class="case-what">
					<div class="h3 case-what__title"><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></div>
					<div class="case-what__variant">Вариант исполнения:<br><strong><?=$arResult['PROPERTIES']['VARIANT']['VALUE']?></strong></div>
					<div class="case-params">
						<div class="case-param">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/cases/param-icon-1.svg" alt="1" class="case-param__icon">
							<div class="case-param__content">
								<div>Концентрация газа</div>
								<strong><?=$arResult['PROPERTIES']['CONCENTRATION']['VALUE']?>%</strong>
							</div>
						</div>
						<div class="case-param">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/cases/param-icon-2.svg" alt="1" class="case-param__icon">
							<div class="case-param__content">
								<div>Производительность</div>
								<strong><?=$arResult['PROPERTIES']['PERFORMANCE']['VALUE']?> м<sup>3</sup>/ч</strong>
							</div>
						</div>
						<div class="case-param">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/cases/param-icon-3.svg" alt="1" class="case-param__icon">
							<div class="case-param__content">
								<div>Давление</div>
								<strong><?=$arResult['PROPERTIES']['PRESSURE']['VALUE']?> бар</strong>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<? if ($arResult['PROPERTIES']['PHOTOS']['VALUE']) : ?>
	<section class="s-case-photos">
		<div class="container">
			<div class="h1 section-title-left">Фотоотчет проекта</div>

			<div class="case-slider">
				<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo) : ?>
					<?
					$resize_img = CFile::ResizeImageGet($photo, array("width" => 1236, "height" => 695), BX_RESIZE_IMAGE_EXACT, true, array());
					?>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/cases/slider-thumb-big.png" data-flickity-lazyload="<?=$resize_img['src']?>" alt="">
				<? endforeach; ?>
			</div>

			<div class="case-slider-thumbs">
				<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo) : ?>
					<?
					$resize_img = CFile::ResizeImageGet($photo, array("width" => 195, "height" => 130), BX_RESIZE_IMAGE_EXACT, true, array());
					?>
					<div class="case-slider-thumbs__item">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/cases/slider-thumb-s.png" data-flickity-lazyload="<?=$resize_img['src']?>" alt="">
					</div>
				<? endforeach; ?>
			</div>
		</div>
	</section>
<? endif; ?>


<?
if (
	$arResult['PROPERTIES']['VIDEO_LINK']['VALUE']  ||
	$arResult['PROPERTIES']['OBORUD_DESCR']['~VALUE'] ||
	$arResult['PROPERTIES']['OBORUD_LINK']['VALUE'] ||
	$arResult['PROPERTIES']['OBORUD_IMG']['VALUE']
):
?>
	<section class="s-case-dop">
		<div class="container">
			<div class="row">
				<? if ($arResult['PROPERTIES']['VIDEO_LINK']['VALUE']) : ?>
					<div class="grid-6 grid-12_m">
						<div class="case-video">
							<div class="h1 section-title-left">Видео</div>
							<a href="<?=$arResult['PROPERTIES']['VIDEO_LINK']['VALUE']?>" class="case-video__frame fancy-video">
								<?
								$resize_img = CFile::ResizeImageGet($arResult['PROPERTIES']['VIDEO_COVER']['VALUE'], array("width" => 592, "height" => 332), BX_RESIZE_IMAGE_EXACT, true, array());
								?>
								<img data-lazy="<?=$resize_img['src']?>" alt="1">
								<div class="video-link">
									<i class="i-play"></i>
								</div>
							</a>
							<div class="case-video__descr"><?=$arResult['PROPERTIES']['VIDEO_DESCR']['~VALUE']?></div>
						</div>
					</div>
				<? endif; ?>
				<div class="grid-6 grid-12_m">
					<div class="case-product">
						<div class="h1 section-title-left"><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></div>
						<div class="user-content case-product__text">
							<?=$arResult['PROPERTIES']['OBORUD_DESCR']['~VALUE']?>
						</div>
						<? if ($arResult['PROPERTIES']['OBORUD_IMG']['VALUE']) : ?>
							<?
							$resize_img = CFile::ResizeImageGet($arResult['PROPERTIES']['OBORUD_IMG']['VALUE'], array("width" => 335, "height" => 900), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());
							?>
							<img data-lazy="<?=$resize_img['src']?>" alt="1" class="case-product__img">
						<? endif; ?>
						<? if ($arResult['PROPERTIES']['OBORUD_LINK']['VALUE']) : ?>
							<a href="<?=$arResult['PROPERTIES']['OBORUD_LINK']['VALUE']?>" class="btn case-product__btn">Подробнее</a>
						<? endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>


<?
global $arrFilter;
$arrFilter = Array(
	"!ID" => $arResult["ID"],
	"PROPERTY_GENERATOR_TYPE_VALUE" => $arResult["PROPERTIES"]["GENERATOR_TYPE"]["VALUE"]
);
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"related_cases",
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



<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>