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

<section class="s-geo">
	<div class="h2 s-geo__title">География поставок</div>

	<div id="geomap" class="s-geo__map"></div>

	<div class="container">

		<div class="geo-items">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<?
				$resize_img = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 412, "height" => 275), BX_RESIZE_IMAGE_EXACT, true, array());
				?>
				<div class="geo-item <? echo $key == 0 ? 'active': ''?>">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
						<? if ($arItem['PREVIEW_PICTURE']['ID']) : ?>
							<img <? echo $key == 0 ? 'src': 'data-img'?>="<?=$resize_img['src']?>" alt="1" class="geo-item__img">
						<? endif; ?>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/geo-map-thumb.png" alt="1" class="geo-item__thumb">
					</a>
					<div class="geo-item__content">
						<header class="geo-item__header">
							<div class="h3 geo-item__name"><?=$arItem['NAME']?></div>
							<div class="geo-item__city"><?=$arItem['PROPERTIES']['CITY']['VALUE']?></div>
						</header>
						<main class="geo-item__main">
							<strong>Поставляемое оборудование:</strong>
							<div class="geo-item__param"><?=$arItem['PROPERTIES']['MODEL']['VALUE']?></div>
							<div class="geo-item__param">Концентрация: <?=$arItem['PROPERTIES']['CONCENTRATION']['VALUE']?>%</div>
							<div class="geo-item__param">Производительность: <?=$arItem['PROPERTIES']['PERFORMANCE']['VALUE']?> м3/ч</div>
						</main>
						<footer class="geo-item__footer">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="action-link">Подробнее <i class="i-next"></i></a>
							<? if ($arItem['PROPERTIES']['LOGO']['VALUE']) : ?>
								<?
								$resize_logo = CFile::ResizeImageGet($arItem['PROPERTIES']['LOGO']['VALUE'], array("width" => 200, "height" => 50), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());
								?>
								<img data-lazy="<?=$resize_logo['src']?>" alt="1" class="geo-item__logo">
							<? endif; ?>

						</footer>
					</div>
				</div>
			<?endforeach;?>
		</div>

	</div>

	<script>
		const locations_from_admin = [
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			['<?=$arItem["~NAME"]?>', <?=$arItem["PROPERTIES"]["MAP"]["VALUE"]?>],
			<?endforeach;?>
		];
	</script>
</section>
