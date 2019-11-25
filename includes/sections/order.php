<section class="s-home-order" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/dotted-map.png">
	<div class="container">

		<div class="order-block">
			<div class="row-sg">
				<div class="grid-4 grid-12_m order-block__aside-wrap">
					<aside class="order-block__aside" data-lazybg="<?=SITE_TEMPLATE_PATH?>/img/home/order-aside.jpg">
						<div class="order-block__cont">
							<strong><a href="tel:+74955328640">+7 (495) 532-86-40</a></strong>
							<small>Phone</small>
						</div>
						<div class="order-block__cont">
							<strong><a href="mailto:info@agse.ru">info@agse.ru</a></strong>
							<small>Email</small>
						</div>
					</aside>
				</div>
				<div class="grid-8 grid-12_m">
					<main class="order-block__main">
						<div class="h2 order-block__title">Submit your inquiry</div>
						<div class="order-block__descr">If you are interested in our equipment and you want to receive detailed information</div>
						<form class="ajax-form vertical-form">
							<input type="hidden" value="Новая заявка" name="form_subject">
							<input type="hidden" value="<?=$_SERVER['REQUEST_URI']?>" name="site_page" data-label="Со страницы сайта">
							<div class="row">
								<div class="grid-6 grid-12_m">
									<input type="text" name="user_name" placeholder="Enter your name" data-label="Имя пользователя" class="input-text">
								</div>
								<div class="grid-6 grid-12_m">
									<input type="tel" name="user_tel" placeholder="Enter phone number*" data-label="Телефон" class="input-text" data-req="true">
								</div>
								<div class="grid-6 grid-12_m">
									<button type="submit" class="btn">Send</button>
								</div>
							</div>
						</form>
					</main>
				</div>
			</div>
		</div>

	</div>
</section>