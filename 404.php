<?
define('IS_DYNAMIC', true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
$APPLICATION->SetTitle("Ошибка. Страница не найдена");
$APPLICATION->AddChainItem("Страница не найдена", "#");
?>


<section class="s-page-header">
	<div class="container">
		<h1 class="h1">Страница не найдена</h1>
	</div>
</section>

<section class="s-def">
	<div class="container">
		<div class="user-content">
			<a href="/" class="btn">Перейти на главную</a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>