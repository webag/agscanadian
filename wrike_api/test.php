<?php //для удаления webhooka напишите в строке адреса посл ID webhooka, и вызовите данный файл из строки браузера
$api_k='eyJ0dCI6InAiLCJhbGciOiJIUzI1NiIsInR2IjoiMSJ9.eyJkIjoie1wiYVwiOjIyODE3NjYsXCJpXCI6NjY5NDI0NCxcImNcIjo0NjE0NjMxLFwidVwiOjQ2NzgxNjEsXCJyXCI6XCJVU1wiLFwic1wiOltcIldcIixcIkZcIixcIklcIixcIlVcIixcIktcIixcIkNcIixcIkFcIixcIkxcIl0sXCJ6XCI6W10sXCJ0XCI6MH0iLCJpYXQiOjE1NzI4MTQ3NjF9.hqd8KQapI9PLYDnHSOmIXa3yvp44V2yiWMvFD7MMHSY';

$ch = curl_init('https://www.wrike.com/api/v4/tasks/IEACFUJGKQMPHI2O');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, '1');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer '.$api_k));
$result = json_decode(curl_exec($ch));
curl_close($ch);
print_r($result->data[0]->parentIds[0]);//поиск параметра
$text_doc = "Получен запрос на отгрузочные документы - ";
$text_doc_utf = htmlspecialchars($text_doc);
print_r($text_doc_utf);
?>