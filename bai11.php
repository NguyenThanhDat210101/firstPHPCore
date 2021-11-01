<?php
    $array = array(
        "Hoang"=>"31",
        "Nam"=>"41",
        "Minh"=>"39",
        "Hoa"=>"40",
    );
    
    asort($array);
    foreach($array as $key=>$value){
        switch ($value) {
            case max($array):
                echo $key .' : '.$value . '  Tuổi lớn nhất' .'<br>';
                break;

            case min($array):
                echo $key .' : '.$value . '  Tuổi nhỏ nhất' .'<br>';
                break;

            default:
                echo $key .' : '.$value .'<br>';
                break;
        }
    }
    
?>