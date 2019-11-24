<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Продукция");
?>

<section class="s-page-header">
	<div class="container">
		<h1 class="h1">Оборудование, которое мы производим</h1>
	</div>
</section>


<section>
	<div class="container">

		<div class="product-grid">
			<a href="/products/azot-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-1.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные азотные станции</div>
			</a>
			<a href="/products/kislorod-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-2.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные кислородные станции</div>
			</a>
			<a href="/products/azot-membrana/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-33.jpg?v=1" alt="1">
				<div class="h4">Мембранные установки</div>
			</a>
			<a href="/products/osushiteli/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-4.jpg?v=1" alt="1">
				<div class="h4">Адсорбционные осушители сжатого воздуха</div>
			</a>
			<a href="/products/azot-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-5.jpg?v=1" alt="1">
				<div class="h4">Блочно-модульные азотные станции</div>
			</a>
			<a href="/products/kislorod-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-6.jpg?v=1" alt="1">
				<div class="h4">Блочно-модульные кислородные станции</div>
			</a>
			<a href="/products/cryogen/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-7.jpg?v=2" alt="1">
				<div class="h4">Криогенные воздухоразделительные установки</div>
			</a>
			<a href="/products/vodorod/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-8.jpg?v=1" alt="1">
				<div class="h4">Электролизные генераторы водорода</div>
			</a>
			<a href="/news/sistemy-regazifikatsii-spg-spkhr/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-9.jpg?v=1" alt="1">
				<div class="h4">Системы регазификации СПГ&nbsp;(СПХР)</div>
			</a>
			<a href="/products/blocks/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-10.jpg?v=2" alt="1">
				<div class="h4">Блочно-модульные конструкции</div>
			</a>
		</div>

	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>