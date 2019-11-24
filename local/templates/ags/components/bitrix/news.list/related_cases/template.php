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

<? if ($arResult["ITEMS"]) : ?>
	<section class="s-cases-related">
		<div class="container">
			<div class="h1 section-title-left">Похожие проекты</div>
				<div class="cases-grid">
					<?foreach($arResult["ITEMS"] as $key => $arItem):?>
						<?
						$APPLICATION->IncludeComponent(
							'bitrix:catalog.item',
							'preview_case',
							array(
								'RESULT' => $arItem,
								'HAS_BIG' => 'NO'
							),
							$component,
							array('HIDE_ICONS' => 'Y')
						);
						?>
					<?endforeach;?>
				</div>
		</div>
	</section>
<? endif; ?>