<?php //для удаления webhooka напишите в строке адреса посл ID webhooka, и вызовите данный файл из строки браузера
$ch = curl_init('https://www.wrike.com/api/v4/webhooks/IEACFUJGJAAAFENQ');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer eyJ0dCI6InAiLCJhbGciOiJIUzI1NiIsInR2IjoiMSJ9.eyJkIjoie1wiYVwiOjIyODE3NjYsXCJpXCI6NjY5NDI0NCxcImNcIjo0NjE0NjMxLFwidVwiOjQ2NzgxNjEsXCJyXCI6XCJVU1wiLFwic1wiOltcIldcIixcIkZcIixcIklcIixcIlVcIixcIktcIixcIkNcIixcIkFcIixcIkxcIl0sXCJ6XCI6W10sXCJ0XCI6MH0iLCJpYXQiOjE1NzI4MTQ3NjF9.hqd8KQapI9PLYDnHSOmIXa3yvp44V2yiWMvFD7MMHSY')
);

$result = curl_exec($ch);
echo $result;
?>