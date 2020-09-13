<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Генераторы кислорода");
?>


<section class="s-lp-header anim">
	<div class="container lp-header">
		<div class="lp-header__content">
			<div class="lp-header__label anim anim--bottom">Адсорбционные</div>
			<h1 class="h1-promo anim anim--bottom">Генераторы кислорода</h1>
			<div class="h1 anim anim--bottom">от надежного Российского производителя</div>
			<div class="lp-header__triggers">
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-1.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Производительность:</p>
						<div class="lead">до 500 м<sup>3</sup></div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-2.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Гарантия:</p>
						<div class="lead">24 месяца</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-o.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Концентрация газа:</p>
						<div class="lead">до 95.5%</div>
					</div>
				</div>
				<div class="lp-header__trigger anim anim--bottom">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp/header-trigger-4.svg" alt="1">
					<div class="lp-header__trigger__content">
						<p class="text-small">Срок службы:</p>
						<div class="lead">20 лет</div>
					</div>
				</div>
			</div>
			<div class="anim anim--bottom">
				<a href="https://youtu.be/Ap1B0wGoDL0" class="media-block fancy-video">
					<div class="media-block__frame" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp/header-video-kislorod.jpg)">
						<i class="i-play"></i>
					</div>
					<div class="media-block__content">
						<div class="text-small">Обзор кислородной станции АГС</div>
						<div class="media-block__actions">
							<div class="text-small media-block__action">Смотреть</div>
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
			<div class="lead">Оставьте заявку и</div>
			<div class="h1">Получите коммерческое предложение<br>и&nbsp;рассчет стоимости генератора</div>
			<a href="/products/generatory-azota/briefing.docx" class="doc-block" target="_blank" download="Опросный лист (азотная станция)">
				<div class="doc-block__content">
					<div class="text-small">Опросный лист</div>
					<div class="text-micro">(74 КБ, docx)</div>
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
					<span class="input-group__label">Ваше имя</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Телефон*</span>
				</label>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
					<i></i>
					<span class="style-file__text">Прикрепить файл</span>
					<span class="style-file__delete" title="Очистить">&#10006;</span>
				</label>
				<button type="submit" class="btn">Запросить КП</button>
				<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-kp-kislorod.jpg" alt="1" class="s-order__img">
</section>


