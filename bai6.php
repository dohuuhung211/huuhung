<?php
    // Nhập vào 1 chuối và tìm kiếm 1 chuỗi “test” trong chuỗi đã nhập
    $str1 = "thu test bai tap";
    if(str_contains($str1, 'test')){
        echo 'chuoi \'test\' co nam trong chuoi '.$str1;
    } else {
        echo 'chuoi \'test\' khong nam trong chuoi '.$str1;
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