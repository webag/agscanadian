<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("AGS Services");
?>

<script>
	document.body.classList.add('transparent-header');
	document.querySelector('.s-header').classList.add('s-header--transparent','s-header--white-logo');
</script>


<section class="s-services-header">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m services-header__content">
				<h1 class="bold-title">AGS Services</h1>
				<p>After-sales service of equipment.<br>
					The team of service engineers of AGS Engineering LLC performs diagnostics, adjustment, and maintenance of air separation plants, compressor equipment, both of its own production and that of other companies. Service engineers have licenses and certificates for warranty and post-warranty maintenance of compressor equipment of a number of world manufacturers.
				</p>
			</div>
		</div>
	</div>
</section>


<section class="s-services-setup">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m">
				<div class="h1">Installation and commissioning of equipment</div>
				<p>The team of service engineers of AGS Engineering LLC carries out installation and commissioning of equipment of any complexity, including piping, bringing equipment to its design capacity, and instructing customer personnel.</p>
			</div>
		</div>
	</div>
</section>


<section class="s-services-project">
	<div class="container">
		<div class="about-services">
			<div class="h1">Design</div>
			<p>The specialists of the design department of AGS Engineering LLC are highly qualified and have many years of experience in the design and development of project documentation for the construction of air separation plants, the reconstruction of industrial facilities, and the technical re-equipment of hazardous production facilities. AGS Engineering LLC has all the necessary competencies, as well as licenses and approvals for the following work:</p>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Development of a feasibility study for the implementation of the project</div>
				<div class="about-list__item"><span>02.</span>Development of design documentation</div>
				<div class="about-list__item"><span>03.</span>Development of documentation for the technical re-equipment of a hazardous production facility</div>
				<div class="about-list__item"><span>04.</span>Development of RKD</div>
				<div class="about-list__item"><span>05.</span>Passing an expert examination of industrial safety documentation for technical re-equipment, conservation and liquidation of a hazardous production facility</div>
				<div class="about-list__item"><span>06.</span>Registration (re-registration) of hazardous production facilities in the State Register of hazardous production facilities
				</div>
				<div class="about-list__item"><span>07.</span>Passing expert examination of industrial safety of technical devices at the OPO</div>
			</div>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>