<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
?>

<ul class="wiki-list">
	<? foreach ($arResult['ITEMS'] as $arItem) : ?>
		<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></li>
	<? endforeach; ?>
</ul>

<div class="user-content">
	<?=$arResult['~DESCRIPTION']?>
</div>