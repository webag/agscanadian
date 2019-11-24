<?php

$postdata1 = array ('USER_LOGIN'=>"alex@agse.ru", 'USER_HASH'=>"f365a484e69388385b795dc3cf2d12d9100b831f" );

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

//$data = '{"pinned":"true"}';


$curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/tasks/');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
//curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($note));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную 

$out=json_decode($out);
print_r($out);

/*
$cur2 = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($cur2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cur2, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($cur2, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/leads/?id=19571289');
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


$custom_fields1= $out2->_embedded->items[0]->responsible_user_id;
print_r ($custom_fields1);

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
print_r ($user_amo);


#print_r ($output);

//Добавление ID задачи WRIKE в АМО


//Модификация задачи жобавление АМО ID
/* $customFields[0] = array( "id"=>"IEACFUJGJUABEF5B", "value"=>"7171717");
$postdata1 = array("customFields" => json_encode($customFields));
                   
$ch1 = curl_init('https://www.wrike.com/api/v4/tasks/'.$output->data[0]->id);
curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$api_key));
curl_setopt($ch1, CURLOPT_POSTFIELDS, $postdata1);
$output1 = curl_exec($ch1);
if ($output1 === FALSE) {
    //Тут-то мы о ней и скажем
    echo "cURL Error: " . curl_error($ch1);
    return;
}
curl_close($ch1); 
$output1=json_decode($output1);
print_r($output1);

//Модификация задачи жобавление АМО ID */


#$log = date('Y-m-d H:i:s') . ' ' . print_r($_POST, true);
#file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

#Изменение карточки делки - добавление поля
/*
$unixTimestamp = time();
$leads['update'] = array(
    array(
        'id'=>$amo_card_id,
        'updated_at'=>$unixTimestamp,
        'custom_fields' => array(
            array(
                'id' => $field_wrike,
                'values' => array(array('value'=>$output->data[0]->id),),),),),
); 


$curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/leads');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($leads));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную

*/
#Изменение карточки делки - добавление поля



?>