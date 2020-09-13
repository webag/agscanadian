<footer class="s-site-footer">
	<div class="container">

		<div class="footer-top">
			<div class="footer-top__left">Остались вопросы и вы хотите получить больше информации?</div>
			<div class="footer-top__action">
				<span class="text-small">Оставьте зеаявку<br>и мы вам перезвоним.</span>
				<a href="#modal-call" class="btn btn--medium fancy-modal">Перезвоните мне</a>
			</div>
			<div class="footer-top__action">
				<span class="text-small">Есть жалобы<br>или предложения?</span>
				<a href="#modal-letter" class="btn btn--medium btn--dark fancy-modal">Обращение в АГС</a>
			</div>
		</div>

		<div class="footer">

			<div class="footer__left">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo-footer.svg" alt="logo" class="footer__logo"></a>
				<!--<div class="lead footer__logo-descr">Adsorption Gas System</div>-->
				<div class="text-small">Full-cycle engineering company</div>
				<div class="footer__copy text-small">&copy; <?=date('Y')?> All rights reserved</div>
			</div>

			<div class="footer__nav">
				<a href="/products/">Our Products</a>
				<a href="/services/">Our Services</a>
				<a href="/cases/">Implemented Projects</a>
				<a href="/info/">Useful Information</a>
				<a href="/news/">News</a>
				<a href="/about/">About Company</a>
				<a href="/contacts/">Contacts</a>
			</div>

			<div class="footer__nav">
				<a href="/AGS_requisites.pdf" target="_blank" download>Company Details</a>
				<a href="/presentation.pdf" download="Презентация о компании AGS" target="_blank">Company Presentation</a>
				<a href="https://kazan.hh.ru/employer/4190110" target="_blank">Openings</a>
				<a href="/AGS_policy.docx" target="_blank" download>Terms of Use</a>
			</div>

			<div class="footer__right">
				<div class="site-footer__contacts">
					<a href="tel:+74955328640" class="site-footer__phone">+7 495 532 86 40</a>
					<a href="mailto:info@agse.ru" class="site-footer__email">info@agse.ru</a>
				</div>
				<div class="footer__social">
					<a href="https://www.facebook.com/agseing/?modal=composer" target="_blank" title="Facebook"><i class="i-fb"></i></a>
					<a href="https://www.youtube.com/channel/UC8R-uqqQxtyrqxMw7oohjWA?view_as=subscriber" target="_blank"><i class="i-yt" title="Youtube"></i></a>
					<a href="https://zen.yandex.ru/id/5ddc0d9f4b1a762d7ecbcee8?clid=300&token=" target="_blank" title="Яндекс Дзен"><i class="i-dzen"></i></a>
				</div>
			</div>

		</div>
	</div>
</footer>



<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h1 modal__title">Обратный звонок</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;обратный звонок и&nbsp;мы перезвоним Вам в&nbsp;течение 5&nbsp;минут</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<label class="input-group">
				<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
				<span class="input-group__label">Ваше имя</span>
			</label>
			<label class="input-group">
				<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
				<span class="input-group__label">Телефон*</span>
			</label>
			<button type="submit" class="btn">Заказать звонок</button>
			<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h1 modal__title">Заказать проект</p>
		<p class="modal__descr">Оставьте заявку на&nbsp;просчет проекта и&nbsp;мы свяжемся с&nbsp;Вами для&nbsp;уточнения деталей</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ поректа" name="form_subject">
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
			<button type="submit" class="btn">Заказать просчет</button>
			<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
		</form>
	</div>

	<div id="modal-letter" class="modal modal-letter">
		<form class="ajax-form letter-form">
			<input type="hidden" value="Обращение в АГС" name="form_subject">

			<div class="letter-form__first active">
				<p class="h1 modal__title">Свяжитесь с&nbsp;нами</p>
				<p class="modal__descr">Если у&nbsp;вас возникли вопросы, жалобы или&nbsp;предложения, — воспользуйтесь формой обратной связи.</p>
				<div class="double-inputs">
					<input type="text" name="user__theme" data-label="Тема обращения" class="input-text" placeholder="Тема обращения">
					<textarea rows="5" name="user_comment" class="input-text" data-label="Сообщение" placeholder="Сообщение"></textarea>
				</div>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
					<i></i>
					<span class="style-file__text">Прикрепить файл</span>
					<span class="style-file__delete" title="Очистить">&#10006;</span>
				</label>
				<div class="file-notes">JPG, PNG, BMP, PDF до 5 МБ. Видео до 100 МБ.</div>
				<div class="letter-form__first__actions">
					<div class="btn btn--secondary" data-fancybox-close>Закрыть</div>
					<div class="btn" data-letter="2">Далее</div>
				</div>
			</div>

			<div class="letter-form__second">
				<div class="letter-form__back" data-letter="1"><i class="i-ar-left"></i>Назад</div>
				<p class="h1 modal__title">Как с&nbsp;вами связаться?</p>
				<p class="modal__descr">Мы свяжемся с&nbsp;вами в&nbsp;ближайшее время</p>
				<div class="vertical-form">
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
					<button type="submit" class="btn">Отправить</button>
					<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
				</div>
			</div>

		</form>
	</div>

	<div id="modal-consult" class="modal modal-consult">
		<div class="modal-consult__wrapper">
			<div class="modal-consult__left">
				<a href="https://youtu.be/kMrdQCFi-xI" class="modal-consult__video fancy-video">
					<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/lp/consult-video.jpg" alt="">
					<i class="i-play"></i>
				</a>
			</div>
			<div class="modal-consult__right">
				<p class="h1 modal__title">Заинтересовало наше оборудование и&nbsp;хотите получить больше информации?</p>
				<p class="modal__descr">Оставьте заявку, мы перезвоним вам в&nbsp;течении 5&nbsp;минут и&nbsp;ответим на&nbsp;все ваши вопросы</p>
				<form class="ajax-form vertical-form">
					<input type="hidden" value="Заявка на консультацию" name="form_subject">
					<label class="input-group">
						<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
						<span class="input-group__label">Телефон*</span>
					</label>
					<button type="submit" class="btn">Отправить</button>
					<div class="form-privacy text-micro">Нажимая кнопку, принимаю<br><a href="/AGS_policy.docx" target="_blank" download>условия пользовательского соглашения</a></div>
				</form>
			</div>
		</div>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/thanks-img.svg" alt="1">
		<p class="h1 modal__title">Спасибо за&nbsp;обращение в&nbsp;нашу компанию</p>
		<p class="modal__descr">Наш менеджер свяжется с&nbsp;вами в&nbsp;ближайшее время.</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->


<script>
	(function(w, d, s, h, id) {
		w.roistatProjectId = id; w.roistatHost = h;
		var p = d.location.protocol == "https:" ? "https://" : "http://";
		var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
		var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
	})(window, document, 'script', 'cloud.roistat.com', 'cb0ec38b87db844bcaa7b73229b3e129');
</script>

<div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='b463ce099914e6b48cc4ae2e6836ae71';</script>
</body>
</html>