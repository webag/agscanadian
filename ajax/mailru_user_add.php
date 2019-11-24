<?
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$name = $_POST['name'];
$email = $_POST['email'];
$domain   = 'agse.ru';
$group_to_add = 2;

$pos = strripos($email, $domain);

if ($pos !== false) {
	$group_to_add = 5;
}

CModule::IncludeModule('main');
global $USER;

//проверяем есть ли юзер с таким емелом, если есть, то авторизуем его, иначе регистрируем нового
$arFilter['EMAIL'] = $email;
$dbUsers = CUser::GetList($sort_by, $sort_ord, $arFilter);
while ($arUser = $dbUsers->Fetch())
{
	$usermail = $arUser["EMAIL"];
	$userId = $arUser['ID'];
}

if($usermail == $arFilter['EMAIL']){
	echo "Пользователь есть в системе. Авторизуем.";
	$USER->Authorize($userId);
}else{
	$user = new CUser;
	$arFields = Array(
		"NAME"              => $name,
		"EMAIL"             => $email,
		"LOGIN"             => $email,
		"LID"               => "ru",
		"ACTIVE"            => "Y",
		"GROUP_ID"          => array($group_to_add),
		"PASSWORD"          => "123456",
		"CONFIRM_PASSWORD"  => "123456"
	);

	$userID = $user->Add($arFields);

	if (intval($userID) > 0) :
		echo "Пользователь успешно добавлен.";
		$USER->Authorize($userID);
	else:
		echo "ошибка регистрации юзера";
	endif;
}






