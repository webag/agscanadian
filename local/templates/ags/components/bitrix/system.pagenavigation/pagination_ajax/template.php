<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//$this->createFrame()->begin("Загрузка навигации");
?>


<?if($arResult["NavPageCount"] > 1):?>

	<?if ($arResult["NavPageNomer"]+1 <= $arResult["nEndPage"]):?>
		<?
		$plus = $arResult["NavPageNomer"]+1;
		$url = $arResult["sUrlPathParams"] . "PAGEN_1=" . $plus
		?>
			<button class="action-link load_more" data-url="<?=$url?>">Show more</button>
	<?endif?>

<?endif?>