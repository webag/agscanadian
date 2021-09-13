<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle('Contacts  of LLC "AGS"');
?>


<section class="s-page-header">
	<div class="container">
		<h1 class="h1">Contacts  of LLC "AGS"</h1>
	</div>
</section>


<section class="s-contacts-links">
	<div class="container">
		<div class="link-icon-list">
			<!--<a href="/AGS_requisites.pdf" class="link-icon" target="_blank" download><i class="i-pdf"></i>Company Details</a>-->
			<a href="#order_form" class="link-icon scrollto"><i class="i-bubbles"></i>Write to us</a>
			<!-- <a href="https://kazan.hh.ru/employer/4190110" class="link-icon" target="_blank"><i class="i-badge"></i>Openings</a> -->
		</div>
	</div>
</section>



<section class="s-geo-contacts">
	<div class="contacts-map-btns">
		<button class="contacts-map-btn">Moscow</button>
		<!-- <button class="contacts-map-btn">Saint Petersburg</button> -->
		<button class="contacts-map-btn">Rostov-on-Don</button>
	</div>

	<div id="geomap_cont" class="s-geo__map"></div>

	<div class="container">

		<div class="contact-items">

			<div class="contact-item">
				<div class="contact-item__city">Moscow</div>
				<address class="contact-item__address">Novajs Perevedenovskaja 8, building 1, Floor 2,<br>office 2-10</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Send vacancies and inquiries via email:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>How to get to</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-1.jpg" alt="1" class="contact-item__photo">
			</div>
			<!-- <div class="contact-item">
				<div class="contact-item__city">Saint Petersburg</div>
				<address class="contact-item__address">194044, B. Sampsonievsky Ave., 4-6, BC "Mont Blanc", of. 507</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Send vacancies and inquiries via email:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>How to get to</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-2.jpg" alt="1" class="contact-item__photo">
			</div> -->
			<div class="contact-item">
				<div class="contact-item__city">Rostov-on-Don</div>
				<address class="contact-item__address">НИП УК (Industrial park)</address>
				<a href="tel:+74955328640" class="contact-item__phone">+7 (495) 532-86-40</a>
				<div class="contacts-item__info">
					Send vacancies and inquiries via email:<br>
					<a href="mailto:info@agse.ru">info@agse.ru</a>
				</div>
				<a href="#" class="link-icon"><i class="i-mappin"></i>How to get to</a>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/img-5.jpg" alt="1" class="contact-item__photo">
			</div>

		</div>

	</div>

	<script>
		const contacts_from_admin = [
			['Moscow', 55.778593, 37.682269],
			['Saint Petersburg', 59.957482, 30.343706],
			['Rostov-on-Don', 47.254008, 39.602912],
		];
	</script>
</section>


<section class="s-home-order" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/dotted-map.png" id="order_form">
	<div class="container">

		<div class="order-block">
			<main class="order-block__main">
				<div class="h2 order-block__title">Write to us</div>
				<div class="order-block__descr">Send your question and the manager will contact you within 15 minutes.</div>
				<form class="ajax-form vertical-form contact-form">
					<input type="hidden" value="Вопрос со страницы контактов" name="form_subject">
					<div class="row">
						<div class="grid-4 grid-12_m">
							<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя" class="input-text">
							<input type="tel" name="user_tel" placeholder="Your phone number*" data-label="Телефон" class="input-text" data-req="true">
							<input type="email" name="user_email" placeholder="E-mail" data-label="Email" class="input-text">
						</div>
						<div class="grid-8 grid-12_m">
							<textarea name="user_comment" placeholder="Your inquiry" data-label="Комментарий" class="input-text"></textarea>
							<div class="row contact-form__actions">
								<div class="grid-6 grid-12_m">
									<button type="submit" class="btn">Send</button>
								</div>
								<div class="grid-6 grid-12_m">
									<label class="style-file">
										<input type="file" name="user_photo" data-multiple-caption="{count} файла(ов)" multiple>
										<i></i>
										<span class="style-file__text">Attach a file</span>
										<span class="style-file__delete" title="Clear">&#10006;</span>
									</label>
								</div>
							</div>
							<div class="form-note">By pressing Send I accept <a href="/AGS_policy.docx" target="_blank" download>the terms of use</a></div>
						</div>
					</div>
				</form>
			</main>
		</div>

	</div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>