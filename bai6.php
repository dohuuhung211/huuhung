<?php
    // Nhập vào 1 chuối và tìm kiếm 1 chuỗi “test” trong chuỗi đã nhập
    $str1 = "asdbkjqwtestkamdkasd";
    $str2 = "kamd";
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    foreach($arr1 as $val){
        echo $val;
    }
    if (strlen(strstr($str1, $str2)) > 0) {
        echo 'chuoi 2 nam trong chuoi 1';
    } else {
        echo 'chuoi 2 khong nam trong chuoi 1';
    }
    // $flag = false;
    // $i = 0; 
    // $j = 0;
    // while($arr1[$i] != 0){
    //     if($arr1[$i] == $arr2[$j]){
    //         $j++;
    //         if($arr2[$j] == 0){
    //             $flag = true;
    //             break;
    //         }
    //     } else {
    //         $j = 0;
    //         $i++;
    //     }
    // }
    // if($flag){
    //     echo 'Chuoi thu hai nam trong chuoi thu nhat';
    // } else {
    //     echo 'Chuoi thu hai khong nam trong chuoi thu nhat';
    // }

?>