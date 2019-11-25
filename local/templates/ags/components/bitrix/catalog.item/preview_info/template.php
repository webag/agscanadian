<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
if ($arResult['PREVIEW_PICTURE']['ID']) :
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 391, "height" => 230), BX_RESIZE_IMAGE_EXACT, true, array());
endif;
?>

<a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="info-preview js-item">
	<div class="info-preview__header" style="background-image: url(<?=$resize_img['src']?>)">
		<div class="info-preview__header-top">
			<time datetime="<?=FormatDate("d-m-Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?>" class="datetime">
				<strong><?=FormatDate("d", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></strong>
				<span><span><?=FormatDate("F", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span><span><?=FormatDate("Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span></span>
			</time>
			<? if ($arResult['PROPERTIES']['LABLE']['VALUE']) : ?>
				<div class="news-preview__label"><?=$arResult['PROPERTIES']['LABLE']['VALUE']?></div>
			<? endif; ?>
		</div>
		<div class="views-counter"><i class="i-eye"></i><?=$arResult["SHOW_COUNTER"]?></div>
	</div>
	<div class="info-preview__bottom">
		<div class="h3 info-preview__title"><?=$arResult['NAME']?></div>
		<div class="info-preview__descr"><?=$arResult['~PREVIEW_TEXT']?></div>
		<span class="action-link">Details <i class="i-next"></i></span>
	</div>
</a>


