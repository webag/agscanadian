<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Аренда азотных станций");
?>


	<section class="s-intro">
		<div class="s-intro__bg"></div>
		<div class="container intro">
			<h1 class="intro__title">Аренда азотных станций</h1>
			<div class="lead intro__lead">Платите только за&nbsp;потребляемый газ по&nbsp;счетчику, а&nbsp;все&nbsp;обязательства по&nbsp;монтажу, сервису и&nbsp;эксплуатаци мы&nbsp;берем на&nbsp;себя.</div>
			<a href="#" class="btn fancy-modal" data-src="#modal-order">Рассчитать стоимость</a>
		</div>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/intro/car.png" alt="car" class="intro__car">
	</section>


	<section class="s-sheme s-def" id="sheme">
		<div class="container">
			<div class="h2-promo sec-title">Схема поставки газов On-site и&nbsp;Аренда</div>

			<div class="tabs">
				<div class="tabs__nav">
					<a href="#" class="tabs__link active lead">On-Site</a>
					<a href="#" class="tabs__link lead">Аренда</a>
				</div>
				<div class="tabs__content">
					<div class="tabs__item active">
						<div class="sheme">
							<div class="lead sheme__text">ON-Site договор подразумевает оплату только за полученный газ согласно устройствам учета, при этом существует фиксированный минимальный обязательный объем потребления.</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/sheme/on-site.png" alt="Схема On-Site" class="sheme__img">
						</div>
					</div>
					<div class="tabs__item">
						<div class="sheme">
							<div class="lead sheme__text">Аренда – фиксированная оплата за предоставленное оборудования для производства технических газов, без учета выработанных продуктов.</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/sheme/arenda.png" alt="Схема аренды" class="sheme__img">
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="s-preims s-def-bottom" id="preims">
		<div class="container">
			<div class="h2-promo sec-title">Преимущества договора On-Site</div>

			<div class="row">
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">01</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_gas_counter.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Оплата только за&nbsp;поставленный газ</div>
						<div class="text-long preim__text">Заказчик оплачивает только за&nbsp;то&nbsp;количество газа которое потребляет, а&nbsp;компания «АГС» берет на&nbsp;себя всю ответственность за&nbsp;бесперебойные поставки по&nbsp;всем продуктовым линиям. За&nbsp;точность показаний отвечаю поверенные приборы, данные с&nbsp;которых передаются в&nbsp;систему CRM и&nbsp;отчеты отправляются в&nbsp;систему заказчика.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">02</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_container.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Отсутствие капитальных затрат</div>
						<div class="text-long preim__text">Производство, проектирование, поставку и&nbsp;ввод в&nbsp;эксплуатацию осуществляет компания АГС, в&nbsp;случае отсутствия помещения у&nbsp;заказчика, оборудование будет поставлено в&nbsp;блочно-модульном исполнении для размещения на&nbsp;открытой площадке.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">03</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_remote_control.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Эксплуатация установки на&nbsp;поставщике</div>
						<div class="text-long preim__text">Эксплуатацией установки занимаются сервисные инженеры компании АГС, и&nbsp;мы не&nbsp;привлекаем силы заказчика. Все установки имеют дистанционный доступ, для&nbsp;своевременного выявления возможных проблем и&nbsp;их&nbsp;решения, так&nbsp;же&nbsp;наши специалисты выполняют сервисное обслуживание для поддержания стабильной работы.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">04</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_saving.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Экономия</div>
						<div class="text-long preim__text">Система ON-Site позволяет заказчику высвободить дополнительный ресурс и&nbsp;сосредоточить внимание на&nbsp;своей главной компетенции. При&nbsp;этом не&nbsp;нести затраты связанные с&nbsp;оплатой труда персоналу, техническим обслуживанием, эксплуатацией, капитальным строительством, проектированием и&nbsp;гарантийными ремонтами.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">05</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_all_inone.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Все технические газы в&nbsp;одном месте</div>
						<div class="text-long preim__text">Мы глубоко погружаемся в&nbsp;техническое задание заказчика и&nbsp;обеспечиваем снабжение всеми техническими газами, при&nbsp;условии поставки редких газов доставку переработку и&nbsp;выдачу осуществляем своими силами.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">06</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_optimize.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Аудит и&nbsp;модернизация</div>
						<div class="text-long preim__text">При наличии у&nbsp;заказчика существующей магистральной сети технических газов, наши специалисты готовы провести аудит для&nbsp;выявления возможных потерь и&nbsp;неоптимального расхода. Для&nbsp;этого мы&nbsp;установим приборы учета перед каждым потребителем (цехом) , что&nbsp;позволит сформировать общую картину потребления.</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="s-gases s-def" id="gases">
		<div class="container">
			<div class="h2-promo sec-title">Газы, которые мы можем поставить</div>

			<div class="gas-type-grid">
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Азот</div>
					<div class="text-small gas-type__descr">Концентрация: до&nbsp;99,9999%<br>
						Состояние: газообразный, жидкий.</div>
					<span class="gas-type__link">Рассчитать стоимость</span>
					<div class="gas-type__label gas-type__label--azot h1">N<sub>2</sub></div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Кислород</div>
					<div class="text-small gas-type__descr">Концентрация: до&nbsp;99,9%<br>
						Состояние: газообразный, жидкий.</div>
					<span class="gas-type__link">Рассчитать стоимость</span>
					<div class="gas-type__label gas-type__label--kislorod h1">O<sub>2</sub></div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Аргон</div>
					<div class="text-small gas-type__descr">Концентрация: до&nbsp;99,9999%<br>
						Состояние: газообразный, жидкий.</div>
					<span class="gas-type__link">Рассчитать стоимость</span>
					<div class="gas-type__label gas-type__label--argon h1">Ar</div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Водород</div>
					<div class="text-small gas-type__descr">Концентрация: до&nbsp;99,9999%<br>
						Состояние: газообразный.</div>
					<span class="gas-type__link">Рассчитать стоимость</span>
					<div class="gas-type__label gas-type__label--vodorod h1">H</div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Углекислый газ</div>
					<div class="text-small gas-type__descr">Концентрация: любая.<br>
						Состояние: газообразный, жидкий.</div>
					<span class="gas-type__link">Рассчитать стоимость</span>
					<div class="gas-type__label gas-type__label--uglekis h2">CO<sub>2</sub></div>
				</div>
				<div class="gas-type-manager fancy-modal" data-src="#modal-order">
					<div class="gas-type-manager__text">Газовые смеси различной концентрации и&nbsp;конфигурации по&nbsp;Вашему запросу</div>
					<span class="link">Рассчитать стоимость</span>
				</div>
			</div>

		</div>
	</section>


	<section class="s-def s-products" id="products">
		<div class="container">
			<div class="h2-promo sec-title">Оборудование</div>
			<div class="lead s-products__lead">Для производства технических газов мы&nbsp;используем оборудование собственного производства.<br>Срок производства оборудования составляет от&nbsp;2&nbsp;до&nbsp;8&nbsp;месяцев в&nbsp;зависимости от&nbsp;параметров и&nbsp;технического задания.</div>

			<div class="products-grid">
				<a href="/products/azot-module/" class="product product--big">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/1.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="lead product__num">01</div>
						<div class="h2 product__title">Передвижные<br>азотно-компрессорные<br>станции</div>
						<ul class="product__params">
							<li>Производительность <nobr>до 15 000 м<sup>3</sup>/ч</nobr></li>
							<li>Давление до 400 Бар</li>
							<li>Концентрация до 99,9999%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
				<a href="/products/azot-membrana/" class="product">
					<div class="lead product__num">02</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/2.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Мембранные азотные станции</div>
						<ul class="product__params">
							<li>Производительность до 15 000 м<sup>3</sup>/ч</li>
							<li>Давление до 400 Бар</li>
							<li>Концентрация до 99,9%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
				<a href="/products/kislorod-station/" class="product">
					<div class="lead product__num">03</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/3.png" alt="3" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Адсорбционные кисолодные станции</div>
						<ul class="product__params">
							<li>Производительность до 5 000 м<sup>3</sup>/ч</li>
							<li>Давление до 400 Бар</li>
							<li>Концентрация до 95%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
				<a href="/products/azot-station/" class="product">
					<div class="lead product__num">04</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/4.png" alt="4" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Адсорбционные азотные станции</div>
						<ul class="product__params">
							<li>Производительность до 15 000 м<sup>3</sup>/ч</li>
							<li>Давление до 400 Бар</li>
							<li>Концентрация до 99,9999%</li>
						</ul>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
				<a href="/products/blocks/" class="product">
					<div class="lead product__num">05</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/5.png" alt="5" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Блочно-модульные станции</div>
						<div class="product__params">
							Все станции, которые мы производим могут быть изготовлены в блочно-модульном исполнении любой конфигурации.
						</div>
						<div class="link product__link">Подробнее</div>
					</div>
				</a>
			</div>

		</div>
	</section>


	<section class="s-def-bottom s-steps" id="steps">
		<div class="container">
			<div class="h2-promo sec-title">Как заключить договор</div>
			<div class="lead s-steps__lead">Срок реализации одного проекта составляет от 1 до 6 месяцев, зависит это от параметров технических газов и готовности площадки заказчика.</div>

			<div class="row">
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">1</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/1.svg" alt="1" class="step__icon">
						</div>
						<div class="h2 step__title">Подготовка технического решения</div>
						<div class="step__descr text-long">
							<p>Заказчик заполняет опросный лист, в&nbsp;котором описывает все&nbsp;требования к&nbsp;техническим газам.</p>
							<p>Далее инженеры компании «АГС» составляют техническое решения выбирая самые энергоэффективные методы снабжения и&nbsp;оборудование для&nbsp;выработки технических газов. </p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">2</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/2.svg" alt="2" class="step__icon">
						</div>
						<div class="h2 step__title">Подписание<br>договора</div>
						<div class="step__descr text-long">
							<p>После согласования технического решения  и&nbsp;коммерческого предложения инжинер компании АГС посещает площадку заказчика для&nbsp;окончательного утверждения параметров  и&nbsp;подписания договора  на&nbsp;поставку газов.</p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">3</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/3.svg" alt="3" class="step__icon">
						</div>
						<div class="h2 step__title">Производство оборудования</div>
						<div class="step__descr text-long">
							<p>При наличии необходимого оборудования на&nbsp;скаладе мы отправляем его&nbsp;заказчику  в&nbsp;кратчайшие сроки.</p>
							<p>При отсутствии необходимого оборудования, мы начинаем производство.</p>
							<p>Срок производства предварительно обсуждается с&nbsp;заказчиком.</p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step step--last">
						<div class="step__header">
							<div class="step__num"><i class="i-check"></i></div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/4.svg" alt="4" class="step__icon">
						</div>
						<div class="h2 step__title">Монтаж оборудования  и&nbsp;запуск газа</div>
						<div class="step__descr text-long">
							<p>Поставка газа по&nbsp;счетчким или&nbsp;аренда оборудования.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="s-calc">
		<div class="container">

			<form class="ajax-form calc">
				<input type="hidden" value="Заказ расчета стоимости из калькулятора (услуги АГС)" name="form_subject">

				<div class="h2-promo sec-title">Калькулятор</div>
				<div class="lead calc__lead">Для расчета стоимости и возможности поставки газа необходимо предоставить ряд технических параметров:</div>

				<div class="h2 calc__steptitle">Параметры</div>
				<div class="calc-param">
					<div class="calc-param__title">
						<span class="h2">1.</span><span class="lead">Газ или смесь</span>
					</div>
					<div class="calc-param__values">
						<div class="radio-group">
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Азот">
								<span>Азот</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Кислород">
								<span>Кислород</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Аргон">
								<span>Аргон</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Водород">
								<span>Водород</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Углекислый газ">
								<span>Углекислый газ</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Другой">
								<span>Другой</span>
							</label>
						</div>
					</div>
					<div class="input-group--other-gas">
						<label class="input-group ">
							<input type="text" name="other_gas_name" data-label="Другой газ" class="input-text">
							<span class="input-group__label">Название газа</span>
						</label>
					</div>
					<div class="calc-param__note text-micro">Вы можете выбрать один или несколько пунктов.</div>
				</div>
				<div class="calc-param__row">

					<div class="calc-param">
						<div class="calc-param__title">
							<span class="h2">2.</span><span class="lead">Концентрация</span>
						</div>
						<div class="calc-param__values">
							<label class="input-group">
								<input type="text" name="concentration" data-label="Концентрация" class="input-text input-text--110">
								<span class="input-group__label">99,9999%</span>
							</label>
						</div>
					</div>

					<div class="calc-param">
						<div class="calc-param__title">
							<span class="h2">3.</span><span class="lead">Производительность</span>
						</div>
						<div class="calc-param__values">
							<label class="input-group">
								<input type="text" name="proizv" data-label="Производительность" class="input-text input-text--150">
								<span class="input-group__label">До 15 000 м<sup>3</sup>/ч</span>
							</label>
						</div>
					</div>

					<div class="calc-param">
						<div class="calc-param__title">
							<span class="h2">4.</span><span class="lead">Давление (бар)</span>
						</div>
						<div class="calc-param__values">
							<div class="radio-group">
								<label class="radio-group__item">
									<input type="radio" name="pressure" data-label="Давление (бар)" value="0 — 10">
									<span>0 — 10</span>
								</label>
								<label class="radio-group__item">
									<input type="radio" name="pressure" data-label="Давление (бар)" value="10 — 40">
									<span>10 — 40</span>
								</label>
								<label class="radio-group__item">
									<input type="radio" name="pressure" data-label="Давление (бар)" value="150 — 450">
									<span>150 — 450</span>
								</label>
							</div>
						</div>
					</div>

				</div>

				<div class="h2 calc__steptitle">Куда отправить расчет</div>

				<div class="row calc__user vertical-form">
					<div class="grid-4 grid-12_s">
						<label class="input-group">
							<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
							<span class="input-group__label">Ваше имя</span>
						</label>
					</div>
					<div class="grid-4 grid-12_s">
						<label class="input-group">
							<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
							<span class="input-group__label">E-mail*</span>
						</label>
					</div>
					<div class="grid-4 grid-12_s">
						<label class="input-group">
							<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
							<span class="input-group__label">Телефон*</span>
						</label>
					</div>
				</div>

				<button type="submit" class="btn">Рассчитать стоимость</button>

			</form>

		</div>
	</section>


	<div class="lp-actions compensate-for-scrollbar">
		<a href="#" class="lp-action fancy-modal" data-src="#modal-call" title="Заказать обратный звонок">
			<i class="i-phone"></i>
		</a>
		<a href="#" class="fancy-modal lp-action" data-src="#modal-order" title="Заказать КП">
			<i class="i-order"></i>
		</a>
	</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>