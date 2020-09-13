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


		<?
		$related_product = $arResult['PROPERTIES']['RELATED_PRODUCT']['VALUE'];
		?>
		<? if (!empty($related_product)) : ?>
			<?
			switch ($related_product) {
				case 'Адсорбционные азотные станции':
					$link = '/products/azot-station/';
					$name_en = 'Adsorption Nitrogen';
					$img_name = 'azot-station.png';
					break;
				case 'Адсорбционные кислородные станции':
					$link = '/products/kislorod-station/';
					$name_en = 'Adsorption Oxygen';
					$img_name = 'kislorod-station.png';
					break;
				case 'Мембранные установки':
					$link = '/products/azot-membrana/';
					$name_en = 'Membrane Nitrogen';
					$img_name = 'membrana.png';
					break;
				case 'Адсорбционные осушители сжатого воздуха':
					$link = '/products/osushiteli/';
					$name_en = 'Adsorption Compressed Air Desiccants';
					$img_name = 'osush.png';
					break;
				case 'Блочно-модульные азотные станции':
					$link = '/products/azot-module/';
					$name_en = 'Block-Modular Nitrogen Stations';
					$img_name = 'azot-module.png';
					break;
				case 'Блочно-модульные кислородные станции':
					$link = '/products/kislorod-module/';
					$name_en = 'Block-Modular Oxygen Stations';
					$img_name = 'kislorod-module.png';
					break;
				case 'Криогенные воздухоразделительные установки':
					$link = '/products/cryogen/';
					$name_en = 'Cryogen Air Separation Units';
					$img_name = 'cryo.png';
					break;
				case 'Электролизные генераторы водорода':
					$link = '/products/vodorod/';
					$name_en = 'Electrolysis Hydrogen Generators';
					$img_name = 'vodorod.png';
					break;
			}
			?>
			<div class="product-related">
				<div class="product-related__left">
					<div class="product-related__sup">Go to product page</div>
					<div class="h2 product-related__title"><?=$name_en?></div>
					<a href="<?=$link?>" class="btn btn--white">View</a>
				</div>
				<div class="product-related__right">
					<img src="/local/templates/ags/img/product-related/<?=$img_name?>" alt="<?=$related_product?>">
				</div>
			</div>
		<? endif; ?>


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