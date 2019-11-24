
<?php
$files=$_FILES['file'];
$amo_card_id = $_POST['idamo'];
$zapros_id = $_POST['zapros_id'];
$task_date = isset($_POST['trip-start']) ? $_POST['trip-start'] : '';
$descript = isset($_POST['descript']) ? $_POST['descript'] : '';
$vajn = isset($_POST['radio']) ? $_POST['radio'] : '';

$task_date_start = date("Y-m-d");

if (empty($task_date)){
$task_date = date("Y-m-d", strtotime("+3 days"));

}


$field_wrike=428853;


$api_key = "eyJ0dCI6InAiLCJhbGciOiJIUzI1NiIsInR2IjoiMSJ9.eyJkIjoie1wiYVwiOjIyODE3NjYsXCJpXCI6NjY5NDI0NCxcImNcIjo0NjE0NjMxLFwidVwiOjQ2NzgxNjEsXCJyXCI6XCJVU1wiLFwic1wiOltcIldcIixcIkZcIixcIklcIixcIlVcIixcIktcIixcIkNcIixcIkFcIixcIkxcIl0sXCJ6XCI6W10sXCJ0XCI6MH0iLCJpYXQiOjE1NzI4MTQ3NjF9.hqd8KQapI9PLYDnHSOmIXa3yvp44V2yiWMvFD7MMHSY";
$api_key_amo = "f365a484e69388385b795dc3cf2d12d9100b831f";

$ing_zadid = "IEACFUJGI4K6LWSB"; //Папка инженерные задачи АГС во wrike
$docid = "IEACFUJGI4MMIUMI"; //папка закрывающие документы во wrike
$bildid= "IEACFUJGI4MMIUKY"; //папка счета во wrike
$buhg_vopr_id = "IEACFUJGI4MQCBKW"; // Папка для бухгалтерских задач во wrike
$proiz_ing_id="IEACFUJGI4K6KTIX"; //папка инженерные задачи газмаш во wrike
$urist_id="IEACFUJGI4MQCBC2"; // папка юридических вопросов во wrike
$servis_id="IEACFUJGI4K6LXAV"; // папка для сервисных задач во врайке
$new_project_id = "IEACFUJGI4K6LW3Z"; // папка для новых проектов во wrike
$admin_id="IEACFUJGI4MQDCDH"; // Папка для административных задач во wrike
$market_id="IEACFUJGI4MQDF7V"; // Папка для маркетинговых задач во wrike
$tender_id="IEACFUJGI4MQSI2J"; // Папка для тендерных задач

if ($zapros_id == 1) {$wrike_direct = $ing_zadid; $coment_amo="Задача добавленна в инженерный отдел";};
if ($zapros_id == 2) {$wrike_direct = $tender_id; $coment_amo="Задача тендерному отделу добавлена";};
if ($zapros_id == 3) {$wrike_direct = $bildid; $coment_amo="Счет запрошен у бухгалтерии";};
if ($zapros_id == 4) {$wrike_direct = $docid; $coment_amo="Закрывающие документы запрошены";};
if ($zapros_id == 5) {$wrike_direct = $urist_id; $coment_amo="Задача добавленна в юридический отдел";};
if ($zapros_id == 6) {$wrike_direct = $servis_id; $coment_amo="Задача добавленна в сервисную службу";};
if ($zapros_id == 7) {$wrike_direct = $admin_id; $coment_amo="Административный вопрос добавлен";};
if ($zapros_id == 8) {$wrike_direct = $market_id; $coment_amo="Задача добавленна в маркетинговый отдел";};
if ($zapros_id == 9) {$wrike_direct = $buhg_vopr_id; $coment_amo="Задача добавленна в бухгалтерию";};
if ($zapros_id == 10) {$wrike_direct = $new_project_id; $coment_amo="Проект в работу добавлен";};

#Важность-----------------------------------------------
if ($vajn == 1) {$importance = "Low";};
if ($vajn == 2) {$importance = "Normal";};
if ($vajn == 3) {$importance = "High";};


#Авторизацтя в АМО--------------------------------------------------------------------------- 

$postdata1 = array ('USER_LOGIN'=>"alex@agse.ru", 'USER_HASH'=>$api_key_amo );

