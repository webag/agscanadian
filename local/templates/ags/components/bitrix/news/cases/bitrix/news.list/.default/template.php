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


<div class="cases-grid js-container">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$APPLICATION->IncludeComponent(
			'bitrix:catalog.item',
			'preview_case',
			array(
				'RESULT' => $arItem
			),
			$component,
			array('HIDE_ICONS' => 'Y')
		);
		?>
	<?endforeach;?>
</div>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<div class="center-btn js-pagination">
		<?=$arResult["NAV_STRING"]?>
	</div>
<?endif;?>