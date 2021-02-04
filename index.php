<?php

set_time_limit(0);
ignore_user_abort(true);
ob_start(); // start buffer
// out page content
echo "Это может занять некоторое время, пожалуйста, подождите";
printf(file_get_contents('view/index.html'),file_get_contents('view/content.html'));
$length = ob_get_length();
// magic
header('Connection: close');
header("Content-Length: " . $length);
header("Content-Encoding: none");
header("Accept-Ranges: bytes");
ob_end_flush();
ob_flush();
flush();


//Данные отправлены и продалжаем выполнять скрипт
echo "если вы видите это, я не работаю = (";
//long, long operation
 if(!file_exists('response.txt')){
     touch('response.txt');
 }else{
     unlink('response.txt');
     touch('response.txt');
 }
file_put_contents('response.txt',serialize(array('пример один' => 1, 'пример два' => 2, 'пример три' => 3)));



