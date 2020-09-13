<?php
$clickfrogru = $_SERVER["DOCUMENT_ROOT"]."/clickfrogru_tcp.php";
include_once($clickfrogru);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?$APPLICATION->ShowTitle()?></title>

	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=2">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=2">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=2">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=2" color="#5bbad5">
	<link rel="shortcut icon" href="/favicons/favicon.ico?v=2">
	<meta name="msapplication-TileColor" content="#3182e6">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#3182e6">
	<!-- favicons -->

	<!-- og -->
	<?
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}
	$server_url = $protocol.$_SERVER['HTTP_HOST'];
	?>
	<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
	<meta property="og:description" content='<?=$APPLICATION->ShowProperty("description");?>'/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content='<?=$server_url?><?$APPLICATION->ShowProperty("ogimage",SITE_TEMPLATE_PATH."/img/og.jpg")?>' />
	<!-- og -->


	<?
	use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/assets.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
	?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-THQ65BZ');</script>
	<!-- End Google Tag Manager -->

	<? $APPLICATION->ShowHead();?>
</head>


<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQ65BZ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!--
<header class="s-site-header">
	<div class="container site-header">
		<img src="<?/*=SITE_TEMPLATE_PATH*/?>/img/logo.svg" alt="Logotype" class="site-header__logo">

		<nav class="site-header__nav">
			<a href="#sheme" class="scrollto">Что такое On-site</a>
			<a href="#preims" class="scrollto">Преимущества</a>
			<a href="#gases" class="scrollto">Газы</a>
			<a href="#products" class="scrollto">Оборудование</a>
			<a href="#steps" class="scrollto">Как заключить договор</a>
		</nav>

		<div class="site-header__contacts">
			<a href="tel:+74955328640" class="site-header__phone">+7 495 532 86 40</a>
			<a href="mailto:info@agse.ru" class="site-header__email">info@agse.ru</a>
		</div>

	</div>
</header>-->


<?
if ($_SERVER['REQUEST_URI'] == '/'):
	$header_class = 's-header--transparent';
	$body_class = 'transparent-header';
endif;
?>

<body class="<?=$body_class?>" id="site-body">


<header class="s-header compensate-for-scrollbar <?=$header_class?>">
	<div class="header-left">
		<a href="/" class="header-logo">
			<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/img/logo.svg", Array(), Array("MODE" => "php"));?>
			<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/img/logo-mob.svg", Array(), Array("MODE" => "php"));?>
		</a>
	</div>
	<nav class="header-nav">
		<a href="/products/">Products</a>
		<a href="/services/">Services</a>
		<a href="/cases/">Implemented projects</a>
		<a href="/info/">Information</a>
		<a href="/about/">About Company</a>
		<a href="/contacts/">Contacts</a>
	</nav>
	<div class="header-conts">
		<div class="header-conts__main">
			<a href="tel:+74955328640" class="header-conts__phone">+7 (495) 532-86-40</a>
			<a href="mailto:info@agse.ru" class="header-conts__email">info@agse.ru</a>
		</div>
		<i class="i-phone fancy-modal" data-src="#modal-call"></i>
	</div>
</header>


<div class="burger burger--ontop">
	<figure></figure>
</div>

<div class="mob-panel">
	<div class="header-conts">
		<div class="header-conts__main">
			<a href="tel:+74955328640" class="header-conts__phone">+7 (495) 532-86-40</a>
			<a href="mailto:info@agse.ru" class="header-conts__email">info@agse.ru</a>
		</div>
		<i class="i-phone fancy-modal" data-src="#modal-call"></i>
	</div>
	<nav class="mobile-nav">
		<a href="/products/">Products</a>
		<a href="/services/">Services</a>
		<a href="/cases/">Implemented projects</a>
		<a href="/info/">Information</a>
		<a href="/about/">About Company</a>
		<a href="/contacts/">Contacts</a>
	</nav>
</div>