<footer class="s-site-footer">
	<div class="container">
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
				<!-- <a href="/AGS_requisites.pdf" target="_blank" download>Company Details</a> -->
				<a href="/presentation.pdf" download="presentation AGS" target="_blank">Company Presentation</a>
				<!-- <a href="https://kazan.hh.ru/employer/4190110" target="_blank">Openings</a> -->
				<!-- <a href="/AGS_policy.docx" target="_blank" download>Terms of Use</a> -->
			</div>

			<div class="footer__right">
				<div class="site-footer__contacts">
					<a href="tel:+74955328640" class="site-footer__phone">+7 495 532 86 40</a>
					<a href="mailto:info@agse.ru" class="site-footer__email">info@agse.ru</a>
				</div>
				<div class="footer__social">
					<a href="https://www.facebook.com/agseing/?modal=composer" target="_blank" title="Facebook"><i class="i-fb"></i></a>
					<a href="https://www.youtube.com/channel/UC8R-uqqQxtyrqxMw7oohjWA?view_as=subscriber" target="_blank"><i class="i-youtube" title="Youtube"></i></a>
					<a href="https://zen.yandex.ru/id/5ddc0d9f4b1a762d7ecbcee8?clid=300&token=" target="_blank" title="Яндекс Дзен"><i class="i-dzen"></i></a>
				</div>
			</div>

		</div>
	</div>
</footer>


<a href="#site-body" class="to-top-btn scrollto"><i class="i-to-up-ar"></i></a>

<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<p class="h2 modal__title">Call back</p>
		<p class="modal__descr">Leave your inquiry for a call back and we shall call you within 5 minutes</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<input type="hidden" value="<?=$_SERVER['REQUEST_URI']?>" name="site_page" data-label="Со страницы сайта">
			<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Phone number*" data-label="Телефон"  class="input-text" data-req="true">
			<button type="submit" class="btn">Order a call back</button>
			<div class="form-note">Pressing a button, I accept the <a href="/AGS_policy.docx" target="_blank" download>terms of the end-user license agreement</a></div>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h2 modal__title">Order a project</p>
		<p class="modal__descr">Please, leave an inquiry for estimating the cost of the project and we shall contact you to clarify the details</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="hidden" value="<?=$_SERVER['REQUEST_URI']?>" name="site_page" data-label="Со страницы сайта">
			<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя" class="input-text" >
			<input type="tel" name="user_tel" placeholder="Phone number*" data-label="Телефон"  class="input-text" data-req="true">
			<input type="email" name="user_email" placeholder="E-mail" data-label="Email" class="input-text">
			<button type="submit" class="btn">Order the calculation</button>
			<label class="style-file">
				<input type="file" name="user_photo" data-multiple-caption="{count} files" multiple>
				<i></i>
				<span class="style-file__text">Attach a file</span>
				<span class="style-file__delete" title="Clear">&#10006;</span>
			</label>
			<div class="form-note">Pressing a button, I accept the <a href="/AGS_policy.docx" target="_blank" download>terms of the end-user license agreement</a></div>
		</form>
	</div>

	<div id="modal-thanks" class="modal modal--thanks">
		<p class="h2 modal__title">Thank you</p>
		<!--<p class="modal__descr">Мы уже&nbsp;начали работу по&nbsp;вашей заявке</p>-->
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->


</body>
</html>