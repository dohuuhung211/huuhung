<?php 
    // Cho mảng array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40")
    // Hãy sắp xếp mảng theo giá trị tăng dần, hiển thị tuổi nhỏ nhất và lớn nhất theo tên
    $arr = array(
        "Hoang" => "31",
        "Nam" => "41",
        "Minh" => "39",
        "Hoa" => "40"
    );
    asort($arr);
 
    foreach($arr as $key => $val) {
        echo "Key = " . $key . ", Value = " . $val;
        echo "<br>";
    }
    foreach($arr as $key => $val){
        if($val == max($arr)){
            echo $key.' lon tuoi nhat: '.$val;
        } else if($val == min($arr)){
            echo $key.' nho tuoi nhat:'.$val;
        }
    }
?>
