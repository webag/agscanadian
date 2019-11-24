<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<script>
	document.body.classList.add('transparent-header');
	document.querySelector('.s-header').classList.add('s-header--transparent','s-header--white-logo');
</script>


<section class="s-about-header">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m about-header__content">
				<h1 class="bold-title">О компании</h1>
				<p>Компания «АГС Инжиниринг» является российским производителем надежных газоразделительных систем, а также EPC подрядчиком. Производственные мощности и офис компании находятся в г. Санкт-Петербурге и г. Новочеркасске (Ростовская обл.). Команда «АГС Инжиниринг» сформирована из высококлассных специалистов и инженеров, имеющих более чем 10-летний опыт производства и строительства воздухоразделительных и компрессорных станций на промышленных объектах как в России, так и за рубежом.</p>
				<p>Производимое нами оборудование разработано инженерами нашей компании с учетом специфики российских и европейских стандартов, а также последних технологических инноваций и может быть выполнено в различном исполнении в зависимости от требований заказчика. На данный момент оборудование компании «АГС Инжиниринг» эксплуатируется на многих предприятиях нефтегазового и оборонного сектора России.</p>
			</div>
			<div class="grid-6 grid-12_m">
				<a href="#" class="about-video fancy-video">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/about/video-flag.png" alt="" class="about-video__flag">
					<div class="video-link">
						<i class="i-play"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="s-about-triggers" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/about/triggers-bg.jpg">
	<div class="container">
		<div class="h1">AGS это</div>
		<div class="icon-left-blocks">
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/about/trigger-1.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					57 высококвалифицированных специалистов и&nbsp;инженеров
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/about/trigger-2.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					2 производственные площадки в&nbsp;г.&nbsp;Санкт-Петербурге и&nbsp;г.&nbsp;Новочеркасске суммарной площадью 2500&nbsp;м<sup>2</sup>
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/about/trigger-3.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Собственная сервисная служба и&nbsp;монтажная бригада
				</div>
			</div>
			<div class="icon-left-block">
				<div class="icon-left-block__img">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/about/trigger-4.svg" alt="1">
				</div>
				<div class="icon-left-block__content">
					Более 160 выполненных проектов
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-about-services">
	<div class="container">
		<div class="about-services">
			<div class="h1">Основные виды деятельности</div>
			<p>Производство воздухоразделительного оборудования – мы проектируем и&nbsp;производим надежные мембранные и&nbsp;адсорбционные генераторы азота и&nbsp;кислорода любой мощности из&nbsp;лучших комплектующих на рынке. Модельный ряд выпускаемой продукции включает в&nbsp;себя:</p>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Адсорбционные азотные станции</div>
				<div class="about-list__item"><span>02.</span>Мембранные азотные станции</div>
				<div class="about-list__item"><span>03.</span>Адсорбционные кислородные станции</div>
				<div class="about-list__item"><span>04.</span>Блочно-модульные азотные станции</div>
				<div class="about-list__item"><span>05.</span>Блочно-модульные кислородные станции</div>
				<div class="about-list__item"><span>06.</span>Криогенные воздухоразделительные установки</div>
				<div class="about-list__item"><span>07.</span>Адсорбционные осушители сжатого воздуха</div>
				<div class="about-list__item"><span>08.</span>Электролизные генераторы водорода</div>
				<div class="about-list__item"><span>09.</span>Систему подготовки и поддержания модифицированной атмосферы</div>
				<div class="about-list__item"><span>10.</span>Систему фильтрации и осушения сжатого воздуха</div>
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
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/about/photo-1.jpg" alt="">
				</div>
				<div class="grid-4">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/about/photo-2.jpg" alt="">
				</div>
				<div class="grid-4">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/about/photo-3.jpg" alt="">
				</div>
				<div class="grid-8">
					<img src="" data-lazy="<?/*=SITE_TEMPLATE_PATH*/?>/img/about/photo-4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>-->


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>