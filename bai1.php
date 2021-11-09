<?php 
    // in ra các số từ 1 đến 100. Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” 
    // thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. 
    // Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.

    // Cach 1
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
            if($i % 5 == 0){
                echo 'fizzbuzz-';
                continue;
            }
            echo 'fizz-';
        } else if($i % 5 == 0){
            echo 'buzz-';
        } else {
            echo $i.'-';
        }
    }
    echo '-----------------------------------------------------------------------------------------------';
    // Cach 2
    for($i=1; $i<=100;$i++){
        switch($i){
            case $i % 15 == 0:
                echo 'fizzbuzz-';
            case $i % 3 == 0:
                switch($i){
                    case $i % 5 != 0: 
                        echo 'fizz-';
                }
                break;
            case $i % 5 == 0:
                echo 'buzz-';
                break;

            case $i: 
                echo $i.'-';
                break;
        }
        
    }

?>