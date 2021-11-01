<?php
    $array = array(0,1,2,3,4,);
    print_r ($array);

    unset($array[0],$array[2]);
    echo '<br>
        <div style="color:red">
            đã xóa phần tử đầu và thứ 3 trong mảng 
        </div>';
    print_r  ($array);

    array_splice($array,0,0,'số 3');
    array_splice($array,2,0,'số 3');
    echo '<br>
        <div style="color:red">
            đã thêm giá trị số 3 vào phần tử đầu và thứ 3 trong mảng
        </div>';
    print_r  ($array);

?>