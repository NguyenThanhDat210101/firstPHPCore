<?php
    $str = 'Nguyen Thanh Dat';
    echo $str.'<br>';
    echo 'chuỗi bị đảo ngược thành: '. strrev($str);

    $reverse = '';
    $array = explode(" ",$str);
    foreach(array_reverse($array) as $item){
        $reverse .= ' '.$item;
    }

    echo '<br> chuỗi bị đảo ngược nhưng không đổi vị trí trong từ: '
         .$reverse ;
?>