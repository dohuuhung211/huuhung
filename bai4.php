<?php 
    // Nhập vào 1 chuỗi và tính độ dài của một chuỗi	
    function checkStr($str){
        $i = 0;
        for($i; $i < strlen($str); $i++){
            $i += 1;
        }
        echo 'do dai cua chuoi la '.$i;
    }
    checkStr('chotoi1cohoi');
?>