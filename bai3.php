<?php 
    // Nhập 2 sâu ký tự s1 và s2. Kiểm tra xem sâu s1 có chứa s2 không?.
    function checkStr($str1,$str2){
        if (strlen(strstr($str1, $str2)) > 0) {
            echo 'chuoi 2 nam trong chuoi 1';
        } else {
            echo 'chuoi 2 khong nam trong chuoi 1';
        }
    }
    echo checkStr('abcd','asb');








    // function checkStr($str1, $str2){
    //     $count = 0;
    //     $flag = true;
    //     for($i = 0; $i < strlen($str1); $i++){
    //         for($j = 0; $j < strlen($str2); $j++){
    //             if($str1[$i] == $str2[$j]){
    //                 echo 'xau 2 co chua xau 1';
    //                 die();
    //             } else {
    //                 $flag = false;
    //             }
    //         }
    //     }
    //     if(!$flag){
    //         echo 'xau 2 khong chua xau 1';
    //     }
    //     return $flag;
    // }
    // checkStr('a', 'a');
?>