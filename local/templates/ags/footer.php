<footer class="s-footer">
	<div class="container">
		<div class="row">
			<div class="grid-4 grid-3_l grid-12_m footer-left__wrap">
				<div class="footer-left">
					<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo-footer.svg" alt="logo" class="footer-left__logo"></a>
					<div class="footer-left__descr">Full-cycle engineering company</div>
					<div class="footer-left__copy">© <?=date('Y')?> All rights reserved</div>
				</div>
			</div>
			<div class="grid-3 grid-6_m">
				<nav class="footer-nav">
					<a href="/products/">Our Products</a>
					<a href="/services/">Our Services</a>
					<a href="/cases/">Implemented Projects</a>
					<a href="/info/">Useful Information</a>
					<a href="/news/">News</a>
					<a href="/about/">About Company</a>
					<a href="/contacts/">Contacts</a>
				</nav>
			</div>
			<div class="grid-3 grid-6_m">
				<nav class="footer-nav">
					<a href="/AGS_requisites.pdf" target="_blank" download>Company Details</a>
					<!--<span>Референс-лист</span>-->
					<a href="/presentation.pdf" download="Презентация о компании AGS" target="_blank">Company Presentation</a>
					<a href="https://kazan.hh.ru/employer/4190110" target="_blank">Openings</a>
					<a href="/AGS_policy.docx" target="_blank" download>Terms of Use</a>
				</nav>
			</div>
			<div class="grid-2 grid-3_l grid-12_m">
				<div class="footer-socials">
					<a href="#" target="_blank"><i class="i-twitter"></i></a>
					<a href="#" target="_blank"><i class="i-fb"></i></a>
					<a href="#" target="_blank"><i class="i-vk"></i></a>
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


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(55070932, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55070932" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>(function(w, d, s, h, id) {    w.roistatProjectId = id; w.roistatHost = h;    var p = d.location.protocol == "https:" ? "https://" : "http://";    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);})(window, document, 'script', 'cloud.roistat.com', 'cb0ec38b87db844bcaa7b73229b3e129');</script>
<div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='b463ce099914e6b48cc4ae2e6836ae71';</script>
</body>
</html>