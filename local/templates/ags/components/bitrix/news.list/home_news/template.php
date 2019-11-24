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


<div class="news-grid">
	<div class="news-grid__container">

	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<? if($key % 3  == 0 && $key !== 0 ) : ?>
			</div>
			<div class="news-grid__container">
		<? endif; ?>

		<?
			$APPLICATION->IncludeComponent(
				'bitrix:catalog.item',
				'preview_news',
				array(
					'RESULT' => $arItem
				),
				$component,
				array('HIDE_ICONS' => 'Y')
			);
		?>

	<?endforeach;?>
</div>