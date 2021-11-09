<?php 
    // chuyen doi chu hoa, chu thuong
    $str = "aBCDefgHKlmn";
    for($i = 0; $i < strlen($str); $i++){
        if(ctype_upper($str[$i])){
            echo strtolower($str[$i]);
        }else{
            echo strtoupper($str[$i]);
        }
    
    }
?>