<?php
    $str = 'hom nay lam test';

    echo $str .'<br>';


    if (strlen(strstr($str,"test")) >0){
        echo 'tìm thấy';
    }
    else{
        echo 'khong tim thay';
    }
    
?>