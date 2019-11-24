<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>


<section class="s-login">
	<div class="container">

		<? if (!empty($arResult['ERROR_MESSAGE']) || !empty($arParams["~AUTH_RESULT"])) : ?>
			<div class="alert-panel">
				<?
				ShowMessage($arParams["~AUTH_RESULT"]);
				ShowMessage($arResult['ERROR_MESSAGE']);
				?>
			</div>
		<? endif; ?>

		<div class="h3"><?=GetMessage("AUTH_PLEASE_AUTH")?></div>
		<br>

		<div class="mailru-login-button" data-ui="login_as userpic" data-type="login" style="width: 280px; height: 48px;"></div>
		<script src="https://oauth.mail.ru/sdk/v0.14.0/oauth.js"></script>
		<script>
			MR.init({
				clientId: '0865e83f9e514b098c3ebc89e51e91e2',
				onlogin: function (state) {
					if (state.user) {
						let email = state.user.email;
						let name = state.user.name;
						console.log(email);
						$.ajax({
							type: 'post',
							url: '/ajax/mailru_user_add.php',
							data: {email: email,name : name},
							cache: false,
							success: function (res) {
								console.log(res);
								location.reload();
							},
							error: function (res) {
								console.log('Ошибка при отправке запроса.');
								console.log(res);
							}
						});
					}
				},
				onlogout: function () {
					console.info('MR.logout');
				}
			});
		</script>

		<br>
		<!--
		<form name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="vertical-form">

			<input type="hidden" name="AUTH_FORM" value="Y" />
			<input type="hidden" name="TYPE" value="AUTH" />
			<?if (strlen($arResult["BACKURL"]) > 0):?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?endif?>
			<?foreach ($arResult["POST"] as $key => $value):?>
			<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>


			<?=GetMessage("AUTH_LOGIN")?>
			<input class="bx-auth-input input-text" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>">

			<?=GetMessage("AUTH_PASSWORD")?>
			<input class="bx-auth-input input-text" type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" />

			<label class="style-checkbox">
				<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
				<span><?=GetMessage("AUTH_REMEMBER_ME")?></span>
			</label>

			<input type="submit" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" class="btn"/>

		</form>

		<br>
		<noindex>
			<div class="bx-authform-link-container">
				<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="action-link" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
			</div>
		</noindex>
		<br>

		<?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y"):?>
			<noindex>
				<div class="bx-authform-link-container">
					<?=GetMessage("AUTH_FIRST_ONE")?><br />
					<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="action-link" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a>
				</div>
			</noindex>
		<?endif?>
		-->

	</div>
</section>

<script type="text/javascript">
<?if (strlen($arResult["LAST_LOGIN"])>0):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>
