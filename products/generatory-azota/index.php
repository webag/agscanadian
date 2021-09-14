<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Nitrogen generators");
?>


<section class="s-lp-header anim">
	<div class="container lp-header">
		<div class="lp-header__content">
			<div class="lp-header__label anim anim--bottom">Adsorption</div>
			<h1 class="h1-promo anim anim--bottom">Nitrogen generators</h1>
			<div class="h1 anim anim--bottom">from a reliable Russian manufacturer</div>
			<div class="lp-header__triggers">
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-1.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Performance:</p>
						<div class="lead">up to 5 000 m<sup>3</sup></div>
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
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-3.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Gas concentration:</p>
						<div class="lead">up to 99.9999%</div>
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
				<a href="https://youtu.be/ccKE1Ti8PS8" class="media-block fancy-video ">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp/header-video-azot.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">AGS nitrogen station overview</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">View</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/head-img-azotgen.png" alt="1" class="lp-header__img lp-header__img--azotgen anim anim--bottom">
</section>


<section class="s-order s-order--generatorkp">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Submit a request and</div>
			<div class="h1">get a commercial offer and a the generator cost calculation</div>
			<a href="/briefing.docx" class="doc-block" target="_blank">
				<div class="doc-block__content">
					<div class="text-small">Questionnaire</div>
					<div class="text-micro">(74 КБ, docx)</div>
				</div>
				<div class="doc-block__icon">
					<i class="i-download"></i>
				</div>
			</a>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос КП (генераторы азота)" name="form_subject">
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
					<span class="style-file__text">Attach file</span>
					<span class="style-file__delete" title="Очистить">&#10006;</span>
				</label>
				<button type="submit" class="btn">Request a quotation</button>
				<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-kp-azot.jpg" alt="1" class="s-order__img">
</section>


