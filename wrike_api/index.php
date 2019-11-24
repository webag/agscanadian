<?php
$json_str = file_get_contents('php://input');
$eventType = "TaskCreated";
$json_obj = json_decode($json_str);
$api_key = "eyJ0dCI6InAiLCJhbGciOiJIUzI1NiIsInR2IjoiMSJ9.eyJkIjoie1wiYVwiOjIyODE3NjYsXCJpXCI6NjY5NDI0NCxcImNcIjo0NjE0NjMxLFwidVwiOjQ2NzgxNjEsXCJyXCI6XCJVU1wiLFwic1wiOltcIldcIixcIkZcIixcIklcIixcIlVcIixcIktcIixcIkNcIixcIkFcIixcIkxcIl0sXCJ6XCI6W10sXCJ0XCI6MH0iLCJpYXQiOjE1NzI4MTQ3NjF9.hqd8KQapI9PLYDnHSOmIXa3yvp44V2yiWMvFD7MMHSY";
$api_key_amo = "f365a484e69388385b795dc3cf2d12d9100b831f";


$chat_token = "002.4240627938.2422712332:749556119"; // Токен чат бота
$chatid_buhg = "682253152@chat.agent"; // Чат бухгалтерии
$chatid_ing = "682214883@chat.agent"; // Чат инженерная служба
$chatid_proiz="682251730@chat.agent"; // Чат производства
$chatid_urist="682256391@chat.agent"; // Чат юристов
$chat_admin="682252804@chat.agent"; // Чат административных вопросов
$chatid_market="682251312@chat.agent"; // Чат маркетингового отдела
$chatid_tender="682228496@chat.agent"; // Чат тендерного отдела

$text_doc = "Поступил новый запрос на отгрузочные документы!\n";
$text_bild = "Поступил новый запрос на выставление счета!\n";
$text_buhg_vopros = "Поступил новый вопрос для бухгалтерии!\n";
$text_ingzad = "Поступил новый запрос на техническое решение!\n";
$text_ingzad_gaz = "Поступил новый запрос на техническое решение!\n";
$text_urist="Поступил новый запрос на юридическую помощь!\n";
$text_servis="Поступил новый запрос в сервисную службу!\n";
$text_new_project="Поступил новый проект в производство!\n";
$text_admin="Поступил новый административный вопрос!\n";
$text_market="Поступил новый зарос по маркетингу!\n";
$text_tender="Поступил новый зарос в тендерный отдел!\n";

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

if ($json_obj[0]->eventType==$eventType or $json_obj[0]->eventType=="TaskParentsAdded") { 
    
    $result = file_get_contents('https://www.wrike.com/api/v4/tasks/'.$json_obj[0]->taskId."?access_token=".$api_key);
    $result=json_decode($result);
    if ($result->data[0]->parentIds[0]==$docid) { //Отгрузочные документы
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_buhg."&text=".urlencode($text_doc)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);
    }
    if ($result->data[0]->parentIds[0]==$bildid) { // Запрос счета
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_buhg."&text=".urlencode($text_bild)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);
    }
    if ($result->data[0]->parentIds[0]==$buhg_vopr_id) { // Вопрос бухгалтерам
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_buhg."&text=".urlencode($text_buhg_vopros)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$ing_zadid) { // Инженерная задача
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_ing."&text=".urlencode($text_ingzad)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$proiz_ing_id) { // Инженерная задача
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_proiz."&text=".urlencode($text_ingzad_gaz)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$urist_id) { // Юридическая задача
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_urist."&text=".urlencode($text_urist)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$servis_id) { // Сервисная задача
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_proiz."&text=".urlencode($text_servis)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$new_project_id) { // Новый проект в работу
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_proiz."&text=".urlencode($text_new_project)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$admin_id) { // Новый проект в работу
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chat_admin."&text=".urlencode($text_admin)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$market_id) { // Новый запрос в маркетинг
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_market."&text=".urlencode($text_market)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    if ($result->data[0]->parentIds[0]==$tender_id) { // Новый запрос в маркетинг
            file_get_contents("https://myteam.mail.ru/bot/v1/messages/sendText?token=".$chat_token."&chatId=".$chatid_tender."&text=".urlencode($text_tender)."".urlencode($result->data[0]->title).urlencode("\n").$result->data[0]->permalink);

    }
    curl_close($ch);
}

//$log = date('Y-m-d H:i:s') . ' ' . print_r($json_obj, true);
//file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);



#Коментарии в АМО из WRIKE----------------------------------------------------------------------------

