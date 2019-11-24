<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle('Контакты ООО "АГС"');
?>


<section class="s-page-header">
	<div class="container">
		<h1 class="h1">Контакты ООО "АГС"</h1>
	</div>
</section>


<section class="s-contacts-links">
	<div class="container">
		<div class="link-icon-list">
			<a href="/AGS_requisites.pdf" class="link-icon" target="_blank" download><i class="i-pdf"></i>Реквизиты компании</a>
			<a href="#order_form" class="link-icon scrollto"><i class="i-bubbles"></i>Обратная связь</a>
			<a href="https://kazan.hh.ru/employer/4190110" class="link-icon" target="_blank"><i class="i-badge"></i>Наши вакансии</a>
		</div>
	</div>
</section>



<section class="s-geo-contacts">
	<div class="contacts-map-btns">
		<button class="contacts-map-btn">Москва</button>
		<button class="contacts-map-btn">Санкт-Петербург</button>
		<button class="contacts-map-btn">Новочеркасск</button>
	</div>

	<div id="geomap_cont" class="s-geo__map"></div>

	<div class="container">

		<div class="contact-items">

			<div class="contact-item">
				<div class="contact-item__city">г. Москва</div>
				<address class="contact-item__address">р-н Преображенское, Преображенская пл., 7АС1</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Вакансии и заявки присылайте на почту:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>Указатель проезда</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-4.jpg" alt="1" class="contact-item__photo">
			</div>
			<div class="contact-item">
				<div class="contact-item__city">г. Санкт-Петербург</div>
				<address class="contact-item__address">194044, Б.Сампсониевский пр-т, 4-6, БЦ&nbsp;"Монблан", оф.&nbsp;507</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Вакансии и заявки присылайте на почту:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>Указатель проезда</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-2.jpg" alt="1" class="contact-item__photo">
			</div>
			<div class="contact-item">
				<div class="contact-item__city">г. Новочеркасск</div>
				<address class="contact-item__address">Харьковское шоссе, 10Б, корпус&nbsp;851</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Вакансии и заявки присылайте на почту:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>Указатель проезда</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-3.jpg" alt="1" class="contact-item__photo">
			</div>

		</div>

	</div>

	<script>
		const contacts_from_admin = [
			['Москва', 55.795560, 37.709156],
			['Санкт-Петербург', 59.957482, 30.343706],
			['Новочеркасск', 47.469283, 40.100484],
		];
	</script>
</section>


<section class="s-home-order" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/dotted-map.png" id="order_form">
	<div class="container">

		<div class="order-block">
			<main class="order-block__main">
				<div class="h2 order-block__title">Напишите нам</div>
				<div class="order-block__descr">Отправьте ваш вопрос и&nbsp;менеджер свяжется с&nbsp;вами в&nbsp;течение 15&nbsp;минут.</div>
				<form class="ajax-form vertical-form contact-form">
					<input type="hidden" value="Вопрос со страницы контактов" name="form_subject">
					<div class="row">
						<div class="grid-4 grid-12_m">
							<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя" class="input-text">
							<input type="tel" name="user_tel" placeholder="Ваш телефон*" data-label="Телефон" class="input-text" data-req="true">
							<input type="email" name="user_email" placeholder="E-mail" data-label="Email" class="input-text">
						</div>
						<div class="grid-8 grid-12_m">
							<textarea name="user_comment" placeholder="Опишите ваш вопрос" data-label="Комментарий" class="input-text"></textarea>
							<div class="row contact-form__actions">
								<div class="grid-6 grid-12_m">
									<button type="submit" class="btn">Отправить</button>
								</div>
								<div class="grid-6 grid-12_m">
									<label class="style-file">
										<input type="file" name="user_photo" data-multiple-caption="{count} файла(ов)" multiple>
										<i></i>
										<span class="style-file__text">Прикрепить файл</span>
										<span class="style-file__delete" title="Очистить">&#10006;</span>
									</label>
								</div>
							</div>
							<div class="form-note">Нажимая кнопку, принимаю <a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
						</div>
					</div>
				</form>
			</main>
		</div>

	</div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>