<?php

if(isset($_POST)){
    sleep(3);
    while(!file_exists('response.txt') || !filesize('response.txt')){
        sleep(1);
    }
    //$arr = array('один' => 1, 'два' => 2, 'три' => 3);
    $arr = unserialize(file_get_contents('response.txt'));
  //  echo json_encode($arr);

    $option='';
    foreach($arr as $k=>$v)$option.='<option value="'.$k.'">'.$k.'</option>';
    echo $option;

}