<section class="s-gen-params s-def">
	<div class="container">
		<div class="h2-promo sec-title">About our serial nitrogen generator</div>

		<div class="gen-params" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-params-azot.jpg">
			<div class="h1">Specifications</div>

			<div class="gen-params__list text-long">
				<div class="gen-params__item">
					<strong>Performance:</strong>
					<span>up to 5 000 m<sup>3</sup>/h</span>
				</div>
				<div class="gen-params__item">
					<strong>Concentration:</strong>
					<span>up to 99.9999%</span>
				</div>
				<div class="gen-params__item">
					<strong>Energy efficiency:</strong>
					<span>0,25 — 0,4 kW/m<sup>3</sup></span>
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
					<strong>Warranty:</strong>
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

			<a href="/AGS_catalog.pdf" class="doc-block" target="_blank">
				<div class="doc-block__content">
					<div class="text-small">Serial nitrogen generators booklet</div>
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
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-2.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Quick mode reach from 15 minutes</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-3.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Infinitely variable performance control</span>
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
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-6.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Accelerated regeneration</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="h2-promo sec-title">AGS nitrogen generators model range</div>

		<div class="table-params__wrapper">
			<div class="table-params table-params--genazot">

				<header class="table-params__header">
					<div class="row">
						<div class="grid-2">
							<div class="h3">Model</div>
						</div>
						<div class="grid-10">
							<div class="h3">Performance</div>
							<div class="gray">m<sup>3</sup>/h at a specified concentration</div>
							<div class="row table-params__header__concentration">
								<div class="grid-1-10">97%</div>
								<div class="grid-1-10">98%</div>
								<div class="grid-1-10">99%</div>
								<div class="grid-1-10">99,5%</div>
								<div class="grid-1-10">99,9%</div>
								<div class="grid-1-10">99,95%</div>
								<div class="grid-1-10">99,99%</div>
								<div class="grid-1-10">99,995%</div>
								<div class="grid-1-10">99,999%</div>
								<div class="grid-1-10">99,9995%</div>
							</div>
						</div>
					</div>
				</header>

				<main class="table-params__main">
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-2.5А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">4,2</div>
									<div class="grid-1-10">3,6</div>
									<div class="grid-1-10">2,9</div>
									<div class="grid-1-10">2,5</div>
									<div class="grid-1-10">1,9</div>
									<div class="grid-1-10">1,6</div>
									<div class="grid-1-10">1,2</div>
									<div class="grid-1-10">0,9</div>
									<div class="grid-1-10">0,6</div>
									<div class="grid-1-10">0,6</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-5А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">8,4</div>
									<div class="grid-1-10">7,3</div>
									<div class="grid-1-10">5,8</div>
									<div class="grid-1-10">5,0</div>
									<div class="grid-1-10">3,7</div>
									<div class="grid-1-10">3,2</div>
									<div class="grid-1-10">2,3</div>
									<div class="grid-1-10">1,8</div>
									<div class="grid-1-10">1,3</div>
									<div class="grid-1-10">1,1</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-7.5А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">12,6</div>
									<div class="grid-1-10">10,9</div>
									<div class="grid-1-10">8,7</div>
									<div class="grid-1-10">7,5</div>
									<div class="grid-1-10">5,6</div>
									<div class="grid-1-10">4,8</div>
									<div class="grid-1-10">3,5</div>
									<div class="grid-1-10">2,7</div>
									<div class="grid-1-10">1,9</div>
									<div class="grid-1-10">1,7</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-10А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">16,8</div>
									<div class="grid-1-10">14,5</div>
									<div class="grid-1-10">11,6</div>
									<div class="grid-1-10">10,0</div>
									<div class="grid-1-10">7,4</div>
									<div class="grid-1-10">6,4</div>
									<div class="grid-1-10">4,6</div>
									<div class="grid-1-10">3,5</div>
									<div class="grid-1-10">2,6</div>
									<div class="grid-1-10">2,3</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-20А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">33,5</div>
									<div class="grid-1-10">29,0</div>
									<div class="grid-1-10">23,2</div>
									<div class="grid-1-10">20,0</div>
									<div class="grid-1-10">14,8</div>
									<div class="grid-1-10">12,8</div>
									<div class="grid-1-10">9,3</div>
									<div class="grid-1-10">7,1</div>
									<div class="grid-1-10">5,2</div>
									<div class="grid-1-10">4,5</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__row">
						<div class="row">
							<div class="grid-2">
								<div class="lead">АВС-30А</div>
							</div>
							<div class="grid-10">
								<div class="row">
									<div class="grid-1-10">50,3</div>
									<div class="grid-1-10">43,5</div>
									<div class="grid-1-10">34,8</div>
									<div class="grid-1-10">30,0</div>
									<div class="grid-1-10">22,3</div>
									<div class="grid-1-10">19,2</div>
									<div class="grid-1-10">13,9</div>
									<div class="grid-1-10">10,6</div>
									<div class="grid-1-10">7,7</div>
									<div class="grid-1-10">6,8</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-params__hidden">
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-40А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">67,5</div>
										<div class="grid-1-10">58,1</div>
										<div class="grid-1-10">46,5</div>
										<div class="grid-1-10">40,0</div>
										<div class="grid-1-10">29,7</div>
										<div class="grid-1-10">25,5</div>
										<div class="grid-1-10">18,6</div>
										<div class="grid-1-10">14,2</div>
										<div class="grid-1-10">10,3</div>
										<div class="grid-1-10">9,0</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-50А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">83,9</div>
										<div class="grid-1-10">72,6</div>
										<div class="grid-1-10">58,1</div>
										<div class="grid-1-10">50,0</div>
										<div class="grid-1-10">37,1</div>
										<div class="grid-1-10">31,9</div>
										<div class="grid-1-10">23,2</div>
										<div class="grid-1-10">17,7</div>
										<div class="grid-1-10">12,9</div>
										<div class="grid-1-10">11,3</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-60А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">100,6</div>
										<div class="grid-1-10">87,1</div>
										<div class="grid-1-10">69,7</div>
										<div class="grid-1-10">60,0</div>
										<div class="grid-1-10">44,5</div>
										<div class="grid-1-10">38,3</div>
										<div class="grid-1-10">27,9</div>
										<div class="grid-1-10">21,3</div>
										<div class="grid-1-10">15,5</div>
										<div class="grid-1-10">13,5</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-80А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">134,2</div>
										<div class="grid-1-10">116,1</div>
										<div class="grid-1-10">92,9</div>
										<div class="grid-1-10">80,0</div>
										<div class="grid-1-10">59,4</div>
										<div class="grid-1-10">51,1</div>
										<div class="grid-1-10">37,2</div>
										<div class="grid-1-10">28,4</div>
										<div class="grid-1-10">20,6</div>
										<div class="grid-1-10">18,1</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-100А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">167,7</div>
										<div class="grid-1-10">145,2</div>
										<div class="grid-1-10">116,1</div>
										<div class="grid-1-10">100,0</div>
										<div class="grid-1-10">74,2</div>
										<div class="grid-1-10">63,9</div>
										<div class="grid-1-10">46,5</div>
										<div class="grid-1-10">35,5</div>
										<div class="grid-1-10">25,8</div>
										<div class="grid-1-10">22,6</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-120А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">201,3</div>
										<div class="grid-1-10">174,2</div>
										<div class="grid-1-10">139,4</div>
										<div class="grid-1-10">120,0</div>
										<div class="grid-1-10">89,0</div>
										<div class="grid-1-10">76,6</div>
										<div class="grid-1-10">55,7</div>
										<div class="grid-1-10">42,6</div>
										<div class="grid-1-10">31,0</div>
										<div class="grid-1-10">27,1</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-150А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">251,6</div>
										<div class="grid-1-10">217,7</div>
										<div class="grid-1-10">174,2</div>
										<div class="grid-1-10">150,0</div>
										<div class="grid-1-10">111,3</div>
										<div class="grid-1-10">95,8</div>
										<div class="grid-1-10">69,7</div>
										<div class="grid-1-10">53,2</div>
										<div class="grid-1-10">38,7</div>
										<div class="grid-1-10">33,9</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-170А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">285,2</div>
										<div class="grid-1-10">246,8</div>
										<div class="grid-1-10">197,4</div>
										<div class="grid-1-10">170,0</div>
										<div class="grid-1-10">126,1</div>
										<div class="grid-1-10">108,6</div>
										<div class="grid-1-10">79,0</div>
										<div class="grid-1-10">60,3</div>
										<div class="grid-1-10">43,9</div>
										<div class="grid-1-10">38,4</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-200А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">335,5</div>
										<div class="grid-1-10">290,3</div>
										<div class="grid-1-10">232,3</div>
										<div class="grid-1-10">200,0</div>
										<div class="grid-1-10">148,4</div>
										<div class="grid-1-10">127,7</div>
										<div class="grid-1-10">92,9</div>
										<div class="grid-1-10">71,0</div>
										<div class="grid-1-10">51,6</div>
										<div class="grid-1-10">45,2</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-250А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">419,4</div>
										<div class="grid-1-10">362,9</div>
										<div class="grid-1-10">290,3</div>
										<div class="grid-1-10">250,0</div>
										<div class="grid-1-10">185,5</div>
										<div class="grid-1-10">159,7</div>
										<div class="grid-1-10">116,1</div>
										<div class="grid-1-10">88,7</div>
										<div class="grid-1-10">64,5</div>
										<div class="grid-1-10">56,5</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-300А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">503,2</div>
										<div class="grid-1-10">435,5</div>
										<div class="grid-1-10">348,4</div>
										<div class="grid-1-10">300,0</div>
										<div class="grid-1-10">222,6</div>
										<div class="grid-1-10">191,6</div>
										<div class="grid-1-10">139,4</div>
										<div class="grid-1-10">106,5</div>
										<div class="grid-1-10">77,4</div>
										<div class="grid-1-10">67,7</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-params__row">
							<div class="row">
								<div class="grid-2">
									<div class="lead">АВС-350А</div>
								</div>
								<div class="grid-10">
									<div class="row">
										<div class="grid-1-10">587,1</div>
										<div class="grid-1-10">508,1</div>
										<div class="grid-1-10">406,5</div>
										<div class="grid-1-10">350,0</div>
										<div class="grid-1-10">259,7</div>
										<div class="grid-1-10">223,5</div>
										<div class="grid-1-10">162,6</div>
										<div class="grid-1-10">124,2</div>
										<div class="grid-1-10">90,3</div>
										<div class="grid-1-10">79,0</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>

			</div>

		</div>

		<div class="table-params__show-btn">
			<button class="btn btn--medium btn--secondary js-table-params-toggle">Expand the list</button>
		</div>

	</div>
