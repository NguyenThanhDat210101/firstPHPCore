<?php
    $str1 = 'Nguyen Thanh Dat';
    $str2 = 'phan thi huyen';
    
    echo 'chuỗi gốc: '. $str1 . '  , '.$str2;
    echo '<br> chuỗi in hoa toàn bộ: '. strtoupper($str2);
    echo '<br> chuỗi in thương toàn bộ: '.strtolower($str1);
    echo '<br> chuỗi in hoa chữ cái đầu tiên: '.ucwords($str2); 
    echo '<br> chuỗi chỉ in chữ hoa đầu chuỗi: '.ucfirst($str2);
?>