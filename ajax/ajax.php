<?php
define("file_name","data.txt");
$data=$_POST['data'];
file_put_contents(file_name, $data . PHP_EOL ,FILE_APPEND);
$contant=file_get_contents(file_name);
echo nl2br($contant);