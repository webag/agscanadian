<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>

<script>
	document.body.classList.add('transparent-header');
	document.querySelector('.s-header').classList.add('s-header--transparent','s-header--white-logo');
</script>


<section class="s-services-header">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m services-header__content">
				<h1 class="bold-title">Услуги «АГС»</h1>
				<p>Сервисное постгарантийное обслуживание оборудования.<br>
					Команда сервисных инженеров ООО&nbsp;«АГС Инжиниринг» выполняет работы по&nbsp;диагностике, наладке, проведению технического обслуживания воздухоразделительных установок, компрессорного оборудования как собственного производства, так и&nbsp;производства других компаний. Сервисные инженеры имеют лицензии и&nbsp;сертификаты на&nbsp;гарантийное и&nbsp;постгарантийное обслуживание компрессорного оборудования ряда мировых производителей.
				</p>
			</div>
		</div>
	</div>
</section>


<section class="s-services-setup">
	<div class="container">
		<div class="row">
			<div class="grid-6 grid-12_m">
				<div class="h1">Монтаж и&nbsp;пусконаладка оборудования</div>
				<p>Команда сервисных инженеров ООО&nbsp;«АГС Инжиниринг» осуществляет монтаж и&nbsp;пусконаладку оборудования любой сложности, включая работы по&nbsp;обвязке трубопроводов, вывод оборудования на&nbsp;проектные мощности, инструктаж персонала заказчика.</p>
			</div>
		</div>
	</div>
</section>


<section class="s-services-project">
	<div class="container">
		<div class="about-services">
			<div class="h1">Проектирование</div>
			<p>Специалисты проектно-конструкторского отдела ООО&nbsp;«АГС Инжиниринг» обладают высокой квалификацией и&nbsp;многолетним опытом проектирования и&nbsp;разработки проектной документации для&nbsp;строительства воздухоразделительных установок, реконструкции промышленных объектов, технического перевооружения опасных производственных объектов. ООО&nbsp;«АГС Инжиниринг» имеет все необходимые компетенции, а&nbsp;также лицензии и&nbsp;допуски на&nbsp;выполнение следующих работ:</p>
			<div class="about-list">
				<div class="about-list__item"><span>01.</span>Разработки технико-экономического обоснования реализации проекта</div>
				<div class="about-list__item"><span>02.</span>Разработки проектной документации </div>
				<div class="about-list__item"><span>03.</span>Разработки документации на техническое перевооружение опасного производственного объекта</div>
				<div class="about-list__item"><span>04.</span>Разработки РКД</div>
				<div class="about-list__item"><span>05.</span>Прохождения экспертизы промышленной безопасности документации на техническое перевооружение, консервацию и ликвидацию опасного производственного объекта</div>
				<div class="about-list__item"><span>06.</span>Регистрации (перерегистрации) опасных производственных объектов в Государственном реестре опасных производственных объектов
				</div>
				<div class="about-list__item"><span>07.</span>Прохождения экспертизы промышленной безопасности технических устройств на ОПО</div>
			</div>
		</div>
	</div>
</section>


<?$APPLICATION->IncludeFile("/includes/sections/order.php", Array(), Array("MODE" => "php"));?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>