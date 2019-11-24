<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
if ($arResult['PROPERTIES']['BIG_PREVIEW']['VALUE'] && $arParams['HAS_BIG'] !== 'NO') :
	$big_class = 'case-preview--big';
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 822, "height" => 516), BX_RESIZE_IMAGE_EXACT, true, array());
else:
	$big_class = '';
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 408, "height" => 516), BX_RESIZE_IMAGE_EXACT, true, array());
endif;
?>

<a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="case-preview js-item <?=$big_class?>">
	<div class="case-preview__bg" style="background-image: url(<?=$resize_img['src']?>)"></div>
	<div class="case-preview__content">
		<div class="case-preview__header">
			<time datetime="<?=FormatDate("d-m-Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?>" class="datetime">
				<strong><?=FormatDate("d", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></strong>
				<span><span><?=FormatDate("F", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span><span><?=FormatDate("Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span></span>
			</time>
			<div class="news-preview__label"><?=$arResult['PROPERTIES']['GENERATOR_TYPE']['VALUE']?></div>
		</div>
		<div class="case-preview__main">
			<div class="h2 case-preview__title"><?=$arResult['NAME']?></div>
			<div class="case-preview__city"><?=$arResult['PROPERTIES']['CITY']['VALUE']?></div>
			<div class="case-preview__product"><?=$arResult['PROPERTIES']['MODEL']['VALUE']?></div>
		</div>
	</div>
</a>


