<?php
    $str = 'tinh do dai cua mot chuoi';
    echo  $str. '<br>';
    
    $index =0;
    echo 'Độ dài của chuỗi trên: '. strlen($str);
    
    foreach(explode(" ",$str) as $item){
        $index +=  strlen($item);
    }

    echo '<br>Độ dài của chuỗi không tính khoảng trắng: '.$index;
?>