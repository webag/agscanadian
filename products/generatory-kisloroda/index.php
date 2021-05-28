<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Oxygen Generators");
?>


<section class="s-lp-header anim">
	<div class="container lp-header">
		<div class="lp-header__content">
			<div class="lp-header__label anim anim--bottom">Adsorption</div>
			<h1 class="h1-promo anim anim--bottom">Oxygen Generators</h1>
			<div class="h1 anim anim--bottom">from a reliable Russian manufacturer</div>
			<div class="lp-header__triggers">
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-1.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Productivity:</p>
						<div class="lead">up to 500 m<sup>3</sup></div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-2.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Warranty:</p>
						<div class="lead">24 months</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-o.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Gas concentration:</p>
						<div class="lead">up to 95.5%</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-4.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Service life:</p>
						<div class="lead">20 years</div>
					</div>
				</div>
			</div>
			<div class="anim anim--bottom">
				<a href="https://youtu.be/Ap1B0wGoDL0" class="media-block fancy-video">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp/header-video-kislorod.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">AGS oxygen plant overview</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">View</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/head-img-kislorodgen.png" alt="1" class="lp-header__img lp-header__img--azotgen anim anim--bottom">
</section>


<section class="s-order s-order--generatorkp">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Submit a request and</div>
			<div class="h1">receive a commercial offer and a calculation of the cost of the generator</div>
			<a href="/products/generatory-azota/briefing.docx" class="doc-block" target="_blank" download="Опросный лист (азотная станция)">
				<div class="doc-block__content">
					<div class="text-small">Questionnaire</div>
					<div class="text-micro">(74 КB, docx)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос КП (генераторы кислорода)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Name</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Telephone*</span>
				</label>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
					<i></i>
					<span class="style-file__text">Attach a file</span>
					<span class="style-file__delete" title="Clear">&#10006;</span>
				</label>
				<button type="submit" class="btn">Request a quotation</button>
				<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-kp-kislorod.jpg" alt="1" class="s-order__img">
</section>


<section class="s-gen-params s-def">
	<div class="container">
		<div class="h2-promo sec-title">About our serial oxygen generator</div>

		<div class="gen-params" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-params-kislorod.jpg">
			<div class="h1">Specifications</div>

			<div class="gen-params__list text-long">
				<div class="gen-params__item">
					<strong>Performance:</strong>
					<span>up to 500 m<sup>3</sup>/h</span>
				</div>
				<div class="gen-params__item">
					<strong>Concentration:</strong>
					<span>up to 95.5%</span>
				</div>
				<div class="gen-params__item">
					<strong>Energy efficiency:</strong>
					<span>0,25 — 0,4  kW/m<sup>3</sup></span>
				</div>
				<div class="gen-params__item">
					<strong>Pressure:</strong>
					<span>up to 12 bar</span>
				</div>
				<div class="gen-params__item">
					<strong>Dew point:</strong>
					<span>– 60 C ̊</span>
				</div>
				<div class="gen-params__item">
					<strong>Guarantee:</strong>
					<span>24 months</span>
				</div>
				<div class="gen-params__item">
					<strong>Station service life:</strong>
					<span>20 years</span>
				</div>
				<div class="gen-params__item">
					<strong>Production:</strong>
					<span>from 2 weeks</span>
				</div>
			</div>

			<a class="doc-block">
				<div class="doc-block__content">
					<div class="text-small">Oxygen Generator Series Booklet</div>
					<div class="text-micro">(9.1 МB, pdf)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>

	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="h1 sec-title anim anim--bottom">AGS generator benefits</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Complete automation of the generator and the entire station</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-2-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Quality components from world leaders</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-3-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>High generator reliability</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Long service life of the adsorbent</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>High energy efficiency</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-6-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Control from the unconditional gas ingress to the consumer</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!--
