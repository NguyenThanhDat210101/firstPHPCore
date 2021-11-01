<?php 
    $str1 = 'Nguyen Thanh Dat';
    $str2 = 'Thanh';
    echo 'Chuoi 1 '.$str1 . '<br>';
    echo 'Chuoi 2 '.$str2 .'<br>';
    // if(strpos($str1,$str2) == 0){
    //     echo 'chuỗi 1 có chứa chuỗi 2';
    // }
    // else{
    //     echo 'chuỗi 1 không chứa chuỗi 2';
    // }

    if(strlen(strstr($str1,$str2)) >0){
        echo 'chuỗi 1 có chứa chuỗi 2';
    }
    else{
        echo 'chuỗi 1 không chứa chuỗi 2';
    }

?>