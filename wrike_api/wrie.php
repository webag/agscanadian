<?php
$api_key = "eyJ0dCI6InAiLCJhbGciOiJIUzI1NiIsInR2IjoiMSJ9.eyJkIjoie1wiYVwiOjIyODE3NjYsXCJpXCI6NjY5NDI0NCxcImNcIjo0NjE0NjMxLFwidVwiOjQ2NzgxNjEsXCJyXCI6XCJVU1wiLFwic1wiOltcIldcIixcIkZcIixcIklcIixcIlVcIixcIktcIixcIkNcIixcIkFcIixcIkxcIl0sXCJ6XCI6W10sXCJ0XCI6MH0iLCJpYXQiOjE1NzI4MTQ3NjF9.hqd8KQapI9PLYDnHSOmIXa3yvp44V2yiWMvFD7MMHSY";

$result = file_get_contents('https://www.wrike.com/api/v4/contacts/?access_token='.$api_key);

$result=json_decode($result);
//print_r($result);
foreach ($result->data as $file_key => $fi){
    print_r($fi->profiles[0]->email);
if ($fi->profiles[0]->email=="kurock09@gmail.com" ){
    $id_manager_wrike =($fi->id);};
}

print_r($id_manager_wrike);


?>