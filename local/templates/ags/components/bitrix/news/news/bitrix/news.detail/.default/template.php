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

<? if ($arResult['DETAIL_PICTURE']['ID']) : ?>
	<?
	$resize_bg = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array("width" => 1920, "height" => 750), BX_RESIZE_IMAGE_EXACT, true, array());
	?>
<? endif; ?>

<section class="s-news-detail-header">
	<div class="news-detail-header__bg" style="background-image: url(<?=$resize_bg['src']?>)"></div>

	<div class="container-small news-detail-header">
		<div class="news-detail-header__top">
			<time datetime="<?=FormatDate("d-m-Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?>" class="datetime">
				<strong><?=FormatDate("d", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></strong>
				<span><span><?=FormatDate("F", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span><span><?=FormatDate("Y", MakeTimeStamp($arResult["ACTIVE_FROM"]))?></span></span>
			</time>
			<div class="share share--white">
				<div class="share__icons">
					<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
				</div>
			</div>
		</div>
		<h1 class="h1 news-detail-header__title"><?=$arResult['NAME']?></h1>
		<div class="h4 news-detail-header__descr"><?=$arResult['~PREVIEW_TEXT']?></div>
		<a href="#" class="btn btn--white news-detail-header__btn fancy-modal" data-src="#modal-order">Order a project</a>
		<div class="views-counter"><i class="i-eye"></i><?=$arResult["SHOW_COUNTER"]?></div>
	</div>

</section>


<section class="s-news-detail-main">
	<div class="container-small">
		<div class="user-content">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>

		<div class="news-detail-meta">
			<div class="share">
				<span class="share__title">Share:</span>
				<div class="share__icons">
					<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
				</div>
			</div>
			<a href="/news/" class="action-link">All news <i class="i-next"></i></a>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>