$ch2 = curl_init();
curl_setopt($ch2,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($ch2,CURLOPT_URL, 'https://agse.amocrm.ru/private/api/auth.php?type=json');
curl_setopt($ch2,CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch2,CURLOPT_HEADER, false);
curl_setopt($ch2, CURLOPT_COOKIEFILE, dirname (__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($ch2, CURLOPT_COOKIEJAR, dirname (__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($postdata1));

$output2 = curl_exec($ch2);

if ($output2 === FALSE) {
    //Тут-то мы о ней и скажем
    echo "cURL Error: " . curl_error($ch2);
    return;
}
$output2=json_decode($output2);
curl_close($ch2);

#Авторизацтя в АМО--------------------------------------------------------------------------- 


#Получение данных из карточки АМО------------------------------------------------------------

$cur2 = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($cur2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cur2, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($cur2, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/leads?id='.$amo_card_id);
curl_setopt($cur2, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($cur2, CURLOPT_POSTFIELDS, '');
curl_setopt($cur2, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($cur2, CURLOPT_HEADER, false);
curl_setopt($cur2, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($cur2, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($cur2, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cur2, CURLOPT_SSL_VERIFYHOST, 0);
$out2 = curl_exec($cur2); #Инициируем запро
$out2=json_decode($out2);

$cur3 = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($cur3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cur3, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($cur3, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/account?with=users');
curl_setopt($cur3, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($cur3, CURLOPT_POSTFIELDS, '');
curl_setopt($cur3, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($cur3, CURLOPT_HEADER, false);
curl_setopt($cur3, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($cur3, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($cur3, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cur3, CURLOPT_SSL_VERIFYHOST, 0);
$out3 = curl_exec($cur3); #Инициируем запро
$out3 =json_decode($out3);


$user_amo= $out3->_embedded->users->{$out2->_embedded->items[0]->responsible_user_id}->name.' - '.$out3->_embedded->users->{$out2->_embedded->items[0]->responsible_user_id}->login;


#Получение данных из карточки АМО------------------------------------------------------------



#Получаем ID менеджера во врайке------------------------------------------------------------

$result = file_get_contents('https://www.wrike.com/api/v4/contacts/?access_token='.$api_key);

$result=json_decode($result);
foreach ($result->data as $file_key => $fi){
if ($fi->profiles[0]->email==$out3->_embedded->users->{$out2->_embedded->items[0]->responsible_user_id}->login) {
    $id_manager_wrike =($fi->id);};
}
if (empty($id_manager_wrike)) {$coment_amo="Попросите администратора зарегестрировать Вас в системе WRIKE!\n Или добавить ваш e-mail в систему WRIKE!";};

#Получаем ID менеджера во врайке------------------------------------------------------------




#Создание задачи во WRIKE-------------------------------------------------------------------


$customFields[0] = array( "id"=>"IEACFUJGJUABEF5B", "value"=>$amo_card_id);
$postdata = array( 'title' => 'Задача из AMO - '.$out2->_embedded->items[0]->name,
                   'description' => "<b>Заказчик: ".$out2->_embedded->items[0]->name."</b><br><br>"."<b>Менеджер: ".$user_amo."</b><br><br>".nl2br($descript)."\n<br><br>Желаемый дедлайн: <b>".$task_date."<b>",
                   "customFields" => json_encode($customFields),
                   "importance"=>$importance,
                   'follow'=>'true',
                   "followers"=>json_encode(array($id_manager_wrike)),
                   "shareds"=>json_encode(array($id_manager_wrike)),
                   "dates"=>json_encode(array("start"=>$task_date_start,"due"=>$task_date))
                   );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.wrike.com/api/v4/folders/'.$wrike_direct.'/tasks');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$api_key));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

$output = curl_exec($ch);

if ($output === FALSE) {
    //Тут-то мы о ней и скажем
    echo "cURL Error: " . curl_error($ch);
    return;
}
$output=json_decode($output);
curl_close($ch);

#$log = date('Y-m-d H:i:s') . ' ' . print_r($output, true);
#file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

#Создание задачи во WRIKE-------------------------------------------------------------------


#Загрузка файлов во WRIKE-------------------------------------------------------------------
if (is_uploaded_file($_FILES['file']['tmp_name'][0])) {
$i=0;
foreach ($files['name'] as $file_key=> $fi){
$data = array('uploaded_file' => curl_file_create($files['tmp_name'][$i], $files['type'][$i], $fi));

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, 'https://www.wrike.com/api/v4/tasks/'.$output->data[0]->id.'/attachments');
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch1, CURLOPT_HEADER, false);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$api_key));
curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);

$output1 = curl_exec($ch1);


if ($output1 === FALSE) {
    //Тут-то мы о ней и скажем
    echo "cURL Error: " . curl_error($ch1);
    return;
}
$output1=json_decode($output1);
curl_close($ch1);
$i++;
}}

#Загрузка файлов во WRIKE-------------------------------------------------------------------



#Отправка коммернтария АМО-------------------------------------------------------------------

$note = array('add'=>array('0'=>array(
        'element_id'=>$amo_card_id,
        'element_type'=>2,
        'text'=>$coment_amo."\n".$output->data[0]->permalink."\n",
        'responsible_user_id' => 3924580,
        //'attachment'=> json_encode($data),
        'note_type'=>4,
        'updated_at'=>$unixTimestamp,
        'pinned'=>'true'))); 


$curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/notes');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($note));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную 


#Отправка коммернтария АМО-------------------------------------------------------------------

#$log = date('Y-m-d H:i:s') . ' ' . print_r($output, true);
#file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);


?>