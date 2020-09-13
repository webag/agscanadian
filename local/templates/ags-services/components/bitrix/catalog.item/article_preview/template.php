<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
if ($arResult['PREVIEW_PICTURE']['ID']) :
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 384, "height" => 290), BX_RESIZE_IMAGE_EXACT, true, array());
endif;
?>

<a href="<?=$arResult['DETAIL_PAGE_URL']?>" class="article-intro">
	<div class="article-intro__header">
		<img data-lazy="<?=$resize_img['src']?>" alt="<?=$arResult['PREVIEW_PICTURE']['ALT']?>">
	</div>
	<div class="article-intro__meta">
		<time datetime="<?=FormatDate("d-m-Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?>" class="text-small gray"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
		<div class="views text-small gray"><i class="i-eye"></i><?=$arResult["SHOW_COUNTER"]?></div>
	</div>
	<div class="h3 article-intro__title"><?=$arResult['NAME']?></div>
	<div class="article-intro__link">Подробнее</div>
</a>