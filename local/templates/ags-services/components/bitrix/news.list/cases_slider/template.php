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


<div class="side-slider side-slider--cases">
	<div class="side-slider__wrapper container">
		<div class="side-slider__info">
			<div class="h2">More than 140 successfully completed projects</div>
			<a href="/cases/" class="link">All projects</a>
		</div>
		<div class="side-slider__slides">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<div class="side-slider__slide">
					<?
					$APPLICATION->IncludeComponent(
						'bitrix:catalog.item',
						'case_preview',
						array(
							'RESULT' => $arItem,
							'SLIDER' => "YES"
						),
						$component,
						array('HIDE_ICONS' => 'Y')
					);
					?>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>