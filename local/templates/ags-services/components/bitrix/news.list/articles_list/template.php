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


<div class="row articles-list">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<div class="grid-4 grid-12_s">
			<?
			$APPLICATION->IncludeComponent(
				'bitrix:catalog.item',
				'article_preview',
				array(
					'RESULT' => $arItem,
				),
				$component,
				array('HIDE_ICONS' => 'Y')
			);
			?>
		</div>
	<?endforeach;?>
</div>