<?php 
    // Nhập 2 sâu ký tự s1 và s2. Kiểm tra xem sâu s1 có chứa s2 không?.
    function checkStr($str1, $str2){
        $count = 0;
        $flag = true;
        for($i = 0; $i < strlen($str1); $i++){
            for($j = 0; $j < strlen($str2); $j++){
                if($str1[$i] == $str2[$j]){
                    echo 'xau 2 co chua xau 1';
                    die();
                } else {
                    $flag = false;
                }
            }
        }
        if(!$flag){
            echo 'xau 2 khong chua xau 1';
        }
        return $flag;
    }
    checkStr('abc', 'xyzc');
?>