<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("About company");
?>

<script>
	document.body.classList.add('transparent-header');
	document.querySelector('.s-header').classList.add('s-header--transparent', 's-header--white-logo');
</script>


<section class="s-about-header">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m about-header__content">
				<h1 class="bold-title">About company</h1>
				<p>AGS Engineering is a Russian manufacturer of reliable gas separation systems, as well as an EPC contractor. The company's production facilities and office are located in St. Petersburg and Novocherkassk (Rostov Region). The AGS Engineering team is composed of highly qualified specialists and engineers with more than 10 years of experience in the production and construction of air separation and compressor stations at industrial facilities both in Russia and abroad.</p>
				<p>The equipment manufactured by us was developed by the engineers of our company taking into account the specifics of Russian and European standards, as well as the latest technological innovations and can be performed in various designs depending on customer requirements. At the moment, AGS Engineering equipment is operated at many enterprises in the oil and gas and defense sectors of Russia.</p>
			</div>
			<div class="grid-6 grid-12_m">
				<a href="https://youtu.be/SY4IVHunvrM" class="about-video fancy-video">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/about/video-flag.png" alt="" class="about-video__flag">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="s-about-triggers" data-lazybg="<?= SITE_TEMPLATE_PATH ?>/img/about/triggers-bg.jpg">
	<div class="container">
		<div class="h1">AGS means</div>
		<div class="icon-left-blocks">
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/about/trigger-1.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					57 highly qualified specialists and engineers
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/about/trigger-2.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Production site in Novocherkassk with an area of 2500 m<sup>2</sup>
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/about/trigger-3.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Own customer service and installation team
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/about/trigger-4.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Over 160 completed projects
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-about-services">
	<div class="container">
		<div class="about-services">
			<div class="h1">Main activities</div>
			<p>Production of air separation equipment - we design and manufacture reliable membrane and adsorption generators of nitrogen and oxygen of any capacity from the best components on the market. The range of products includes:</p>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Adsorption nitrogen stations</div>
				<div class="about-list__item"><span>02.</span>Membrane nitrogen stations</div>
				<div class="about-list__item"><span>03.</span>Adsorption oxygen stations</div>
				<div class="about-list__item"><span>04.</span>Block-modular nitrogen stations</div>
				<div class="about-list__item"><span>05.</span>Block-modular oxygen stations</div>
				<div class="about-list__item"><span>06.</span>Cryogenic air separation units</div>
				<div class="about-list__item"><span>07.</span>Adsorption compressed air dessicants</div>
				<!-- <div class="about-list__item"><span>08.</span>Electrolysis hydrogen generators</div>
				<div class="about-list__item"><span>09.</span>System for the preparation and maintenance of a modified atmosphere</div> -->
				<div class="about-list__item"><span>08.</span>The system of filtration and drainage of compressed air</div>
			</div>
		</div>
	</div>
</section>


<!--<section class="s-fabric">
	<div class="container">
		<div class="fabric">
			<div class="h1">Наше основное производство</div>
			<div class="fabric__city">г. Новочеркасск</div>
			<div class="fabric__address">Харьковское шоссе, 10Б, корпус 851</div>
			<a href="tel:+74955328640" class="fabric__phone">+7 (495) 532-86-40</a>
			<div class="fabric__photos row-sg">
				<div class="grid-8">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/ ?>/img/about/photo-1.jpg" alt="">
				</div>
				<div class="grid-4">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/ ?>/img/about/photo-2.jpg" alt="">
				</div>
				<div class="grid-4">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/ ?>/img/about/photo-3.jpg" alt="">
				</div>
				<div class="grid-8">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/ ?>/img/about/photo-4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>-->


<? $APPLICATION->IncludeFile("/includes/sections/order.php", array(), array("MODE" => "php")); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>