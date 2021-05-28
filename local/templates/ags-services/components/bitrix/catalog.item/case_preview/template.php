<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
if ($arResult['PREVIEW_PICTURE']['ID']) :
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 384, "height" => 500), BX_RESIZE_IMAGE_EXACT, true, array());
	$case_img_src = $resize_img['src'];
else:
	$case_img_src = SITE_TEMPLATE_PATH.'/img/temp/case-intro-thumb.png';
endif;
?>


<a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="case-intro">
	<? if ($arParams['SLIDER'] === 'YES') : ?>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/temp/case-intro-thumb.png" data-flickity-lazyload="<?=$case_img_src?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']?>" class="case-intro__img">
	<? else: ?>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/temp/case-intro-thumb.png" data-lazy="<?=$case_img_src?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']?>" class="case-intro__img">
	<? endif; ?>

	<div class="case-intro__content">
		<div class="case-intro__company"><?=$arResult['NAME']?></div>
		<div class="h2 case-intro__title"><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></div>
		<span class="case-intro__link link-white">More</span>
	</div>
</a>