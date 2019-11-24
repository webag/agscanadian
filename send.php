<?php
$subject = $_POST["form_subject"];
$message = "";
$tofile = $subject . ";";

foreach ($_POST as $input_name => $input_val) {
	$input_val = htmlspecialchars(strip_tags(trim($input_val)));
	if ($input_name != "form_subject") {
		if ( !strpos($input_name, '_label')){
			$input_label = $input_name . '_label';
			if (!empty($_POST[$input_label])) {
				$message .= $_POST[$input_label] . ": " . $input_val . "<br>";
			} else {
				$message .= $input_name . ": " . $input_val . "<br>";
			}
			$tofile .= $input_val . ";";
		}
	}
}

//запись в файл
$today = date("j.m.Y, G:i");
$tofile .= $today."\n";

$file = 'orders.csv';
$bom = "\xEF\xBB\xBF";
@file_put_contents($file, $bom . $tofile . file_get_contents($file));
//запись в файл конец

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer.php');
require_once('phpmailer_exception.php');

$mail = new PHPMailer(true);

$preparedDataForRoistat = [
	'title' => 'Заявка с сайта - ' . $_POST['form_subject'],
	'phone' => $_POST['user_tel'],
	'name' => isset($_POST['user_name']) ? $_POST['user_name'] : null,
	'email' => isset($_POST['user_email']) ? $_POST['user_email'] : null,
	'comment' => 'Страница - ' . $_POST['site_page']
];

try {
	$mail->CharSet = 'utf-8';
	$mail->setFrom('no-reply@agse.ru', 'agse.ru');
	$mail->addAddress('leads@agse.ru');
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $message;

	//Обрабатываем файлы
	if (isset($_FILES)) { //если есть файлы в форме
		foreach ($_FILES as $file_item) {
			if (!is_array($file_item['error'])) { //проверяем множественное или нет поле файла
				if ($file_item['error'] == UPLOAD_ERR_OK) {
					$mail->addAttachment($file_item['tmp_name'],$file_item['name']);
				}
			} else {
				foreach ($file_item["error"] as $key => $error){
					if ($error == UPLOAD_ERR_OK) {
						$tmp_name = $file_item["tmp_name"][$key];
						$name = $file_item["name"][$key];
						$mail->addAttachment($tmp_name,$name);
					}
				}
			}
		}
	}
	//Обрабатываем файлы

	sendToRoistat($preparedDataForRoistat);

	$mail->send();
	echo "Mail OK";
} catch (Exception $e) {
	echo "Mail FAIL: ".$e;
}
function sendToRoistat($preparedData) {
		$roistatData = array(
			'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
			'key'     => 'MTcwMzI6MTM5Mjg0OjgxMWQ5ZDJiYTVlZTJiYzY2ZjY3OGRhODdiZjYyZGQ0',
			'title'   => $preparedData['title'],
			'comment' => $preparedData['comment'],
			'name'    => $preparedData['name'],
			'email'   => $preparedData['email'],
			'phone'   => $preparedData['phone'],
			'is_need_callback' => '1',
			'sync'    => '0',
			'is_need_check_order_in_processing' => '1',
			'is_need_check_order_in_processing_append' => '1',
			'fields'  => isset($preparedData['fields']) ? $preparedData['fields'] : [],
		);

		file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
}
?>