<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Nitrogen station rental");
?>


	<section class="s-intro">
		<div class="s-intro__bg"></div>
		<div class="container intro">
			<h1 class="intro__title">Nitrogen station rental</h1>
			<div class="lead intro__lead">Pay only for the gas consumed according to the gas meter, and we take all the obligations for installation, service and operation upon ourselves.</div>
			<a href="#" class="btn fancy-modal" data-src="#modal-order">Calculate the cost</a>
		</div>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/intro/car.png" alt="car" class="intro__car">
	</section>


	<section class="s-sheme s-def" id="sheme">
		<div class="container">
			<div class="h2-promo sec-title">On-site and Rent gas supply scheme</div>

			<div class="tabs">
				<div class="tabs__nav">
					<a href="#" class="tabs__link active lead">On-Site</a>
					<a href="#" class="tabs__link lead">Rent</a>
				</div>
				<div class="tabs__content">
					<div class="tabs__item active">
						<div class="sheme">
							<div class="lead sheme__text">The On-Site contract implies payment only for the gas received according to gas metering devices, while there is a fixed minimum mandatory consumption volume.</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/sheme/on-site.png" alt="Схема On-Site" class="sheme__img">
						</div>
					</div>
					<div class="tabs__item">
						<div class="sheme">
							<div class="lead sheme__text">Rent - a fixed payment for the equipment provided for the production of technical gases, excluding the products produced.</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/sheme/arenda.png" alt="Схема аренды" class="sheme__img">
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="s-preims s-def-bottom" id="preims">
		<div class="container">
			<div class="h2-promo sec-title">On-Site contract benefits</div>

			<div class="row">
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">01</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_gas_counter.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Payment only for the supplied gas</div>
						<div class="text-long preim__text">The customer pays only for the consumed gas amount, and the AGS company takes full responsibility for uninterrupted supplies across all product lines upon itself. Confirmed devices are responsible for the accuracy of the readings, the data from which is transmitted to the CRM system and reports are sent to the customer's system.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">02</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_container.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Absence of capital costs</div>
						<div class="text-long preim__text">Production, design, delivery and commissioning is carried out by the AGS company, the equipment will be delivered in a modular design for placement in an open area in case of the absence of premises at the customer's plant.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">03</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_remote_control.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Plant maintenance is upon supplier</div>
						<div class="text-long preim__text">The unit is operated by service engineers of AGS company, and we do not involve the customer’s force. All installations have remote access for the timely identification of possible problems and their solutions, also our specialists perform service maintenance to maintain stable operation.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">04</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_saving.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Economy</div>
						<div class="text-long preim__text">The ON-Site system allows the customer to free up additional resources and focus on their core competencies, at the same time, not to bear the costs associated with salary of personnel, maintenance, operation, capital construction, design and warranty repairs.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">05</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_all_inone.svg" alt="" class="preim__img">
						<div class="h2 preim__title">All technical gases in one place</div>
						<div class="text-long preim__text">We dive deeply into the customer's technical assignment and ensure the supply of all technical gases, subject to the supply of rare gases, and we carry out the processing and delivery by ourselves.</div>
					</div>
				</div>
				<div class="grid-6 grid-12_xs">
					<div class="preim">
						<div class="lead preim__counter">06</div>
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/preims/icon_optimize.svg" alt="" class="preim__img">
						<div class="h2 preim__title">Audit and modernization</div>
						<div class="text-long preim__text">If the customer has an existing primary network of technical gases, our specialists are ready to conduct an audit in order to  identify possible losses and non-optimal consumption. To do this, we will mount metering devices  for each consumer (workshop), which will allow us to form an overall picture of consumption.</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="s-gases s-def" id="gases">
		<div class="container">
			<div class="h2-promo sec-title">Gases supplied by us</div>

			<div class="gas-type-grid">
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Nitrogen</div>
					<div class="text-small gas-type__descr">Concentration: up to 99,9999%<br>
						State: gaseous, liquid.</div>
					<span class="gas-type__link">Calculate the cost</span>
					<div class="gas-type__label gas-type__label--azot h1">N<sub>2</sub></div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Oxygen</div>
					<div class="text-small gas-type__descr">Concentration: up to 99,9%<br>
						State: gaseous, liquid.</div>
					<span class="gas-type__link">Calculate the cost</span>
					<div class="gas-type__label gas-type__label--kislorod h1">O<sub>2</sub></div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Argon</div>
					<div class="text-small gas-type__descr">Concentration: up to 99,9999%<br>
						State: gaseous, liquid.</div>
					<span class="gas-type__link">Calculate the cost</span>
					<div class="gas-type__label gas-type__label--argon h1">Ar</div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Hydrogen</div>
					<div class="text-small gas-type__descr">Concentration: up to 99,9999%<br>
						State: gaseous.</div>
					<span class="gas-type__link">Calculate the cost</span>
					<div class="gas-type__label gas-type__label--vodorod h1">H</div>
				</div>
				<div class="gas-type fancy-modal" data-src="#modal-order">
					<div class="h2 gas-type__title">Carbon dioxide</div>
					<div class="text-small gas-type__descr">Concentration: Any.<br>
						State: gaseous, liquid.</div>
					<span class="gas-type__link">Calculate the cost</span>
					<div class="gas-type__label gas-type__label--uglekis h2">CO<sub>2</sub></div>
				</div>
				<div class="gas-type-manager fancy-modal" data-src="#modal-order">
					<div class="gas-type-manager__text">Gas mixtures of various concentrations and configurations at your request</div>
					<span class="link">Calculate the cost</span>
				</div>
			</div>

		</div>
	</section>


	<section class="s-def s-products" id="products">
		<div class="container">
			<div class="h2-promo sec-title">Equipment</div>
			<div class="lead s-products__lead">For the technical gases production, we use equipment of our own production.<br>
				The equipment production term is from 2 to 8 months, depending on the parameters and technical specifications.</div>

			<div class="products-grid">
				<a href="/products/azot-module/" class="product product--big">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/1.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="lead product__num">01</div>
						<div class="h2 product__title">Mobile nitrogen compressor stations</div>
						<ul class="product__params">
							<li>Capacity <nobr>up to 15 000 m<sup>3</sup>/h</nobr></li>
							<li>Pressure up to 400 bar</li>
							<li>Concentration up to 99.9999%</li>
						</ul>
						<div class="link product__link">More</div>
					</div>
				</a>
				<a href="/products/azot-membrana/" class="product">
					<div class="lead product__num">02</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/2.png" alt="2" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Membrane nitrogen stations</div>
						<ul class="product__params">
							<li>Capacity up to 15 000 m<sup>3</sup>/h</li>
							<li>Pressure up to 400 bar</li>
							<li>Concentration up to 99.9%</li>
						</ul>
						<div class="link product__link">More</div>
					</div>
				</a>
				<a href="/products/kislorod-station/" class="product">
					<div class="lead product__num">03</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/3.png" alt="3" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Adsorption acid plants</div>
						<ul class="product__params">
							<li>Capacity up to 5 000 m<sup>3</sup>/h</li>
							<li>Pressure up to 400 bar</li>
							<li>Concentration up to 95%</li>
						</ul>
						<div class="link product__link">More</div>
					</div>
				</a>
				<a href="/products/azot-station/" class="product">
					<div class="lead product__num">04</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/4.png" alt="4" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Adsorption nitrogen stations</div>
						<ul class="product__params">
							<li>Capacity up to 15 000 m<sup>3</sup>/h</li>
							<li>Pressure up to 400 bar</li>
							<li>Concentration up to 99.9999%</li>
						</ul>
						<div class="link product__link">More</div>
					</div>
				</a>
				<a href="/products/blocks/" class="product">
					<div class="lead product__num">05</div>
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/products/5.png" alt="5" class="product__img">
					<div class="product__content">
						<div class="h2 product__title">Block modular stations</div>
						<div class="product__params">
							All stations that we manufacture can be manufactured in block-modular design of any configuration.
						</div>
						<div class="link product__link">More</div>
					</div>
				</a>
			</div>

		</div>
	</section>


	<section class="s-def-bottom s-steps" id="steps">
		<div class="container">
			<div class="h2-promo sec-title">How to conclude a contract</div>
			<div class="lead s-steps__lead">The term for the implementation of one project is from 1 to 6 months, it depends on the technical gases parameters and the readiness of the customer's plant.</div>

			<div class="row">
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">1</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/1.svg" alt="1" class="step__icon">
						</div>
						<div class="h2 step__title">Preparation of a technical solution</div>
						<div class="step__descr text-long">
							<p>The customer submits a questionnaire, which describes all the requirements for technical gases.</p>
							<p>Further, AGS engineers make up technical solutions choosing the most energy efficient supply methods and equipment for the industrial gases production.</p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">2</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/2.svg" alt="2" class="step__icon">
						</div>
						<div class="h2 step__title">Contract signing</div>
						<div class="step__descr text-long">
							<p>After agreeing on the technical solution and the commercial proposal, the AGS engineer visits the customer's plant for the final approval of the parameters and signing the gases supply contract.</p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step">
						<div class="step__header">
							<div class="step__num">3</div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/3.svg" alt="3" class="step__icon">
						</div>
						<div class="h2 step__title">Equipment production</div>
						<div class="step__descr text-long">
							<p>If the necessary equipment is available at the warehouse, we send it to the customer as soon as possible.</p>
							<p>In the absence of the necessary equipment, we start producing it.</p>
							<p>The lead time is discussed with the customer in advance.</p>
						</div>
					</div>
				</div>
				<div class="grid-3 grid-6_m grid-12_xs">
					<div class="step step--last">
						<div class="step__header">
							<div class="step__num"><i class="i-check"></i></div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/steps/4.svg" alt="4" class="step__icon">
						</div>
						<div class="h2 step__title">Equipment installation and gas start-up</div>
						<div class="step__descr text-long">
							<p>Supply of gas by meters or equipment rental.</p>
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

				<div class="h2-promo sec-title">Calculator</div>
				<div class="lead calc__lead">To calculate the cost and the possibility of gas supply, it is necessary to provide the following technical parameters:</div>

				<div class="h2 calc__steptitle">Parameters</div>
				<div class="calc-param">
					<div class="calc-param__title">
						<span class="h2">1.</span><span class="lead">Gas or mixture</span>
					</div>
					<div class="calc-param__values">
						<div class="radio-group">
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Азот">
								<span>Nitrogen</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Кислород">
								<span>Oxygen</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Аргон">
								<span>Argon</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Водород">
								<span>Hydrogen</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Углекислый газ">
								<span>Carbon dioxide</span>
							</label>
							<label class="radio-group__item">
								<input type="checkbox" name="gas[]" value="Другой">
								<span>Other</span>
							</label>
						</div>
					</div>
					<div class="input-group--other-gas">
						<label class="input-group ">
							<input type="text" name="other_gas_name" data-label="Другой газ" class="input-text">
							<span class="input-group__label">Gas name</span>
						</label>
					</div>
					<div class="calc-param__note text-micro">One or more items can be selected.</div>
				</div>
				<div class="calc-param__row">

					<div class="calc-param">
						<div class="calc-param__title">
							<span class="h2">2.</span><span class="lead">Concentration</span>
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
							<span class="h2">3.</span><span class="lead">Performance</span>
						</div>
						<div class="calc-param__values">
							<label class="input-group">
								<input type="text" name="proizv" data-label="Производительность" class="input-text input-text--150">
								<span class="input-group__label">Up to 15 000 m<sup>3</sup>/h</span>
							</label>
						</div>
					</div>

					<div class="calc-param">
						<div class="calc-param__title">
							<span class="h2">4.</span><span class="lead">Pressure (bar)</span>
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

				<div class="h2 calc__steptitle">Sending the calculations</div>

				<div class="row calc__user vertical-form">
					<div class="grid-4 grid-12_s">
						<label class="input-group">
							<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
							<span class="input-group__label">Your name</span>
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
							<span class="input-group__label">Telephone*</span>
						</label>
					</div>
				</div>

				<button type="submit" class="btn">Calculate the cost</button>

			</form>

		</div>
	</section>


	<div class="lp-actions compensate-for-scrollbar">
		<a href="#" class="lp-action fancy-modal" data-src="#modal-call" title="Callback">
			<i class="i-phone"></i>
		</a>
		<a href="#" class="fancy-modal lp-action" data-src="#modal-order" title="Calculate cost">
			<i class="i-order"></i>
		</a>
	</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>