<section class="s-gen-params s-def">
	<div class="container">
		<div class="h2-promo sec-title">О нашем серийном генераторе кислорода</div>

		<div class="gen-params" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/lp/gen-params-kislorod.jpg">
			<div class="h1">Технические характеристики</div>

			<div class="gen-params__list text-long">
				<div class="gen-params__item">
					<strong>Производительность:</strong>
					<span>до 500 м<sup>3</sup>/час</span>
				</div>
				<div class="gen-params__item">
					<strong>Концентрация:</strong>
					<span>до 95.5%</span>
				</div>
				<div class="gen-params__item">
					<strong>Энергоэффективность:</strong>
					<span>0,25 — 0,4 кВт/м<sup>3</sup></span>
				</div>
				<div class="gen-params__item">
					<strong>Давление:</strong>
					<span>до 12 бар</span>
				</div>
				<div class="gen-params__item">
					<strong>Точка россы:</strong>
					<span>– 60 C ̊</span>
				</div>
				<div class="gen-params__item">
					<strong>Гарантия:</strong>
					<span>24 месяца</span>
				</div>
				<div class="gen-params__item">
					<strong>Срок службы станции:</strong>
					<span>20 лет</span>
				</div>
				<div class="gen-params__item">
					<strong>Производство:</strong>
					<span>от 2 недель</span>
				</div>
			</div>

			<a class="doc-block">
				<div class="doc-block__content">
					<div class="text-small">Буклет серийных генераторов кислорода</div>
					<div class="text-micro">(9.1 МБ, pdf)</div>
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
		<div class="h1 sec-title anim anim--bottom">Преимущества генератора АГС</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Полная автоматизация генератора и&nbsp;всей станции</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-2-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Качественные компоненты от&nbsp;мировых лидеров</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-3-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Высокая надежность генератора</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Длительный срок службы адсорбента</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Высокая энергоэффективность</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/preim-6-k.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Контроль от&nbsp;попадания некандиционного газа потребителю</span>
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
			<div class="lead">Оставьте заявку и</div>
			<div class="h1">Получите полный<br>прайс-лист модельного<br>ряда генераторов<br>кислорода</div>
		</div>
		<div class="order__right">
			<form class="ajax-form vertical-form">
				<input type="hidden" value="Запрос прайса (генераторы кислорода)" name="form_subject">
				<label class="input-group">
					<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
					<span class="input-group__label">Ваше имя</span>
				</label>
				<label class="input-group">
					<input type="email" name="user_email" data-label="Email" class="input-text" data-req="true">
					<span class="input-group__label">E-mail*</span>
				</label>
				<label class="input-group">
					<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
					<span class="input-group__label">Телефон*</span>
				</label>
				<button type="submit" class="btn">Получить прайс-лист</button>
				<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
			</form>
		</div>
	</div>
	<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/orders/order-price-kislorod.png" alt="1" class="s-order__img">
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title">Последние реализованные проекты</div>
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
					<div class="h2-promo">Устройство генератора кислорода</div>
					<div class="gen-sostav__nav">
						<div class="gen-sostav__nav__item">
							<div class="lead">Адсорберы</div>
							<div class="gen-sostav__nav__item__hidden">Изготовленные специально для&nbsp;работы под&nbsp;высокими циклическими нагрузками. Внутреннее устройство адсорберов специально разработано для&nbsp;наибольшей энергоэффективности.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Адсорбент</div>
							<div class="gen-sostav__nav__item__hidden">В&nbsp;наших генераторах мы используем только качественные и&nbsp;проверенный адсорбент.<br>
								<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/sostav-logos-1.png" alt="1">
							</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Система управления и&nbsp;автоматизации</div>
							<div class="gen-sostav__nav__item__hidden">Построена на&nbsp;базе контроллеров Siemens с&nbsp;локальной панелью оператора Touch-screen.<br>
								<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/sostav-logos-2.png" alt="1">
							</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Клапанный блок с&nbsp;пневмоуправлением</div>
							<div class="gen-sostav__nav__item__hidden">С&nbsp;использованием пневмоуправляемых клапанов, рассчитанных на&nbsp;высокую циклическую нагрузку, более 2&nbsp;млн. циклов срабатывания.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Система динамического поджима</div>
							<div class="gen-sostav__nav__item__hidden">Для предотвращения стирания адсорбента и&nbsp;появления адсрбционной пыли.</div>
						</div>
						<div class="gen-sostav__nav__item">
							<div class="lead">Модуль набора концентрации</div>
							<div class="gen-sostav__nav__item__hidden">Для предотвращения попадания некондиционного кислорода потребителю.</div>
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
		<div class="h2-promo sec-title">Принцип работы генератора кислорода</div>
		<div class="sec-descr">Генераторы кислорода нашей компании основаны на принципе короткоцикловой адсорбции. В качестве адсорбента используется синтетические цеолиты. Схему работы можно отразить в 6 этапах.</div>

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
								<div class="lead gray">Этап 01/06</div>
								<div class="h2">Набор давления в&nbsp;адсорбере&nbsp;А</div>
								<p>Открывается клапан для наполнения адсорбера&nbsp;А. Начинается подача сжатого воздуха в&nbsp;адсорбер&nbsp;А, в&nbsp;результате чего давление в&nbsp;нем поднимается до&nbsp;рабочего.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Этап 02/06</div>
								<div class="h2">Работа</div>
								<p>По достижении рабочего давления в&nbsp;адсорбере&nbsp;А открывается клапан выдачи кислорода потребителю и&nbsp;клапан сброса из&nbsp;адсорбера&nbsp;Б. Часть кислорода направляется в&nbsp;адсорбер&nbsp;Б для его регенерации.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Этап 03/06</div>
								<div class="h2">Переключение адсорберов</div>
								<p>После насыщения адсорбента в&nbsp;адсорбере&nbsp;А примесями закрываются все клапаны. В&nbsp;этот момент адсорбер&nbsp;А находится под&nbsp;рабочим давлением, а&nbsp;адсорбер&nbsp;Б под&nbsp;небольшим избыточным давлением по&nbsp;отношению к&nbsp;атмосферному.</p>
								<p>Затем происходит открытие клапанов в&nbsp;верхней и&nbsp;нижней магистрали выравнивания, в&nbsp;результате чего давление в&nbsp;обоих адсорберах становится одинаковым. Далее клапаны в&nbsp;магистралях выравнивания закрываются и&nbsp;открывается клапан наполнения адсорбера&nbsp;Б.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Этап 04/06</div>
								<div class="h2">Набор давления в адсорбере Б</div>
								<p>Открывается клапан для&nbsp;наполнения адсорбера&nbsp;Б. Начинается подача сжатого воздуха в&nbsp;адсорбер&nbsp;Б, в&nbsp;результате чего давление в&nbsp;нем поднимается до&nbsp;рабочего.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Этап 05/06</div>
								<div class="h2">Работа</div>
								<p>По&nbsp;достижении рабочего давления в&nbsp;адсорбере&nbsp;Б открывается клапан выдачи кислорода потребителю и&nbsp;клапан сброса из&nbsp;адсорбера&nbsp;А. Часть кислорода направляется в&nbsp;адсорбер&nbsp;А для&nbsp;его регенерации.</p>
							</div>
							<div class="gen-princip__info__step">
								<div class="lead gray">Этап 06/06</div>
								<div class="h2">Переключение адсорберов</div>
								<p>После насыщения адсорбента в&nbsp;адсорбере&nbsp;Б примесями закрываются все клапаны. В&nbsp;этот момент адсорбер Б&nbsp;находится под рабочим давлением, а&nbsp;адсорбер&nbsp;А под&nbsp;небольшим избыточным давлением по&nbsp;отношению к&nbsp;атмосферному.</p>
								<p>Затем происходит открытие клапанов в&nbsp;верхней и&nbsp;нижней магистрали выравнивания, в&nbsp;результате чего давление в&nbsp;обоих адсорберах становится одинаковым. Далее клапаны в&nbsp;магистралях выравнивания закрываются и&nbsp;открывается клапан наполнения адсорбера&nbsp;А.</p>
								<p>На&nbsp;этом завершается полный цикл работы установки. В&nbsp;дальнейшем происходит многократное повторение этого цикла.</p>
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
			<div class="h2 useful__title">Полезная информация</div>
			<div class="side-tabs">
				<div class="side-tabs__nav">
					<div class="side-tabs__nav__item lead active">Короткоцикловая адсорбция (КЦА)</div>
					<div class="side-tabs__nav__item lead">Синтетические цеолиты</div>
				</div>
				<div class="side-tabs__content">
					<div class="side-tabs__content__item text-long active">
						<p>Технология короткоцикловой безнагревной адсорбции (КЦА) широко применяется для&nbsp;получения различных технических газов, таких как: азот, кислород, водород и&nbsp;других. Кроме того, с&nbsp;ее помощью возможно осушение сжатого воздуха.</p>
						<p>Принцип действия установок КЦА основан на&nbsp;избирательной адсорбции некоторых компонентов газовых смесей. При&nbsp;этом существенную роль в&nbsp;работе таких установок играет скорость адсорбции. Поскольку длительность цикла невелика, адсорбирумые примеси насыщают лишь поверхностные слои гранул адсорбента, не&nbsp;успевая проникнуть в&nbsp;глубинные слои. В&nbsp;этом случае достаточно легко произвести последующую десорбцию накопленных примесей за&nbsp;счет снижения давления в&nbsp;адсорбере и&nbsp;непродолжительной продувки потоком продуктового газа.</p>
					</div>
					<div class="side-tabs__content__item text-long">
						<p>Синтетические цеолиты – высокопористые вещества с&nbsp;развитой структурой и&nbsp;большой удельной площадью поверхности. Обладая избирательной адсорбционной способностью к&nbsp;различным газам позволяют выделять из&nbsp;газовых смесей отдельные компоненты.</p>
						<p>Так, наиболее часто, цеолиты используются для&nbsp;получения кислорода из&nbsp;атмосферного воздуха. В&nbsp;основе этого процесса лежит большая адсорбционная активность цеолитов к&nbsp;поглощению азота, чем&nbsp;к&nbsp;поглощению кислорода. Современные КЦА установки при&nbsp;использовании высокоэффективных синтетических цеолитов позволяют получать газообразный кислород с&nbsp;концентрацией до&nbsp;99%.</p>
					</div>
				</div>
			</div>
			<div class="useful__bottom">
				<div class="gray">Остались вопросы или вы хотите  получить больше информации? </div>
				<a href="#modal-consult" class="btn btn--medium btn--grey fancy-modal">Получить консультацию</a>
			</div>
		</div>
	</div>
