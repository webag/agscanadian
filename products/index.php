<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Products");
?>

<section class="s-page-header">
	<div class="container">
		<h1 class="h1">Equipment which we manufacture</h1>
	</div>
</section>


<section>
	<div class="container">

		<div class="product-grid">
			<a href="/products/azot-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-1.jpg?v=1" alt="1">
				<div class="h4">Adsorption Nitrogen Station</div>
			</a>
			<a href="/products/kislorod-station/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-2.jpg?v=1" alt="1">
				<div class="h4">Adsorption Oxygen Station</div>
			</a>
			<a href="/products/azot-membrana/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-33.jpg?v=1" alt="1">
				<div class="h4">Membrane Units</div>
			</a>
			<a href="/products/osushiteli/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-4.jpg?v=1" alt="1">
				<div class="h4">Adsorption Compressed Air Desiccants</div>
			</a>
			<a href="/products/azot-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-5.jpg?v=1" alt="1">
				<div class="h4">Block-Modular Nitrogen Stations</div>
			</a>
			<a href="/products/kislorod-module/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-6.jpg?v=1" alt="1">
				<div class="h4">Block-Modular Oxygen Stations</div>
			</a>
			<a href="/products/cryogen/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-7.jpg?v=2" alt="1">
				<div class="h4">Cryogen Air Separation Units</div>
			</a>
			<a href="/products/vodorod/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-8.jpg?v=1" alt="1">
				<div class="h4">Electrolysis Hydrogen Generators</div>
			</a>
			<a href="/news/lng-regasification-systems-rsrs/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-9.jpg?v=1" alt="1">
				<div class="h4">LNG Regasification Systems (RSRS)</div>
			</a>
			<a href="/products/blocks/" class="product-grid__item">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product-thumb.png" data-lazy="<?=SITE_TEMPLATE_PATH?>/img/home/product-10.jpg?v=2" alt="1">
				<div class="h4">Block-modular Constructions</div>
			</a>
		</div>

	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>