</section>


<section class="s-order s-order--generator-price">
	<div class="container order">
		<div class="order__content">
			<div class="lead">Submit a request and</div>
			<div class="h1">get a full price list<br>for the nitrogen generator<br>model range</div>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос прайса (генераторы азота)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Your name</span>
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
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-price-azot.png" alt="1" class="s-order__img">
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
					<div class="h2-promo">Nitrogen generator device</div>
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
							<div class="gen-sostav__nav__item__hidden">Built on the basis of Siemens controllers with a local operator panel Touch-screen.<br>
								<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/sostav-logos-2.png" alt="1">
							</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Valve block with pneumatic control</div>
							<div class="gen-sostav__nav__item__hidden">Using pneumatically operated valves designed for high cyclic loading, more than 2 million operating cycles.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Dynamic preload system</div>
							<div class="gen-sostav__nav__item__hidden">For preventing the adsorbent abrasion  and the adsorption dust appearance.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Concentration set module</div>
							<div class="gen-sostav__nav__item__hidden">For preventing substandard nitrogen from entering the consumer.</div>
						</div>
					</div>
				</div>

				<div class="grid-6 grid-5_xl grid-6_l grid-12_s">
					<div class="gen-sostav__stage">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-sostav-main-azot.png" alt="1" class="gen-sostav__main-img">
						<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-sostav-second-azot.png" alt="1" class="gen-sostav__second-img">
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
		<div class="h2-promo sec-title">Nitrogen generator operating principle</div>
		<div class="sec-descr">Our company's nitrogen generators are based on the principle of pressure swing adsorption. Carbon molecular sieve (CMS) is used as an adsorbent. The operation scheme can be reflected in 6 stages.</div>

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
								<p>The valve for filling the adsorber A is opened. Compressed air is supplied to the adsorber A, as a result of which the pressure increases to the operating pressure.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 02/06</div>
								<div class="h2">Operation</div>
								<p>Upon reaching the operating pressure in the adsorber A, the nitrogen delivery valve to the consumer and the discharge valve from the adsorber B are opened. A part of the nitrogen is sent to the adsorber B for its regeneration.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 03/06</div>
								<div class="h2">Adsorbers switching</div>
								<p>After the adsorbent saturation with impurities in adsorber A, all valves are closed. At this moment, adsorber A is under operating pressure, and adsorber B is under a slight excess pressure in relation to atmospheric pressure.</p>
								<p>Then the valves in the upper and lower equalization lines are opened, as a result of which the pressure in both adsorbers becomes the same. Further, the valves in the equalization lines are closed and the filling valve of the adsorber B is opened.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 04/06</div>
								<div class="h2">Pressure build-up in adsorber B</div>
								<p>The valve for filling the adsorber B is opened. Compressed air is supplied to the adsorber B, as a result of which the pressure in it increases to the operating one.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 05/06</div>
								<div class="h2">Operation</div>
								<p>When the operating pressure in adsorber B is reached, the nitrogen delivery valve to the consumer and the relief valve from adsorber A are opened. Part of the nitrogen is sent to adsorber A for its regeneration.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Stage 06/06</div>
								<div class="h2">Adsorbers switching</div>
								<p>After the adsorbent saturation with impurities in adsorber B, all valves are closed. At this moment, adsorber B is under operating pressure, and adsorber A is under a slight excess pressure in relation to atmospheric pressure.</p>
								<p>Then the valves in the upper and lower equalization lines are opened, as a result of which the pressure in both adsorbers becomes the same. Further, the valves in the equalization lines are closed and the valve for filling the adsorber A is opened.</p>
								<p>This is a full cycle of the plant. In the future, this cycle is repeated many times.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid-6 grid-12_s">
					<div class="gen-princip__sheme">
						<div class="gen-princip__sheme__step active">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-1.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-2.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-3.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-4.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-5.png" alt="1">
						</div>
						<div class="gen-princip__sheme__step">
							<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/scheme-azot-6.png" alt="1">
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
					<div class="side-tabs__nav__item lead ">Carbon Molecular Sieve (CMS)</div>
				</div>
				<div class="side-tabs__content">
					<div class="side-tabs__content__item text-long active">
						<p>The pressure swing adsorption (PSA) technology is widely used to obtain various industrial gases, such as nitrogen, oxygen, hydrogen and others. In addition, it can be used for dehumidified compressed air.</p>
						<p>The PSA unit operation principle is based on the selective adsorption of some components of gas mixtures. In this case, the adsorption rate plays a significant role in the operation of such installations.  Since the cycle time is short, the adsorbed impurities saturate only the surface layers of the adsorbent granules, without any time for penetrating into the deep layers.  In this case, it is quite easy to conduct the subsequent desorption of the accumulated impurities by reducing the pressure in the adsorber and short-term blowdown with the product gas flow.</p>
					</div>
					<div class="side-tabs__content__item text-long">
						<p>Carbon molecular sieves (CMS) are porous synthetic substances designed to separate gas mixtures into components.  The most widespread use of CMS in the PSA is the installation as adsorbents for obtaining nitrogen from atmospheric air.</p>
						<p>The release of nitrogen from the air at  CMS is possible due to the different adsorption speed. Oxygen molecules penetrate into the inner pores of the adsorbent faster and are retained in them.  There is a gradual saturation of the  adsorbent with oxygen molecules along the length of the adsorption layer. At the same time, nitrogen is worse absorbed by the adsorbent granules due to the lower adsorption speed through the CMS, and penetrates through the adsorption layer.  Correctly selected type of CMS and optimal parameters of the unit operation cycle make it possible to obtain nitrogen with a concentration of up to 99.9999% directly in the PSA unit without additional purification.</p>
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
				<div class="h2-promo">Nitrogen plants</div>
				<div class="gray station-intro__text">We can produce a nitrogen plant with all the necessary related equipment in accordance with the individual technical specifications of the customer from 3 weeks</div>
				<a href="/products/azotnye-stantsii/" class="btn btn--medium btn--grey">Read more</a>
			</div>
			<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/intro-station-azot.png" alt="1" class="station-intro__img">
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