if ($json_obj[0]->eventType=="TaskStatusChanged" or $json_obj[0]->eventType=="CommentAdded") {
    $result = file_get_contents('https://www.wrike.com/api/v4/tasks/'.$json_obj[0]->taskId."?access_token=".$api_key);
    $result=json_decode($result); 
    
    foreach ($result->data[0]->customFields as $file_key => $fi){
    if ($fi->id=='IEACFUJGJUABEF5B') {
        
        //print_r($fi->value);
        
        #проверка вложений если изменен статус
        if ($result->data[0]->status=='Completed' and $json_obj[0]->eventType=="TaskStatusChanged"){
        $result_file = file_get_contents('https://www.wrike.com/api/v4/tasks/'.$json_obj[0]->taskId.'/attachments?access_token='.$api_key);
        $result_file=json_decode($result_file); 
        foreach ($result_file->data as $file_key => $fil){
        $result_url = file_get_contents('https://www.wrike.com/api/v4/attachments/'.$fil->id.'/url?access_token='.$api_key);
        $result_url=json_decode($result_url);
        $URL = str_replace("https://", "https:\\\//", $result_url->data[0]->url);
        $URL = str_replace("w", "%77", $URL);
        $fiels= $fiels.'Вложение: <a href="'.$URL.'" target="_blank">'.$fil->name.'</a><br><br>';};};
        if (!empty($fiels)) {$fiels="<br><b>Файлы:</b><br>".$fiels;};
    
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
    
        
        #Отправка коммернтария АМО-------------------------------------------------------------------
        
        if ($result->data[0]->parentIds[0]==$docid) {$coment_amo="Статус запроса закрывающих документов изменен на: ";};
        if ($result->data[0]->parentIds[0]==$bildid) {$coment_amo="Статус запроса счета изменен на: ";};
        if ($result->data[0]->parentIds[0]==$ing_zadid) {$coment_amo="Статус инженерной задачи изменен на: ";};
        if ($result->data[0]->parentIds[0]==$buhg_vopr_id) {$coment_amo="Статус бухгалтерского вопроса изменен на: ";};
        if ($result->data[0]->parentIds[0]==$proiz_ing_id) {$coment_amo="Статус производственной задачи на: ";};
        if ($result->data[0]->parentIds[0]==$urist_id) {$coment_amo="Статус юридической задачи изменен на: ";};
        if ($result->data[0]->parentIds[0]==$servis_id) {$coment_amo="Статус сервисной задачи изменен на: ";};
        if ($result->data[0]->parentIds[0]==$new_project_id) {$coment_amo="Статус проекта изменен на: ";};
        if ($result->data[0]->parentIds[0]==$admin_id) {$coment_amo="Статус административной задачи изменен на: ";};
        if ($result->data[0]->parentIds[0]==$market_id) {$coment_amo="Статус маркетинговой задачи изменен на: ";};
        if ($result->data[0]->parentIds[0]==$tender_id) {$coment_amo="Статус тендерной задачи изменен на: ";};
        
        if ($json_obj[0]->eventType=="CommentAdded") {
        if ($result->data[0]->parentIds[0]==$docid) {$coment_amo="Комментарий от бухгалтерии:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$bildid) {$coment_amo="Комментарий от бухгалтерии:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$ing_zadid) {$coment_amo="Комментарий инженерного отдела:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$buhg_vopr_id) {$coment_amo="Комментарий от бухгалтерии:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$proiz_ing_id) {$coment_amo="Комментарий от производства:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$urist_id) {$coment_amo="Комментарий от юриста:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$servis_id) {$coment_amo="Комментарий от сервисной службы:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$new_project_id) {$coment_amo="Комментарий от производства:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$admin_id) {$coment_amo="Комментарий от администрации:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$market_id) {$coment_amo="Комментарий от маркетинга:  ".$json_obj[0]->comment->text;};
        if ($result->data[0]->parentIds[0]==$tender_id) {$coment_amo="Комментарий от тендерного отдела:  ".$json_obj[0]->comment->text;};
        };

        $note = array('add'=>array('0'=>array(
                'element_id'=>$fi->value,
                'element_type'=>2,
                'text'=>$coment_amo.$json_obj[0]->status."\n".$result->data[0]->permalink."\n".$fiels,
                'note_type'=>4,
                'updated_at'=>time(),))); 
        
        
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
        
        
        if (($result->data[0]->status=='Completed') and ($json_obj[0]->eventType=="TaskStatusChanged")){
        $tasks['add'] = array(
                    #Привязываем к сделке
                 array(
                'element_id' => $fi->value, #ID сделки
                'element_type' => 2, #Показываем, что это - сделка, а не контакт
                'task_type' => 1709794, #WRIKE
                'text' => $coment_amo.$json_obj[0]->status."\n".$result->data[0]->permalink,
                //'responsible_user_id' => 109999,
                'complete_till_at' => time()+(2*60*60),
            ),);
        
        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL
        #Устанавливаем необходимые опции для сеанса cURL
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, 'https://agse.amocrm.ru/api/v2/tasks');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($tasks));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную 
        
        //$log = date('Y-m-d H:i:s') . ' ' . print_r($out, true);
        //file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
         }
        
        
        #Отправка коммернтария АМО-------------------------------------------------------------------
    
    
    
    };}
    
    
};




?>