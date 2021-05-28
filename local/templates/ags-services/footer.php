<footer class="s-site-footer">
	<div class="container">

		<div class="footer-top">
			<div class="footer-top__left">Do you still have questions and would like to receive more information?</div>
			<div class="footer-top__action">
				<span class="text-small">Submit a request<br>and we will call you back.</span>
				<a href="#modal-call" class="btn btn--medium fancy-modal">Call me back</a>
			</div>
			<div class="footer-top__action">
				<span class="text-small">Do you have any complaints<br>or suggestions?</span>
				<a href="#modal-letter" class="btn btn--medium btn--dark fancy-modal">Contacting AGS</a>
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
		<p class="h1 modal__title">Callback</p>
		<p class="modal__descr">Leave a request for a callback and we will call you back within 5 minutes</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<label class="input-group">
				<input type="text" name="user_name" data-label="Имя пользователя" class="input-text">
				<span class="input-group__label">Name</span>
			</label>
			<label class="input-group">
				<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
				<span class="input-group__label">Telephone*</span>
			</label>
			<button type="submit" class="btn">Order a call</button>
			<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h1 modal__title">Order a project</p>
		<p class="modal__descr">Leave a request for a project calculation and we will contact you in order to clarify the details</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ поректа" name="form_subject">
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
			<button type="submit" class="btn">Order a calculation</button>
			<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
		</form>
	</div>

	<div id="modal-letter" class="modal modal-letter">
		<form class="ajax-form letter-form">
			<input type="hidden" value="Обращение в АГС" name="form_subject">

			<div class="letter-form__first active">
				<p class="h1 modal__title">Contact us</p>
				<p class="modal__descr">In case of any questions, complaints or suggestions, please use the feedback form.</p>
				<div class="double-inputs">
					<input type="text" name="user__theme" data-label="Тема обращения" class="input-text" placeholder="Subject of the request">
					<textarea rows="5" name="user_comment" class="input-text" data-label="Сообщение" placeholder="Message"></textarea>
				</div>
				<label class="style-file">
					<input type="file" name="user_file" data-multiple-caption="{count} файла(ов)" multiple>
					<i></i>
					<span class="style-file__text">Attach a file</span>
					<span class="style-file__delete" title="Очистить">&#10006;</span>
				</label>
				<div class="file-notes">JPG, PNG, BMP, PDF up to 5 МB. Video up to 100 МB.</div>
				<div class="letter-form__first__actions">
					<div class="btn btn--secondary" data-fancybox-close>Close</div>
					<div class="btn" data-letter="2">Further</div>
				</div>
			</div>

			<div class="letter-form__second">
				<div class="letter-form__back" data-letter="1"><i class="i-ar-left"></i>Back</div>
				<p class="h1 modal__title">How can I contact you?</p>
				<p class="modal__descr">We will contact you as soon as possible</p>
				<div class="vertical-form">
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
					<button type="submit" class="btn">Send</button>
					<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
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
				<p class="h1 modal__title">Are you interested in our equipment and want to get more information?</p>
				<p class="modal__descr">Leave a request, we will call you back within 5 minutes and answer all your questions</p>
				<form class="ajax-form vertical-form">
					<input type="hidden" value="Заявка на консультацию" name="form_subject">
					<label class="input-group">
						<input type="tel" name="user_tel" data-label="Телефон"  class="input-text" data-req="true">
						<span class="input-group__label">Telephone*</span>
					</label>
					<button type="submit" class="btn">Send</button>
					<div class="form-privacy text-micro">By clicking the button, I accept<br><a href="/AGS_policy.docx" target="_blank" download>the user agreement terms</a></div>
				</form>
			</div>
		</div>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<img data-lazy="<?=SITE_TEMPLATE_PATH?>/img/thanks-img.svg" alt="1">
		<p class="h1 modal__title">Thank you for contacting our company</p>
		<p class="modal__descr">Our manager will contact you at the nearest possible time.</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Error</p>
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