</section>


<section class="s-def">
	<div class="container">
		<div class="h2-promo sec-title anim anim--bottom">Сервис</div>
		<div class="sec-descr lead anim anim--bottom">Осуществляем полный комплекс сервисного обслуживания для всего производимого оборудования</div>

		<div class="icon-blocks-grid">
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-1.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Гарантия на&nbsp;генераторы кислорода 2&nbsp;года</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-2.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Сервисная поддержка в&nbsp;течении 24&nbsp;часов</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-3.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Обучение и&nbsp;консультация персонала заказчика</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-4.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Круглосуточная техническая поддержка</span>
				</div>
			</div>
			<div class="icon-block-h anim anim--bottom">
				<div class="icon-block-h__icon">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/service-5.svg" alt="1">
				</div>
				<div class="icon-block-h__text">
					<span>Сервисная поддержка в&nbsp;любой точке мира</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="station-intro">
			<div class="station-intro__content">
				<div class="h2-promo">Кислородные станции</div>
				<div class="gray station-intro__text">Мы можем произвести кислородную станцию со&nbsp;всем необходимым сопутствующим оборудованием по&nbsp;индивидуальному техническому заданию заказчика от&nbsp;3&nbsp;недель</div>
				<a href="/products/kislorodnye-stantsii/" class="btn btn--medium btn--grey">Читать подробнее</a>
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