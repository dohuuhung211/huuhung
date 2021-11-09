<?php 
    // tao 1 mang va chuyen doi mang thanh kieu chuoi;
    $arr = array('a', 'b', 'c', 'd', 'e', 'f');
    $str = implode($arr);
    if(is_string($str)){
        echo $str.' la chuoi';
    } else{
        echo 'khong phai chuoi';
    }
?>