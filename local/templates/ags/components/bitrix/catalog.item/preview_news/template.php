<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?
if ($arResult['PREVIEW_PICTURE']['ID']) :
	$resize_img = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array("width" => 822, "height" => 516), BX_RESIZE_IMAGE_EXACT, true, array());
endif;
?>

<?
if ($arResult['PROPERTIES']['TYPE']['VALUE'] == 'Видео') :
	$link = $arResult['PROPERTIES']['VIDEO_LINK']['VALUE'];
	$link_class = 'fancy-video';
	$play_icon = '<i class="i-play news-preview__play"></i>';
	$label_class = 'news-preview__label--orange';
else:
	$link = $arResult['DETAIL_PAGE_URL'];
	$link_class = '';
	$play_icon = '';
	$label_class = '';
endif;
?>

<article class="news-preview js-item">
	<div class="news-preview__bg" data-lazybg="<?=$resize_img['src']?>"></div>
	<a href="<?=$link?>" class="news-preview__content <?=$link_class?>">
		<?=$play_icon?>
		<header class="news-preview__header">
			<time datetime="<?=FormatDate("d-m-Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?>" class="datetime">
				<strong><?=FormatDate("d", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></strong>
				<span><span><?=FormatDate("F", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span><span><?=FormatDate("Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span></span>
			</time>
			<div class="news-preview__label <?=$label_class?>"><?=$arResult['PROPERTIES']['TYPE']['VALUE']?></div>
		</header>
		<main class="news-preview__main">
			<div class="news-preview__title"><?=$arResult['NAME']?></div>
			<div class="news-preview__descr"><?=$arResult['~PREVIEW_TEXT']?></div>
			<div class="views-counter"><i class="i-eye"></i><?=$arResult["SHOW_COUNTER"]?></div>
		</main>
	</a>
</article>


