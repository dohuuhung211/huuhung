<?php
    // Nhập vào 1 chuỗi và Đảo ngược chuỗi
    $str = '1234567898765';
    $arr = str_split($str);
    print_r ($arr);
    $str1 = '';
    for($i = 0; $i < count($arr) / 2; $i++){                
        $temp = $arr[$i];
        $arr[$i] = $arr[count($arr) - $i - 1];
        $arr[count($arr) - $i - 1] = $temp;
    }
    $str1 = implode('', $arr);
    echo $str1;
?>