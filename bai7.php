<?php
    $str1 = 'hom nay, troi dang nang';

    echo 'câu nguồn: '.$str1;
    echo '<br>câu thay thế: '. 
        str_replace('dang nang','mua va lanh',$str1);
?>