<section class="s-def-bottom">
	<div class="container">
		<div class="h2-promo sec-title">Модельный ряд генераторов кислорода АГС</div>

		<div class="table-params__wrapper">
			<div class="table-params table-params--genazot">

				<header class="table-params__header">
					<div class="row">
						<div class="grid-2">
							<div class="h3">Модель</div>
						</div>
						<div class="grid-6">
							<div class="h3">Производительность</div>
							<div class="gray">м<sup>3</sup>/час при заданной концентрации</div>
							<div class="row table-params__header__concentration">
								<div class="grid-2">99%</div>
								<div class="grid-2">99,5%</div>
								<div class="grid-2">99,9%</div>
								<div class="grid-2">99,95%</div>
								<div class="grid-2">99,99%</div>
								<div class="grid-2">99,999%</div>
							</div>
						</div>
						<div class="grid-3 ta-right">
							<div class="h3">Габариты</div>
							<div class="gray">Д×Ш×В, мм</div>
						</div>
						<div class="grid-1 ta-right">
							<div class="h3">Вес</div>
							<div class="gray">кг</div>
						</div>
					</div>
				</header>

				<main class="table-params__main">
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-4А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">5,4</div>
									<div class="grid-2">4,8</div>
									<div class="grid-2">3,5</div>
									<div class="grid-2">3,1</div>
									<div class="grid-2">2,3</div>
									<div class="grid-2">1,3</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">600×700×1530</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">160</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-8А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">9,3</div>
									<div class="grid-2">8,2</div>
									<div class="grid-2">6,1</div>
									<div class="grid-2">5,4</div>
									<div class="grid-2">4,1</div>
									<div class="grid-2">2,2</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">600×700×1600</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">200</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-15А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">17,2</div>
									<div class="grid-2">15,2</div>
									<div class="grid-2">11,3</div>
									<div class="grid-2">9,9</div>
									<div class="grid-2">7,5</div>
									<div class="grid-2">4,1</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">750×750×1810</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">290</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-20А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">23,3</div>
									<div class="grid-2">20,6</div>
									<div class="grid-2">15,3</div>
									<div class="grid-2">13,5</div>
									<div class="grid-2">10,1</div>
									<div class="grid-2">5,6</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">750×750×1810</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">290</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-25А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">28,7</div>
									<div class="grid-2">25,4</div>
									<div class="grid-2">18,8</div>
									<div class="grid-2">16,6</div>
									<div class="grid-2">12,5</div>
									<div class="grid-2">6,8</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">750×750×1810</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">290</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-30А</div>
							</div>
							<div class="grid-6">
								<div class="row">
									<div class="grid-2">37,7</div>
									<div class="grid-2">31,7</div>
									<div class="grid-2">21,2</div>
									<div class="grid-2">16,9</div>
									<div class="grid-2">14,8</div>
									<div class="grid-2">8,4</div>
								</div>
							</div>
							<div class="grid-3 ta-right">
								<div class="gray">850×800×1620</div>
							</div>
							<div class="grid-1 ta-right">
								<div class="gray">470</div>
							</div>
						</div>
					</div>
					<div class="table-params__hidden">
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-40А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">45,2</div>
										<div class="grid-2">40,0</div>
										<div class="grid-2">29,7</div>
										<div class="grid-2">26,1</div>
										<div class="grid-2">19,6</div>
										<div class="grid-2">10,8</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">850×800×2100</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">500</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-50А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">57,5</div>
										<div class="grid-2">50,8</div>
										<div class="grid-2">37,7</div>
										<div class="grid-2">33,1</div>
										<div class="grid-2">24,9</div>
										<div class="grid-2">13,7</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1120×800×2000</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">850</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-60А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">68,2</div>
										<div class="grid-2">60,3</div>
										<div class="grid-2">44,8</div>
										<div class="grid-2">39,3</div>
										<div class="grid-2">29,6</div>
										<div class="grid-2">16,2</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1120×800×2000</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">850</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-75А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">86,2</div>
										<div class="grid-2">76,2</div>
										<div class="grid-2">56,5</div>
										<div class="grid-2">49,7</div>
										<div class="grid-2">37,4</div>
										<div class="grid-2">20,5</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1190×860×2300</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">1000</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-93А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">105,9</div>
										<div class="grid-2">93,6</div>
										<div class="grid-2">69,5</div>
										<div class="grid-2">61,1</div>
										<div class="grid-2">46,0</div>
										<div class="grid-2">25,2</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1330×860×2300</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">1250</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-120А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">136,5</div>
										<div class="grid-2">120,6</div>
										<div class="grid-2">89,5</div>
										<div class="grid-2">78,7</div>
										<div class="grid-2">59,2</div>
										<div class="grid-2">32,5</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1800×1115×2300</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">1350</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-162А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">183,1</div>
										<div class="grid-2">161,8</div>
										<div class="grid-2">120,2</div>
										<div class="grid-2">105,6</div>
										<div class="grid-2">79,5</div>
										<div class="grid-2">43,6</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1800×1115×2300</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">1550</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-186А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">211,9</div>
										<div class="grid-2">187,2</div>
										<div class="grid-2">139,0</div>
										<div class="grid-2">122,2</div>
										<div class="grid-2">91,9</div>
										<div class="grid-2">50,4</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1800×1115×2300</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">2100</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-250А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">283,7</div>
										<div class="grid-2">250,7</div>
										<div class="grid-2">186,1</div>
										<div class="grid-2">163,6</div>
										<div class="grid-2">123,1</div>
										<div class="grid-2">67,5</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">2000×1000×3000</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">3300</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-280А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">319,6</div>
										<div class="grid-2">282,4</div>
										<div class="grid-2">209,7</div>
										<div class="grid-2">184,3</div>
										<div class="grid-2">138,7</div>
										<div class="grid-2">76,1</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">2000×1000×3000</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">3300</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-350А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">398,6</div>
										<div class="grid-2">352,2</div>
										<div class="grid-2">261,5</div>
										<div class="grid-2">229,9</div>
										<div class="grid-2">172,9</div>
										<div class="grid-2">94,9</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1250×2600×3200</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">4500</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-500А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">567,4</div>
										<div class="grid-2">501,3</div>
										<div class="grid-2">372,2</div>
										<div class="grid-2">327,2</div>
										<div class="grid-2">246,2</div>
										<div class="grid-2">135,1</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1500×2900×3330</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">5200</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-750А</div>
								</div>
								<div class="grid-6">
									<div class="row">
										<div class="grid-2">851,1</div>
										<div class="grid-2">752,0</div>
										<div class="grid-2">558,4</div>
										<div class="grid-2">490,8</div>
										<div class="grid-2">369,2</div>
										<div class="grid-2">202,6</div>
									</div>
								</div>
								<div class="grid-3 ta-right">
									<div class="gray">1800×3300×3330</div>
								</div>
								<div class="grid-1 ta-right">
									<div class="gray">7500</div>
								</div>
							</div>
						</div>
					</div>
				</main>

			</div>

		</div>

		<div class="table-params__show-btn">
			<button class="btn btn--medium btn--secondary js-table-params-toggle">Раскрыть список</button>
		</div>

	</div>
