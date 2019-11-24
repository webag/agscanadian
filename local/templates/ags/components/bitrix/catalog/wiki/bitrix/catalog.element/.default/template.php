<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="user-content">
	<?=$arResult['~DETAIL_TEXT']?>
</div>

<div id="modal-pasport-azot" class="modal modal--wide">
	<p class="h3 modal__title">Сгенерировать пасспорт <?=$arResult['NAME']?></p>
	<form class="passport-form vertical-form" data-url="/wiki/passports/azot_passport_generator.php">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div>Модель</div>
				<input type="text" name="model" placeholder="Модель*" value="<?=$arResult['NAME']?>" data-req="true">
				<div>Серийный номер</div>
				<input type="text" name="serial" placeholder="Серийный номер*" data-req="true">
				<div>Дата выпуска</div>
				<input type="text" name="date" placeholder="Дата выпуска*" data-req="true">
				<div>Габариты (ДхШхВ)</div>
				<input type="text" name="size" placeholder="Габариты (ДхШхВ)*" data-req="true" value="<?=$arResult['PROPERTIES']['SIZE']['VALUE']?>">
				<div>Вес (кг)</div>
				<input type="text" name="weight" placeholder="Вес (кг)*" data-req="true" value="<?=$arResult['PROPERTIES']['WEIGHT']['VALUE']?>">
			</div>
			<div class="grid-6 grid-12_s">
				<div>Производительность (м3/час)</div>
				<input type="text" name="capacity" placeholder="Производительность (м3/час)*" data-req="true">
				<div>Концентрация газообразного азота (%)</div>
				<input type="text" name="purity" placeholder="Концентрация газообразного азота (%)*" data-req="true">
				<div>Давление газообразного азота (бар)</div>
				<input type="text" name="pressure" placeholder="Давление газообразного азота (бар)*" data-req="true">
				<div>Точка росы азота (°С)</div>
				<input type="text" name="dew" placeholder="Точка росы азота (°С)*" data-req="true">
				<div>Расход сжатого воздуха (м3/мин)</div>
				<input type="text" name="air" placeholder="Расход сжатого воздуха (м3/мин)*" data-req="true">
			</div>
		</div>
		<button type="submit" class="btn btn--icon">Сгенерировать <i class="i-forward"></i></button>
	</form>
</div>

<div id="modal-pasport-kislorod" class="modal modal--wide">
	<p class="h3 modal__title">Сгенерировать пасспорт <?=$arResult['NAME']?></p>
	<form class="passport-form vertical-form" data-url="/wiki/passports/kislorod_passport_generator.php">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div>Модель</div>
				<input type="text" name="model" placeholder="Модель*" value="<?=$arResult['NAME']?>" data-req="true">
				<div>Серийный номер</div>
				<input type="text" name="serial" placeholder="Серийный номер*" data-req="true">
				<div>Дата выпуска</div>
				<input type="text" name="date" placeholder="Дата выпуска*" data-req="true">
				<div>Габариты (ДхШхВ)</div>
				<input type="text" name="size" placeholder="Габариты (ДхШхВ)*" data-req="true" value="<?=$arResult['PROPERTIES']['SIZE']['VALUE']?>">
				<div>Вес (кг)</div>
				<input type="text" name="weight" placeholder="Вес (кг)*" data-req="true" value="<?=$arResult['PROPERTIES']['WEIGHT']['VALUE']?>">
			</div>
			<div class="grid-6 grid-12_s">
				<div>Производительность (м3/час)</div>
				<input type="text" name="capacity" placeholder="Производительность (м3/час)*" data-req="true">
				<div>Конц-ия газообразного кислорода (%)</div>
				<input type="text" name="purity" placeholder="Концентрация газообразного кислорода (%)*" data-req="true">
				<div>Давление газообразного кислорода (бар)</div>
				<input type="text" name="pressure" placeholder="Давление газообразного кислорода (бар)*" data-req="true">
				<div>Точка росы кислорода (°С)</div>
				<input type="text" name="dew" placeholder="Точка росы кислорода (°С)*" data-req="true">
				<div>Расход сжатого воздуха (м3/мин)</div>
				<input type="text" name="air" placeholder="Расход сжатого воздуха (м3/мин)*" data-req="true">
			</div>
		</div>
		<button type="submit" class="btn btn--icon">Сгенерировать <i class="i-forward"></i></button>
	</form>
</div>


<div id="modal-pasport-azot-station" class="modal modal--wide-big">
	<p class="h3 modal__title">Сгенерировать пасспорт <?=$arResult['NAME']?></p>
	<form class="passport-form vertical-form" data-url="/wiki/passports/azot_station_passport_generator.php">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div>Модель</div>
				<input type="text" name="model" placeholder="Модель*" value="<?=$arResult['NAME']?>" data-req="true">
				<div>Серийный номер</div>
				<input type="text" name="serial" placeholder="Серийный номер*" data-req="true">
				<div>Дата выпуска</div>
				<input type="text" name="date" placeholder="Дата выпуска*" data-req="true">
				<!--<div>Габариты (ДхШхВ)</div>
				<input type="text" name="size" placeholder="Габариты (ДхШхВ)*" data-req="true" value="<?/*=$arResult['PROPERTIES']['SIZE']['VALUE']*/?>">-->
				<div>Вес (кг)</div>
				<input type="text" name="weight" placeholder="Вес (кг)*" data-req="true" value="<?=$arResult['PROPERTIES']['WEIGHT']['VALUE']?>">
			</div>
			<div class="grid-6 grid-12_s">
				<div>Производительность (м3/час)</div>
				<input type="text" name="capacity" placeholder="Производительность (м3/час)*" data-req="true">
				<div>Концентрация газообразного азота (%)</div>
				<input type="text" name="purity" placeholder="Концентрация газообразного азота (%)*" data-req="true">
				<div>Давление газообразного азота (бар)</div>
				<input type="text" name="pressure" placeholder="Давление газообразного азота (бар)*" data-req="true">
				<div>Точка росы азота (°С)</div>
				<input type="text" name="dew" placeholder="Точка росы азота (°С)*" data-req="true">
				<div>Расход сжатого воздуха (м3/мин)</div>
				<input type="text" name="air" placeholder="Расход сжатого воздуха (м3/мин)*" data-req="true">
			</div>
		</div>

		<div class="h4">Комплектность</div>
		<br>

		<div class="js-station-komplect">
			<div class="row">
				<div class="grid-6">Наименование</div>
				<div class="grid-3">Кол-во</div>
				<div class="grid-3">Заводской №</div>
			</div>
			<div class="row js-station-komplect-row">
				<div class="grid-6">
					<input type="text" name="komplect-name-1" class="js-komplect-name">
				</div>
				<div class="grid-3">
					<input type="text" name="komplect-num-1" class="js-komplect-num">
				</div>
				<div class="grid-3">
					<input type="text" name="komplect-serial-1" class="js-komplect-serial">
				</div>
			</div>
		</div>
		<a href="#" class="link link--white js-station-row-add">+ Добавить</a><br><br>

		<div>
			<button type="submit" class="btn btn--icon">Сгенерировать <i class="i-forward"></i></button>
		</div>
	</form>
</div>