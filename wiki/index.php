<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Информационный раздел");
?>


<section class="s-wiki">
	<div class="container">
		<div class="wiki">

			<aside class="wiki-aside">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"sections-elements",
					array(
						"ALLOW_MULTI_SELECT" => "Y",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "sections-elements",
						"DELAY" => "N",
						"MAX_LEVEL" => "3",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_THEME" => "site",
						"ROOT_MENU_TYPE" => "left",
						"USE_EXT" => "Y",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
					false
				);?>
				<div>
					<?
					global $USER;
					echo $USER->GetEmail();
					?>
				</div>
				<a href="?logout=yes" class="action-link wiki-logout-link">Выйти <i class="i-next"></i></a>
			</aside>

			<main class="wiki-main">
				<h1 class="h2 wiki-title"><?$APPLICATION->ShowTitle()?></h1>
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog",
					"wiki",
					array(
						"ACTION_VARIABLE" => "action",
						"ADD_ELEMENT_CHAIN" => "N",
						"ADD_PROPERTIES_TO_BASKET" => "Y",
						"ADD_SECTIONS_CHAIN" => "Y",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"BASKET_URL" => "/personal/basket.php",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COMPATIBLE_MODE" => "N",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO",
						"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
						"DETAIL_BACKGROUND_IMAGE" => "-",
						"DETAIL_BRAND_USE" => "N",
						"DETAIL_BROWSER_TITLE" => "-",
						"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
						"DETAIL_DETAIL_PICTURE_MODE" => array(
							0 => "POPUP",
							1 => "MAGNIFIER",
						),
						"DETAIL_DISPLAY_NAME" => "Y",
						"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
						"DETAIL_IMAGE_RESOLUTION" => "16by9",
						"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
						"DETAIL_META_DESCRIPTION" => "-",
						"DETAIL_META_KEYWORDS" => "-",
						"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
						"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
						"DETAIL_PROPERTY_CODE" => array(
							0 => "SIZE",
							1 => "WEIGHT",
						),
						"DETAIL_SET_CANONICAL_URL" => "N",
						"DETAIL_SHOW_POPULAR" => "Y",
						"DETAIL_SHOW_SLIDER" => "N",
						"DETAIL_SHOW_VIEWED" => "Y",
						"DETAIL_STRICT_SECTION_CHECK" => "N",
						"DETAIL_USE_COMMENTS" => "N",
						"DETAIL_USE_VOTE_RATING" => "N",
						"DISABLE_INIT_JS_IN_COMPONENT" => "N",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_SORT_FIELD" => "sort",
						"ELEMENT_SORT_FIELD2" => "id",
						"ELEMENT_SORT_ORDER" => "asc",
						"ELEMENT_SORT_ORDER2" => "desc",
						"FILTER_HIDE_ON_MOBILE" => "N",
						"FILTER_VIEW_MODE" => "VERTICAL",
						"IBLOCK_ID" => "4",
						"IBLOCK_TYPE" => "site_info",
						"INCLUDE_SUBSECTIONS" => "N",
						"INSTANT_RELOAD" => "N",
						"LAZY_LOAD" => "N",
						"LINE_ELEMENT_COUNT" => "3",
						"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
						"LINK_IBLOCK_ID" => "",
						"LINK_IBLOCK_TYPE" => "",
						"LINK_PROPERTY_SID" => "",
						"LIST_BROWSER_TITLE" => "-",
						"LIST_META_DESCRIPTION" => "-",
						"LIST_META_KEYWORDS" => "-",
						"LIST_PROPERTY_CODE" => array(
							0 => "",
							1 => "",
						),
						"LOAD_ON_SCROLL" => "N",
						"MESSAGE_404" => "",
						"MESS_BTN_ADD_TO_BASKET" => "В корзину",
						"MESS_BTN_BUY" => "Купить",
						"MESS_BTN_COMPARE" => "Сравнение",
						"MESS_BTN_DETAIL" => "Подробнее",
						"MESS_BTN_SUBSCRIBE" => "Подписаться",
						"MESS_NOT_AVAILABLE" => "Нет в наличии",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Товары",
						"PAGE_ELEMENT_COUNT" => "50",
						"PARTIAL_PRODUCT_PROPERTIES" => "N",
						"PRICE_CODE" => array(
						),
						"PRICE_VAT_INCLUDE" => "Y",
						"PRICE_VAT_SHOW_VALUE" => "N",
						"PRODUCT_ID_VARIABLE" => "id",
						"PRODUCT_PROPERTIES" => "",
						"PRODUCT_PROPS_VARIABLE" => "prop",
						"PRODUCT_QUANTITY_VARIABLE" => "quantity",
						"SEARCH_CHECK_DATES" => "Y",
						"SEARCH_NO_WORD_LOGIC" => "Y",
						"SEARCH_PAGE_RESULT_COUNT" => "50",
						"SEARCH_RESTART" => "N",
						"SEARCH_USE_LANGUAGE_GUESS" => "Y",
						"SECTIONS_SHOW_PARENT_NAME" => "Y",
						"SECTIONS_VIEW_MODE" => "LIST",
						"SECTION_BACKGROUND_IMAGE" => "-",
						"SECTION_COUNT_ELEMENTS" => "N",
						"SECTION_ID_VARIABLE" => "SECTION_ID",
						"SECTION_TOP_DEPTH" => "1",
						"SEF_FOLDER" => "/wiki/",
						"SEF_MODE" => "Y",
						"SET_LAST_MODIFIED" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "Y",
						"SHOW_404" => "N",
						"SHOW_DEACTIVATED" => "N",
						"SHOW_PRICE_COUNT" => "1",
						"SHOW_TOP_ELEMENTS" => "N",
						"SIDEBAR_DETAIL_SHOW" => "N",
						"SIDEBAR_PATH" => "",
						"SIDEBAR_SECTION_SHOW" => "Y",
						"TEMPLATE_THEME" => "blue",
						"TOP_ELEMENT_COUNT" => "9",
						"TOP_ELEMENT_SORT_FIELD" => "sort",
						"TOP_ELEMENT_SORT_FIELD2" => "id",
						"TOP_ELEMENT_SORT_ORDER" => "asc",
						"TOP_ELEMENT_SORT_ORDER2" => "desc",
						"TOP_LINE_ELEMENT_COUNT" => "3",
						"TOP_PROPERTY_CODE" => array(
							0 => "",
							1 => "",
						),
						"TOP_VIEW_MODE" => "SECTION",
						"USE_COMPARE" => "N",
						"USE_ELEMENT_COUNTER" => "N",
						"USE_ENHANCED_ECOMMERCE" => "N",
						"USE_FILTER" => "N",
						"USE_MAIN_ELEMENT_SECTION" => "N",
						"USE_PRICE_COUNT" => "N",
						"USE_PRODUCT_QUANTITY" => "N",
						"USE_REVIEW" => "N",
						"USE_STORE" => "N",
						"COMPONENT_TEMPLATE" => "wiki",
						"USER_CONSENT" => "N",
						"USER_CONSENT_ID" => "0",
						"USER_CONSENT_IS_CHECKED" => "Y",
						"USER_CONSENT_IS_LOADED" => "N",
						"SEF_URL_TEMPLATES" => array(
							"sections" => "",
							"section" => "#SECTION_CODE_PATH#/",
							"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
							"compare" => "compare.php?action=#ACTION_CODE#",
							"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
						),
						"VARIABLE_ALIASES" => array(
							"compare" => array(
								"ACTION_CODE" => "action",
							),
						)
					),
					false
				);?>
			</main>

		</div>
	</div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>