</section>
-->

<section class="s-order s-order--generator-price">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Submit a request and</div>
			<div class="h1">get a full price list <br>of the oxygen generators <br>model range</div>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос прайса (генераторы кислорода)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Name</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Telephone*</span>
				</label>
				<button type="submit" class="btn">Get a price list</button>
				<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-price-kislorod.png" alt="1" class="s-order__img">
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title">Latest completed projects</div>
	</div>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"cases_slider",
		array(
			"ACTIVE_DATE_FORMAT" => "j F Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "SHOW_COUNTER",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "site_info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "9",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "MODEL",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "ID",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "DESC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "cases_slider"
		),
		false
	);?>

</section>


<section class="s-gen-sostav">
	<div class="container">
		<div class="gen-sostav">
			<div class="row">

				<div class="grid-6 grid-12_s">
					<div class="h2-promo">Oxygen generator device</div>
					<div class="gen-sostav__nav">
						<div class="gen-sostav__nav__item">
							<div class="lead">Adsorbers</div>
							<div class="gen-sostav__nav__item__hidden">Designed specifically for high cyclic loads. The interior of the adsorbers is specially designed for the highest energy efficiency.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Adsorbent</div>
							<div class="gen-sostav__nav__item__hidden">In our generators, we use only high-quality and proven adsorbent.<br>
								<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/sostav-logos-1.png" alt="1">
							</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Control and automation system</div>
							<div class="gen-sostav__nav__item__hidden">Built on the basis of Siemens controllers with a local Touch-screen operator panel.<br>
								<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/sostav-logos-2.png" alt="1">
							</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Valve block with pneumatic control</div>
							<div class="gen-sostav__nav__item__hidden">Using pneumatically operated valves designed for high cyclic loading, more than 2 million operating cycles.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Dynamic preload system</div>
							<div class="gen-sostav__nav__item__hidden">To prevent the adsorbent abrasion and the adsorption dust appearance.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Concentration set module</div>
							<div class="gen-sostav__nav__item__hidden">To prevent unconditional oxygen from entering the consumer’s plant.</div>
						</div>
					</div>
				</div>

				<div class="grid-6 grid-5_xl grid-6_l grid-12_s">
					<div class="gen-sostav__stage">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-sostav-main-kislorod.png" alt="1" class="gen-sostav__main-img">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-sostav-second-kislorod.png" alt="1" class="gen-sostav__second-img">
						<div class="gen-sostav__dots">
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--1"></div>
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--2"></div>
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--3"></div>
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--4"></div>
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--5"></div>
							<div class="plus-dot gen-sostav__dot gen-sostav__dot--6"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title">The oxygen generator operation principle</div>
		<div class="sec-descr">Our oxygen generators are based on the pressure swing adsorption principle. Synthetic zeolites are used as an adsorbent. The scheme of work can be reflected in 6 stages.</div>

		<div class="gen-princip">
			<div class="row">

				<div class="grid-6 grid-12_s">
					<div class="gen-princip__left">
						<div class="btn-arrows">
							<button class="btn-arrow js-genprincip-prev"><i class="i-ar-left"></i></button>
							<button class="btn-arrow js-genprincip-next"><i class="i-ar-right"></i></button>
						</div>
						<div class="gen-princip__info">
							<div class="gen-princip__info__step active">
								<div class="lead gray">Stage 01/06</div>
								<div class="h2">Pressure build-up in adsorber A</div>
								<p>The valve for filling the adsorber A is opened. Compressed air is supplied to the adsorber A, as a result of which the pressure in it increases to the working one.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 02/06</div>
								<div class="h2">Work</div>
								<p>When the operating pressure in adsorber A is reached, the oxygen delivery valve to the consumer and the relief valve from adsorber B are opened. A part of the oxygen is sent to adsorber B for its regeneration.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 03/06</div>
								<div class="h2">Adsorbers switching</div>
								<p>After the adsorbent saturation with impurities in adsorber A, all valves are closed. At this moment, adsorber A is under operating pressure, and adsorber B is under a slight excess pressure relating to atmospheric pressure.</p>
								<p>Then the valves in the upper and lower equalization lines are opened, as a result of which the pressure becomes the same  in both adsorbers.  Further, the valves in the equalization lines close and the filling valve of the adsorber B opens.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 04/06</div>
								<div class="h2">Pressure build-up in adsorber B</div>
								<p>The valve for filling the adsorber B is opened. Compressed air is supplied to the adsorber B, as a result of which the pressure in it increases to the working one.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 05/06</div>
								<div class="h2">Operation</div>
								<p>When the operating pressure in adsorber B is reached, the oxygen delivery valve to the consumer and the discharge valve from adsorber A are opened. Part of the oxygen is sent to adsorber A for its regeneration.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 06/06</div>
								<div class="h2">Switching adsorbers</div>
								<p>After saturation of the adsorbent in adsorber B with impurities, all valves are closed. At this moment, adsorber B is under operating pressure, and adsorber A is under a slight excess pressure in relation to atmospheric pressure.</p>
								<p>Then the valves in the upper and lower equalization lines are opened, as a result of which the pressure in both adsorbers becomes the same. Further, the valves in the equalization lines are closed and the valve for filling the adsorber A is opened.</p>
								<p>This is the full cycle of the installation. In the future, this cycle is repeated many times.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid-6 grid-12_s">
					<div class="gen-princip__sheme">
						<div class="gen-princip__sheme__step active">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-1.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-2.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-3.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-4.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-5.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-kislorod-6.png" alt="1">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="useful">
			<div class="h2 useful__title">Helpful information</div>
			<div class="side-tabs">
				<div class="side-tabs__nav">
					<div class="side-tabs__nav__item lead active">Pressure swing adsorption (PSA)</div>
					<div class="side-tabs__nav__item lead">Synthetic zeolites</div>
				</div>
				<div class="side-tabs__content">
					<div class="side-tabs__content__item text-long active">
						<p>The pressure swing adsorption (PSA) technology is widely used to obtain various industrial gases, such as nitrogen, oxygen, hydrogen and others. In addition, it can be used for dehumidified compressed air.</p>
						<p>The PSA unit operation principle is based on the selective adsorption of some components of gas mixtures. In this case, the adsorption rate plays a significant role in the operation of such installations.  Since the cycle time is short, the adsorbed impurities saturate only the surface layers of the adsorbent granules, without any time for penetrating into the deep layers.  In this case, it is quite easy to conduct the subsequent desorption of the accumulated impurities by reducing the pressure in the adsorber and short-term blowdown with the product gas flow.</p>
					</div>
					<div class="side-tabs__content__item text-long">
						<p>Synthetic zeolites are highly porous substances with a developed structure and a large specific surface area. Having selective adsorption capacity for various gases, they allow individual components to be separated from gas mixtures.</p>
						<p>So, most often, zeolites are used to obtain oxygen from atmospheric air. This process is based on a larger adsorption activity of zeolites for absorbing nitrogen than oxygen. Modern PSA plants using highly efficient synthetic zeolites that allow to  produce the gaseous oxygen with a concentration of up to 99%.</p>
					</div>
				</div>
			</div>
			<div class="useful__bottom">
				<div class="gray">Do you still have questions or would you like to get more information?</div>
				<a href="#modal-consult" class="btn btn--medium btn--grey fancy-modal">Get the consultation</a>
			</div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Service</div>
		<div class="sec-descr lead anim anim--bottom">We provide a full range of services for all manufactured equipment</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Nitrogen generators 2-year warranty</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-2.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Service support within 24 hours</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-3.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Training and consultation of the customer's personnel</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>24/7 technical support</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Worldwide service support</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="station-intro">
			<div class="station-intro__content">
				<div class="h2-promo">Oxygen plants</div>
				<div class="gray station-intro__text">We can produce an oxygen plant with all the necessary related equipment in accordance with the individual technical specifications of the customer from 3 weeks</div>
				<a href="/products/kislorodnye-stantsii/" class="btn btn--medium btn--grey">Read more</a>
			</div>
			<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/intro-station-kislorod.png" alt="1" class="station-intro__img">
		</div>
	</div>
</section>


<!--
<section class="s-def-bottom">
	<div class="container">
		<div class="h2-promo sec-title">Полезные статьи</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"articles_list",
			array(
				"ACTIVE_DATE_FORMAT" => "j F Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "SHOW_COUNTER",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "2",
				"IBLOCK_TYPE" => "site_info",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "3",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "articles_list"
			),
			false
		);?>

	</div>
</section>
-->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>