<?php 
    // Nhập một sâu ký tự. Đếm số từ của sâu đó (mỗi từ cách nhau bởi một khoảng 
    // trắng có thể là một hoặc nhiều dấu cách, tab, xuống dòng). Ví dụ ” 
    // hoc php co ban den nang cao ” có 7 từ.
    function checkStr($str){
        $count = 0;
        $spacePatern = ' ';
        $tabPatern = '\t';
        $breakLinePatern = '\n';
        $flag = true;
        for($i = 0; $i < strlen($str); $i++){
            if(substr($str, $i, 1) != $spacePatern && 
            substr($str, $i, 1) != $tabPatern && 
            substr($str, $i, 1) != $breakLinePatern){
                if($flag){
                    $count++;
                    $flag = false;
                }  
            } else {
                $flag = true;
            }
        }
        echo 'so tu trong chuoi la '.$count;
    }
    checkStr('toi    s                 s        do huu hung asdasd');
?>