<?php 
    // Cho 1 mảng array(‘0’,’1’,’2’,’3’,’4’). Đếm độ dài của mảng.
    // Xóa phần tử đầu tiền và thứ 3 trong mảng. Sau khi xóa hãy chèn giá trị “số 3” vào mảng trên.
    $arr = array('0', '1', '2', '3', '4');
    echo 'do dai cua mang la '.count($arr);
    // Cach 1
    unset($arr[0]);
    unset($arr[2]);
    array_push($arr, 'so 3');

    foreach($arr as $val){
        echo $val.'-';
    }
    // Cach 2
    for($i = 0; $i < count($arr); $i++){
        if($i == 0 || $i == 2){
            unset($arr[$i]);
        } else if(!in_array('so 3', $arr)){
            array_push($arr, 'so 3');
        } 
    }
    
    foreach($arr as $val){
        echo $val.'-';
    }
?>